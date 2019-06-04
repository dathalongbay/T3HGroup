<?php
require 'helper.php';
//require '../helper2.php';

$path = dirname(dirname(__FILE__)).'/helper2.php';
require $path;



echo '<br>' . tinhtong(3,5);

echo '<br>';

echo tinhhieu(5,3);