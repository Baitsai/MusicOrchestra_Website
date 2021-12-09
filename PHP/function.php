<?php
@session_start();
function get_published()
{
  $publish = array();
  $sql = "SELECT * FROM `bulletin` WHERE `publish` = 1;";
  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query){
    if (mysqli_num_rows($query) > 0){
      while ($row = mysqli_fetch_assoc($query)){
        $publish[] = $row;
      }
    }
    mysqli_free_result($query);
  }
  else{
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }
  return $publish;
}

function get_spec_published($id){
  $result = array();
  $sql = "SELECT * FROM Dinosaur.bulletin  WHERE `publish` = 1 AND (`title` LIKE '%$id%' OR `content` LIKE '%$id%');";
  $query = mysqli_query($_SESSION['link'], $sql);

  if ($query){
    if (mysqli_num_rows($query) > 0){
      while ($row = mysqli_fetch_assoc($query)){
        $result[] = $row;
      }
    }
    mysqli_free_result($query);
  }
  else{
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }
  return $result;
}
?>