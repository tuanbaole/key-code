<?php
if (isset($_GET['code'])) {
	$code = $_GET['code'];
} else {
	$code = -1;
}

include('function.php');
$db = informationDb();
// Create connection
$conn = mysqli_connect($db['servername'], $db['username'], $db['password'],$db['dbname']);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `codes` WHERE `code`='".$code."' AND `active`=0 ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
	$row = mysqli_fetch_assoc($result);
	$update = "UPDATE `codes` SET `active`=1 WHERE `id`=".$row['id'];
	if ($conn->query($update) === TRUE) {
	    $return = true;
	} else {
	    $return = false;
	}
} else {
    $return = false;
}

mysqli_close($conn); 

return $return;