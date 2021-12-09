<?php 
    @session_start();
    
    function get_publish(){
        $article = array();
        $sql = "SELECT * FROM `article` WHERE `publish`=1;";
        $query = mysqli_query($_SESSION['link'],$sql);
    }
?>
