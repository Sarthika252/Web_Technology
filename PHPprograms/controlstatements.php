<?php

echo "<h2>Conditional Statements (if, elseif, else)</h2>";

$age = 25;

if ($age >= 18) {
    echo "You are eligible to vote.<br>";
} else {
    echo "You are not eligible to vote yet.<br>";
}

$grade = 85;

if ($grade >= 90) {
    echo "Your grade is A.<br>";
} elseif ($grade >= 80) {
    echo "Your grade is B.<br>";
} elseif ($grade >= 70) {
    echo "Your grade is C.<br>";
} else {
    echo "Your grade is below C.<br>";
}

echo "<hr>";

echo "<h2>Switch Statement</h2>";

$day = "Wednesday";

switch ($day) {
    case "Monday":
        echo "Today is Monday.<br>";
        break;
    case "Tuesday":
        echo "Today is Tuesday.<br>";
        break;
    case "Wednesday":
        echo "Today is Wednesday.<br>";
        break;
    case "Thursday":
        echo "Today is Thursday.<br>";
        break;
    case "Friday":
        echo "Today is Friday.<br>";
        break;
    default:
        echo "It's the weekend!<br>";
}

echo "<hr>";

echo "<h2>Looping Statements (for loop)</h2>";

echo "Counting from 1 to 5:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br>";

echo "<hr>";

echo "<h2>Looping Statements (while loop)</h2>";

$count = 1;
echo "Counting while count is less than or equal to 3:<br>";
while ($count <= 3) {
    echo $count . " ";
    $count++;
}
echo "<br>";

echo "<hr>";

echo "<h2>Looping Statements (do-while loop)</h2>";

$counter = 1;
echo "Counting at least once using do-while:<br>";
do {
    echo $counter . " ";
    $counter++;
} while ($counter <= 2);
echo "<br>";

echo "<hr>";

echo "<h2>Looping Statements (foreach loop - for arrays)</h2>";

$colors = ["red", "green", "blue"];
echo "Iterating through the colors array:<br>";
foreach ($colors as $color) {
    echo $color . "<br>";
}

echo "<br>";

$person = ["name" => "Alice", "age" => 30, "city" => "New York"];
echo "Iterating through the person associative array:<br>";
foreach ($person as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

echo "<hr>";

echo "<h2>Break Statement</h2>";

echo "Looping and breaking when \$j equals 3:<br>";
for ($j = 1; $j <= 5; $j++) {
    if ($j == 3) {
        break; // Exit the loop immediately
    }
    echo $j . " ";
}
echo "<br>";

echo "<hr>";

echo "<h2>Continue Statement</h2>";

echo "Looping and skipping when \$k equals 3:<br>";
for ($k = 1; $k <= 5; $k++) {
    if ($k == 3) {
        continue; // Skip the current iteration and move to the next
    }
    echo $k . " ";
}
echo "<br>";

echo "<hr>";

echo "<h2>Go To Statement (Use with Caution)</h2>";

echo "Demonstrating the goto statement (use sparingly):<br>";
echo "Start<br>";
goto label1;
echo "This line will be skipped.<br>";

label1:
echo "Reached label1.<br>";
goto label2;
echo "This line will also be skipped.<br>";

label2:
echo "Reached label2.<br>";

echo "<hr>";

echo "<h2>Return Statement (in a function)</h2>";

function addNumbers($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum; // Return a value from the function
}

$result = addNumbers(5, 10);
echo "The sum of 5 and 10 is: " . $result . "<br>";

?>