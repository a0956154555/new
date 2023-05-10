<?php
// 表單提交函數
function submit_form($name, $email, $message) {
    // 設定表單 ID
    $form_id = "YOUR_FORM_ID_HERE";

    // 設定表單提交 URL
    $url = "https://docs.google.com/forms/d/e/" . $form_id . "/formResponse";

    // 構建 POST 請求的數據
    $data = array(
        "entry.1234567890" => $name,     // 姓名欄位的 entry ID
        "entry.0987654321" => $email,    // 電子郵件欄位的 entry ID
        "entry.2468013579" => $message   // 留言欄位的 entry ID
    );

    // 設定 cURL 請求選項
    $options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_SSL_VERIFYPEER => false
    );

    // 執行 cURL 請求
    $ch = curl_init($url);
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);
    curl_close($ch);

    // 返回請求結果
    return $response;
}

// 確認提交表單
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 獲取表單數據
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // 提交表單到 Google 表單中
    $result = submit_form($name, $email, $message);

    // 重定向到感謝頁面
    header("Location: thanks.html");
    exit;
}
?>
