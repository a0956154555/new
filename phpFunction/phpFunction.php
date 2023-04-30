<?php
$text=1;

$textArray=array("測試1","測試2","測試3",true,false);
// 這是自定的結束標記，想寫什麼都可以
echo <<<end
我再也受不了每次寫$text 一個東西就要一直換行換行換行了。
所以有了這個特別的寫法。
<br>
end;
// 這種變數的寫法和js的樣板字串非常的像，但是又有點不一樣js是${}而在php中是{$}這算是不同的。
echo "我再也受不了每次寫{$text}一個東西就要一直換行換行換行了。
所以有了這個特別的寫法。<br>";
echo '我再也受不了每次寫{$text}一個東西就要一直換行換行換行了。
所以有了這個特別的寫法。<br>';

echo "Hello ", "world","<br>";
print "hello world<br>";
echo $textArray."<br>";
print_r($textArray);//印出可以閱讀的東西 console.table


// 除了echo外還有print 他的效果和echo幾乎一樣，但是效能是echo比較好。


$x=true;
echo ($x ?  "1<br>": "2<br>");

// $foreachText=array("1","2","3");
$foreachText=array("john"=>"男生","kenny"=>"女");
echo"這是foreach應用";



// foreach($foreachText as $key=>$value){
//   //value代表數值
//   //key代表
//   echo "{$key}是{$value}";
// }
echo"<br>";
foreach($foreachText as $key=>$value){
  //value代表數值
  //key代表
  echo "{$key}是<br>";
}
foreach($foreachText as $key){
  //value代表數值
  //key代表
  echo "{$key}是<br>";
}

echo"<br>";
echo  "所以答案是".true;
echo  "所以答案是".false;
?>