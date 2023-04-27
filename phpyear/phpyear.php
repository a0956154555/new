<?php
$cyear=$_GET["cyear"];
// echo $cyear;
// 要先明白閏年的規則 4年一潤 100年不潤 400年在潤一次
  if($cyear%4==0){
    // 取得所有4的倍數
    if($cyear%100==0){
      // 肯定是閏年
      echo "$cyear 年不是閏年";
    }
    else{
      if($cyear%400==0){
        echo "$cyear 年是閏年";
      }
    }
  }
  // else{
  //   echo "$cyear 年不是閏年";
  // }
