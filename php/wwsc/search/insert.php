<?php
header("Content-type:text/html;charset=utf-8"); 
$record = $_GET["record"];

$link = @mysql_connect("localhost" , "root" , "");

if(!$link){
   echo "连接失败？？？<br/>";
}

mysql_select_db("wx" , $link);

$sql_insert = "insert record (`text`) values ('$record')";

$res_select =  mysql_query($sql_insert);

if($res_select){
    echo "插入成功";
}
?>