<?php
include "../part/head.php";
?> 

<h1 class ="con">리스트</h1>

<ul>
    <?php for ( $i= 3; $i >=1; $i-- ){ ?>
    <li><a href="/detail.php?id=<?=$i?>"><?=$i?>번글</a></li>
    <?php } ?>
</ul>

<?php
include "../part/foot.php";
?> 