<?php 
    @session_start();
?>

<!DOCTYPE html>
<html lang="zh-TW">
<meta charset="UTF-8" />
<head> 
  <title>loginin</title> 
</head> 
<style>
    body{
        text-align: -webkit-center;
        line-height: 50px;
        background-color: #f8f9fa;
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
        color:#0dcaf0;
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
</style>
<body> 
    <h1 class="entry_header">Chinese Music Orchestra</h1> 
    <h3 style="font-weight:400;margin:0;padding:1113 40;"> 歡迎來到國樂社，喝杯咖啡開始新的一天吧！</h3> 

    <?php //判斷有沒有此變數可以用，且已經登入
    if(isset($_SESSION['is_login']) && $_SESSION['is_login']== true):
        header('Location:Dtb_home.php');
    
    else:
    ?>
    <form name="loginform" action="Dtb_loginGet.php" method="post">
        <?php //如果在Dtb_loginGet.php比對帳密時出錯，設定產生一個message:登入失敗，請確認帳戶或密碼
            if(isset($_GET['msg'])){
            echo "<p class='error'>{$_GET['msg']}</p>";}
            ?>

        <div align="center"> 
            Mail：<input require type="email" name="loginMail" size="28" autofocus /> 
            <br>
            Password：<input require type="password" name="loginPwd" size="23"/> 
            <br>
            <button type="submit">Sign in</button>
            <label><input name="rememberme" type="checkbox" value="forever">保持登入</label>
            <br>
            <a href=Dtb_signup.php style="font-size:15;">註冊加入國樂family</a>
        </div>
    </form>

    <?php endif; ?>

 </body>
</html>