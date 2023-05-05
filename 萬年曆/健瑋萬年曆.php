<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>May Calendar</title>
    <style>
        .calendar {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }

        .calendar-header {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 24px;
            font-weight: bold;
        }

        .calendar-day {
            width: 14.28%;
            height: 100px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            position: relative;
        }

        .calendar-day span {
            position: absolute;
            top: 5px;
            left: 5px;
            font-size: 20px;
            font-weight: bold;
        }

        .calendar-day .event {
            display: block;
            position: absolute;
            bottom: 5px;
            left: 5px;
            font-size: 14px;
            font-weight: bold;
        }

        .calendar-day .event:before {
            content: '';
            display: inline-block;
            height: 10px;
            width: 10px;
            margin-right: 5px;
            border-radius: 50%;
        }

        .calendar-day .event-birthday:before {
            background-color: #F44336;
        }

        .calendar-day .event-meeting:before {
            background-color: #4CAF50;
        }

        .calendar-day .event-holiday:before {
            background-color: #FFC107;
        }
    </style>
</head>

<body>
    <?php
    $cyear = $_GET["cyear"];

    // $cweight = $_GET["cweight"];
    // $cheight = $_GET["cheight"];
    // $bmi = number_format($cweight / ($cheight * $cheight), 1);
    // echo $cyear;
    // 要先明白閏年的規則 4年一潤 100年不潤 400年在潤一次

    /*
其表達式爲：1582年10月15日及以後用w=[y+(y/4)+(c/4)-2*c+(26*(m+1)/10)+d-1]（mod7）來計算；1582年10月4日及以前用w=[y+（y/4）+c/4-2*c+13*(m+1)/5+d+2]（mod7）來計算。
這裡的y爲年份的後兩位數、c爲年份的前兩位數、m爲月數（取值範圍爲3-14，每年的1月和2月視爲13和14）、d爲日序數、mod7代表除以7的正餘數。需要指出的是，當年份前或者後兩位數、月份值應用上式除以相應數值時
，要向下取整，確保商與除數之積不大於被除數。最後w取值如果爲0，則代表星期日；值爲1，代表星期一，就此類推。
    */

    /*
    W= (d+2*m+3*(m+1)/5+y+y/4-y/100+y/400)%7

原文網址：https://kknews.cc/news/avlkjl6.html
    */
    /*
    $test = ($lastDate + 2 * $lastMonth + 3 * ($lastMonth + 1) / 5 + $y + floor($y / 4) - floor($c / 4) - 2 * $c) % 7;
    */
    // $lastMonth = 12;
    // $lastDate = 31;
    // $y = substr($cyear, 2);
    // $c = substr($cyear, 0, 2);

    // $test = ($lastDate + 2 * $lastMonth + 3 * ($lastMonth + 1) / 5 + $y + floor($y / 4) - floor($c / 4) - 2 * $c) % 7;
    // echo $cyear . "的最後一天是" . $test;


    // 計算星期幾
    $cyearCount = $cyear - 1;
    $lastMonth = 12;
    $lastDate = 31;
    $test = (($lastDate + 2 * $lastMonth + 3 * ($lastMonth + 1) / 5 + $cyearCount + floor($cyearCount / 4) - floor($cyearCount / 100) + floor($cyearCount / 400)) % 7) + 1;


    echo "{$cyearCount}年12月31日是星期{$test}";
    $february = 28;
    if ($cyear % 4 == 0) {
        if (($cyear % 100 == 0 && $cyear % 400 == 0) || ($cyear % 100 != 0 && $cyear % 4 == 0)) {
            $february = 29;
            // echo "$cyear 年是閏年";
        } else {
            $february = 28;
            // echo "$cyear 年不是閏年";
        }
    } else {
        $february = 28;
        // echo "$cyear 不是閏年";
    }

    ?>
    <?php
    $month = array("一月" => 31, "二月" => $february, "三月" => 31, "四月" => 30, "五月" => 31, "六月" => 30, "七月" => 31, "八月" => 31, "九月" => 30, "十月" => 31, "十一月" => 30, "十二月" => 31);
    $moveDay = ($test % 7) + 1;
    ?>
    <?php foreach ($month as $index => $item) {

    ?>
        <div class="calendar">
            <div class="calendar-header"><?php echo $index, $cyear ?></div>
            <div style="color: red;" class="calendar-day">
                <span>日</span>
            </div>
            <div class="calendar-day">
                <span>一</span>
            </div>
            <div class="calendar-day">
                <span>二</span>
            </div>
            <div class="calendar-day">
                <span>三</span>
            </div>
            <div class="calendar-day">
                <span>四</span>
            </div>
            <div class="calendar-day">
                <span>五</span>
            </div>
            <div style="color: red;" class="calendar-day">
                <span>六</span>
            </div>
            <?php
            // 上個月結束在哪一天
            // 28 =4週
            // 29 ＝4週 1天
            // 30 ＝4週 2天
            // 31 ＝4週 3天
            if ($moveDay == null) {
                $moveDay = 0;
            }
            for ($j = 1; $j <= $moveDay; $j++) {
                echo "
      <div class='calendar-day'>
        <span></span>
     </div>";
            }
            for ($i = 1; $i <= $item; $i++) {
                echo " <div class='calendar-day'>
              <span>$i</span>
            </div>";
            }
            //  31-28取得正常會移動幾天 ＋這個月已經移動幾天了％得知下一個月要移動幾天
            $moveDay = ($moveDay + $item - 28) % 7;
            ?>
        </div>

    <?php

    }

    ?>


    <!-- <div class="event event-holiday">Holiday</div>

  <div class="event event-meeting">Meeting</div>

  <div class="event event-birthday">Birthday</div> -->



    <!-- 閏年的計算400年循環一次請試著結合2023的月曆 做出一個輸入年份後產生當年度的月曆 -->
</body>

</html>