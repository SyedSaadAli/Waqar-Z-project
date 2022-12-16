<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme24.css">
  
</head>
<body>
    <div class="form-body on-top">
        <div class="website-logo">
            <a href="index.php">
                <div class="logo">
                    <img class="logo-size" src="images/logop.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder simple-info">
                    <div><img src="images/login.png" alt=""></div>
                    <div><h3>Login</h3></div>
                </div>
                <div>
                    <!-- <br> <br>
                    <h6 style="color: aliceblue;">Sign Up <a style="color: bisque;" href="register.php">here</a>
                    </h6> -->
                </div>    
            </div>
            
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <form action="Code.php" method="post">
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control" name="Username" placeholder="Username" required>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <input type="password" class="form-control" name="Password" placeholder="Password" required>
                                </div>
                            </div>
                            
                                <div class="col-12 col-sm-6">
                                    <div class="form-button text-right">
                                        <button id="submit" type="submit" name="login_btn" class="ibtn less-padding">Login</button>
                                     
                                    </div>
                                   
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>