<?php
    session_start();

    if(isset($_SESSION['verified_user'])){
        echo '<script>window.location.href = "http://localhost/myphpfiles/index.php"</script>';
    }
    else{
        ?>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Success</title>
        </head>
        <body style = "background-color : #03DAC6">
            <center style = "font-size: 55px;">Congratulations</center>
            <center style = "font-size: 35px;">You've been successfully registered. Please <a href="login.php" style = "text-decoration:none">Login</a></center>
            
        </body>
        </html>
        <?php
    }
?>