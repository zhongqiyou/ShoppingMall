<?php
header("Content-type:text/html;charset=utf-8");

$link = @mysql_connect("localhost" , "root" , "");
$price = $_GET['price'];



if(!$link){
   echo "连接失败？？？<br/>";
}

mysql_select_db("wx" , $link);

$sql_insert = "delete from crat where `price`='$price'";

$res_select =  mysql_query($sql_insert);

if($res_select){
    echo "删除成功";
}else{
    echo "删除失败";
}



?>