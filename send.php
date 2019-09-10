<?php
	if(!empty($_POST['name'])&&!empty($_POST['mail'])&&!empty($_POST['txt'])){
		$connect=new PDO("mysql:host=giruta.mysql.ukraine.com.ua;dbname=phpMyAdmin","giruta_db","NMdvDsdY");
		$mail=$_POST['mail'];
		$name=$_POST['name'];
		$txt=$_POST['txt'];
		$q="INSERT INTO `data` SET `name`='$name',`email`='$mail',`message`='$txt'";
		$connect->exec($q);
		echo true;
	}else{
		echo false;
	}