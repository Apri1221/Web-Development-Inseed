<?php
include_once("c_iklanq.php");
if(isset($_POST['submit'])){
	$main = new c_iklanq();
	$email = $_POST['email'];
	$password = $_POST['password'];
	$main->cekLogin($email, $password);
}
?>