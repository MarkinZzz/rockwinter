<?php
$file=$_FILES['file'];
$name=$_FILES["file"]["name"];
$name="head.jpg";
$upload_dir='../head/';
if(move_uploaded_file($file['tmp_name'],$upload_dir.$name)){
  header("Location:../edit");
}else{
  echo "图片格式不对";
  header("Location:../edit");
}
?>
