<?php
include('function.php');

$db = informationDb();

// Create connection
$conn = mysqli_connect($db['servername'], $db['username'], $db['password'],$db['dbname']);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() );
}
$code = generateRandomString();
$date = date('Y-m-d');
$date_time = date('Y-m-d H:i:s');

$sql = "INSERT INTO `codes`(`code`, `active`, `date`, `created`, `modified`) VALUES ('".$code."',0,'".$date."','".$date_time."','".$date_time."')";

if ($conn->query($sql) === TRUE) {
    $get = "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
}

$conn->close();

redirect('index.php');