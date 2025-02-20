<?php
//Array Functions

//Declaration of array
$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];




// Printing of functions
echo '<pre>';
//count(params) function return the number of element in an array.
    //var_dump(count($users));
echo '</pre>';

//sort(params) function return the sorted value in ascending order
sort($users);

echo '<pre>';
    //var_dump($users);
echo '</pre>';

//rsort(params) function return the sorted value in descending order
rsort($ids);
rsort($users);

echo '<pre>';
    //var_dump($ids);
    //var_dump($users);
echo '</pre>';

//array_push(params) function inserts element at the end of the array
array_push($ids, 100);
array_push($users, 'user4');

echo '<pre>';
    //var_dump($users);
echo '</pre>';

//array_pop(params) function removes the last element from an array
array_pop($ids);
array_pop($users);

echo '<pre>';
    //var_dump($ids);
echo '</pre>';

//array_shift(params) function removes the first elemet from an array 
array_shift($ids);
array_shift($users);

echo '<pre>';
    //var_dump($users);
echo '</pre>';

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

array_unshift($ids, 200);
array_unshift($users, 'user5');

echo '<pre>';
    //var_dump($users);
echo '</pre>';

$ids = [5, 5, 5, 5, 5, 5];
$users = ['user2', 'user1', 'user3'];

//array_splice(params) return selected parts from an array
$ids2 = array_slice($ids, 1, 3);

echo '<pre>';
    //var_dump($ids2);
echo '</pre>';

//array_sum() return the sum of the number from the array
$output = 'Sum of IDS: ' . array_sum($ids);
//echo $output;

//array_search() search an array fro a value and return the index of the number
$output = 'User 2 is at index: ' . array_search('user1', $users);
//echo $output;

// The explode() function breaks a string into an array

$tags = 'tech,code,programming';

$tagsArr = explode(',', $tags);

echo '<pre>';
    //var_dump($tagsArr);
echo '</pre>';

// The implode() function returns a string from the element of an array
$output = implode(',', $users);
echo $output;

?>