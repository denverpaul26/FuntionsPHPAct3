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
            return "Invalid Operation";
    }
}

echo calculate(a: 10, b: 5, command: 'add') . "<br>";
echo calculate(a: 20, b: 10, command: 'subtract'). "<br>";
echo calculate(a: 5, b: 2, command: 'multiply'). "<br>";
echo calculate(a: 7, b: 2, command: 'divide');

$str = "WebSystemTechnologiesIT204"

?>