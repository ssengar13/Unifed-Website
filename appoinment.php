<?php
include_once('header.php');
?>
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Appointment</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.php">Home</a>
                        <span> / </span>
                        <a href="appoinment.php" class="active">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


    <!-- rts circle progress area -->
    <div class="rts-circle-progress-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single progress area -->
                    <div class="single-circle-progress-inner">
                        <!-- single -->
                        <div class="progress red">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">85%</div>
                        </div>
                        <!-- single -->
                        <h5 class="title">Quality Service</h5>
                    </div>
                    <!-- single progress area End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single progress area -->
                    <div class="single-circle-progress-inner">
                        <!-- single -->
                        <div class="progress red">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">90%</div>
                        </div>
                        <!-- single -->
                        <h5 class="title">Skilled Members</h5>
                    </div>
                    <!-- single progress area End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single progress area -->
                    <div class="single-circle-progress-inner">
                        <!-- single -->
                        <div class="progress red">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">100%</div>
                        </div>
                        <!-- single -->
                        <h5 class="title">Happy Customers</h5>
                    </div>
                    <!-- single progress area End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single progress area -->
                    <div class="single-circle-progress-inner">
                        <!-- single -->
                        <div class="progress red">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">99%</div>
                        </div>
                        <!-- single -->
                        <h5 class="title">Successful Solutions</h5>
                    </div>
                    <!-- single progress area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts circle progress area End -->

    <!-- contact area start -->
    <div class="rts-contact-area contact-one appoinment background-contact-appoinment">
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
                                Make An Appointment
                            </p>
                            <h2 class="title">Request a free quote</h2>
                        </div>
                        <form id="contact-form" action="https://reactheme.com/products/html/unified/mailer.php" method="post">
                            <div class="name-email">
                                <input type="text" placeholder="Your Name" name="name" required>
                                <input type="email" placeholder="Email Address" name="email" required>
                            </div>
                            <div class="number-employee">
                                <input type="text" placeholder="Your Phone Number" name="number" required>&nbsp;&nbsp;&nbsp;&nbsp;
                                <select name="employee" required style="background-color: #212329; color: white; width: 351px;">
                                    <option value="">Select No. of employees</option>
                                    <option value="1">1 - 20 employees</option>
                                    <option value="2">20 - 50 employees</option>
                                    <option value="3">50 - 100 employees</option>
                                    <option value="3">100 - 500 employees</option>
                                    <option value="3">500 - 1000 employees</option>
                                    <option value="3">1000 - 5000+ employees</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                            <div class="number-employee">
                                <input type="text" placeholder="Company Name" name="subject">&nbsp;&nbsp;&nbsp;&nbsp;
                                <select name="location" required style="background-color: #212329; color: white; width: 351px;">
                                    <option value="">Company Location</option>
                                    <option value="1">Pune</option>
                                    <option value="2">Chennai</option>
                                    <option value="3">Hyderabad</option>
                                    <option value="3">Bangalore</option>
                                    <option value="3">Noida</option>
                                    <option value="3">Other</option>
                                    <!-- Add more options as needed -->
                                </select>                            </div>
                            <textarea placeholder="Type Your Message" name="message"></textarea>
                            <button type="submit" class="rts-btn btn-primary">Submit Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
<?php
include_once('footer.php');
?>