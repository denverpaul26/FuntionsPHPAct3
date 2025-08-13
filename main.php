<?php 

function calculate($a, $b, $command): mixed {
    switch($command) {
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a - $b;
        case 'multiply':
            return $a * $b;
        case 'divide':
            return $a / $b;
        default:
            return "invalid operation";
    }
}

echo calculate(a: 10, b: 5, command: 'add') . "\n";
echo calculate(a: 20, b: 10, command: 'subtract'). "\n";
echo calculate(a: 20, b: 10, command: 'multiply'). "\n";
echo calculate(a: 20, b: 10, command: 'divide');


?>