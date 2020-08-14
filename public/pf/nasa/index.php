<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NASA</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;700;900&family=Roboto:wght@400;700;900&display=swap"
        rel="stylesheet">

    <!-- 폰트어썸 불러오기 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>
    <link rel="stylesheet" href="/pf/nasa/index.css">
   
    <script src="/pf/nasa/index.js"></script>
    <link rel="preload" as="video" href="https://her2237.github.io/img1/pf/space/Space%20-%202381.mp4">
    <link rel="preload" as="video" href="https://her2237.github.io/img1/pf/space/Space%20Ship%20-%203.mp4">

    



    <script>
        function PreloadJs__load(srcs, handleProcess, handleComplete) {
            var total = srcs.length;
            var loadedCount = 0;
            for (var i = 0; i < srcs.length; i++) {
                var id = 'PreloadJs__el__' + i;
                if (srcs[i].substr(-4).toLowerCase() == '.mp4') {
                    var video = document.createElement("video");
                    video.setAttribute("src", srcs[i]);
                    video.oncanplay = function () {
                        loadedCount++;
                        handleProcess(loadedCount, total);
                        if (loadedCount == total) {
                            handleComplete();
                        }
                    };
                } else {
                    var img = new Image();
                    img.src = srcs[i];
                    img.onload = function () {
                        loadedCount++;
                        handleProcess(loadedCount, total);
                        if (loadedCount == total) {
                            handleComplete();
                        }
                    }
                }
            }
        }

        function Loading__init() {
            var $progressBarStick = $('.loading .process-bar > .stick');
            PreloadJs__load(["https://her2237.github.io/img1/pf/space/Space%20-%202381.mp4",
                "https://her2237.github.io/img1/pf/space/Space%20Ship%20-%203.mp4"
            ], function (i, total) {
                var percent = Math.ceil(i * 100 / total);
                $progressBarStick.css('width', percent + '%');
            }, function () {
                var fakeLoadingSeconds = 1000; /*인트로 재생시간 바꾸기*/
                setTimeout(function () {
                    $('.page-1 > .bg > video').get(0).currentTime = 0;
                }, fakeLoadingSeconds - 1000);
                setTimeout(function () {
                    $('.loading').fadeOut(1000, function () {
                        $('.loading').remove();
                    });
                }, fakeLoadingSeconds);
            });
        }
        Loading__init();
    </script>
</head>

<body>
    <style>
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            z-index: 10;
        }

        .loading .process-bar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .loading .process-bar>.stick {
            height: 10px;
            width: 0;
            transition: width 0.2s;
            background-color: red;
        }

        .loading>video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            display: block;
            height: 100%;
            object-fit: cover;
        }

        .intro-logo {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 100;
        }
    </style>
    <div class="loading">
        <div class="preload-counter">
            <div class="process-bar">
                <div class="stick"></div>
            </div>
        </div>
        <div class="intro-logo">
            <img src="https://her2237.github.io/img1/pf/space/4f80c352f6a8ba221055fdc179dcf5e5%201.png
                  " alt="">
        </div>
        <video autoplay muted src="https://her2237.github.io/img1/pf/space/Space%20-%202381.mp4"></video>
    </div>

    <div class="my-slider-1 swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="page-1">
                    <div class="bg">
                        <video autoplay muted
                            src="https://her2237.github.io/img1/pf/space/Space%20Ship%20-%203.mp4"></video>
                    </div>
                    <div class="top-bar flex">
                        <div class="logo">
                            <img src="https://her2237.github.io/img1/pf/space/4f80c352f6a8ba221055fdc179dcf5e5 2.png"
                                alt="">
                        </div>
                        <div class="menu-bar flex flex-ai-c">
                            <ul class="flex flex-jc-e">
                                <li><a href="#">MISSION</a></li>
                                <li><a href="#">GALLERIES</a></li>
                                <li><a href="#">FOLLOW NASA</a></li>
                                <li><a href="#">AUDIENCES</a></li>
                            </ul>
                        </div>
                        <div class="menu-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="page-1">
                    <div class="bg">
                        <video autoplay muted
                            src="https://her2237.github.io/img1/pf/space/Rocket Launch - 236.mp4"></video>
                    </div>
                    <div class="top-bar flex">
                        <div class="logo">
                            <img src="https://her2237.github.io/img1/pf/space/4f80c352f6a8ba221055fdc179dcf5e5 2.png"
                                alt="">
                        </div>
                        <div class="menu-bar flex flex-ai-c">
                            <ul class="flex flex-jc-e">
                                <li><a href="#">MISSION</a></li>
                                <li><a href="#">GALLERIES</a></li>
                                <li><a href="#">FOLLOW NASA</a></li>
                                <li><a href="#">AUDIENCES</a></li>
                            </ul>
                        </div>
                        <div class="menu-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="page-1">
                    <div class="bg">
                        <video autoplay muted src="https://her2237.github.io/img1/pf/space/iss_docking_sim.mp4"></video>
                    </div>
                    <div class="top-bar flex">
                        <div class="logo">
                            <img src="https://her2237.github.io/img1/pf/space/4f80c352f6a8ba221055fdc179dcf5e5 2.png"
                                alt="">
                        </div>
                        <div class="menu-bar flex flex-ai-c">
                            <ul class="flex flex-jc-e">
                                <li><a href="#">MISSION</a></li>
                                <li><a href="#">GALLERIES</a></li>
                                <li><a href="#">FOLLOW NASA</a></li>
                                <li><a href="#">AUDIENCES</a></li>
                            </ul>
                        </div>
                        <div class="menu-icon">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</body>

</html>