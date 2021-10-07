<?php
	include "conexao.php";
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$sql = "DELETE FROM usuario WHERE `email` = '$email'";
	mysqli_query($connect, $sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>