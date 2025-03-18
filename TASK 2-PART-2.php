<?php
echo "<pre>";
echo "<h1>TASK 2-PART-1</h1>";
echo "<h1>Loops</h1>";
$students =[
    "Fatima" => 85,
    "Sana" => 42,
    "Kainat" => 78,
    "Sidra" => 91,
    "Farah" => 35,
];
print_r($students);
foreach ($students as $name => $marks) {
    echo "$name: $marks<br>";
}

$highestMarks = max($students);
$topStudent = array_search($highestMarks, $students);
echo "<b><br>Student with the highest marks:</b><br> $topStudent ($highestMarks)<br>";

echo "<b>Students who scored less than 50:</b><br>";
foreach ($students as $name => $marks) {
    if ($marks < 50) {
        echo "$name: $marks<br>";
    }
}
echo "<h1>TASK 2-PART-2</h1>";
echo "<h2> Fibonacci series</h2>";
$num1 = 0;
$num2 = 1;

echo "$num1<br>$num2<br>";

for ($i = 2; $i < 10; $i++) {
    $next = $num1 + $num2;
    echo "$next<br>";
    $num1 = $num2;
    $num2 = $next;
}
echo "<h1>TASK 2-PART-3</h1>";
echo "<h2> Table of three</h2>";
$n = 3;
$i = 1;

while ($i <= 10) {
    echo "$n x $i = " . ($n * $i) . "<br>";
    $i++;
}

?>