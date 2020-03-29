<?php  
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <title>SignUp</title>
<body>

    <?php
    if(isset($_SESSION['verified_user'])){
        echo '<script>window.location.href = "http://localhost/myphpfiles/index.php"</script>';
    }
    else{
        ?>

        <div class="form-style">
            <form action = "signUp.php" method = "POST">
                <fieldset>
                    <legend><span class="number">Q</span> Dog Information</legend>
                    <input type="text" name="name" placeholder="Name *" required>
                    <input type="text" name="username" placeholder="Username *" required>
                    <input type="email" name="email" placeholder="Email *" required>
                    <input type="text" name="phone" placeholder="Phone *" required>
                    <input type="password" name="password" placeholder="Password *" required>
                </fieldset>
                <input type="submit" value="SUBMIT" />
            </form>
            <a href="login.php" style = "text-decoration : none;">Login</a>
        </div>
        
        <?php
    }
    ?>

</body>
</html>