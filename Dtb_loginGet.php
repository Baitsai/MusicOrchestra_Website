<!DOCTYPE html>
<html lang="zh-TW">
<?php
@session_start();
$host = "localhost"; 
$dbuser = "root";
$dbpwd = "root";
$dbname = "Dinosaur"; 
$link = mysqli_connect($host,$dbuser,$dbpwd,$dbname);
$sql = "SELECT user_mail,user_password FROM `Dinosaur`.`user_info`;";
$loginResult= mysqli_query($link,$sql);
$userLogin= array("user_mail"=>$_POST['loginMail'],"user_password"=>$_POST['loginPwd']);

//使用isset判斷變數有沒有生成
if ($loginResult) {
    if(isset($_POST['loginMail']) && isset($_POST['loginPwd'])){
        //對傳過來的帳號密碼比對
        //while迴圈會根據查詢筆數，決定跑的次數
        //mysqli_fetch_assoc 方法取得 一筆值
        while($row = mysqli_fetch_assoc($loginResult)){
            if($row == $userLogin) {
                //帳密一樣 可以登入
                //將session加入已登入的紀錄
                $_SESSION['is_login'] = true;
                //前往個人首頁
                $_SESSION['mailToUse'] =$_POST['loginMail'];
                header('Location:Dtb_home.php');
                mysqli_free_result($loginResult);
            }
            else{
                //登入失敗
                //將session加入“未登入”的紀錄
                $_SESSION['is_login'] = false;
               //前往個人首頁
               header('Location:Dtb_login.php?msg=登入失敗，請確認帳戶或密碼');
            }
        }
    }
    else{
        //避免其他情況，用header轉回登入頁面
        header('Location:Dtb_login.php?msg=請正確登入');
    }
}
else{
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);
}
?>
</html>
