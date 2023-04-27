<?php
$cname=$_POST["cname"];
$number=$_POST["number"];
$age=$_REQUEST["age"]; //get和post就可以
// $age=$_GET["age"];

echo $cname;
echo $number;
echo $age."<br>";

echo"hello","world{$cname} <br>";
echo 'hello ', 'world{$cname} <br> ';

// echo"hello","world{$cname} <br>";
?>