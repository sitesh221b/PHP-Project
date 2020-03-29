<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
        if(isset($_SESSION['verified_user'])){
    ?>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand nav-link home active" href="index.php">Dog Support System</a>
            <center>Welcome <bold><?php echo $_SESSION['verified_user']; ?></bold>.</center>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.html">Contact Us</a>
                </li>
                <li class="nav-item">
                <a href = "logout.php" style = "text-decoration : none"><button type="button" class="btn btn-danger btn-lg" style="margin-left: 2em;">Logout</button></a>
                </li>
            </ul>
        </nav>
 
        <div class="container">
            <a href = "buy.php" style = "text-decoration: none;"><button type="button" class="btn btn-outline-success btn-lg button-design" id="b1">BUY</button></a>
            <a href = "sell.php" style = "text-decoration: none;"><button type="button" class="btn btn-outline-success btn-lg button-design" id="b2">SELL</button></a>
            <a href = "report.php" style = "text-decoration: none;"><button type="button" class="btn btn-outline-success btn-lg button-design" id="b3">REPORT</button></a>
        </div>

    <?php
    }
    else{
        echo "<h1>Please login first. </h1>"; ?>
        <a href="login.php">Login</a>
    <?php
    }
    ?>
</body>
</html>