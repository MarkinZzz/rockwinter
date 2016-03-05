<?php
$dsn = "mysql:host=localhost;dbname=user";
$passwd = '';
$username = 'root';
$dbh = new PDO($dsn,$username,$passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION);
$dbh->exec('set names utf8');
$title = $_POST['title'];
$content = $_POST['content'];
$topic = $_POST['topic'];
$sql = "insert into qa(title, content,topic) values('$title', '$content','$topic')";
$dbh -> exec($sql);
echo "发布成功";
Header("Location: ../mainpage");
?>