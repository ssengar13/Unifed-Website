<?php
include_once "connection.php";
include_once "sendmail.php";

$username = "user_" . rand(1000, 9999);
$password = "pass_" . rand(1000, 9999);
$to = 'janhvidwivedi834@gmail.com'; // Change to your recipient email address

if (mysqli_query($conn, "INSERT INTO login (username, password) VALUES ('$username', '$password')")) {
    smtp_mailer($to, 'Generated username and password', "Please note down your username and password for dashboard login.<br>Username: <b>$username</b><br>Password: <b>$password</b>");
    echo "Credentials generated and sent to $to successfully.";
} else {
    echo "Error sending credentials.";
}

mysqli_close($conn);
?>
