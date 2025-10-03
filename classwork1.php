<?php

// Voting Age Checker (If…Else)

// Write a PHP program that asks for a person’s age (store it in a variable).

// If the age is 18 or above, print "You are eligible to vote."

// Otherwise, print "Sorry, you are too young to vote.

$age = 20;
if ($age >= 18) {
    echo "You are eligible to vote.";
} else {
    echo "Sorry, you are too young to vote.";
}

echo '<br>';

// Create an array of items in a shopping basket: ["Bread", "Milk", "Eggs", "Butter"].

// Use a foreach loop to print each item like this:
// "You bought Bread", "You bought Milk", etc.

echo '<br>';

$basket = ["Bread", "Milk", "Eggs", "Butter"];

foreach($basket as $food){
    echo "You bought $food<br>";
}


// Create an array of 5 students’ scores.

// Print each score using foreach.

// Use a for loop to calculate the total and average score.

// Print the result.

echo '<br>';

$scores = [50,67,54,32,43];

foreach($scores as $score){
    echo "$score<br>";
}

echo '<br>';
$total = 0;
for ($i=0; $i < count($scores); $i++) { 
    $total += $scores[$i];
}
echo "Total score is $total<br>";

echo' <br>';

$average = $total / count($scores);
echo "Average score is $average<br>";

echo' <br>';



// Create an array of 5 fruits: ["Mango", "Apple", "Banana", "Orange", "Grapes"].

// Sort the array in ascending order and print it.

// Check if "Banana" is in the array (using in_array()), and print a message if found.

$fruits = ["Mango", "Apple", "Banana", "Orange", "Grapes"];

sort($fruits);
print_r($fruits);
echo '<br>';


echo' <br>';
if(in_array('banana', $fruits)){
    echo 'banana is in the array';
} else{
    echo 'banana is not in the array';
}
echo '<br>';
echo '<br>';



// 6. Favorite Colors (Adding & Removing)

// Create an array of colors: ["Red", "Blue"].

// Add "Green" at the end.

// Add "Yellow" at the beginning.

// Remove the last color.

// Print the final array.

$colors = ["Red", "Blue"];
print_r($colors);
echo' <br>';


array_push($colors, "Green");
print_r($colors);
echo' <br>';


array_unshift($colors, "Yellow");
print_r($colors);
echo' <br>';


array_pop($colors);
print_r($colors);

echo '<br>';

// 7. Attendance List (Counting)

// You have an array of students:

// $students = ["Alice", "Bob", "Clara", "Daniel", "Eva"];

// Print the total number of students using count().

$students = ["Alice", "Bob", "Clara", "Daniel", "Eva"];
echo "Total number of students is " . count($students);
echo '<br>';

// 8. Merge Shopping Lists (Merging Arrays)

// Create two arrays:

// $list1 = ["Bread", "Butter"]

// $list2 = ["Eggs", "Milk"]
// Merge them into one array called $shoppingList and print it.

$list1 = ["Bread", "Butter"];
$list2 = ["Eggs", "Milk"];
$shoppingList = array_merge($list1, $list2);
print_r($shoppingList);

echo' <br>';
echo' <br>';





// 9. Sorting Names (Sorting)

// Create an array of names: ["John", "Alice", "Bob", "David"].

// Sort them alphabetically using sort() and print.

// Then sort them in reverse using rsort() and print again.

$names = ["John", "Alice", "Bob", "David"];

sort($names);
print_r($names);

echo' <br>';
rsort($names);
print_r($names);

echo' <br>';




// 10. Student Marks (Associative Array + ksort)

// Create an associative array of students with their marks:

// $marks = ["John" => 70, "Alice" => 85, "Bob" => 60];

// Sort the array by student names using ksort().

// Print each student’s name with their mark.

$marks = ["John" => 70, "Alice" => 85, "Bob" => 60];
ksort($marks);
foreach($marks as $student => $mark){
    echo "$student scored $mark<br>";
}
echo '<br>';


