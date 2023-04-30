<?php
$allSize = ["160X600", "300X100", "300X250", "315X300", "338X235", "468X60", "728X90", "950X250"];
$allImg = [
    [
        "cname" => "brother-in-law",
        "langue" => ["english", "tai", "simple", "traditional"],
        "size" => $allSize
    ],
    [
        "cname" => "dog",
        "langue" => ["english"],
        "size" => $allSize
    ],
    [
        "cname" => "elves",
        "langue" => ["english", "tai"],
        "size" => $allSize
    ],
    [
        "cname" => "snow-girl",
        "langue" => ["simple", "traditional"],
        "size" => $allSize
    ],
    [
        "cname" => "ntr",
        "langue" => ["simple"],
        "size" => $allSize
    ],
];

echo $allImg[0]["cname"];

function createImg($text) {
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
echo $output;
?>

