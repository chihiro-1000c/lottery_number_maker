<?php

$abc = $_GET['abc'];
$number = $_GET['number'];
$name = $_GET['name'];

// 数字とアルファベットの割合を変えたい場合はここを編集
$str = "123456789123456789123456789abcdefghijkmnprstuvwxyz";

$result = [];
$count = 0;

$file_name = $abc . '_' . $name . '.csv';
$fp = fopen('data/' . $file_name, 'w');

while($count < $number) {

  $shuffled = str_shuffle($str);
  $strs = $abc . mb_substr($shuffled, 0, 6);

  if(!array_key_exists( $strs, $result )) {

    $result[$strs] = true;
    fwrite($fp, $strs . "\n");
    $count++;
  }

}

fclose($fp);

header('Location: index.php');
exit;