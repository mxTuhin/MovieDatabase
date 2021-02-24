<?php

include('../config/dbConfig.php');
session_start();

$response = array();




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = $_POST['email'];
	$pass     = $_POST['password'];
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    
	$sql="";
	$sql    = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($db, $sql);
	
	if (mysqli_num_rows($result) > 0) {
// 		echo "User already Exists";
        $response['error'] = true;
        $response['msg']   = "User Exists";
	} else {
		$password = md5($pass);
		
		$sql = "INSERT INTO users (id, name, email, password, birthday) 
		VALUES (NULL, '$name', '$email', '$password', '$birthday')";
		if (mysqli_query($db, $sql)) {
        $response['error'] = false;
        $response['msg']   = "Registration SUccesful";
        }
    }
    echo json_encode($response);
}

?>