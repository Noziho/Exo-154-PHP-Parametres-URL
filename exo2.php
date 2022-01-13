<?php
$page = $_GET ['iteration'];
$page = intval($page);

for ($i = 0; $i <=10; $i++) {?>
    <a href="/exo2.php/?iteration=<?=$i?>">Lien <?=$i?></a><?php
}