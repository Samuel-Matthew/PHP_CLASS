<?php


// You are building a shopping discount system for an online store.

// A customer buys items worth a certain amount.

// If the customer spends ₦50,000 or more AND is a registered member, they get a 20% discount.

// If the customer spends ₦30,000 or more OR has a coupon code, they get a 10% discount.

// Otherwise, no discount is applied.


👉 Write a PHP program that:

1. Accepts the total amount spent, a boolean (true/false) for membership status, and a boolean for coupon code availability.


2. Uses arithmetic operators to calculate the discounted price.


3. Uses logical operators (AND, OR) and comparison operators (>=) inside if-elseif-else statements to determine the discount.


4. Displays the final amount to be paid.
5.
$moneyspent = 10000;

if($moneyspent >= 10000){
    echo 'you qualify for free delivery';
}

echo '<br>';



// You are building a login system.
// 👉 Write a PHP program that checks if the entered password is "admin123".

// If it is correct, display “Login Successful”.

// If not, display “Incorrect Password”.
$password = "admin";

if ($password === 'admin123' ) {
    echo 'Login succesful';
} else {
    echo 'Incorrect password';
}

echo '<br>';


// /Scenario: An electricity billing system charges customers differently based on units consumed:

// 0–100 units: ₦20 per unit

// 101–200 units: ₦25 per unit

// Above 200 units: ₦30 per unit


// 👉 Write a PHP program that takes the units consumed and calculates the total bill using if-elseif-else.


$units = 200;

if ($units >= 0 && $units <= 100) {
    echo $units * 20;
} else if ($units >= 101 && $units <= 200) {
   echo $units * 25;
}
else if ($units >= 200) {
   echo $units * 30;
}

echo '<br>';




// You are building a shopping discount system for an online store.

// A customer buys items worth a certain amount.

// If the customer spends ₦50,000 or more AND is a registered member, they get a 20% discount.

// If the customer spends ₦30,000 or more OR has a coupon code, they get a 10% discount.

// Otherwise, no discount is applied.


// 👉 Write a PHP program that:

// 1. Accepts the total amount spent, a boolean (true/false) for membership status, and a boolean for coupon code availability.


// 2. Uses arithmetic operators to calculate the discounted price.


// 3. Uses logical operators (AND, OR) and comparison operators (>=) inside if-elseif-else statements to determine the discount.


// 4. Displays the final amount to be paid.


$amount = 30000;
$member = true;
$hasCoupon = true;

if ($amount >= 50000 && $member === true) {
    echo $amount * 20/100;
} else if ($amount >= 30000 || $hasCoupon === true) {
    echo $amount * 10/100;
}

