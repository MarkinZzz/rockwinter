<?php
$dsn = "mysql:host=localhost;dbname=user";
$passwd = '';
$username = 'root';
$dbh = new PDO($dsn,$username,$passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION);
$dbh->exec('set names utf8');
$sql = 'select * from `user` where id=1';
$res = $dbh->prepare($sql);
$res->execute();
$message = $res->fetchAll(PDO::FETCH_ASSOC);
?>