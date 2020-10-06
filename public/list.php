<?php
/// 전화연결이 성공했다면 이부분 실행됨
$sql = "
SELECT *
FROM article
ORDER BY id DESC
";

/// 전화번호 세팅
$dbHost = "heonaeyun.com"; // 컴퓨터 까지 접근 가능
$dbPort = 3306; // 컴퓨터 안에 있는 MySQL에게 까지 접근가능
$dbId = 'sbsst';
$dbPw = 'sbs123414'; //' MySQL안으로 통과까지 가능
$dbName = 'blog'; // 알맞은 DB까지 접근가능

/// 전화걸기
$dbConn = mysqli_connect($dbHost, $dbId, $dbPw, $dbName, $dbPort) or die("DB CONNECTION ERROR");

if ( isset($_GET['cateItemId']) == false ) {
  $_GET['cateItemId'] = 0;
}

$cateItemId = $_GET['cateItemId'];

/// 게시물 이름 바꾸기
$sql = "
SELECT name
FROM cateItem
WHERE id = '{$cateItemId}'
";

$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);
$cateItemName = $row['name'];


/// 상대방에게 할말 적기
$sql = "
SELECT *
FROM article
WHERE 1
AND displayStatus = 1
";

if ( $cateItemId != 0 ) {
  $sql .= "
  AND cateItemId = '{$cateItemId}'
  ";
}

$sql .= "
ORDER BY id DESC
";

/// 말하고 응답받기
$rs = mysqli_query($dbConn, $sql);
$rows = [];

while ( true ) {
    $row = mysqli_fetch_assoc($rs);
    if ( $row == null )  {
        break;
    }
    $rows[] = $row;
}

include '../part/head.php';
?>
<link rel="stylesheet" href="resource/list.css">

<h1 class="con"><?=$cateItemName?> 게시물 리스트</h1>

<div class="article con">
  <ul>
    <?php foreach ( $rows as $row ) { ?>
    <li>
      <a href="detail.php?id=<?=$row['id']?>" class="flex flex-ai-c flex-jc-sb">
        <div>
          <div class="title"><?=$row['title']?></div>
          <div class="summary"><?=$row['summary']?></div>
        </div>
        <?php if ( !empty($row['thumbImgUrl']) ) { ?>
        <img src="<?=$row['thumbImgUrl']?>" alt="">
        <?php } ?>
      </a>
    </li>
    <?php } ?>
  </ul>
</div>

<?php
include '../part/foot.php';
?>