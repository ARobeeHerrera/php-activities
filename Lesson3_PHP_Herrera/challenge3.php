<?php 
 $array_student = [
    [
        'name' => "John",
        'grades' => [85, 90, 92, 88]
    ],
    [
        'name' => "Jane",
        'grades' => [95, 88, 91, 87] 
    ],
    [
        'name' => "Joe",
        'grades' => [75, 82, 79, 88]
    ]
];


foreach($array_student as $student) {
    echo $student['name'] . ": " . "Average Grade = ". (array_sum($student['grades']) / count($student['grades'])) ;
    echo "<br/>";
}

?>