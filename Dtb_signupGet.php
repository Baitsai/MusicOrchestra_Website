<?php
@session_start();
$host = "localhost"; 
$dbuser = "root";
$dbpwd = "root";
$dbname = "Dinosaur"; 
$link = mysqli_connect($host,$dbuser,$dbpwd,$dbname);

$sql = "INSERT INTO `Dinosaur`.`user_info`(`user_id`,`user_name`,`user_password`,`user_gender`,`user_mail') 
        VALUES ('$_POST[userId]','$_POST[userName]','$_POST[userPwd]','$_POST[userGender]','$_POST[userMail]');";

$signupResult= mysqli_query($link,$sql);

if ($signupResult) {
  header('Location:Dtb_home.php');
}
else{
  echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);
}

?>