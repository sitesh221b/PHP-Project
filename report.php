<?php
    session_start();

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "userdb";


// Create table 
// $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

// if(! $conn){
//     die('Could not connect '. mysqli_connect_error());
// }

// echo "Connected Successfully <br>";

// $sql = "CREATE TABLE reports(rid INT(6) AUTO_INCREMENT PRIMARY KEY,
//                           username VARCHAR(30) NOT NULL, 
//                           breed VARCHAR(30) NOT NULL,
//                           quantity int(10) NOT NULL, 
//                           address VARCHAR(80) NOT NULL,
//                           image blob NOT NULL)";

// if(mysqli_query($conn,$sql)){
//     echo "Table report created successfully";
// }
// else{
//     echo "Could not create table ". mysqli_error($conn);
// }

// ----------------------

// INSERT INTO THE TABLE

$conn  = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(isset($_POST["insert"])){
    $breed = $_POST['breed'];
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];
    $name = $_SESSION['verified_user'];
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "INSERT INTO reports(username,breed,quantity,address,image) VALUES ('$name','$breed','$quantity','$address','$file')";
    if(mysqli_query($conn,$query)){
        echo '<script>alert("Image Inserted into Database")</script>';
        echo '<script>window.location.href = "http://localhost/myphpfiles/index.php"</script>';
    }
    else{
        echo '<script>alert("Something went wrong")</script>';
        echo '<script>window.location.href = "http://localhost/myphpfiles/index.php"</script>';
    }
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Report</title>
 
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
        <!-- CSS -->
        <link rel="stylesheet" href="style.css">
 
        <!-- SCRIPTS -->
        <script type="text/javascript" src="script.js"></script>
 
    </head>
 
 
    <body>
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
 
        <div class="form-style">
            <form action = "" method = "POST" enctype = "multipart/form-data">
                <fieldset>
                    <legend><span class="number">Q</span> Dog Information</legend>
                    <input type="text" name="breed" placeholder="Breed *" required>
                    <input type="number" name = "quantity" placeholder="Quantity *" required>
                    <textarea name="address" id="" rows="4" placeholder="Addresss *" required></textarea>
                    <label for="pic">Upload a picture *</label>
                    <input type="file" name="image" id="image" required>
                </fieldset>
                <input type="submit" name = "insert" id = "insert" value="SUBMIT" />
            </form>
        </div>

 
 
    </body>
 
</html>
 

<script>
    $(document).ready(function(){
        $('#insert').click(function(){
            var image_name = $('#image').val();
            if(image_name == ''){
                alert("Please select Image");
                return false;
            }
            else{
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension,['gif','png','jpg','jpeg']) == -1){
                    alert('Image should be in gif,png,jpg,jpeg format only');
                    $('#image').val('');
                    return false;
                }
            }
        });
    });
</script>