<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    if(isset($_SESSION['verified_user'])){
        echo '<script>window.location.href = "http://localhost/myphpfiles/index.php"</script>';
    }
    else{
        ?>

        <div class="form-style">
            <form action="verify.php" method = "POST">
                <fieldset>
                    <legend><span class="number">Q</span> Dog Information</legend>
                    <input type="text" name="loginUser" placeholder="Username *"> 
                    <input type="password" name = "loginPwd"placeholder="Password *">
                </fieldset>
                <input type="submit" value="SUBMIT" />
            </form>
            <a href="signUpForm.php" style = "text-decoration : none;">Create account</a>
        </div>
        <?php
    }
    ?>
</body>
</html>