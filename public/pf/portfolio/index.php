<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>포폴 디자인-1</title>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- 제이쿼리 불러오기 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- 아울 캐러셀 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.20/lodash.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>

    <link rel="stylesheet" href="/pf/portfolio/index.css">
    <link rel="stylesheet" href="/resource/font/font.css">
    <script src="/pf/portfolio/index.js"></script>
</head>

<body>

    <div class="bg-lines">
        <div class="lines">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="side-bar in-font">
        <ul>
            <li><a class="one-page-link" href="#page1">PROFILE</a></li>
            <li><a class="one-page-link" href="#page2">PROTFOLIO</a></li>
            <li><a class="one-page-link" href="#page3">CONTACT</a></li>
        </ul>
    </div>

    <div class="sections ">
        <div class="section section-1" data-one-page-link="page1">
            <div class="title-box">
                <div class="title">
                    <a href="#"> PROFILE</a>
                </div>
            </div>
            <div class="profile">
                <ul class="profile-box">
                    <div class="myprofile">
                        <div class="font-b">Profile</div>
                        <div class="font-korea">허내윤</div>
                        <div>1996.03.29</div>
                        <div>her2237@gmail.com</div>
                        <div>010.0000.0000</div>
                        <div class="font-korea">대전 서구 관저로 83</div>
                    </div>
                    <div class="eduction font-b">
                        <div class="font-b">Eduction</div>
                        <div>서일여자고등학교졸업</div>
                        <div>sbs컴퓨터아카데미 UXUI 과정수료</div>
                    </div>
                    <div class="certificate font-b">
                        <div class="font-b">Certificate</div>
                        <div class="font-korea">웹디자인기능사 필기합격</div>
                    </div>
                    <div class="skill">
                        <div class="font-b">Skill</div>
                        <div>HTML</div>
                        <div>CSS</div>
                        <div>JS</div>
                        <div>Photoshop</div>
                        <div>Illustrator</div>
                    </div>
                </ul>
            </div>
        </div>
        <div class="section">
            <div style="color:white; margin:0;" data-active-on-visible-on-func-name="middleBarPassed"
                data-active-on-visible-off-func-name="middleBarNoPassed" class="active-on-visible"
                data-active-on-visible-diff-y="-50vh"></div>
        </div>
        <div class="section section-2" data-one-page-link="page2">
            <div class="title-box">
                <div class="title">
                    <a href="#"> PORTFOLIO</a>
                </div>
            </div>
            <div class="portfolio">
                <div class="box-1 con">
                    <div class="list-box flex flex-jc-c">
                        <div class="img-box active-on-visible">
                            <img src="https://her2237.github.io/img1/pf/artworks/portfolio/nasa.jpg" alt="">
                        </div>
                        <div class="text-box">
                            <div class="number active-on-visible">
                                <div class="min-title">NASA</div>
                                <div class="detail-text">
                                    <div>
                                        기존
                                        - 중구난방으로 되었있는 메뉴들
                                        - 한눈에 보기 힘든 중요 소식들
                                        리뉴얼
                                        - 메뉴들은 한곳에 모아 한번에 볼수 있게 버튼 페이지 만듬
                                        - 메인소식들 몇가지를 골라 슬라이드로 배치
                                    </div>
                                </div>
                                <div class="btn-more">
                                    <div class="more">
                                        <a href="/pf/nasa">
                                            more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-1 con">
                    <div class="list-box flex flex-jc-c">
                        <div class="text-box">
                            <div class="number-1 active-on-visible">
                                <div class="min-title">ARTEMISE</div>
                                <div class="detail-text">
                                    <div>
                                        나사의 달에 관한 프로젝트 페이지인 artemis의 페이지 입니다
                                    </div>
                                </div>
                                <div class="btn-more">
                                    <div class="more">
                                        <a href="/pf/artemis">
                                            more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="img-box-1 active-on-visible">
                            <img src="https://her2237.github.io/img1/pf/artworks/portfolio/nasa.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="box-1 con">
                    <div class="list-box flex flex-jc-c">
                        <div class="img-box active-on-visible">
                            <img src="https://her2237.github.io/img1/pf/artworks/portfolio/bada.png" alt="">
                        </div>

                        <div class="text-box">
                            <div class="number active-on-visible">
                                <div class="min-title">BADA Flatform</div>
                                <div class="detail-text">
                                    해양과 관련된 IoT 기술들을 만드는 회사의 홈페이지 입니다.
                                </div>
                                <div class="btn-more">
                                    <div class="more">
                                        <a href="/pf/bada">
                                            more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-1 con">
                    <div class="list-box flex flex-jc-c">
                        <div class="text-box">
                            <div class="number-1 active-on-visible">
                                <div class="min-title">GMARKET SANS</div>
                                <div class="detail-text">
                                    지마켓에서 만든 다양한 한글폰트들을 만날수 있는 홈페이지 입니다.
                                </div>
                                <div class="btn-more">
                                    <div class="more">
                                        <a href="/pf/gmarket sans">
                                            more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="img-box-1 active-on-visible">
                            <img src="https://her2237.github.io/img1/pf/artworks/portfolio/g.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="box-1 con">
                    <div class="list-box flex flex-jc-c">
                        <div class="img-box active-on-visible">
                            <img src="https://her2237.github.io/img1/pf/artworks/portfolio/mile.png" alt="">
                        </div>
                        <div class="text-box">
                            <div class="number active-on-visible">
                                <div class="min-title NanumGothicCoding-Regular">밀알복지재단</div>
                                <div class="detail-text">
                                    교회에서 운영하는 교회복지재단 입니다.
                                </div>
                                <div class="btn-more">
                                    <div class="more">
                                        <a href="/pf/mile">
                                            more
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="box-1 con">
                    <div class="list-box flex flex-jc-c">
                        <div class="text-box">
                            <div class="number-1 active-on-visible">
                                <div class="min-title">WORLDVISION</div>
                                <div class="detail-text">
                                    세계의 도움이 필요한 아이들에게 후원해주고 도움을 주는 재단입니다.
                                </div>
                                <div class="btn-more">
                                    <div class="more">
                                        <a href="/pf/world">
                                            more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="img-box-1 active-on-visible">
                            <img src="https://her2237.github.io/img1/pf/artworks/portfolio/w.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="section section-3" data-one-page-link="page3">
        <div class="title-box">
            <div class="title">
                <a href="#"> CONTACT</a>
            </div>
        </div>
        <div class="contact-box">
            <form action="" name="sendEmailForm" onsubmit="sendEmailFormSubmit(this); return false;">
                <input type="hidden" name="receiverName" value="허내윤">
                <input type="hidden" name="receiverEmail" value="her2237@gmail.com">
                <div class="text-box">
                    <input type="text" name="senderName" placeholder="이름">
                    <br>
                    <input type="email" name="senderEmail" placeholder="email">

                    <textarea name="body"></textarea>

                    <input type="submit" value="send">
                    <input type="reset" value="cancel">
                </div>
            </form>
        </div>
    </div>
</body>

</html>