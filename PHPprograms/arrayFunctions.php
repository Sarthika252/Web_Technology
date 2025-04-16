<?php

// Sample array
$myArray = ["apple", "banana", "cherry", "date", "elderberry"];
$numbers = [5, 2, 8, 1, 9];
$associativeArray = ["name" => "John", "age" => 30, "city" => "New York"];

echo "<h2>Basic Array Information</h2>";
echo "Original Array: ";
print_r($myArray);
echo "<br>";

// count(): Get the number of elements in an array
$count = count($myArray);
echo "Number of elements in \$myArray: " . $count . "<br>";

// sizeof(): Alias of count()
$size = sizeof($myArray);
echo "Size of \$myArray (using sizeof()): " . $size . "<br>";

echo "<hr>";
echo "<h2>Adding and Removing Elements</h2>";

// array_push(): Add one or more elements to the end of an array
array_push($myArray, "fig", "grape");
echo "Array after array_push(): ";
print_r($myArray);
echo "<br>";

// array_pop(): Remove and return the last element of an array
$lastElement = array_pop($myArray);
echo "Last element removed (\$lastElement): " . $lastElement . "<br>";
echo "Array after array_pop(): ";
print_r($myArray);
echo "<br>";

echo "<hr>";
echo "<h2>Searching Arrays</h2>";

// in_array(): Checks if a value exists in an array
if (in_array("banana", $myArray)) {
    echo "'banana' exists in \$myArray.<br>";
} else {
    echo "'banana' does not exist in \$myArray.<br>";
}

// array_search(): Searches an array for a given value and returns the first matching key
$key = array_search("cherry", $myArray);
if ($key !== false) {
    echo "Key of 'cherry' in \$myArray: " . $key . "<br>";
} else {
    echo "'cherry' not found in \$myArray.<br>";
}

// array_key_exists(): Checks if the given key or index exists in an array
if (array_key_exists("age", $associativeArray)) {
    echo "Key 'age' exists in \$associativeArray.<br>";
} else {
    echo "Key 'age' does not exist in \$associativeArray.<br>";
}

echo "<hr>";
echo "<h2>Sorting Arrays</h2>";

echo "Original Numbers Array: ";
print_r($numbers);
echo "<br>";

// sort(): Sort an array in ascending order (re-indexes the array)
$numbersToSort = $numbers; // Create a copy to avoid modifying the original
sort($numbersToSort);
echo "Sorted numbers (ascending - sort()): ";
print_r($numbersToSort);
echo "<br>";

// rsort(): Sort an array in descending order (re-indexes the array)
$numbersToSort = $numbers;
rsort($numbersToSort);
echo "Sorted numbers (descending - rsort()): ";
print_r($numbersToSort);
echo "<br>";

echo "Original Associative Array: ";
print_r($associativeArray);
echo "<br>";

echo "<hr>";
echo "<h2>Other Useful Array Functions</h2>";

// array_reverse(): Return an array with elements in reverse order
$reversedArray = array_reverse($myArray);
echo "Reversed \$myArray: ";
print_r($reversedArray);
echo "<br>";

// array_keys(): Return all the keys or a subset of the keys of an array
$keys = array_keys($associativeArray);
echo "Keys of \$associativeArray: ";
print_r($keys);
echo "<br>";

// array_values(): Return all the values of an array
$values = array_values($associativeArray);
echo "Values of \$associativeArray: ";
print_r($values);
echo "<br>";

// array_merge(): Merge one or more arrays
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$mergedArray = array_merge($array1, $array2);
echo "Merged array (\$array1 and \$array2): ";
print_r($mergedArray);
echo "<br>";

?>