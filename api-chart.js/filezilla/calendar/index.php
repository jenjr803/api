<?php
// 時區
date_default_timezone_set('Asia/Taipei');

// 三元運算子 若無設定年月 則使用系統時間年月
$ym = isset($_GET['ym']) ? $_GET['ym'] : date('Y-m');

// 當年月的第一天
$timestamp = strtotime($ym . '-01');

//系統時間
$today = date('Y-m-j');

//標題用時間顯示
$title = date('F Y', $timestamp);

// 設定前後一月的變數 以 $timestamp 為標準
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));

// $timestamp 當月有幾天
$day_count = date('t', $timestamp);

// $timestamp 當月第一天是星期幾 0~6
$week_day = date('w', $timestamp);

// 預設為空陣列
$weeks = [];
$week = '';

// 建立空白欄位( 當月第一天前需要幾格 ) str_repeat( 重複的內容 , 次數 )
$week = str_repeat('<td></td>', $week_day);

// $day 為當月一號開始 最大值為當月天數 
$week_day = $week_day + 1;
for ($day = 1; $day <= $day_count; $day++, $week_day++) {

    // 設定變數年月日格式
    $date = $ym . '-' . $day;

    // 若為當日 增加效果 若否則不變
    if ($today == $date) {
        $week = $week . '<td class="bg-warning">';
    } else {
        $week = $week . '<td>';
    }
    $week = $week . $day . '</td>'; // $day 印出日期 與 <td></td>格子

    // 當月最後一天或周日
    if ($week_day % 7 == 0 || $day == $day_count) {

        // 當月最後一天且不是周日
        if ($day == $day_count && $week_day % 7 != 0) {
            // 加入後方空白格
            $week = $week . str_repeat('<td></td>', 7 - $week_day % 7);
        }

        $weeks[] = '<tr>' . $week . '</tr>'; //當月最後一天或周日時 多加一列

        // print_r ($weeks);

        $week = '';
    }
}

?>
<!-- html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendar</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- css -->
    <link rel="stylesheet" href="./hw/style.css">

</head>

<body class="main">


    <!-- template -->
    <div class="container">
        <div class="row">
            <!-- Carousel left-->
            <div class="col-4">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/1011/1920/1080" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/1012/1920/1080"  class="d-block w-100" alt="...">
                        </div>
     
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel left end -->

            <!-- main calendar -->
            <div class="col-7">
                <header class="title">
                    <?= $title ?>
                </header>

                <nav>
                    <a href="?ym=<?= $prev; ?>">◀</a>
                    <a href="index.php">Today</a>
                    <a href="?ym=<?= $next; ?>">▶</a>
                </nav>


                <main class="calendar">
                    <table>

                        <th>Sun.</th>
                        <th>Mon.</th>
                        <th>Tue.</th>
                        <th>Wed.</th>
                        <th>Thu.</th>
                        <th>Fri.</th>
                        <th>Sat.</th>

                        <?php
                        foreach ($weeks as $week) {
                            echo $week;
                        }
                        ?>

                    </table>
                </main>
                <!-- main calendar end-->
            </div>

            <!-- streamer banner -->
            <div class="col-1">

                <!-- clock -->
                <div id="clock"></div>
                <script src="./hw/clock.js"></script>
                <!-- clock end -->

                <div class="twitch">
                    streamer
                </div>

            </div>
            <!-- streamer banner end -->


        </div>
    </div>


    <!-- template end-->




    <!-- CDN -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- CDN  end -->
</body>

</html>