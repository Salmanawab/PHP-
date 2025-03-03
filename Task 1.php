<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable and basic data manipulation(Juggling concept)</title>
</head>
<body style="back ground-color:light blue;">
    <?php
    echo "<b><h1>Personal Information:</h1><br>";
    $name="Salma";
    $age= 24;
    $gender= "female";
    $address= "kohat city pakistan";
    $degree= "BSCS";
    $dob= "3/3/1999";
    $contact="0303691409";
    echo "My name is .$name.and I am $age. year's old.I live in $address.<br>";
    echo "I am Graduated in $degree.<br>";
    echo "My date of birth.". $dob. "<br>";
    echo "My contact number is:" .$contact."<br>";
    echo "<b><h1>PHP script swapping two values( variable juggling):</h1><br>";
    // Declare two variables and assign them numeric values
    $a = 50;
    $b = 20;
   // Display the values before swapping
    echo "Before swapping:<br>";
    echo "Value of a: $a<br>";
    echo "Value of b: $b<br>";
    // Use a temporary variable to swap the values
    $temp = $a;
    $a = $b;
    $b = $temp;
    // Display the values after swapping
    echo "After swapping:<br>";
    echo "Value of a: $a<br>";
    echo "Value of b: $b<br>";
    echo "<b><h1>PHP different data Types get & var_dum:</h1><br>";
    // Declare variables with different data types
    $a = 42; 
    $b = 3.14; 
    $c = "Hello, World!"; 
    $d = true; 
    $e = array(1, 2, 3, 4, 5); 
    $f = null; 
    // Display variable values and data types using gettype() and var_dump()
    // Integer
    echo "Using gettype for a: " . gettype($a) . "<br>";
    echo "Using var_dump for a: ";
    var_dump($a);
    echo "<br><br>";
    
    // Float
    echo "Using gettype for b: " . gettype($b) . "<br>";
    echo "Using var_dump for b: ";
    var_dump($b);
    echo "<br><br>";
    
    // String
    echo "Using gettype for c: " . gettype($c) . "<br>";
    echo "Using var_dump for c: ";
    var_dump($c);
    echo "<br><br>";
    
    // Boolean
    echo "Using gettype for d: " . gettype($d) . "<br>";
    echo "Using var_dump for d: ";
    var_dump($d);
    echo "<br><br>";
    
    // Array
    echo "Using gettype for e: " . gettype($e) . "<br>";
    echo "Using var_dump for e: ";
    var_dump($e);
    echo "<br><br>";
    
    // NULL
    echo "Using gettype for f: " . gettype($f) . "<br>";
    echo "Using var_dump for f: ";
    var_dump($f);
    echo "<br><br>";
    
    
    ?>
    


</body>
</html>