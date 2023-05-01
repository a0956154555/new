<?php

// echo "123";
$allImg = [
    [
        "cname" => "img1",
        "listName" => ["1", "2", "3", "4", "5", "6", "7"]
    ],
    [
        "cname" => "img2",
        "listName" => ["1", "2", "3", "4", "5", "6", "7"]
    ],
    [
        "cname" => "img3",
        "listName" => ["1", "2", "3", "4", "5", "6", "7"]
    ],
    [
        "cname" => "img4",
        "listName" => ["1", "2", "3", "4", "5", "6", "7"]
    ],
    [
        "cname" => "img5",
        "listName" => ["1", "2", "3", "4", "5", "6", "7"]
    ],
    [
        "cname" => "img6",
        "listName" => ["1", "2", "3", "4", "5", "6", "7"]
    ],
    [
        "cname" => "img7",
        "listName" => ["1", "2", "3", "4", "5", "6", "7"]
    ]
];
// echo $allImg[0]["cname"];
// echo $allImg[0]["listName"][0];
// ./img/img1/1.jpg


function createImg($dom)
{
    return '<img src="' . $dom . '" alt="" style="width: 60px; height: 60px;">';
}

$output = "";

foreach ($allImg as $index => $item) {
    $start = "./img/";
    $start = "./img/" . $item["cname"];
    $reset = $start;
    // echo $reset;
    foreach ($item["listName"] as $index2 => $item2) {
        $start =  $reset;
        $start .= "/" . $item2 . ".jpg";
        $output .= createImg($start);
    }
}
echo $output;
// ./img/img1/2.jpg

// function createImg($text)
// {
// return '<img src="' . $text . '" style="width:60px; height:60px;">';
// }
// function changeLine()
// {
// return '<br>';
// }
// $output = "";
// foreach ($allImg as $index => $item) {
// $start = "./img/" . $item["cname"];
// // echo $item["cname"];
// $resetName = $start;

// foreach ($item["listName"] as $index2 => $item2) {
// // echo $item2;
// $start = $resetName . "/" . $item2 . ".jpg";
// $output .= createImg($start);
// }
// $output .= changeLine();
// }

// echo $output;
