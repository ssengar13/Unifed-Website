<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login | Unified Voice Communication</title>

    <link rel="shortcut icon" href="assets1/images/fav.jpg">
    <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets1/css/style.css" />
    
</head>

        <?php

        include_once "connection.php";
        include_once "sendmail.php";

        if (isset($_REQUEST['username']) && isset($_REQUEST['password']) ) {
            $username = str_replace(array("'"), "", $_REQUEST['username']);
            $password = str_replace(array("'"), "", $_REQUEST['password']);
            $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
        
                if (mysqli_num_rows($result) > 0) {
                    $email = $row['email']; 
                    echo '<script>alert("Please check your email for OTP");</script>';
                    $otp = rand(11111,99999);
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['role'] =$row['role'];
                    $_SESSION['name'] =$row['name'];
                    $_SESSION['email'] =$row['email'];
                    $_SESSION['otp'] = $otp;
                    smtp_mailer($email, 'Your One-Time Password (OTP) for Account Verification',"Please note down your OTP.<br>OTP code:<b> $otp </b>"); 
                    mysqli_query($conn, "update login set otp='$otp' where email ='$email' ");
                    echo '<script>window.location.href = "otp-verification.php";</script>';

                } 
                else {
                    echo '<script>alert("Try again... Wrong email or password entered");</script>';
            }
        }
        else{
        
        }
        ?>


<body>
    <div class="container-fluid ">
        <div class="container ">
            <div class="row cdvfdfd">
                <div class="col-lg-10 col-md-12 login-box">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 log-det">
                            <div class="small-logo">
                                          <img src="assets/images/logo/logo.png" alt="" style="width:150px; height:100px;">                            
                                        </div>
                            <p class="dfmn">Welcome to Unified Voice Communication, where conversations converge.</p>

                            <div class="text-box-cont">

                            <form action="" method="post">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" name="username" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password" name="password" aria-label="Password" aria-describedby="basic-addon1" required>
                                </div>
                                
                                <div class="input-group center">
                                    <button type="submit" class="btn btn-danger btn-round">LOG IN</button>
                                </div> 
                                <!-- <div class="row">
                                    <p class="forget-p">Don't have an account? <span>Sign Up Now</span></p>
                                </div> -->
                                 <div class="row">
                                    <p class="small-info">Connect With Social Media</p>
                                </div>   
                            
                            </form>
                            </div>
                            
                            
                            <div class="row">
                            <ul class="social-wrapper-one">
                                <li><a href="https://www.facebook.com/UnifiedVoiceCommunicationPvtLtd"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/unifiedvoice1"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/unified-voice-communication-pvt-ltd/"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            </div>
                           


                        </div>
                        <div class="col-lg-6 col-md-6 box-de">
                           <div class="inn-cover">
                               <div class="ditk-inf">
                                   <div class="small-logo">
                                <!-- <i class="fab fa-asymmetrik"></i> Style Login -->
                                Unified Voice Communication
                            </div>
                                    <!-- <h2 class="w-100">Din't Have an Account </h2> -->
                                    <p>Welcome to Unified Voice Communication – <br>Your trusted platform for seamless, secure, and efficient communication solutions. Log in to connect with clarity and confidence.</p>
                                    <a href="https://unifiedvoice.in/">
                                    <button type="button" class="btn btn-outline-light">VISIT US</button>
                                    </a>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="assets1/js/jquery-3.2.1.min.js"></script>
<script src="assets1/js/popper.min.js"></script>
<script src="assets1/js/bootstrap.min.js"></script>
<script src="assets1/js/script.js"></script>


</html>
