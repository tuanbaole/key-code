<?php
include('function.php');
$db = informationDb();
if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	$id = -1;
}
// Create connection
$conn = mysqli_connect($db['servername'], $db['username'], $db['password'],$db['dbname']);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM `codes` WHERE id=".$id;

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
    die();
}

mysqli_close($conn);

redirect('index.php');
