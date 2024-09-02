<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'connection.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$type = (isset($_REQUEST['type'])) ? stripslashes($_REQUEST['type']) : '';

if($type == ""){
    $sql = "SELECT * FROM form WHERE form = 'demo request' and status = 'new'";
    $result = $conn->query($sql);
    
    $notifications = [];
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $notifications[] = [
                'id' => $row['id'],
                'message' => "New demo request from {$row['name']}: {$row['message']}",
            ];
        }
    
    
    }
    
    header('Content-Type: application/json');
    echo json_encode($notifications);
} else {
    $id = $_GET['id'];
    // echo $id;
    $sql = "SELECT * FROM form WHERE id='$id'";
    $result = $conn->query($sql);
    
    $updateSql = "UPDATE form  SET status = 'seen' WHERE form = 'demo request' and status = 'new' AND id='$id'";
    $conn->query($updateSql);
    
    header('Content-Type: application/json');
    echo json_encode($result->fetch_assoc());
}




$conn->close();
?>
