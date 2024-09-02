<?php
// session_start();
include "header.php";
include "connection.php"
?>

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Apply Now</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.php">Home</a>
                        <span> / </span>
                        <a href="apply-now.php" class="active">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->
    <?php
    
    if (isset($_GET['job_role'])) {
      $selectedJob = $_GET['job_role'];
    } 

    $nameError = $emailError = $phnoError = $qualifError = $expError = $noticeError = $resumeError = '';

    if(isset($_REQUEST['noticePeriod']))
   {
    $name = stripslashes($_REQUEST['name']);
    $email = stripslashes($_REQUEST['email']);
    $phone_number = stripslashes($_REQUEST['phone_number']);
    $qualification = stripslashes($_REQUEST['qualification']);
    $selectedJob =  stripslashes($_REQUEST['job_role']);
    $yearsOfExperience = stripslashes($_REQUEST['yearsOfExperience']);
    $noticePeriod = stripslashes($_REQUEST['noticePeriod']);
    $pname = sha1(rand(1000,10000))."-". str_replace(" ", "_", $_FILES['resume']['name']);
    $tname = $_FILES['resume']['tmp_name'];

    $uploads_dir = "assets/images/resume_upload";

    

 
     // Check if the resume file has been uploaded successfully
     if(move_uploaded_file($tname,$uploads_dir.'/'.$pname))
     {
        if(empty($_POST["name"])) {
            $nameError = "Name is required";
        }
    
        if(empty($_POST["email"])) {
            $emailError = "Email is required";
        }

        if(empty($_POST["phone_number"])) { 
            $phnoError = "Phone number is required";
        }

        if(empty($_POST["qualification"])) {
            $qualifError = "Qualification is required";
        }

        if(empty($_POST["yearsOfExperience"])) {
            $expError = "Experience is required";
        }

        if(empty($_POST["noticePeriod"])) {
            $noticeError = "Notice Period is required";
        }

        if(!isset($_FILES['resume']['name'])) {
            $resumeError = "Resume is required";
        }

        if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["phone_number"]) && !empty($_POST["qualification"]) && !empty($_POST["yearsOfExperience"]))
        {

       
            if(mysqli_query($conn, "INSERT INTO job_apply(name, email, phone_no, job_role, qualification, no_of_experience, notice_period, resume) values('$name', '$email', '$phone_number','$selectedJob','$qualification','$yearsOfExperience', '$noticePeriod','$pname')"))
            {
                echo '<script>window.location.href = "apply-now.php";</script>';
            }

        } else {
            // echo "asd";
        }
    
     }
    

}

    ?>

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
                        <div class="rts-title-area contact text-start">
                            <p class="pre-title">
                                Begin Your Career
                            </p>
                            <h2 class="title">Take the next step in your career with us...</h2>
                        </div>
                        <div id="form-messages"></div>
                        <form method="post" enctype="multipart/form-data" action="" id="myForm">
                        <input type="hidden" name="form" value="apply">
                            <div class="name-email">
                                <input type="text" <?php if(isset($_POST["name"])){ echo "value='" . $_POST["name"] . "'"; } ?> placeholder="Your Name" name="name" id="name" required><br>
                                <span class="error"><?php echo $nameError; ?></span>
                                <input type="email"  <?php if(isset($_POST["email"])){ echo "value='" . $_POST["email"] . "'"; } ?>  placeholder="Email Address" name="email" id="email" required>
                                <span class="error"><?php echo $emailError; ?></span>
                            </div>
                            <div class="name-email">
                                <input type="text"  <?php if(isset($_POST["phone_number"])){ echo "value='" . $_POST["phone_number"] . "'"; } ?>  placeholder="Your Contact Number" name="phone_number" id="ph_no" required>
                                <span class="error"><?php echo $phnoError; ?></span>
                                <input type="text" <?php if(isset($_POST["qualification"])){ echo "value='" . $_POST["qualification"] . "'"; } ?> placeholder="Your Qualification" name="qualification" id="qualification" required>
                                <span class="error"><?php echo $qualifError; ?></span>
                            </div>
                            <div class="name-email">
                                <input type="number" <?php if(isset($_POST["yearsOfExperience"])){ echo "value='" . $_POST["yearsOfExperience"] . "'"; } ?> placeholder="Your Total Years of Experience" name="yearsOfExperience" id="exp" required>
                                <span class="error"><?php echo $expError; ?></span>
                                <input type="text" <?php if(isset($_POST["noticePeriod"])){ echo "value='" . $_POST["noticePeriod"] . "'"; } ?> placeholder="Your Notice Period" name="noticePeriod" id="notice" required>
                                <span class="error"><?php echo $noticeError; ?></span>
                            </div>
                            <input type="file" accept=".pdf, .doc, .docx" name="resume" id="resume" required style="text-align: center; padding-top: 15px;">
                            <span class="error"><?php echo $resumeError; ?></span>
                            <label for="resume">Upload your resume (PDF, DOC, DOCX)</label>       
                            <button type="submit" class="rts-btn btn-primary" id="submit">Apply Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->

<script>
    document.getElementById("myForm").addEventListener("submit", function(event) {
 
 // Display the success message in an alert box
 alert("Thanks for applying");
});
</script>

<?php
include_once ('footer.php');
?>   