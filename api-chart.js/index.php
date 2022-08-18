<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>currency</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- BS4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FRR9P3GS2E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-FRR9P3GS2E');
    </script>


    <style>
        body,
        html {
            min-width: 650px;
            /* overflow: hidden; */
        }

        .navbar {
            min-width: 650px;
        }

        li a {
            color: white;
        }

        .pic {
            position: relative;
        }

        .opt {
            position: absolute;
            font-size: 18px;
            left: 30px;
            top: -15px;
        }

        .footer div {
            line-height: 2.5;
        }

        @media screen and (max-width: 1200px) {
            .opt {
                position: absolute;
                font-size: 18px;
                left: 0px;
                top: 350px;
            }
        }

        @media screen and (max-width: 768px) {
            .opt {
                position: absolute;
                font-size: 16px;
                left: 0px;
                top: -10px;
            }
        }

        @media screen and (max-width: 600px) {
            .opt {
                position: absolute;
                font-size: 16px;
                /* bottom: 0px;
                    top: 0; */
                margin: auto;
            }
        }
    </style>
</head>

<body>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg  bg-dark  fixed-top">
        <a class="navbar-brand text-white" href="#">歷史匯率</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li> -->
                <li class="nav-item active">
                    <a class="nav-link" href="https://rate.bot.com.tw/xrt?Lang=zh-TW">臺灣銀行</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.esunbank.com.tw/bank/personal/deposit/rate/forex/foreign-exchange-rates">玉山銀行</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.taishinbank.com.tw/TSB/personal/deposit/lookup/realtime/">台新銀行</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.megabank.com.tw/personal/foreign-service/forex">兆豐銀行</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://bank.sinopac.com/MMA8/bank/html/rate/bank_ExchangeRate.html">永豐銀行</a>
                </li>
                <!-- <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li> -->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
        </div>
    </nav>



    <!-- side menu  -->



    <h3>匯率計算機</h3>


    <!-- main -->
    <!-- banner -->
    <!-- 歷史匯率走勢 -->
    <div class="container-fluid mt-5">
        <div class="pic">
            <!-- chart -->
            <div class="chart col d-flex justify-content-center">
                <canvas id="myChart"></canvas>
            </div>
            <!-- coin 幣別 -->
            <div class="opt">
                <select id="currency" class=""></select>
            </div>
        </div>
        <h3 class="text-center">歷史匯率資料</h3>
        <p>美金/單位</p>
        <table id="table_id" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>年度</th>
                    <th>新台幣</th>
                    <th>人民幣</th>
                    <th>日圓</th>
                    <th>韓元</th>
                    <th>新加坡元</th>
                    <th>歐元</th>
                    <th>英鎊</th>
                    <th>澳幣</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>
        </table>
    </div>




    <!-- footer -->
    <div class="container-fluid p-5 bg-dark text-white text-center footer">
        <div class="row">
            <div class="col">
                <div>資料來源：中央銀行</div>
                <div>勞動部OAS標準之API說明文件：https://apiservice.mol.gov.tw/OdService/doc/v3.json。 </div>
                <div>勞動部開放資料Open API 頁面：https://apiservice.mol.gov.tw/OdService/openapi/OAS.html。</div>
            </div>
        </div>
    </div>



    <!-- 先載入 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- datatable -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <!-- CHART.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // calculator
    </script>


    <script>
        let yearArr = new Array();
        let coinArr = new Array();
        let c = ['新台幣', '人民幣', '日圓', '韓元', '新加坡元', '歐元', '英鎊', '澳幣']
        $.get("./js/A17000000J-030185-NxT.json", (res) => {

            //取出年分
            console.log(res);
            res.forEach(item => {
                if (yearArr.indexOf(item['年度']) == -1) {
                    yearArr.push(item['年度'])
                }
            })

            res.forEach(item => {

                if (coinArr.indexOf(item['新台幣']) == -1) {
                    coinArr.push(parseInt(item['新台幣']))
                }
            })

            makeChart(yearArr, '新台幣匯率', coinArr)
            // 全域變數
            currency(c)


            // console.log(c);
            $('#currency').on("change", (e) => {


                    // $("canvas#myChart").remove();
                    // $("div.chart").append('<canvas id="myChart" class="animated fadeIn"></canvas>');

                    let title = $(e.target).val() + '匯率'
                    // let selectCurrency = $(e.target).val()
                    // console.log(selectCurrency);

                    coinArr.length = 0;

                    res.forEach(item => {

                        if (coinArr.indexOf(item[$(e.target).val()]) == -1) {
                            coinArr.push(parseFloat(item[$(e.target).val()]))
                        }
                    })
                    console.log(coinArr);

                    makeChart(yearArr, title, coinArr);

                }

            )
        })


        function currency(array) {
            // console.log(c);

            let option = "";
            array.forEach(c => {
                option = option + `<option value='${c}'>${c}</option>`
            })
            $("#currency").html(option)
            // console.log(option);
        }



        let myChart

        function makeChart(yearArr, title, coinArr) {
            let ctx = document.getElementById('myChart');

            if (myChart) {
                myChart.destroy();
            }
            // const ctx1 = document.getElementById('myChart1');
            // const ctx2 = document.getElementById('myChart2');
            myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    // labels: ['2012-08', '2013-08', '2014-08', '2015-08', '2016-08', '2017-08', '2018-08', '2019-08', '2020-08', '2021-08'],
                    labels: yearArr,
                    datasets: [{
                        label: title,
                        // data: [3.89, 4.63, 4.65, 5.37, 5.33, 6.08, 7.09, 8.26, 9.02, 11.27, 11.63],
                        data: coinArr,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 3
                    }]
                },

                options: {
                    scales: {
                        y: {
                            beginAtZero: false
                        }
                    },
                    indexAxis: 'x',

                }

            });


        }
    </script>

    <!-- datatable js -->
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "get",
                url: "./js/A17000000J-030185-NxT.json",
                dataType: 'json',
                success: function(result) {
                    data = result;
                    // console.log('data', data);

                    for (let i = 0; i < data.length; i++) {
                        $('tbody').append(`
    <tr>
        <td>${1997 + i}</td>
        <td>${data[i]['新台幣']}</td>
        <td>${data[i]['人民幣']}</td>
        <td>${data[i]['日圓']}</td>
        <td>${data[i]['韓元']}</td>
        <td>${data[i]['新加坡元']}</td>
        <td>${data[i]['歐元']}</td>
        <td>${data[i]['英鎊']}</td>
        <td>${data[i]['澳幣']}</td>
    </tr>
    `);
                    }

                    $('#table_id').DataTable();
                }
            })
        })
    </script>
</body>

</html>