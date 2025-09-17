<?php
$age = 18;
if($age >= 18){
    echo "you are eligible to vote";
}

echo "<br>";

$Samuel = 500;

if ($Samuel >= 500) {
    echo "let's buy fab ";
}
else{
    echo "you're broke";
}

echo "<br>";

$score = 60;

if($score >= 80){
    echo 'grade A';
} else if ($score >= 70) {
    echo 'grade B';
}else{
    echo 'Fail';
}

echo "<br>";

// switch

$day = 'monday';

switch ($day) {
    case 'monday':
        echo 'today is monday';
        break;
    case 'tuesday':
        echo 'today is tueday';
        break;
    case 'wednesday':
        echo 'today is wednesday';
        break;
    case 'thursday':
        echo 'today is thursday';
        break;
    case 'friday':
        echo 'today is friday';
        break;
    case 'saturday':
        echo 'today is saturday';
        break;
    case 'sunday':
        echo 'today is sunday';
        break;
    
    default:
        echo 'invalid day';
        
        break;
}