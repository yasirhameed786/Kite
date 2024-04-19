<?php
session_start();

 
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','chat_app_db');

// get the post records
$post = $_POST['post'];
$username = $_POST['username']


// database insert SQL code
$sql = "UPDATE users "."SET post = $post".  "WHERE username = $username";

// insert in database 
$rs = mysqli_query($sql, $con);

if($rs)
{
	echo "Post uploaded";
}


?>