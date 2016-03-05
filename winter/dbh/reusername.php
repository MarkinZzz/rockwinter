<?php
$dsn = "mysql:host=localhost;dbname=user";
$passwd = '';
$username = 'root';
$dbh = new PDO($dsn,$username,$passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION);
$dbh->exec('set names utf8');
$name=$_POST['name'];
$sql = "update user SET username='$name' where id=1";
$res = $dbh->prepare($sql);
$res->execute();
header("Location:../set");
?>