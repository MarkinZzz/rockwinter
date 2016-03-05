<?php
$dsn = "mysql:host=localhost;dbname=user";
$passwd = '';
$username = 'root';
$dbh = new PDO($dsn,$username,$passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION);
$dbh->exec('set names utf8');
$review = $_POST['review'];
$sql = "update qa SET review='$review'";
$dbh -> exec($sql);
echo "发布成功";
Header("Location: ../mainpage");
?>