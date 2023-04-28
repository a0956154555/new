<?php
$cyear = $_GET["cyear"];
// $cweight = $_GET["cweight"];
// $cheight = $_GET["cheight"];
// $bmi = number_format($cweight / ($cheight * $cheight), 1);
// echo $cyear;
// 要先明白閏年的規則 4年一潤 100年不潤 400年在潤一次
if ($cyear % 4 == 0) {

  // 取得所有4的倍數
  if ($cyear % 100 == 0 && $cyear % 400 != 0) {
    // 肯定是閏年
    echo "$cyear 年不是閏年";
  } elseif ($cyear < 100 && $cyear % 4 == 0) {
    echo "$cyear 年是閏年";
  } else {
    if ($cyear % 400 == 0) {
      echo "$cyear 年是閏年";
    }
  }
} else {
  echo "$cyear 不是閏年";
}
// else{
//   echo "$cyear 年不是閏年";
// }

// if ($cweight / ($cheight * $cheight) < 18.5) {
//   echo "數值為 $bmi 過輕";
// } elseif ($cweight / ($cheight * $cheight) >= 18.5 && $cweight / ($cheight * $cheight) < 24) {
//   echo "數值為 $bmi 適中";
// } else {
//   echo "數值為 $bmi 過重";
// }
