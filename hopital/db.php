<?php
$con=mysqli_connect('127.0.0.7','root','','hopital');
if(!$con){
	die('erreur de connexion a la base de donnée');
}else{
	}


 $pdo= new PDO('mysql:dbname=hopital;host=localhost','root','');

   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>