<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nasa</title>

    <!-- 로딩화면 비디오 -->
    <link rel="preload" as="video" href="https://her2237.github.io/img1/pf/space/Space%20-%202381.mp4" type="video/mp4">
    <!-- 메인화면 비디오 -->
    <link rel="preload" as="video" href="https://her2237.github.io/img1/pf/space/Space%20Ship%20-%203.mp4"
        type="video/mp4">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="/pf/nasa/index.css">
    <script src="/pf/nasa/index.js"></script>
</head>

<body>


    <style>
        .loading-icon {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            z-index: 30;
        }

        .loading-icon.fancy-spinner {
            display: -webkit-box;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            width: 5rem;
            height: 5rem;
        }

        .loading-icon.fancy-spinner div {
            position: absolute;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
        }

        .loading-icon.fancy-spinner div.ring {
            border-width: 0.5rem;
            border-style: solid;
            border-color: transparent;
            -webkit-animation: 2s fancy infinite alternate;
            animation: 2s fancy infinite alternate;
        }

        .loading-icon.fancy-spinner div.ring:nth-child(1) {
            border-left-color: #676767;
            border-right-color: #676767;
        }

        .loading-icon.fancy-spinner div.ring:nth-child(2) {
            border-top-color: #676767;
            border-bottom-color: #676767;
            -webkit-animation-delay: 1s;
            animation-delay: 1s;
        }

        .loading-icon.fancy-spinner div.dot {
            width: 1rem;
            height: 1rem;
            background: #676767;
        }

        @-webkit-keyframes fancy {
            to {
                -webkit-transform: rotate(360deg) scale(0.5);
                transform: rotate(360deg) scale(0.5);
            }
        }

        @keyframes fancy {
            to {
                -webkit-transform: rotate(360deg) scale(0.5);
                transform: rotate(360deg) scale(0.5);
            }
        }
    </style>
    <div class="loading loading-icon fancy-spinner">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="dot"></div>
    </div>
    <div class="loading loading-logo-box flex flex-ai-c flex-jc-c">
        <video autoplay="autoplay" muted="muted" loop="loop"
            src="https://her2237.github.io/img1/pf/space/Space%20-%202381.mp4"></video>
        <img src="https://her2237.github.io/img1/pf/space/4f80c352f6a8ba221055fdc179dcf5e5%201.png" alt="">
    </div>

    <div class="page-1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

        <div class="top-bar flex">
            <div class="logo">
                <img src="https://her2237.github.io/img1/pf/space/4f80c352f6a8ba221055fdc179dcf5e5 2.png" alt="">
            </div>
            <div class="menu-bar flex flex-ai-c">
                <ul class="flex flex-jc-e">
                    <li><a href="/pf/nasa/detail.php">MISSION</a></li>
                    <li><a href="#">GALLERIES</a></li>
                    <li><a href="#">FOLLOW NASA</a></li>
                    <li><a href="#">AUDIENCES</a></li>
                </ul>
            </div>
        </div>

        <div class="menu-icon visible-on-sm-down flex">
            <a href="#" class="btn-icon-bar flex flex-ai-c flex-jc-e">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </a>
        </div>

        <div class="menu-page flex flex-jc-c flex-ai-c visible-on-sm-down">
            <div class="menu-box flex flex-ai-c">
                <ul class="list-box-1">
                    <li>
                        <a href="./index.php">Main
                        </a>
                    </li>
                    <li>
                        <a href="./detail.php">
                            Missions
                        </a>
                    </li>
                    <li>
                        <a href="#">Galleries

                        </a>
                    </li>
                    <li>
                        <a href="#">NASA TV

                        </a>
                    </li>
                </ul>
                <ul class="list-box-2">
                    <li>
                        <a href="#">About NASA
                        </a>
                    </li>
                    <li>
                        <a href="#">Downloads
                        </a>
                    </li>
                    <li>
                        <a href="#">Follow NASA
                        </a>
                    </li>
                    <li>
                        <a href="#">NASA Audience</a>
                    </li>
                </ul>

                <div class="sns-box">
                    <div class="menu-logo flex flex-jc-c">
                        <img src="https://her2237.github.io/img1/pf/space/nasa-logo.svg" alt="">
                    </div>
                    <ul class="list-1 flex flex-jc-c">
                        <li>
                            <a href="#">No Fear Act
                            </a>
                        </li>
                        <li>
                            <a href="#">FOIA</a>
                        </li>
                        <li>
                            <a href="#">Privacy </a>
                        </li>
                    </ul>
                    <ul class="list-2 flex flex-jc-c">
                        <li>
                            <a href="#">Office of Inspector General</a>
                        </li>
                        <li>
                            <a href="#">Office of Special Counsel </a>
                        </li>
                    </ul>
                    <ul class="list-3 flex flex-ai-c flex-jc-c">
                        <li>
                            <a href="#">Agency Financial Reports</a>
                        </li>
                        <li>
                            <a href="#">Contact NASA</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="slider-box-1">
            <div class="slick">
                <div>
                    <div class="item item-1">
                        <div class="progress-arrow-bar">
                            <div></div>
                        </div>
                        <video loop muted
                            src="https://her2237.github.io/img1/pf/space/Space%20Ship%20-%203.mp4"></video>
                        <div class="title">
                            <div class="tracking-in-expand-fwd-top">
                                <a href="#">Artemis
                                    Four Down, Four to Go:
                                    <br>
                                    Artemis I Rocket Moves Closer to Hot Fire Test</a>
                            </div>
                        </div>
                        <div class="section">
                            <div class="section__item">
                                <a href="/pf/nasa/detail.php" class="sm-link sm-link_padding-all sm-link1">
                                    <span class="sm-link__label">Detail More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="item item-2">
                        <div class="progress-arrow-bar">
                            <div></div>
                        </div>
                        <video loop muted src="https://her2237.github.io/img1/pf/space/Moon%20-%2030960.mp4"></video>
                        <div class="title">
                            <div class="tracking-in-expand-fwd-top">
                                <a href="#">Humanity’s Return to the Moon:
                                    <br>
                                    The How and Why of Artemis</a>
                            </div>
                        </div>
                        <div class="section">
                            <div class="section__item">
                                <a href="/pf/nasa/detail.php" class="sm-link sm-link_padding-all sm-link1">
                                    <span class="sm-link__label">Detail More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="item item-3">
                        <div class="progress-arrow-bar">
                            <div></div>
                        </div>
                        <video loop muted src="https://her2237.github.io/img1/pf/space/Rocket Launch - 236.mp4"></video>
                        <div class="title">
                            <div class="tracking-in-expand-fwd-top">
                                <a href="#">NASA Perseveres Through Pandemic,
                                    <br>
                                    Looks Ahead in 2020, 2021</a>
                            </div>
                        </div>
                        <div class="section">
                            <div class="section__item">
                                <a href="/pf/nasa/detail.php" class="sm-link sm-link_padding-all sm-link1">
                                    <span class="sm-link__label">Detail More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>