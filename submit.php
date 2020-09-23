<?php

$file = 'details.json';

$old = file_get_contents($file);
$arr = array();

if($old != ''){
  $arr = json_decode($old, true);
}

array_push($arr, $_POST);

$new = json_encode($arr, JSON_PRETTY_PRINT);

file_put_contents($file, $new);

header('Location: index.html');

?>
