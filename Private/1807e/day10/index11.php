<?php

// cach 1 :
$city = array('ha noi', 'ho chi minh', 'da nang');
echo "<pre>";
print_r($city);
echo "</pre>";
// cach 2
$city = array();
$city[] = 'ha noi';
$city[] = 'ho chi minh';
$city[] = 'da nang';
echo "<pre>";
print_r($city);
echo "</pre>";
// cach 3
$city = array();
$city[0] = 'ha noi';
$city[1] = 'ho chi minh';
$city[2] = 'da nang';
echo "<pre>";
print_r($city);
echo "</pre>";
// cach 4
$city = array();
$city[5] = 'ha noi';
$city[7] = 'ho chi minh';
$city['abc'] = 'da nang';
echo "<pre>";
print_r($city);
echo "</pre>";

echo '<br>' . $city['abc'];

// mang phuc tap
$country = array();
$country[] = array('ten_city' => 'ha noi', 'quan' => array('thanh xuan', 'hoan kiem'));
$country[] = array('ten_city' => 'hcm', 'quan' => array('quan 1', 'quan 2'));
$country[] = array('ten_city' => 'hcm', 'quan' => array('quan lien chieu', 'quan ngu hanh son'));
echo "<pre>";
print_r($country);
echo "</pre>";

echo "<pre>";
print_r($country[0]['quan'][0]);
echo "</pre>";
