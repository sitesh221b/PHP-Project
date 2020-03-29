<?php
session_start();

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "userdb";

if(isset($_SESSION['verified_user'])){
    echo '<script>window.location.href = "http://localhost/myphpfiles/index.php"</script>';
}
else{
    $username = $_POST['loginUser'];
    $password = $_POST['loginPwd'];

    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

    $result = mysqli_query($conn,"SELECT * FROM users where username = '$username' and pwd = '$password' ");

    if(mysqli_num_rows($result) == 1){
        $data = mysqli_fetch_assoc($result);
        $_SESSION['verified_user'] = $data["name"];
        $_SESSION['verified_phone'] = $data["phone"];
    }

    if(isset($_SESSION['verified_user'])){
        echo '<script>window.location.href = "http://localhost/myphpfiles/index.php"</script>';
        exit;
    }
    else{
        echo '<script>alert("Kindly check your details again")</script>';
        echo '<script>window.location.href = "http://localhost/myphpfiles/login.php"</script>';
    }
}

?>

