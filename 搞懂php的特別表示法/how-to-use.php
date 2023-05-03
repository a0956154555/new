<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="text"></div>
  <div class="text2"></div>
  <div class="text3"></div>
  <div class="text4"></div>
  <?php
  echo"接著是php的表演<br><br>";

  $str1 = "Hello";
  $str2 = " World!";
  $str1 .= $str2; // 等同於 $str1 = $str1 . $str2，現在 $str1 的值為 "Hello World!"

  echo $str1."<br>"; //在這邊你可以發現這樣子的寫法是讓ｐｈｐ進行字串能夠連接，但為什麼不和js一樣用＋號就好了呢

  
  $number1=1;
  $number2=2;
  echo "這是正常數字1+2的結果：".$number1+$number2."<br>";
  // 我們將ｐｈｐ的數字變成字串
  $number1="1";
  $number2="2";
  echo "這是以字串進行1+2的結果：".$number1+$number2."<br>";


  // 可以把.=想成是不管怎麼樣，都要求ｐｈｐ不要貼心的幫我們轉換成數字，的方式進行的＋=如此一來，就能完全整握這個困難了

  // 當然ｐｈｐ還有很多小心思 例如a++ 和++a 的這種判斷，雖然實務上不會遇到頂多最為考題，但還是可以稍微了解一下 註記：在任何的程式撰寫上，請不要使用這種寫法，容易造成別人誤會，但對於未來目標月入20萬的我們來說，我們需要更了解這個程式的。

echo "<br>這是ｐｈｐ最難搞的地方<br>";
  $a = 5;

// 使用後置遞增（a++）
// 簡單來說就是先判端在遞增
if ($a++ == 5) {
    echo "a++ 條件成立，此時 a 的值為：$a\n"; // 輸出：a++ 條件成立，此時 a 的值為：6
} else {
    echo "a++ 條件不成立，此時 a 的值為：$a\n";
}

// 使用前置遞增（++a）
// 簡單來說就是先增加在判斷
$a = 5;
if (++$a == 6) {
    echo "++a 條件成立，此時 a 的值為：$a\n"; // 輸出：++a 條件成立，此時 a 的值為：6
} else {
    echo "++a 條件不成立，此時 a 的值為：$a\n";
}

   ?>

   <script>
    let text1="cool"
    let text2="Man"
    let text3="1"
    let text4="2"
    let text5=1
    let text6=2

    document.querySelector(".text").innerHTML=`這是文字字串相加的結果:${text1+text2}`//coolMan
    document.querySelector(".text2").innerHTML=`這是數字字串相加的結果:${text3+text4}`//12
    document.querySelector(".text3").innerHTML=`這是將字串轉換成數字相加後的結果:${Number(text3)+Number(text4)}`//3 這是把字串先變成數字的方法，通常會用在取得表單的數值時，會使用到
    document.querySelector(".text4").innerHTML=`這是正常的數字相加：${text5+text6}`//3
   </script>
</body>
</html>