<?php
session_start();
$servername = "localhost";
$dbname = "project";
$dbusername = "root";
$dbpassword = "";
if ($isValid) {
    try {


        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $conn->prepare("INSERT INTO registration (userName, password, firstName, lastName,
			        address1,address2, city, state, zipCode,phone, email, gender, maritalStatus, dateOfBirth)
		        	VALUES (:username,:password,:firstName, :lastName,:address1,:address2,:city,
		        	 :state, :zipcode, :phoneNumber, :email, :gender,:maritalStatus,:birthday)");
        $sql->bindParam(':username', $username);
        $sql->bindParam(':password', $passWord);
        $sql->bindParam(':firstName', $firstName);
        $sql->bindParam(':lastName', $lastName);
        $sql->bindParam(':address1', $addresslineone);
        $sql->bindParam(':address2', $addresslinetwo);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':state', $state);
        $sql->bindParam(':zipcode', $zipcode);
        $sql->bindParam(':phoneNumber', $phoneNumber);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':gender', $gender);
        $sql->bindParam(':maritalStatus', $maritalStatus);
        $sql->bindParam(':birthday', $birthday);

        $sql->execute();

        $last_id = $conn->lastInsertId();
        $_SESSION["last_id"] = "$last_id";

        header("Location: Confirmation.php");
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
}
?>