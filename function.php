<?php

include_once "connection.php";
include_once "sendmail.php";

if($conn)
{

   if(isset($_REQUEST['no_of_employee']))
   {
    $name = stripslashes($_REQUEST['name']);
    $email = stripslashes($_REQUEST['email']);
    $phone_number = stripslashes($_REQUEST['phone_number']);
    $no_of_employee = stripslashes($_REQUEST['no_of_employee']);
    $company = stripslashes($_REQUEST['company']);
    $location = stripslashes($_REQUEST['location']);
    $message = stripslashes($_REQUEST['message']);
    $ip_adr=$_SERVER['REMOTE_ADDR'];
    $plan = $_REQUEST['plan'];
    $form = $_REQUEST['form'];

    
    if(mysqli_query($conn, "INSERT INTO form(name, email, phone_no, no_of_emp,plan, company, location, message,ip_addr,status,form) values('$name', '$email', '$phone_number','$no_of_employee','$plan', '$company', '$location', '$message','$ip_adr','new','$form')"))
    {
        if($form=='quote request')
        {
            echo '<script>window.location.href = "index.php";</script>';
        }
        if($form=='demo request')
        {

            //$email = "supportengineermail
            smtp_mailer("janhvi.dwivedi@nesswadiacollege.edu.in", 'New Demo Request',"Demo Request Details: <br> <b>Name:</b> $name <br> <b>Email: $email </b> <br><b>Phone Number:</b>  $phone_number <br><b>Total Employee:</b>  $no_of_employee<br><b>Plan:</b>  $plan<br><b>Company: </b> $company <br><b>Location: </b> $location<br><b>IP Address: </b> $ip_adr<br><b>Message: </b> $message<br>");

            echo '<script>window.location.href = "demo.php";</script>';
        }
        if($form=='contact')
        {
            echo '<script>window.location.href = "contactus.php";</script>';
        }
    }
    else{

        echo '<script>alert("Not Submitted. Please try again...");</script>';
        echo '0';
    }
   }

   

   
}
else{
        die("Database connection failed: " . mysqli_connect_error());
    }
?>