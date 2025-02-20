<?php 
    $numbers = [1, 2, 3, 4, 5];
    $total = 0;

    foreach($numbers as $number) {
        $total += $number;
    }
    echo "Sum array using foreach loop";
    echo "<br/>";
    echo $total;

    $sum = 0;
    $numbers2 = [1, 2, 3, 4, 5,6,7,8,9,19];
    for($i = 0; $i < count($numbers2); $i++ ){
        $sum += $numbers2[$i];
    }

    echo "<br/>";
    echo "Sum array using for loop";
    echo "<br/>";
    echo $sum;
?>