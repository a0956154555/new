<?php
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

function createImg($text)
{
    return '<img src="' . $text . '">';
}
$output = "";
foreach ($allImg as $index => $item) {
    $start = "./img/" . $item["cname"];

    $resetName = $start;

    foreach ($item["listName"] as $listName) {
        $start = $resetName . "/" . $listName;
        $output .= createImg($start);
    }
}


?>

<!-- function createImg($text) {
    return '<img src="' . $text . '">';
}

$output = "";
foreach ($allImg as $index=>$item) {
    // $allImg[0][cname]
    echo $index;
    $srcText = "./img/" . $item["cname"];

    $resetName = $srcText;

    foreach ($item["langue"] as $lang) {
        $srcText = $resetName . "/" . $lang;
        $flashName = $srcText;

        foreach ($item["size"] as $size) {
            $srcText = $flashName . "/" . $size . ".gif";
            $output .= createImg($srcText);
        }
    }
}
echo $output; -->