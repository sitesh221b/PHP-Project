<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Dogs</title>
 
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
            <a class="navbar-brand nav-link home active" href="index.html">Dog Support System</a>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-danger btn-lg" style="margin-left: 2em;">Logout</button>
                </li>
            </ul>
        </nav>
 
        <div class="container" id="posts">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                  <div class="card h-100">
                    <img src="dog1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Breed1</h5>
                        <p class="card-text">₹500</p>
                        <p class="card-text">
                            <p class="text-muted">
                                Seller Information:<br><br>
                                Aman Deep <br>
                                9876543210
                            </p>
                        </p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card h-100">
                    <img src="dog2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Breed2</h5>
                        <p class="card-text">₹1000</p>
                        <p class="card-text">
                            <p class="text-muted">
                                Seller Information:<br><br>
                                Sitesh Roy<br>
                                9876543210
                            </p>
                        </p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card h-100">
                    <img src="dog3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Breed3</h5>
                        <p class="card-text">₹1500</p>
                        <p class="card-text">
                            <p class="text-muted">
                                Seller Information:<br><br>
                                Priyanshi Gupta<br>
                                9876543210
                            </p>
                        </p>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card h-100">
                    <img src="dog4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Breed4</h5>
                        <p class="card-text">₹1000</p>
                        <p class="card-text">
                            <p class="text-muted">
                                Seller Information:<br><br>
                                Kajal Jain <br>
                                9876543210
                            </p>
                        </p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
 
 
    </body>
 
</html>
 
 

