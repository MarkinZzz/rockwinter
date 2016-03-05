<?php
$dsn = "mysql:host=localhost;dbname=user";
$passwd = '';
$username = 'root';
$dbh = new PDO($dsn,$username,$passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION);
$dbh->exec('set names utf8');
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$sql = "insert into user(username, password,phone) values('$username', '$password','$phone')";
$dbh -> exec($sql);
echo "注册成功";
Header("Location: ../loginin");
?>