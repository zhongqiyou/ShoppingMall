<?php
header("Content-type:text/html;charset=utf-8"); 
 

$link = @mysql_connect("localhost" , "root" , "");

$user = $_GET['user'];
$id = $_GET['id'];


if(!$link){
    echo "连接失败";
}

mysql_select_db("wx" , $link);

$sql_select = "select * from addr where `user`='$user' and `id`='$id'";

$res_select = mysql_query($sql_select);


$arr = array();

for($i = 0;$i <  mysql_num_rows($res_select); $i++){
    $arr[$i] = mysql_fetch_assoc($res_select);
}

$str =  json_encode($arr);
echo $str;
 


?>