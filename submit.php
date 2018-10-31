<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$country = $_POST['country'];
saveToDatabase($fname, $lname, $email, $pwd, $cpwd, $number, $gender, $country);
header('Location:success.html');
function saveToDatabase($fname, $lname, $email, $pwd, $cpwd, $number, $gender, $country) {
    $serverName = "localhost";
    $database = "signup_quiz3";
    $username = "root";
    $dpassword = "";
 
    //Open database connection
    $conn = mysqli_connect($serverName, $username, $dpassword, $database);
 
    // Check that connection exists
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
   
    $sql = "INSERT INTO form (firstname, lastname, email, pwd, confirm_pwd, phonenumber, gender, country)
        VALUES ('$fname', '$lname' '$email', '$pwd', '$cpwd', '$number', '$gender', '$country')";
    $result = mysqli_query($conn, $sql);
 
    //Check for errors
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    //Close the connection
    mysqli_close($conn);
 }
 
 





?>