<?php
include_once "header.php";
?>

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Billing Information</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.php">Home</a>
                        <span> / </span>
                        <a href="Checkout.php" class="active">Billing Information</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->
    <div class="rts-service-area rts-section-gapBottom" style="margin-top:80px;"> 
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area checkout text-center">
                        <p class="pre-title">
                        Service Summary
                        </p>
                        <h2 class="title">Thank You for Trusting Us</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="rts-business-goal mt--0 rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <!-- business goal left -->
                <div class="col-lg-6">
                    <div class="business-goal-one">
                        <img src="assets/images/business-goal/01.jpg" alt="Business_Goal">
                        <img class="small" src="assets/images/business-goal/sm-01.jpg" alt="Business_Goal">
                    </div>
                </div>
                <div class="col-lg-6 mt--35 mt_md--70 mt_sm--70">
        <div class="card border-top border-bottom border-3" style="border-color: #DF0B09 !important;">
          <div class="card-body p-5">

            <h4 class="mb-5" style="color: #DF0B09;">Purchase Receipt</h4>

            <div class="row">
              <div class="col mb-3">
                <p class="small fw-bold mb-1"><u>Date:</u></p>
                <p>10 April 2021</p>
              </div>
              <div class="col mb-3">
                <p class="small fw-bold mb-1 offset-md-9"><u>Order No:</u></p>
                <p class="offset-md-7">012j1gvs356c</p>
              </div>
            </div>

            <div class="mx-n5 px-4 py-4" style="background-color: #f2f2f2;">
              <div class="row">
                <div class="col-md-6 col-lg-8">
                  <p>PLATINUM - Global 60 Plan</p>
                </div>
                <div class="col-md-6 col-lg-4">
                  <p class="mx-4">INR 12 * 3500/-</p>
                  <p class="small fw-bold mb-1" style="margin-top:-45px;">(no of lines * plan price)</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-8">
                  <p>Amount</p>
                </div>
                <div class="col-md-6 col-lg-4">
                  <p class="mx-4">INR 42000/-</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-8">
                  <p>Taxes (18% GST)</p>
                </div>
                <div class="col-md-6 col-lg-4">
                  <p class="mx-4">INR 7560/-</p>
                </div>
              </div>
            </div>

            <div class="row my-4">
              <div class="col-md-6 offset-md-7 col-lg-6">
                <p class="fw-bold mb-0" style="color: #DF0B09;"><u>Total Amount: INR 49560/-</u></p>
              </div>
              <div class="mt-5">
              <button class="btn btn-danger py-4 fw-bold text-white fs-5">Proceed to Checkout</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php
include_once "footer.php";
?>