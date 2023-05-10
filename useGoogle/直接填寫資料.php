<?php

// $_SERVER['REQUEST_METHOD'] 表示 HTTP 請求方法，它可以是 'GET'、'POST'或是put delete這種很少用的，現在只要先知道get和post就好了
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $human = $_POST['human'];
    $food = $_POST['food'];
    $message = $_POST['message'];

    $url = 'https://docs.google.com/forms/u/0/d/e/1FAIpQLSfXzCyr1LcFdvuUokPGdJxBPipcRA1ylhgZ3_Rd67evmC3a4g/formResponse';

    $data = [
        'entry.1104703393' => $human, // 陣列中的資料撰寫方式，需要從網路上找到ｐｏｓｔ的資料，才有辦法撰寫正確，這邊算是最核心的部分。
        'entry.896135426' => $food, // 
        'entry.569157968' => $message, // 
    ];

    $ch = curl_init();//表示請給我一個初始化後的$ch
    curl_setopt($ch, CURLOPT_URL, $url);//決定要把資料送到哪裡，以這邊為例的話就是告訴CURLOPT_URL，要把資料送到哪裡去呢。

    // curl_setopt($ch, CURLOPT_POST, 0);//是否啟用 POST 請求。設置為 1 啟用，0 禁用用來把方法變回get


    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    //POST 請求的正文。可以是查詢字符串或數組，http_build_query則是把資料轉換成查詢字符串（簡單來說就是，把這個資料傳送成瀏覽器要的格式，此處的話就是轉換成post，因此這一行才是真正重要的內容，有了他的話，資料變成post了）
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   //把資料轉移回來
   
//    是否將結果返回，設定true就會返回false就是直接出現結果，簡單來說就是寫true就可以看到，正常的結果，維持在原本的頁面，但是如過血false，就會跳轉到這個連結過去的網頁內。

    $result = curl_exec($ch); //把資料傳過去，並且要求結果。
    curl_close($ch);//將ram釋放
}

if ($result === false) {
    $error = error_get_last();
    echo "Form submission failed: " . $error['message'];
} else {
    echo "Form submitted successfully!";
}

?>

<form method="post" action="">
   <label for="human">你是人類嗎</label> <input type="text" id="human" name="human" placeholder="是人類嗎" value="是"><br>

   <label for="food">請問你喜歡什麼東西</label> <input id="food" type="text" name="food" placeholder="food" value="食物"><br>
   
    <input value="測試" name="message" placeholder="Message"><br>
    <button type="submit">Submit</button>
</form>
