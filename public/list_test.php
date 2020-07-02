<?php
$dbConn = mysqli_connect("site10.blog.oa.gg", "site10", "sbs123414", "site10", 3306) or die("DB CONNECTION ERROR");

$cateItemId = $_GET['cateItemId'];

$sql = "
SELECT `name` 
FROM cateItem
WHERE id = {$cateItemId};
";

$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);


echo $row['name'];
?>