<!DOCTYPE html>
<html lang="zh-TW">
<head> 
<meta charset="UTF-8" />
  <title>Chinese Music Orchestra</title> 
  <meta name="description" content="不必感嘆伯樂難尋，在這裡每個人都是你的知音!">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="shortcut icon" href="image/icon 2.ico">
</head> 

<style>
    .navigation_bar {
        display: inline-block;
        background-color: #35c0de;
        height:100%;
        width:100%;
        z-index: 800;
    }
    .entry_header{
        font-size: 30px;
        text-decoration: none;  /* 移除超連結底線 */
        font-weight: 500;
        color:white;
        margin-left: 30px;
        margin-right: 180px;
        margin-top: 10px;
        margin-bottom: 10px;
        text-shadow: 1px 2px 3px rgba(0,0,0,0.1);
        display: inline-block;
    }
    .activity{
        color:white;
        text-align:center;
        margin-left: 250px;
        margin-right: 30px;
        display: inline-block;
        position:fixed;
        right:10%;
        top:20px;
    }
    .activity_item:hover{
        text-decoration:underline;
        color:white;
    }
    .activity_item{
        margin:15px 15px 15px 15px;
        color: inherit; /* 移除超連結顏色 */
        text-decoration: none;  /* 移除超連結底線 */
        z-index: 7000 !important;
    }
    .container {
        position:fixed;
        display: inline-block;
    }
    .dropbtn{
        position:fixed;
        right:6%;
        top:20px;
    } 
    .dropdown_menu {
        width: 100px;
        display: none;
        position:fixed;
        top:50px;
        right:3%;
        z-index:100;
    } 
    .dropdown_item{
        font-size: 15px;
        background-color: rgb(230, 230, 230);
        outline:none;
        color: inherit; /* 移除超連結顏色 */
        text-decoration: none;  /* 移除超連結底線 */
        display: block;
        z-index:100;
        padding: 10px;
    }
    .dropdown_item:hover{
        background-color: #BABABA;
        color: white;
    }
    .show {display:block;}
    .bulletin_title {
        margin-left: 15%;
        margin-top: 3%;
        margin-bottom: 3%;
    }
    .col-xs-12 {
        margin-left: 15%;
        margin-right: 15%;
        display: inline-block;
    }
    .col-xs-12-1 {
        margin-right: 15%;
        display: inline-block;
    }
</style>
<body>
<body style="margin:0px">   
    <div class="navigation_bar"> 
        <a  href=Dtb_home.php class="entry_header" >NCKUCMC</a>  

        <div class="activity" >
            <a href=Dtb_teamAct.php class="activity_item">四處看看</a>
            |
            <a href=Dtb_propose.php class="activity_item">尋找活動</a>  
            |
            <a href=Dtb_propose.php class="activity_item">聯絡幹部</a>   
        </div>
 
        <div class="container">
            <button class="dropbtn" onclick="myFunction()"style="background-image:url(image/icon 2.ico);width:25px;height:25px;"></button>
            <div id="myDropdown" class="dropdown_menu">
                <a class="dropdown_item" href="Dtb_personal.php ">個人頁面</a>
                <a class="dropdown_item" href="#">樂譜收藏</a>
                <a class="dropdown_item" href="#">活動紀錄</a>
                <a class="dropdown_item" href="Dtb_logout.php">登出</a>
            </div>
        </div>
        <script>
            /* When the user clicks on the button,toggle between hiding and showing the dropdown content 
            classList.toggle 的作用就是，當myDiv元素上沒有這個CSS類時，它就新增這個CSS類；如果myDiv元素已經有了這個CSS類，它就是刪除它。就是反轉操作*/
            function myFunction() {
               document.getElementById("myDropdown").classList.toggle("show");
            }
            // Close the dropdown menu if the user clicks outside of it
            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown_menu");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>     
        </div>  
<div align="center">
  <form method="post" action="Dtb_signupGet.php" >
        <fieldset align="center">
        <br>
        <legend align="center" style="font-size:25px;font-weight:8px;color: #35c0de">Create your Account</legend>
          Name：<input required type="text" name="userName" autocomplete="off" autofocus style="width: 500px;">
          <br><br>
          StudentID：<input required type="text" name="userId" autocomplete="off" autofocus style="width: 490px;">
          <br><br>
          Password：<input required type="password" name="userPwd" autocomplete="off" style="width: 500px;">
          <br><br>
          Gender：<select name="userGender" style="width:500px;">
              <option value="boy">Boy</option>
              <option value="girl">Girl</option>
              <option value="none">Secret</option>
              </select>
              <br><br>
          Birth Date：<input required type="date" name="userBirth" style="width:500px;">
          <br><br>
          Mail：<input required type="email" name="userMail" size=50>
          <br><br>
          Team：<select name="userTeam" style="width: 450px;">
              <option value="1">吹管組</option>
              <option value="2">拉弦組</option>
              <option value="3">低音組</option>
              <option value="4">打擊組</option>
              <option value="5">彈撥組</option>
              <option value="6">箏班</option>
              <option value="7">指揮</option>
              </select>
          <br><br>
          <label><input name="rememberme" type="checkbox" value="forever">保持登入</label>
          </select>

      </fieldset>

    <div>
    <br>
    <br>
    <button type="submit">成為小恐龍</button>

    <a href="Dtb_login.php"style="font-size:22;">回到登入</a>
    <div>

  </form>
</div>
</body>
</html>