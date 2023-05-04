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
  $month=Array("一月"=>31,"二月"=>28,"三月"=>31,"四月"=>30,"五月"=>31,"六月"=>30,"七月"=>31,"八月"=>31,"九月"=>30,"十月"=>31,"十一月"=>30,"十二月"=>31) ;
  $moveDay=0
      ?>
<?php foreach($month as $index=>$item){

  ?>
  <div class="calendar">
    <div class="calendar-header"><?php echo $index?>2023</div>
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
  if($moveDay==null){
    $moveDay=0;
  }
    for($j=1;$j<=$moveDay;$j++){
      echo"
      <div class='calendar-day'>
        <span></span>
     </div>";
    }
     for($i=1;$i<=$item;$i++){
      echo" <div class='calendar-day'>
              <span>$i</span>
            </div>"; 
     }
    //  31-28取得正常會移動幾天 ＋這個月已經移動幾天了％得知下一個月要移動幾天
     $moveDay=($moveDay+$item-28)%7;
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