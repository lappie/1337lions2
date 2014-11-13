<?php
	if(!isset($_GET['id']))
		redirect("invite-overview.php"); 
	$id = $_GET['id']; 
	
	file_put_contents("data/$id.trans", "$id");
	redirect("invite-overview.php");
?>