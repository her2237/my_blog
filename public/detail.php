<?php 
include "../part/head.php";
?>
<?php
$id = $_GET['id'];

$sql = "
SELECT * 
FROM article 
whre id = {$id}
";

$dbHost = "site10.blog.oa.gg";
$dbPort = 3306;
$dbId = 'site10';
$dbPw = 'sbs123414';
$dbName = 'site10';
$dbConn = mysqli_connect($dbHost,$dbPort,$dbId,$dbPw,$dbName)or die ("DB CONNECTION ERROR");

$rs = mysqli_query($dbConn, $sql);
$row = mysql_fetch_assoc($rs);
?>

<div class="con">
    번호 : <?=$row['id']?>
</div>
<div class="con">
    제목 : <?=$row['title']?>
</div>
<div id="origin1" style="display:none;"><?=$row['body']?></div>
<div id="viewer1" class="con"></div>

<script>
var editor1__initialValue = $('#origin1').html();
var editor1 = new toastui.Editor({
    el: document.querySelector('#viewer1'),
    height: '600px',
    initialValue: editor1__initialValue,
    viewer:true,
    plugins: [toastui.Editor.plugin.codeSyntaxHighlight]
 });
</script>



<?php
include '../part/foot.php';
?>