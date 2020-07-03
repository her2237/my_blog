<?php
$sql = "
SELECT *
FROM article
ORDER BY id DESC
";

$dbHost = "site10.blog.oa.gg"; // 컴퓨터 까지 접근 가능
$dbPort = 3306; // 컴퓨터 안에 있는 MySQL에게 까지 접근가능
$dbId = 'site10';
$dbPw = 'sbs123414'; //' MySQL안으로 통과까지 가능
$dbName = 'site10'; // 알맞은 DB까지 접근가능

$dbConn = mysqli_connect($dbHost, $dbId, $dbPw, $dbName, $dbPort) or die("DB CONNECTION ERROR");


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
<link rel="stylesheet" href="resource/list_test.css">

<div class="con">
    <ul>
        <?php foreach ( $rows as $row ) { ?>
        <li><a href="detail.php?id=<?=$row['id']?>"><?=$row['title']?></a></li>
        <?php } ?>
    </ul>
</div>

<?php
include '../part/foot.php';
?> 