<?php
$dsn = "mysql:host=localhost;dbname=user";
$passwd = '';
$username = 'root';
$dbh = new PDO($dsn,$username,$passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION);
$dbh->exec('set names utf8');
$title=$_POST['title'];
$sql = "DELETE FROM qa WHERE title = '$title' ";
$res = $dbh->prepare($sql);
$res->execute();
header("Location:../mainpage");
?>