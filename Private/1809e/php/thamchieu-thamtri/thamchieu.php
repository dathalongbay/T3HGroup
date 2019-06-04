<?php
$a = 1;
$b = 3;
$a = &$b;
//$b = 5;
$a = 7;
echo '<br>' . $a;
echo '<br>' . $b;