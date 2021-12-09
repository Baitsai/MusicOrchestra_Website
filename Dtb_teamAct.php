<?php 
    @session_start();
    
    
?>

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
    .bulletin{
        text-align: "center";
    }
    .entry_header{
        font-size: 30px;
        text-decoration: none;  /* 移除超連結底線 */
        font-weight: 500;
        color:#f8f9fa;
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
        z-index: 10 !important;
    }
    .container {
        position:fixed;
        display: inline-block;
    }
    .dropbtn{
        position:fixed;
        right:2%;
        top:1%;
        color:white;
        background-color: transparent;
        border-width: 0;
        font-weight: 550px;
        font-size : 30px;
    } 
    .dropdown_menu {
        width: 105px;
        display: none;
        position:fixed;
        top:50px;
        right:3%;
        z-index:100;
        border-width: 1px;
    } 
    .dropdown_item{
        font-size: 15px;
        background-color: white;
        outline:none;
        color: black; /* 移除超連結顏色 */
        text-decoration: none;  /* 移除超連結底線 */
        display: block;
        z-index:70!important;
        padding: 10px;
    }
    .dropdown_item:hover{
        background-color: #BABABA;
        color: white;
    }
    .show {display:block;}
    .btn-outline-info {
    color: #35c0de;
    border-color: white !important;
    }    
    .btn-outline-info:hover {
    background-color:#e5ecf1;
    }

</style>

<body style="margin:0px">   
    <div class="navigation_bar"> 
        <a  href=Dtb_home.php class="entry_header" >NCKUCMC</a>  

        <div class="activity" >
            <a href=Dtb_teamAct.php class="activity_item">四處看看</a>
            |
            <a href=Dtb_propose.php class="activity_item">尋找活動</a>  
            |
            <a href=Dtb_comp.php class="activity_item">比賽資訊</a>  
            |
            <a href=Dtb_propose.php class="activity_item">聯絡幹部</a>   
        </div>
 
        <div class="container">
            <button class="dropbtn" onclick="myFunction()"><?php printf($_SESSION['nameToUse']);?></button>
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
    <div class = "bulletin">
        <div class="contain">
            <div class="row">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                <a class="btn btn-outline-info" href="Dtb_conductor.php" >指揮</a>
                <a class="btn btn-outline-info" href="Dtb_conductor.php" >拉弦</a>
                <a class="btn btn-outline-info" href="Dtb_conductor.php" >彈撥</a>
                <a class="btn btn-outline-info" href="Dtb_conductor.php" >吹管</a>
                <a class="btn btn-outline-info" href="Dtb_conductor.php" >打擊</a>
                <a class="btn btn-outline-info" href="Dtb_conductor.php" >低音</a>
                </div>
                
            </div>
        </div>

    </div>
</body> 
</html>
