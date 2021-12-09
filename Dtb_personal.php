<!DOCTYPE html>
<html lang="zh-TW">
<meta charset="UTF-8" />
<head> 
  <title>personalpage</title> 
</head> 
<style>
    body{
        text-align: -webkit-center;
        line-height: 50px;
    }
    div{
        margin: 30px 30px;
        font-size:18px;
        border:none;
        line-height:40px;
    }
    .error{
        color:#e04850;
        margin: 0;
        font-size:15px;
        border-width:0px;
    }
    .entry_header{
        margin-top: 50px;
        margin-bottom: 0px;
        font-size: 45px;
        font-weight: 500;
        color:#6889d9;
    }
    input{
        border:none;
        line-height:40px;
        padding: 0.5px;
    }
    input[type=email],
    input[type=password],
    .site textarea{
        background-color: transparent;
        font-size:18px;
        height: 30px;
    }
    input:-webkit-autofill{
        -webkit-box-shadow: 0 0 0px 100px #c2848c inset;
        box-shadow: 0 0 0px 100px #c2848c inset;
    } 
</style>
<body> 
    <h1 class="entry_header">Dinosaur de Laplace </h1> 



<?php 
    session_start();
    
    session_unset();
    echo "Hiii";
?>

</body>
</html>