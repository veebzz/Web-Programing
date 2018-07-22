<?php

$servername = "localhost";
$dbname = "project";
$dbusername = "root";
$dbpassword = "";
	try {
		$last_id = $_SESSION["last_id"];
		//Pdo connection
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT userName, password, firstName, lastName,
			        address1,address2, city, state, zipCode,phone, email, gender, maritalStatus, dateOfBirth ".
		" FROM registration WHERE id = '$last_id'");
		$stmt->execute();

		// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		//var_dump($stmt->fetchAll()[0]);
		$assocArray = $stmt->fetchAll()[0];
		$username = $assocArray["userName"];
        $password = $assocArray["password"];
        $firstName = $assocArray["firstName"];
        $lastName = $assocArray["lastName"];
        $addresslineone = $assocArray["address1"];
        $addresslinetwo = $assocArray["address2"];
		$city = $assocArray["city"];
        $state = $assocArray["state"];
        $zipcode = $assocArray["zipCode"];
        $phoneNumber = $assocArray["phone"];
		$email = $assocArray["email"];
		$gender = $assocArray["gender"];
        $maritalStatus = $assocArray["maritalStatus"];
        $birthday = $assocArray["dateOfBirth"];
	}
	catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
?>