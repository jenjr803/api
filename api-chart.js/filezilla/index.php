<?php include_once "base.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portifolio</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- side_menu -->
    <link rel="stylesheet" href="css/side_menu.css">
    <!-- js -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/js.js"></script>
    <!-- slick -->
    <link rel="stylesheet" href="css/slick/slick.css">
    <link rel="stylesheet" href="css/slick/slick-theme.css">
    <script src="js/slick.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="css/home.css">


    <style>
    </style>
</head>

<body>
    <!-- header -->
    <div class="container-fluid header">
        <div class="row p-2">
            <div class="col-12 text-center">
                <a href="index.php">
                    <img src="icon/LOGO/logo2.png" style="width:150px">
                </a>
            </div>
            <div class="col-12 d-none d-lg-block">
                <div class="item d-flex justify-content-center">
                    <li>
                        <a href="#">HOME</a>
                    </li>
                    <li>
                        <a href="#ABOUT">ABOUT</a>
                    </li>
                    <li>
                        <a href="#POR">PORTFOLIO</a>
                    </li>
                    <li>
                        <a href="#EXP">EXPERIENCE</a>
                    </li>
                    <li>
                        <a href="#SKILL">SKILL</a>
                    </li>
                    <li>
                        <a href="back.php">LOGIN</a>
                    </li>
                </div>
            </div>
            <div class="col d-lg-none">
                <!-- sideMenu -->
                <?php
                include "front/f_sidemenu.php";
                ?>
                <!-- sideMenu end -->
            </div>
        </div>
    </div>


    <!-- header end -->
    <div class="container-fluid g-0">
        <!-- welcome -->
        <div class="section text-center mb-3">
            <div class="welcome">
                <h1><span>W</span><span>E</span><span>L</span><span>C</span><span>O</span><span>M</span><span>E</span>
                    <span>M</span><span>Y</span>
                    <span></span><span>P</span><span>A</span><span>G</span><span>E</span><span>!</span>
                </h1>
            </div>
        </div>
        <!-- welcome -->

        <!-- bs carousel -->
        <div class="row-cols-1">
            <?php
            include "front/f_banner.php";
            ?>
        </div>
        <!-- bs carousel end -->
    </div>

    <div class="container">
        <!-- about -->
        <div class="row d-flex">
            <div class="col-sm-12 col-lg-6 my-2">
                <div class="about d-flex justify-content-center" id="ABOUT">
                    <h2>
                        ABO
                        <br>
                        UT
                    </h2>
                </div>
            </div>
            <div class="about-txt col-sm-12 col-lg-6 mb-5">
                <div>
                    "你好!我是侯秉鈞，畢業於東華大學教育行政與管理學系，<br>
                    日本回台後，期望在職涯選擇上看到不同可能而踏入程式設計領域，
                    在泰山職訓局，接受920小時php資料庫網頁設計課程訓練，<br>
                    目前仍持續學習中。"
                </div>
            </div>
            <div class="line mb-3"></div>

        </div>
        <!-- about end -->

        <!-- por & ex-->
        <div class="row row-cols-1">
            <div class="col-lg-7 mb-5" id="POR">
                <?php
                include "front/f_portfolio.php";
                ?>
            </div>


            <div class="col-lg-5" id="EXP">
                <?php
                include "front/f_exp.php";
                ?>
            </div>
        </div>
        <!-- por & ex end -->

        <!-- skill -->
        <div class="row d-flex">
            <div class="col-lg-3 col-sm-12">
                <div class="skill d-flex justify-content-center" id="SKILL">
                    <h2>
                        SKI
                        <br>
                        LL
                    </h2>
                </div>
            </div>

            <div class="col-lg-auto"></div>

            <div class="col-lg-8 col-sm-12 slick">
                <?php
                include "front/f_slick.php";
                ?>
            </div>
            <div class="line mb-3"></div>
        </div>
        <!-- skill end -->
    </div>

    <!-- footer -->
    <div class="container-fluid row bg-dark text-light text-center g-0">
        <div class="col">
            <?php
            include "front/f_footer.php";
            ?>
        </div>
    </div>
    <!-- footer end-->



    <!-- bs -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- bs end-->
    <!-- slick -->
    <script>
        $('.slick-group').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 996,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
    <!-- slick end-->
    <!-- side_menu -->
    <script>
        $(".side-menu-group").hide()
        $(".ham-btn").click(function() {
            $(".ham-btn").toggleClass("open")
            $(".side-menu-group").slideToggle(300)
        })
    </script>
    <!-- side_menu end -->

</body>

</html>