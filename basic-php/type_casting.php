✅ What is Type Casting in PHP?
Type casting মানে হলো এক ডেটা টাইপকে জোরপূর্বক অন্য ডেটা টাইপে রূপান্তর করা। PHP-তে type casting করলে একটি ভ্যালু নির্দিষ্ট ডেটা টাইপে কনভার্ট হয়।

<?php
// PHP Type Casting Examples

# Integer Casting : যেকোনো number, string, boolean কে integer-এ কনভার্ট করা হয়। 
$val1 = "123.45";
$val2 = true;
$val3 = "abc";
echo "(int)'123.45' = " . (int)$val1 . "<br>";
echo "(int)true = " . (int)$val2 . "<br>";
echo "(int)'abc' = " . (int)$val3 . "<br>";


# Float Casting (float) : Integer, string, boolean → float এ কনভার্ট হয়।
$val4 = "3.14159";
$val5 = 42;
$val6 = false;
echo "(float)'3.14159' = " . (float)$val4 . "<br>";
echo "(float)42 = " . (float)$val5 . "<br>";
echo "(float)false = " . (float)$val6 . "<br>";

# String Casting (string) : Number, boolean, array → string এ কনভার্ট হয়।
$val7 = 100;
$val8 = true;
$val9 = 12.5;
echo "(string)100 = " . (string)$val7 . "<br>";
echo "(string)true = " . (string)$val8 . "<br>";
echo "(string)12.5 = " . (string)$val9 . "<br>";

# Boolean Casting (bool) : কোনো ভ্যালু true/false হয় কিনা সেটা নির্ধারণ করে।
$val10 = 0;
$val11 = "hello";
$val12 = "";
var_dump((bool)$val10); echo "<br>";
var_dump((bool)$val11); echo "<br>";
var_dump((bool)$val12); echo "<br>";

# Array Casting (array) : Any value কে array বানানো হয়।
$val13 = 100;
$val14 = "hello";
print_r((array)$val13); echo "<br>";
print_r((array)$val14); echo "<br>";

# Object Casting (object) : String, array, scalar → object হিসেবে কনভার্ট হয়।
$val15 = "hello";
$val16 = ["name" => "Alamin", "age" => 25];
$obj1 = (object)$val15;
$obj2 = (object)$val16;
print_r($obj1); echo "<br>";
print_r($obj2); echo "<br>";

# NULL Casting (unset) : কোনো ভ্যালু কে null বানানো হয় (❌ deprecated in PHP 8+)
$val17 = 100;
// $val17 = (unset)$val17;
var_dump($val17); echo "<br>";
?>
