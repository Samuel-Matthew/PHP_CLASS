<?php

function cat(){
    echo 'meow meow';
}

cat();
echo '<br>';

function hey($name){
    echo "hello $name, welcome to PHP";
}

hey('samuel');

echo '<br>';

function add($a, $b){
    $sum = $a + $b;
    return $sum;
}

$results = add(10, 5);

echo $results;

