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
        display: inline-block;
        right:2%;
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
        border-width: 1px;
    } 
    .dropdown_item{
        font-size: 15px;
        background-color: white;
        outline:none;
        color: black; /* 移除超連結顏色 */
        text-decoration: none;  /* 移除超連結底線 */
        display: block;
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
    .competition{
        margin-left: 10%;
        margin-top: 3%;
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

    <div class="competition">
        <?php 
            @session_start();
            //儲存文章的陣列
            $listArray = array();
            
            //下載要爬的頁面完整HTML 如mysql一樣 須先建立一個curl連線
            $curl = curl_init();
            $listUrl = 'http://music.tn.edu.tw/seh/';

            /*  設定擷取的URL網址 
                bool curl_setopt (int ch, string option, mixed value)
                curl_setopt()函式將為一個CURL會話設定選項。option引數是你想要的設定，value是這個選項給定的值。*/

            //CURLOPT_URL 你想用PHP取回的URL地址
            curl_setopt($curl, CURLOPT_URL, $listUrl);
            
            //在啟用CURLOPT_RETURNTRANSFER時候將獲取資料返回
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            //執行
            $htmlResult = curl_exec($curl);
            /*  用於進行正規表示式匹配，成功返回 1 ，否則返回 0 
                pattern:自定義的正規表示法的規則
                subject:來源數據
                matches:回傳匹配的資料會回傳Array $match[0]裡面是原始匹配的資料 $match[1]只剩下要的部分*/
            
                //(.*) 告訴正則表達式引擎：“匹配任何字符，零次或多次，盡可能多”。點星會用推土機推到主題的結尾。然後，如果需要允許匹配，它將回溯，一次一個字符。
                //(.*?) 告訴正則表達式引擎：“匹配任何字符，零次或多次，盡可能少”。引擎將首先匹配零個字符，然後，因為它無法返回匹配項（因為未找到“WORD 2”），它將再匹配一個字符，然後再匹配一個，依此類推
                $comp = array();

                preg_match_all('/<a href="\.\/news_M\/disp\.asp\?id=.*?" class="w01">(.*?)<\/a>/', $htmlResult, $match);
                $comp['title'] = $match[1];

                preg_match_all('/<a href=".(.*?)" class="w01">.*?<\/a>/', $htmlResult, $match);
                $comp['url'] = $match[1];

                echo "<p> 全國音樂比賽</p>";
                for($i=0; $i<count($comp['title']); $i++){
                    echo ($i+1).".\n";
                    print_r($comp['title'][$i]);
                    echo "<br>";
                    $htmll="http://music.tn.edu.tw/seh/".$comp['url'][$i];
                    echo "<a href=$htmll>$htmll</a>";
                    echo "<br><br>";
                }
            
            //關閉連線
            curl_close($curl);
            
        ?>








    </div>


</body>
</html>