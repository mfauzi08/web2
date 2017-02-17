<?php
	include 'koneksi.php';
	session_start();
	
	$user_check = $_session['username'];
	
	$mysql_guery = "SELECT * FROM login WHERE username = '$user_check'";
	
	$row = mysql_fetch_array(mysql_query)
	
	$login_session_name = $row['nama'];
	
	if(isset($_session['username'])){
		header("location:index.php");
		}
?>