<?php
include "../part/head.php";
?>

<style>
  .top-bar {
    background-color: transparent;
  }
</style>



<div class="sbs-slider">
  <div class="slides">
    <div style="background-image:url(../resource/img/main-slide-1.jpg);" class="active"></div>
    <div style="background-image:url(../resource/img/main-slide-2.jpg);">
      <div class="center">
        <div class="profile">
          <ul>
            <li>profile</li>
            <li>이름</li>
            <li>나이</li>
            <li>번호</li>
            <li>이메일</li>
            <li>자격증</li>
            <li>주소</li>
          </ul>
        </div>
        
      </div>
      <div style="color:white;"class="heart">
          <i class="far fa-heart"></i>
      </div>
    </div>
    <div style="background-image:url(../resource/img/main-slide-3.jpg);">
      <div class="center">내용3</div>
    </div>
  </div>


  <div class="side-bars">
    <div>
      <span>
        <i class="fa fa-angle-left" aria-hidden="true"></i>
      </span>
    </div>
    <div>
      <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
    </div>
  </div>
</div>


<?php
include "../part/foot.php";
?>