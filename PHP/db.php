<?php 
$host = "localhost"; //設定資料庫 主機通常用本機
$dbuser = "root"; //以root管理者帳號進入資料庫
$dbpwd = "root";
$dbname = "Dinosaur"; //最後要使用的資料夾
$_SESSION['link']= mysqli_connect($host,$dbuser,$dbpwd,$dbname); //宣告一個link變數 連結資料庫函式


if ($_SESSION['link']) {
    //如果傳回正值 代表已連線
    //設定連線編碼為UTF-8
    //mysqli_query(資料庫連線,“語法內容”)為執行sql的函式
    mysqli_query($_SESSION['link'],"SET NAMES utf8");
}

else{
    //連線錯誤 顯示sql的錯誤訊息
    echo("無法連線！！").mysqli_connect_error();
}









?>