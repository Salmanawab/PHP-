<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body style="back ground-color:blue;">

<h1>PHP Operators:</h1>
<?php
echo "<h3>PHP Arithmetic Operators:</h3><br>";
//Two variables
$a = 10;  
$b = 6;
//perform Arithmetic operations
echo "Addition : $a + $b = ". ($a + $b) . "<br>";
echo "Subtraction : $a - $b = ". ($a - $b) . "<br>";
echo "Multiplication : $a * $b = ". ($a * $b) . "<br>";
echo "Division : $a / $b = ". ($a / $b) . "<br>";
echo "Modulus : $a % $b = ". ($a % $b) . "<br>";

echo "<h3>PHP Comperison operators:</h3><br>";
// Define two numerical variables
$a = 10;
$b = 20;
echo "Value 1: $a <br>";
echo "Value 2: $b <br><br>";
// Equal to (==)
if ($a == $b) {
    echo "$a is equal to $b.<br>";
} else {
    echo "$a is NOT equal to $b.<br>";
}
// Not equal to (!=)
if ($a != $b) {
    echo "$a is NOT equal to $b.<br>";
} else {
    echo "$ais equal to $b.<br>";
}
// Greater than (>)
if ($a > $b) {
    echo "$a is greater than $b.<br>";
} else {
    echo "$a is NOT greater than $b.<br>";
}
// Less than (<)
if ($a < $b) {
    echo "$a is less than $b.<br>";
} else {
    echo "$a is NOT less than $b.<br>";
}
// Greater than or equal to (>=)
if ($a >= $b) {
    echo "$a is greater than or equal to $b.<br>";
} else {
    echo "$a is NOT greater than or equal to $b.<br>";
}
// Less than or equal to (<=)
if ($a <= $b) {
    echo "$a is less than or equal to $b.<br>";
} else {
    echo "$a is NOT less than or equal to $b.<br>";
}
echo "<h3>PHP Assignment  operators:</h3><br>";
// Assignment operators
$number = 10;
echo "Initial value of number: $number<br>";
$number += 5; 
echo "After using += operator: $number<br>";
$number -= 3; 
echo "After using -= operator: $number<br>";
$number *= 2; 
echo "After using *= operator: $number<br>";
$number /= 4; 
echo "After using /= operator: $number<br>";
$number %= 4; 
echo "After using %= operator: $number<br>";

echo "<h3>PHP Logical operators:</h3><br>";
// Define Boolean variables
$c = "true";
$d = "false";
$e = "true";
echo "Initial values:<br>";
echo "Value1: $c<br>";
echo "Value2: $d<br>";
echo "Value3: $e<br><br>";
// Logical AND (&&)
if ($c && $d) {
    echo "Logical AND: varc AND var2 is TRUE.<br>";
} else {
    echo "Logical AND: varc AND var2 is FALSE.<br>";
}
// Logical OR (||)
if ($c || $d) {
    echo "Logical OR:  OR vard is TRUE.<br>";
} else {
    echo "Logical OR: c OR vard is FALSE.<br>";
}
// Logical NOT (!)
if (!$d) {
    echo "Logical NOT: vard is FALSE, so !var2 is TRUE.<br>";
} else {
    echo "Logical NOT: vard is TRUE, so !var2 is FALSE.<br>";
}
// Logical XOR (exclusive OR)
if ($c XOR $d) {
    echo "Logical XOR: vare XOR varc is TRUE (only one of them is TRUE).<br>";
} else {
    echo "Logical XOR: vare XOR varc is FALSE (both are not exclusively TRUE).<br>";
}
// Complex Logical Condition
if (($c && $e) || $D) {
    echo "Complex Logical Condition: (varc AND vare) OR var2 is TRUE.<br>";
} else {
    echo "Complex Logical Condition: (varc AND vare) OR var2 is FALSE.<br>";
}


?>





</body>
</html>