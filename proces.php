<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$phone = $_POST['number'];
$gender = $_POST['gender'];
$country = $_POST['country'];

saveToDatabase($firstname, $lastname, $email, $password, $cpassword, $phone, $gender, $country);
header('Location:success.html');


function saveToDatabase($firstname, $lastname, $email,$password,$cpassword, $phone, $gender,$country) {
   $serverName = "localhost";
   $database = "dufuna_signup_quiz3";
   $username = "root";
   $dpassword = "";

   //Open database connection
   $conn = mysqli_connect($serverName, $username, $dpassword, $database);

   // Check that connection exists
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }
  
   $sql = "INSERT INTO users (firstname, lastname, email, password, confirm_password, phonenumber, gender, country)
       VALUES ('$firstname', '$lastname', '$email', '$password', '$cpassword', '$phone', '$gender', '$country')";
   $result = mysqli_query($conn, $sql);

   //Check for errors
   if (!$result) {
       die("Error: " . $sql . "<br>" . mysqli_error($conn));
   }
   //Close the connection
   mysqli_close($conn);
}

?>