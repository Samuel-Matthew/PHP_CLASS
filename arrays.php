<?php

//index array
$fruits = ['mango', 'banana', 'orange', 'apple'];

echo $fruits[2];

// var_dump($fruits);
echo '<br>';


//associative array uses name keys
$person = [
    'name' => 'John',
    'age' => 20,
    'city' => 'New York',
];

echo $person['name'];

echo '<br>';

//multi-dimensional array

$students = [
    ['John',20,'math'],
    ['david',35,'english'],
    ['John',20,'science'],

];

var_dump($students[2]);

echo '<br>';


// Create an array of 5 countries and print each one using foreach.



$countries = ['Nigeria', 'Burkina Faso', 'Ghana', 'Togo', 'Chad'];

echo $countries[0];
echo '<br>';

echo $countries[1];
echo '<br>';

echo $countries[2];
echo '<br>';

echo $countries[3];
echo '<br>';

echo $countries[4];

echo '<br>';

// Activity 5: Associative Arrays

// Create an associative array for yourself with keys: name, age, hobby.
// Print them out.

$myself = [
    'name' => 'Samuel',
    'age' => 70,
    'hobby' => 'eating',
];

echo $myself['name'];

echo $myself['age'];

echo $myself['hobby'];

echo '<br>';


// Activity 6: Multidimensional Arrays

// Create a 2D array of 3 students with their name, age, and favorite food.
// Print the name and favorite food of the second student.

$studentts = [
    [
        'samuel',30,'whitesoup'
    ],
    [
        'destiny',45,'afang'
    ],
    [
        'david',67,'rice'
    ],
];

echo $studentts[1][0];
echo $studentts[1][2];

echo '<br>';

//array functions

//sort() - sorts an array in ascending order
$number = [3,4,7,9,1,2];

sort($number);
print_r($number);

echo '<br>';

//rsort() - sorts an array in descending order
rsort($number);
print_r($number);

echo '<br>';


//ksort() - sorts an associative array by key in ascending order
$ages = [
    'samuel' => 30,
    'david' => 45,
    'destiny' => 67,
];

ksort($ages);
print_r($ages);
echo '<br>';


//merging arrays
$array1 = ['sam','goat','weed'];
$array2 = ['dam','red','meat'];
$merged = array_merge($array1, $array2);
print_r($merged);

echo '<br>';

//count() - counts the number of elements in an array
echo count($merged);

echo '<br>';

// in_array() - checks if a value exists in an array
$fruits = ['mango', 'banana', 'orange', 'apple', 'grape'];
if(in_array('banana', $fruits)){
    echo 'banana is in the array';
} else{
    echo 'banana is not in the array';
}
echo '<br>';


//array_pop() - removes the last element from an array
array_pop($fruits);
print_r($fruits);
echo '<br>';

//array_shift() - removes the first element from an array
array_shift($fruits);
print_r($fruits);
echo '<br>';


//array_push() - adds an element to the end of an array
array_push($fruits, 'okro');
print_r($fruits);

echo '<br>';

//array_unshift() - adds an element to the beginning of an array
array_unshift($fruits, 'pear', 'peach');
print_r($fruits);





