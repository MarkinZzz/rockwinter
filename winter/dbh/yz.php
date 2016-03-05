<?php
  $username=$_POST['username'];
  $password=$_POST['password'];
  if ($username=="taillo" && $password=="mylove") {
  	echo "登录成功";
  	header("Location:../mainpage");
  }else{
  	echo "登录失败";
  	header("Location:../Loginin");
  }