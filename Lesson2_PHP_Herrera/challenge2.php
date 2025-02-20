<?php 

$colors = ['red', 'blue', 'green', 'yellow'];

sort($colors);
array_push($colors, 'purple');
array_push($colors, 'orange');
array_unshift($colors, 'Red Apple');

$colors[2] = 'Green mango';
print_r($colors)
?>