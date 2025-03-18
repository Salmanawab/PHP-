<?php
echo "<pre>";
echo "<h1>TASK 1-PART-1</h1>";
echo "<h2>ARRAYS IN PHP:</h2>";
$numbers= array("10","20","16","40","38","66","6","90","6","99");

echo "<b>Original array:</b><br>";
print_r($numbers);
$sum = array_sum($numbers);
echo "<b>Sum of all numbers:</b> $sum";

echo"<br>";
$uniqueNumbers = array_unique($numbers);
echo "<b>Array after removing duplicates:</b><br>";
print_r($uniqueNumbers);
$max = max($numbers);
$min = min($numbers);

echo "<b>Maximum value:</b>$max"."<br>";
echo "<b>Minimum value:</b> $min";
echo "<br>";

// Sort the array in ascending order and print it
sort($numbers);
echo "<b>Sorted array (ascending order):</b><br>";
print_r($numbers);
echo "<h1>TASK 1-PART-2</h1>";
echo "<h2>ARRAYS IN PHP:</h2>";

// Associative array of employees and their salaries
$employees = [
    "Ali" => 50000,
    "Rehman" => 60000,
    "Farooq" => 45000,
    "Sajjad" => 70000,
    "Asad" => 55000
];
// Sort the array by salary in ascending order
asort($employees);
echo "<b>Sorted by salary (ascending order):</b><br>";
print_r($employees);

// Sort the array by employee names in descending order
krsort($employees);
echo "<b>Sorted by employee names (descending order):</b><br>";
print_r($employees);

// Display the employee with the highest salary
$highestSalaryEmployee = array_search(max($employees), $employees);
$highestSalary = max($employees);
echo "<b>Employee with the highest salary:</b> $highestSalaryEmployee (Salary: $highestSalary)<br>";
echo "<h1>TASK 1-PART-3</h1>";
echo "<h2>ARRAYS IN PHP:</h2>";
$books = [
    [
        "Title" => "Book One",
        "Author" => "Hafiz rehman",
        "Price" => 2000
    ],
    [
        "Title" => "Book Two",
        "Author" => "Ali",
        "Price" => 3000
    ],
    [
        "Title" => "Book Three",
        "Author" => "Ibrar",
        "Price" => 4000
    ]
];

$books[1]["Price"] = 28;

foreach ($books as $book) {
    echo "<b>Title:</b> " . $book["Title"] . "<br>";
    echo "<b>Author:</b> " . $book["Author"] . "<br>";
    echo "<b>Price:</b> kpr" . $book["Price"] . "<br><br>";
}

?>


