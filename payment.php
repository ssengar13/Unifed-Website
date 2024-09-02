<?php
   include_once "header.php";
?>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
   div.bhoechie-tab-menu {
   padding-right: 0;
   padding-left: 0;
   padding-bottom: 0;
   }
   div.bhoechie-tab-menu div.list-group {
   margin-bottom: 0;
   }
   div.bhoechie-tab-menu div.list-group>a {
   margin-bottom: 0;
   }
   div.bhoechie-tab-menu div.list-group>a .glyphicon,
   div.bhoechie-tab-menu div.list-group>a .fa {
   color: #000;
   }
   div.bhoechie-tab-menu div.list-group>a:first-child {
   border-top-right-radius: 0;
   -moz-border-top-right-radius: 0;
   }
   div.bhoechie-tab-menu div.list-group>a:last-child {
   border-bottom-right-radius: 0;
   -moz-border-bottom-right-radius: 0;
   }
   div.bhoechie-tab-menu div.list-group>a.active,
   div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
   div.bhoechie-tab-menu div.list-group>a.active .fa {
   background-color: #DC3545;
   color: #ffffff;
   }
   div.bhoechie-tab-menu div.list-group>a.active:after {
   content: '';
   position: absolute;
   left: 100%;
   top: 50%;
   margin-top: -13px;
   border-left: 0;
   border-bottom: 13px solid transparent;
   border-top: 13px solid transparent;
   border-left: 10px solid #DC3545;
   }
   div.bhoechie-tab {
   padding-bottom: 35px;
   }
   div.bhoechie-tab-content {
   background-color: #ffffff;
   border: 1px solid transparent;
   padding-left: 20px;
   padding-top: 10px;
   padding-right: 20px;
   }
   div.bhoechie-tab div.bhoechie-tab-content:not(.active) {
   opacity: 0;
   display: none;
   }
   .bhoechie-tab-content h1 {
   color: black;
   }
   .bro-fade {
   opacity: 1;
   transition: opacity .25s ease-in-out;
   -moz-transition: opacity .25s ease-in-out;
   -webkit-transition: opacity .25s ease-in-out;
   }
   .form-group input{
   border: 1px solid #aeaeae; /* Black border with 1px width */
   }
</style>
<!-- start breadcrumb area -->
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
            <h1 class="title">Payment</h1>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="bread-tag">
               <a href="index.php">Home</a>
               <span> / </span>
               <a href="payment.php" class="active">Payment</a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end breadcrumb area -->
<div class="container">
   <div class="row">
      <!-- Left Menu Column -->
      <div class="col-lg-2 col-md-2 col-sm-3 col-12 bhoechie-tab-menu" style="margin-top:100px; margin-left:0px;">
         <div class="list-group" id="bro-menu">
            <a href="#c-sadad_olp" id="m-sadad_olp" class="list-group-item text-center active">
               <h4 class="glyphicon glyphicon-plane"></h4>
               <br/>UPI
            </a>
            <a href="#c-credit_card" id="m-credit_card" class="list-group-item text-center">
               <h4 class="glyphicon glyphicon-credit-card"></h4>
               <br/>Credit Card
            </a>
            <a href="#c-other_payment" id="m-other_payment" class="list-group-item text-center">
               <h4 class="glyphicon glyphicon-home"></h4>
               <br/>Other payment
            </a>
         </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-9 col-12 bhoechie-tab" id="bro-content" style="margin-top:50px;">
         <!-- Sadad OLP -->
         <div class="bhoechie-tab-content active" id="c-sadad_olp">
            <h3>UPI Payment</h3>
            <hr />
            <div class="row">
               <form class="form-horizontal">
                  <div class="form-group">
                     <label for="olp-account" class="control-label col-sm-3 customer-custom-label">OLP Account :</label>
                     <div class="col-sm-4 col-lg-4">
                        <input type="text" maxlength="12" class="form-control width-ini black-border" value="" placeholder="OLP Account" name="olpAccount" id="olp-account">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="olp-account" class="control-label col-sm-3 customer-custom-label">Password :</label>
                     <div class="col-sm-4 col-lg-4">
                        <input type="password" maxlength="12" class="form-control black-border" value="" placeholder="Password" name="olpAccount" id="password">
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-offset-3 col-sm-10">
                        <button class="btn btn-danger py-4 fw-bold text-white fs-5">Pay Now</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!-- train section -->
         <!-- Credit Card -->
         <!-- Credit Card -->
         <div class="bhoechie-tab-content" id="c-credit_card">
            <h3>Credit Card</h3>
            <hr />
            <div class="row">
               <form class="form-horizontal">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="form-group">
                        <label for="olp-account" class="control-label col-sm-4 customer-custom-label">First name</label>
                        <div class="col-sm-8">
                           <input type="text" maxlength="12" class="form-control" placeholder="First name" name="olpAccount" id="olp-account">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="olp-account" class="control-label col-sm-4 customer-custom-label">Last name</label>
                        <div class="col-sm-8">
                           <input type="text" maxlength="12" class="form-control" placeholder="Last name" name="olpAccount" id="olp-account">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="olp-account" class="control-label col-sm-4 customer-custom-label">Credit card</label>
                        <div class="col-sm-8">
                           <select class="form-control select2 width-ini" tabindex="-1" aria-hidden="true" id="client-id-search">
                              <option value="" selected="selected">Select</option>
                              <option value="">MASTER</option>
                              <option value="">VISA</option>
                              <option value="">MESTRO</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="olp-account" class="control-label col-sm-4 customer-custom-label">Card Number</label>
                        <div class="col-sm-8">
                           <input type="text" maxlength="12" class="form-control" placeholder="Card Number" name="olpAccount" id="olp-account">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="form-group">
                        <label for="olp-account" class="control-label col-sm-4 customer-custom-label">Valid Thru</label>
                        <div class="col-sm-4">
                           <select class="form-control select2" style="width: 100%;" tabindex="-1" aria-hidden="true" id="client-id-search">
                              <option value="" selected="selected">--Month--</option>
                              <option value="">Jan</option>
                              <option value="">Feb</option>
                              <option value="">Mar</option>
                              <option value="">Apr</option>
                              <option value="">May</option>
                              <option value="">Jun</option>
                              <option value="">Jul</option>
                              <option value="">Aug</option>
                              <option value="">Sep</option>
                              <option value="">Oct</option>
                              <option value="">Nov</option>
                              <option value="">Dec</option>
                           </select>
                        </div>
                        <div class="col-sm-4">
                           <select class="form-control select2" style="width: 100%;" tabindex="-1" aria-hidden="true" id="client-id-search">
                              <option value="" selected="selected">--Year--</option>
                              <option value="">1994</option>
                              <option value="">2005</option>
                              <option value="">2006</option>
                              <option value="">2007</option>
                              <option value="">2008</option>
                              <option value="">2009</option>
                              <option value="">2010</option>
                              <option value="">2011</option>
                              <option value="">2012</option>
                              <option value="">2013</option>
                              <option value="">2014</option>
                              <option value="">2015</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="olp-account" class="control-label col-sm-4 customer-custom-label">CCV Number</label>
                        <div class="col-sm-8">
                           <input type="password" maxlength="12" class="form-control" value="" placeholder="CCV Number" name="olpAccount" id="olp-account">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-4">
                           <button class="btn btn-danger py-4 fw-bold text-white fs-5">Pay Now</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!-- other payment -->
         <div class="bhoechie-tab-content" id="c-other_payment">
            <h3>Other Payment</h3>
            <hr />
            <div class="row">
               <form>
                  <div class="form-group">
                     <label for="olp-account" class="control-label col-sm-3 customer-custom-label">Virtual Account</label>
                     <div class="col-sm-4">
                        <input type="text" maxlength="12" class="form-control width-ini" value="" placeholder="Some fields /" name="olpAccount" id="olp-account">
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-offset-3 col-sm-8">
                        <ul>
                           <li>Go to any SHB Branches and credit to the virtual account number</li>
                           <li>Pay through SHB Online Banking to your virtual account number</li>
                           <li>Send as a SARIE Transfer to your virtual account from any bank.</li>
                        </ul>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-offset-3 col-sm-10">
                        <button class="btn btn-danger py-4 fw-bold text-white fs-5">Pay Now</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function() {
   $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
   e.preventDefault();
   $(this).siblings('a.active').removeClass("active");
   $(this).addClass("active");
   var index = $(this).index();
   $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active").hide();
   $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active").hide().fadeIn();;
   });
   
   var list = ['sadad_olp', 'credit_card', 'other_payment'];
   
   // hide menu items
   $("#bro-menu").children().hide();
   
   $("#rewind").click(function() {
   rewind();
   });
   rewind();
   function rewind() {
   $.each(list, function(index, value) {
   // show menu item
   $('#m-' + value).show();
   });
   }
   });
</script>
<?php
   include_once "footer.php";
   ?>