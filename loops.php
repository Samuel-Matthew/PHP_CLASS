<?php
// for loops

// for ($i=1; $i <= 5; $i++){
//     echo $i;
// }

// echo '<br>';
// //while loop - useed when we dont know the number of times the loop should run

// $k = 1;

// while ($k <= 10) {
//     echo $k;
//     $k++;
// }

// echo '<br>';
// // foreach loop

// $fruits = ['banana','apple','pear','pineapple'];

// foreach($fruits as $fruit){
//     echo "I like $fruit<br>"; 
// }



//classwork

//1
for($e = 1; $e <= 10; $e++){
    echo "$e<br>";
}

//2

$w = 10;
while ($w >= 1) {
    echo "$w<br>";
    $w--;
}


//3
$foods =['afang','okro','rice','beans', 'bread'];

foreach($foods as $food){
    echo $food;
}


//4

$scores = [50,67,54,32,43];

foreach($scores as $score){
    echo "$score<br>";
}

$total = 0;

for($h = 0; $h < count($scores); $h++){
    $total += $scores[$h];
}

 $average = $total / count($scores);
    echo $average;