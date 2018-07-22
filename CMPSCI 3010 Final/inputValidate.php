<?php
// define variables and set to empty values

$usernameErr = $passwordErr = $retypePasswordErr = $firstNameErr = $lastNameErr = $genderErr = $zipcodeErr = "";
$addresslineoneErr = $addresslinetwoErr = $cityErr = $birthdayErr = $phoneErr = $emailErr = $maritalStatusErr= "";

$name = $passWord = $retypePassword = $firstName = $lastName = $addresslineone = $addresslinetwo = $city = $birthday = "";
$phoneNumber = $email = $gender = $maritalStatus = $zipcode = "";
$isValid = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Username Php
    $username = input($_POST["username"]);
    if (empty($username)) {
        $usernameErr = "Username is required";
        $isValid = false;
    }
    else if(strlen($username) < 6 || strlen($username)> 50){
        $usernameErr = "Username must be between 6 - 50 characters in length!";
        $isValid = false;
    }
    else{
        $isValid = true;
    }

    // Password Php
    $passWord = input($_POST["passWord"]);
    if(empty($passWord)){
        $passwordErr = "Password is required";
        $isValid = false;
    }
    else if(!empty($_POST["password"])) {

        if (strlen($_POST["password"]) < 8 ||strlen($_POST["password"]) > 50) {
            $passwordErr = "Your Password Must Be Between 8-50 Characters!";
            $isValid = false;
        }
        else if(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
            $isValid = false;
        }
        else if(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
            $isValid = false;
        }
        else if(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
            $isValid = false;
        }
        else{
            $isValid = true;
        }

    }
    //Retype Password Php
    $retypePassword = input($_POST["retypePassword"]);
    if(empty($retypePassword)){
        $isValid = false;
    }
    else if($retypePassword != $passWord){
        $retypePasswordErr = "Passwords do not match!";
        $isValid = false;
    }
    else{
        $isValid = true;
    }


    //First Name Php
    $firstName = input($_POST["firstName"]);

    if (empty($firstName)) {
        $firstNameErr = "First Name required";
        $isValid = false;
    }
    else if(strlen($firstName)> 50){
        $firstNameErr = "Name must be less than 50 characters in length!";
        $isValid = false;
    }
    else{
        $isValid = true;
    }

    //Last Name Php
    $lastName = input($_POST["lastName"]);
    if (empty($lastName)) {
        $lastNameErr = "Last Name required";
        $isValid = false;
    }
    else if(strlen($lastName)> 50){
        $lastNameErr = "Name must be less than 50 characters in length!";
        $isValid = false;
    }
    else{
        $isValid= true;
    }

    //Address Line 1 Php
    $addresslineone= input($_POST["addresslineone"]);
    if (empty($addresslineone)) {
        $addresslineoneErr = "Address required";
        $isValid = false;
    }
    else if(strlen($addresslineone)> 100){
        $addresslineoneErr = " Address must be less than 100 characters in length!";
        $isValid = false;
    }
    else{
        $isValid = true;
    }

    //Address Line 2 Php
    $addresslinetwo= input($_POST["addresslinetwo"]);
    if(strlen($addresslinetwo)> 100){
        $addresslinetwoErr = "Address must be less than 100 characters in length!";
        $isValid = false;
    }
    else{
        $isValid = true;
    }

    //City Php
    $city= input($_POST["city"]);
    if (empty($city)) {
        $cityErr = "City required";
        $isValid = false;
    }
    else if(strlen($addresslineone)> 50){
        $cityErr = " City must be less than 50characters in length!";
        $isValid = false;
    }
    else{
        $isValid = true;
    }

    //Zip code PHP
    $zipcode = input($_POST["zipcode"]);
    if (empty($zipcode)) {
        $zipcodeErr = "Zipcode required";
        $isValid = false;
    }
    else if(strlen($zipcode) < 5 || strlen($zipcode) > 10){
        $zipcodeErr = "zipcode must be between 5-10 digits";
        $isValid = false;
    }
    else if(!preg_match("/\d{5}/",$zipcode)){
        $zipcodeErr = "Zip code must be in xxxxx format";
        $isValid = false;
    }
    //state
    $state = input($_POST["state"]);
    //Phone Php
    $phoneNumber = input($_POST["phoneNumber"]);
    if(!preg_match("/^\d{3}-\d{3}-\d{4}$/",$phoneNumber)){
        $phoneErr = "Please enter phone number in xxx-xxx-xxxx format";
        $isValid = false;
    }
    else if(empty($phoneNumber)){
        $phoneErr = "Phone Number Required";
        $isValid = false;
    }
    else if(strlen($phoneNumber) > 12){
        $phoneErr = "Phone number exceeds 12 digits";
        $isValid=false;
    }

    //Email Php
    $email = input($_POST["email"]);
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $isValid = false;
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format Ex: x@x.x";
        $isValid = false;
    }


    //Gender PHP
    $gender = input(@$_POST["gender"]);
    if (empty($_POST["gender"])) {
        $genderErr = "Choose a Gender";
        $isValid =false;
    }

    //Marital Status
    $maritalStatus = input(@$_POST["maritalStatus"]);
    if (empty($_POST["maritalStatus"])) {
        $maritalStatusErr = "Choose a Marital Status";
        $isValid = false;
    }

    //Birthday Php
    $birthday = input($_POST["birthday"]);
    if (empty($birthday)) {
        $birthdayErr = "Birthday is required";
        $isValid = false;
    }










}
//var_dump($isValid);
function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function setValid($bool) {
    $isValid = $bool;
}
?>