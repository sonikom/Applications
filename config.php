<?php
header('Content-Type: text/html; charset=utf-8');

$host='localhost';
$user='selenak_liders';
$pass='Ag1961';
$db='selenak_liders';

$con=  mysqli_connect($host, $user, $pass, $db);
//if(!$con)
//{
//    echo '<br/>Connect false';
//    exit();
//}
//else echo '<br/>Connect true!!!!!!!!!!!!!!!';

mysqli_query($con, "SET NAMES 'utf8'");
//echo '<br/>host='.$_SERVER['HTTP_HOST'];
//echo '<br/>version='.phpversion();

//$sql="SELECT * FROM teacher t";
//$query=  mysqli_query($con, $sql);
//while ($r=  mysqli_fetch_assoc($query)){
//    echo '<br/>=='.$r['last'];
//}
?>

