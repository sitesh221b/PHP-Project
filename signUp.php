<?php

session_start();
// this code is for SIGN UP purpose

if(isset($_SESSION['verified_user'])){
    echo '<script>window.location.href = "http://localhost/myphpfiles/index.php"</script>';
}
else{
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "userdb";


// Create database
// $conn = mysqli_connect($db_host,$db_user,$db_pass);

// if(! $conn){
//     die("could not connect " . mysqli_connect_error());
// }

// $sql = "CREATE DATABASE $db_name";

// $retval = mysqli_query($conn,$sql);

// if(! $retval){
//     die('Could not create database ' . mysqli_error($conn));
// }

// --------------------

// Create table 
// $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

// if(! $conn){
//     die('Could not connect '. mysqli_connect_error());
// }

// echo "Connected Successfully <br>";

// $sql = "CREATE TABLE users(name VARCHAR(30) NOT NULL,
//                           username VARCHAR(30)  PRIMARY KEY, 
//                           email VARCHAR(30) NOT NULL,
//                           phone int(10) NOT NULL, 
//                           pwd VARCHAR(30) NOT NULL)";

// if(mysqli_query($conn,$sql)){
//     echo "Table user created successfully";
// }
// else{
//     echo "Could not create table ". mysqli_error($conn);
// }

// ----------------------

// Insert record into the table

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

if(strlen($phone) != 10){
    echo '<script>alert("Please check your phone number")</script>';
    echo '<script>window.location.href = "http://localhost/myphpfiles/signUpForm.php"</script>';
}

$arr = str_split($phone);

foreach($arr as $ch){
    if($ch < '0' && $ch > '9'){
        echo '<script>alert("Please check your phone number")</script>';
        echo '<script>window.location.href = "http://localhost/myphpfiles/signUpForm.php"</script>';
    }
}

if(!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/",$email)){
    echo '<script>alert("Please check your email id")</script>';
    echo '<script>window.location.href = "http://localhost/myphpfiles/signUpForm.php"</script>';
}



$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(! $conn){
    die("Connection failed : ". mysqli_connect_error());
}

$sql = "INSERT INTO users(name,username,email,phone,pwd) VALUES ('$name','$username','$email','$phone','$password')";

if(mysqli_query($conn,$sql)){
    echo '<script>window.location.href = "http://localhost/myphpfiles/success.php"</script>';
}
else{
    // echo "error " . $sql . "<br>" . mysqli_error($conn);
    echo '<script>alert("Username has already been taken")</script>';
    echo '<script>window.location.href = "http://localhost/myphpfiles/signUpForm.php"</script>';
}

mysqli_close($conn);

}

?>
