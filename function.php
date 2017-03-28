<?php 

function generateRandomString($length = 10) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function redirect($page) {
	header("Location: ".$page);
	exit;
}

function informationDb(){
	$db['servername'] = "127.0.0.1";
	$db['username'] = "root";
	$db['password'] = "itcode";
	$db['dbname'] = "kqxsdev";
	return $db;
}