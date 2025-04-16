<?php

// Scalar Data Types (Hold a single value)

// Boolean
$isLoggedIn = true;
echo "Is logged in: " . var_export($isLoggedIn, true) . " (Data type: " . gettype($isLoggedIn) . ").<br>";

// Integer
$age = 30;
echo "Age: " . $age . " (Data type: " . gettype($age) . ").<br>";

// Float (Double)
$price = 99.99;
echo "Price: " . $price . " (Data type: " . gettype($price) . ").<br>";

// String
$name = "John Doe";
echo "Name: " . $name . " (Data type: " . gettype($name) . ").<br>";

// Compound Data Types (Can hold multiple values)

// Array
$colors = ["red", "green", "blue"];
echo "Colors: " . print_r($colors, true) . " (Data type: " . gettype($colors) . ").<br>";

// Object
class Person {
    public $firstName;
    public $lastName;

    public function __construct($first, $last) {
        $this->firstName = $first;
        $this->lastName = $last;
    }

    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }
}

$person = new Person("Jane", "Smith");
echo "Person: " . print_r($person, true) . " (Data type: " . gettype($person) . ").<br>";
echo "Full Name: " . $person->getFullName() . "<br>";

// Special Data Types

// Resource (Represents an external resource, like a database connection or file handle)
$fileHandle = fopen("example.txt", "w");
echo "File Handle: " . gettype($fileHandle) . "<br>";
fclose($fileHandle); // It's important to close resources

// NULL (Represents a variable with no value)
$city = null;
echo "City: " . var_export($city, true) . " (Data type: " . gettype($city) . ")<br>";



echo "--- Checking Data Types Using is_*() Functions ---<br>";

echo "\$isLoggedIn is boolean: " . (is_bool($isLoggedIn) ? "true" : "false") . "<br>";
echo "\$age is integer: " . (is_int($age) ? "true" : "false") . "<br>";
echo "\$price is float: " . (is_float($price) ? "true" : "false") . "<br>";
echo "\$name is string: " . (is_string($name) ? "true" : "false") . "<br>";
echo "\$colors is array: " . (is_array($colors) ? "true" : "false") . "<br>";
echo "\$person is object: " . (is_object($person) ? "true" : "false") . "<br>";
// Note: Checking for resource after it's closed might give unexpected results.
// It's generally better to check if a resource is valid before using it.
// echo "\$fileHandle is resource: " . (is_resource($fileHandle) ? "true" : "false") . "<br>";
echo "\$city is null: " . (is_null($city) ? "true" : "false") . "<br>";

?>