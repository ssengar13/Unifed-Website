<?php

include_once('header.php');

?>

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Careers</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.php">Home</a>
                        <span> / </span>
                        <a href="career.php" class="active">Careers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- project details image area -->
    <div class="rts-project-details-area rts-section-gap" style="margin-top: -50px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="big-bg-porduct-details">
                        <img src="assets/images/product/bg-lg-01.jpg" alt="Business_unified">
                        <div class="project-info">
                            <div class="info-head" style="width: 400px;">
                                <h5 class="title">Explore Your Future with Us</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--70 mb--50">
                <div class="col-12">
                    <div class="product-details-main-inner">
                        <span>Careers</span>
                        <h3 class="title">Want to join our Unified team? </h3>
                        <p class="disc">If you have a passion and want to work for a rapidly growing VoIP company, check out the listings below or send your resume to <a class="mail" href="mailto:hr@unifiedvoice.in" style="font-weight: bolder; text-decoration: underline;">hr@unifiedvoice.in</a></p>
                        <p class="italic">
                            “At Unified Voice Communication, we are driven by a bold vision – to transform the way businesses communicate. We believe that voice over Internet Protocol (VoIP) technology has the potential to revolutionize the world of communication, making it more efficient, cost-effective, and versatile than ever before.”</p>
                    </div>
                </div>
            </div>

            <form action="" method="get">
            <input type="hidden" name="selectedJob" value="<?php echo $selectedJob; ?>">
           
                    <div class="container">
                        <div class="row g-5">
                                <h3 class="title mb--0">Current Job Openings</h3>
                            <!-- single service area -->
                            <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                                <div class="service-two-inner">
                                    <a href="apply-now.php?job_role=VOIP Consultant" class="thumbnail"><img src="assets/images/service/02.jpg" alt="Business_image"></a>
                                    <div class="body-content">
                                        <div class="hidden-area">
                                            <h5 class="title">VOIP Consultant</h5>
                                            <p class="dsic">
                                                Join our team as a Sales Consultant and excel in driving VoIP solution sales while nurturing client relationships.
                                            </p>
                                            <a class="rts-read-more-two color-primary" href="apply-now.php?job_role=VOIP Consultant">Apply Now<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single service area end-->
                            <!-- single service area -->
                            <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                                <div class="service-two-inner">
                                    <a href="apply-now.php?job_role=Business Manager" class="thumbnail two"><img src="assets/images/service/03.jpg" alt="Business_image"></a>
                                    <div class="body-content">
                                        <div class="hidden-area">
                                            <h5 class="title">Business Manager</h5>
                                            <p class="dsic">
                                                Join our team as a BDM and spearhead strategic growth initiatives while overseeing and optimizing business operations.
                                            </p>
                                            <a class="rts-read-more-two color-primary" href="apply-now.php?job_role=Business Manager">Apply Now<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single service area end-->
                            <!-- single service area -->
                            <div class="col-xl-4 col-md-6 col-sm-12 col-12 pb--140 pb_md--100">
                                <div class="service-two-inner">
                                    <a href="apply-now.php?job_role=Software Developer" class="thumbnail three"><img src="assets/images/service/04.jpg" alt="Business_image"></a>
                                    <div class="body-content">
                                        <div class="hidden-area">
                                            <h5 class="title">Software Developer</h5>
                                            <p class="dsic">
                                                Join our team as a Software Developer, where you'll shape our success through innovative software solutions.
                                            </p>
                                            <a class="rts-read-more-two color-primary" href="apply-now.php?job_role=Software Developer">Apply Now<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single service area end-->
                        </div>
                    </div>    
            </form>           
            </div>
        </div>
    </div>
    <!-- project details image area end -->

<?php
include_once('footer.php');
?>