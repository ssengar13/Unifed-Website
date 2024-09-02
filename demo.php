<?php
include_once ('header.php');
?>


    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Request Demo</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.php">Home</a>
                        <span> / </span>
                        <a href="demo.php" class="active">Request Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


   

    <!-- contact area start -->
    <div class="rts-contact-area contact-one appoinment">
        <div class="">
            <div class="row g-0 align-items-center">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="contact-image-one appoinment">
                        <img src="assets/images/appoinment/02.png" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="contact-form-area-one">
                        <div class="rts-title-area contact-appoinment text-start">
                            <p class="pre-title">
                                Get a Demo
                            </p>
                            <h2 class="title">Request a free demo</h2>
                        </div>
                        <form action= "function.php" method="post" id="myForm">
                        <input type="hidden" name="form" value="demo request">
                            <div class="name-email">
                                <input type="text" placeholder="Your Name" name="name" required >
                                <input type="email" placeholder="Email Address" name="email" required>
                            </div>
                            <div class="number-employee">
                                <input type="text" placeholder="Your Phone Number" name="phone_number" required>
                                <select name="no_of_employee" required>
                                    <option value="1 - 20">1 - 20 employees</option>
                                    <option value="20 - 50">20 - 50 employees</option>
                                    <option value="50 - 100">50 - 100 employees</option>
                                    <option value="100 - 500">100 - 500 employees</option>
                                    <option value="500 - 1000">500 - 1000 employees</option>
                                    <option value="1000 - 5000+">1000 - 5000+ employees</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                            <div class="number-employee">
                                <input type="text" placeholder="Company Name" name="company">
                                <select name="location" required>
                                    <option value="Pune">Pune</option>
                                    <option value="Chennai">Chennai</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Bangalore">Bangalore</option>
                                    <option value="Noida">Noida</option>
                                    <option value="Other">Other</option>
                                    <!-- Add more options as needed -->
                                </select>                            
                            </div>
                            <select name="plan" id="plan" required class="callback" style="margin-bottom:20px;">
                                    <option value="">Select Your Plan</option>
                                    <option value="GOLD - US & Canada">GOLD - US & Canada</option>
                                    <option value="GOLD - Global 40">GOLD - Global 40</option>
                                    <option value="GOLD - Global 60">GOLD - Global 60</option>
                                    <option value="PLATINUM - US & Canada">PLATINUM - US & Canada</option>
                                    <option value="PLATINUM - Global 40">PLATINUM - Global 40</option>
                                    <option value="PLATINUM - Global 60">PLATINUM - Global 60</option>
                                    <option value="UNLIMITED - Singapore & Malaysia">UNLIMITED - Singapore & Malaysia</option>
                                    <option value="UNLIMITED - Unlimited UK">UNLIMITED - Unlimited UK</option>
                                    <option value="UNLIMITED - Unlimited Australia">UNLIMITED - Unlimited Australia</option>
                            </select>
                            <textarea placeholder="Type Your Message" name="message"></textarea>
                            <button type="submit" class="rts-btn btn-primary">Submit Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <script>
    document.getElementById("myForm").addEventListener("submit", function(event) {
 
 alert("Demo Request Submitted");
});
</script>

    <!-- contact area end -->
    <?php
    include_once('footer.php');
    ?>
