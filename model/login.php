<?php
	include "../config/config.php";
// Fungsi SQL Injection
	function antiinjection($data){
	 $filter_sql =
	mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars
	($data,ENT_QUOTES))));
	 return $filter_sql;
	}
	$username = antiinjection($_POST['username']);
	$password = antiinjection(md5($_POST['password']));
	$sql="SELECT * FROM user WHERE username='$username' AND password='$password' ";
	$tampil=mysql_query($sql);
	$jumlah=mysql_num_rows($tampil);
	$data=mysql_fetch_array($tampil);
	if ($jumlah > 0){
	 session_start();
	// Inisialisasi data pada session
	$_SESSION[username] = $data['username'];
	$_SESSION[password] = $data['password'];
	$_SESSION[nama] = $data['nama'];
	$_SESSION[id_user] = $data['id_user'];

	
	$_SESSION[status] = $data['status'];
	
	
	header('location:../index.php');
	}
	// Apabila login gagal
	else{
	 
	 echo header('location:../login.php?msg=55');
	}
?>