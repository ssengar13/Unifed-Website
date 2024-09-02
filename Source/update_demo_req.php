<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("connection.php");
include_once "../sendmail.php";


if (isset($_POST['id'])) {

  $accept_demo_request = $_POST['accept_demo_request'];

  if(!empty($accept_demo_request))
  {

    $id = intval($_POST['id']); 
    $email = $_POST['email']; 
    echo "id: $id";
    
    $result = mysqli_query($conn, "UPDATE form SET form_acceptance = 'accepted' WHERE form = 'demo request' AND id = '$id'");
    
    if ($result) {
     if(smtp_mailer($email, 'Demo Request Status', "Your demo request has been accepted. Stay in touch!!!"))
     {
    //  header("location:demo_req.php");
      echo "data updated";
     }

    }
  }

    $reject_demo_request = $_POST['reject_demo_request'];

  if(!empty($accept_demo_request))
  {

    $id = intval($_POST['id']); 
    $email = $_POST['email']; 
    echo "id: $id";
    
    $result = mysqli_query($conn, "UPDATE form SET form_acceptance = 'rejected' WHERE form = 'demo request' AND id = '$id'");
    
    if ($result) {
     if(smtp_mailer($email, 'Demo Request Status', "Dear User,
     We regret to inform you that your demo request has been declined.<br>
     If you have any questions or need further assistance, please feel free to contact us.<br>
     Thank you for considering our services.<br>
     Best regards,
     Unified Voice Communication")
     )
     {
     // header("location:demo_req.php");
      echo "data updated";
     }

    }
}

$accept_quote_request = $_POST['accept_quote_request'];

if(!empty($accept_quote_request))
{

  $id = intval($_POST['id']); 
  $email = $_POST['email']; 
  echo "id: $id";
  
  $result = mysqli_query($conn, "UPDATE form SET form_acceptance = 'accepted' WHERE form = 'quote request' AND id = '$id'");
  
  if ($result) {
   if(smtp_mailer($email, 'Quote Request Status', "Your quote request has been accepted. Stay in touch!!!"))
   {
  //  header("location:demo_req.php");
    echo "data updated";
   }

  }
}

$reject_quote_request = $_POST['reject_quote_request'];

  if(!empty($reject_quote_request))
  {

    $id = intval($_POST['id']); 
    $email = $_POST['email']; 
    echo "id: $id";
    
    $result = mysqli_query($conn, "UPDATE form SET form_acceptance = 'accepted' WHERE form = 'quote request' AND id = '$id'");
    
    if ($result) {
     if(smtp_mailer($email, 'Quote Request Status', "We regret to inform you that ,your demo request has been rejected!!!"))
     {
    //  header("location:demo_req.php");
      echo "data updated";
     }

    }
  }

  $accept_applicant = $_POST['accept_applicant'];

  if(!empty($accept_applicant))
  {

    $id = intval($_POST['id']); 
    $email = $_POST['email']; 
    echo "id: $id";
    
    $result = mysqli_query($conn, "UPDATE job_apply SET status = 'selected' WHERE id = '$id'");
    
    if ($result) {
     if(smtp_mailer($email, 'Job Application Status', "Selected"))
     {
    //  header("location:demo_req.php");
      echo "data updated";
     }

    }
  }

  $reject_applicant = $_POST['reject_applicant'];

  if(!empty($reject_applicant))
  {

    $id = intval($_POST['id']); 
    $email = $_POST['email']; 
    echo "id: $id";
    
    $result = mysqli_query($conn, "UPDATE job_apply SET status = 'rejected' WHERE id = '$id'");
    
    if ($result) {
     if(smtp_mailer($email, 'Job Application Status', "Rejected"))
     {
    //  header("location:demo_req.php");
      echo "data updated";
     }

    }
  }

  


}
?>
