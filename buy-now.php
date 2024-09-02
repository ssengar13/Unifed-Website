
<?php
session_start();
include_once("connection.php");

if(isset($_REQUEST['name']))
{
    $name = stripslashes($_REQUEST['name']);
    $orgName = stripslashes($_REQUEST['orgName']);
    $email = stripslashes($_REQUEST['email']);
    $number = stripslashes($_REQUEST['number']);
    $plan = stripslashes($_REQUEST['plan']);
    $lines = stripslashes($_REQUEST['lines']);
    $callback = stripslashes($_REQUEST['callback']);
    $country = stripslashes($_REQUEST['country']);
    $areaCode = stripslashes($_REQUEST['areaCode']);
    
    if(mysqli_query($conn, "INSERT INTO buy_now(name, company, email, phone_number,plan, no_lines, req_callback, country,area_code) values('$name','$orgName', '$email', '$number','$plan', '$lines', '$callback', '$country','$areaCode')"))
    {
        $_SESSION['lines'] = $_REQUEST['lines'];
        $_SESSION['plan'] = $_GET['plan'];
        $_SESSION['category'] = $_GET['category'];
        $result =mysqli_query($conn,"SELECT * from plans_and_pricing WHERE plan = '" . $_SESSION['plan'] . "' AND category = '" . $_SESSION['category'] . "';");
        if ($result) {
          $row = mysqli_fetch_assoc($result);
          $_SESSION['price'] = $row['price']; 
          echo '<script>alert("Please check the payment details");</script>';
          echo '<script>window.location.href = "checkout.php";</script>';
        }
    }
    else{

        echo '<script>alert("Not Submitted. Please try again...");</script>';
        echo '0';
    }
}else{

}

?>

<?php
include_once "header.php";

?>
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Buy Now</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.php">Home</a>
                        <span> / </span>
                        <a href="buy-now.php" class="active">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- contact area start -->
    <div class="rts-contact-area contact-one">
        <div class="container">
            <div class="row align-items-center g-0">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="contact-image-one">
                        <img src="assets/images/contact/01.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="contact-form-area-one">
                        <div class="rts-title-area buy text-start">
                            <p class="pre-title">
                                BUY NOW!!!
                            </p>
                            <h2 class="title">Get Our VoIP Solution</h2>
                        </div>
                        <div id="form-messages"></div>
                        <form action="" method="post">
                            <div class="name-email">
                                <input type="text" placeholder="Your Name" name="name" required>
                                <input type="text" placeholder="Your Organization Name" name="orgName" required>
                            </div>
                            <div class="name-email">
                                <input type="email" placeholder="Your Official Mail ID" name="email" required>
                                <input type="text" placeholder="Your Contact Number" name="number" required>
                            </div>
                            <div class="number-employee">
                                <input type="text" value="<?php echo isset($_GET['plan']) ? htmlspecialchars($_GET['plan']) : ''; ?>" name="plan" disabled>
                                <input type="number" placeholder="Required No. of Lines" name="lines" required min="1" id="linesInput">
                            </div>
                            <select name="callback" id="callback" class="callback" required>
                                <option value="">Do you want a call back number?</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            
                            <div id="additionalFields" class="number-employee" style="display: none; margin-top: 20px;">
                                <select name="country">
                                <option value="">Select Your Country</option>
                                <option value="US">US</option>
                                <option value="UK">UK</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Canada">Canada</option>
                                
                                </select>
                                <input type="text" name="areaCode" placeholder="Enter your Area Code">
                            </div>
                            <button type="submit" class="rts-btn btn-primary">Proceed</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->

 
    <script>
        const callbackSelect = document.getElementById('callback');
        const additionalFieldsDiv = document.getElementById('additionalFields');
    
        callbackSelect.addEventListener('change', function () {
            if (callbackSelect.value === 'Yes') {
                additionalFieldsDiv.style.display = 'block';
            } else {
                additionalFieldsDiv.style.display = 'none';
            }
        });


    const planSelect = document.getElementById('plan');
    const linesInput = document.getElementById('linesInput');

    planSelect.addEventListener('change', function () {
        if (planSelect.value.includes('GOLD') || planSelect.value.includes('UNLIMITED')) {
            linesInput.min = 1;
        } else if (planSelect.value.includes('PLATINUM')) {
            linesInput.min = 10;
        }
    });
    </script>

    <?php
    include_once("footer.php");?>

