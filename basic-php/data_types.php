
# PHP Data Types (ডেটা টাইপস) :
-------------------------------
PHP একটি loosely typed language, অর্থাৎ PHP-তে ভেরিয়েবলের টাইপ ডিক্লেয়ার করতে হয় না — PHP নিজেই তা বুঝে নেয়।

PHP-তে মোট ৮ ধরনের ডেটা টাইপ আছে:

# Scalar Data Types (একক মানের ডেটা টাইপ) : স্কেলার মানে হলো একক মান যেটা শুধুমাত্র একটি মাত্র তথ্য ধারণ করে। PHP-তে মোট ৪টি Scalar Data Types রয়েছে ।
 1. Integer
 2. Float/Double
 3. String
 4. Boolean
 
# Compound Data Types (জটিল বা গঠিত টাইপ) :
 1. Array
 2. Object

# Special Data Types (বিশেষ টাইপ) :
 1. NULL 
 2. Resource


<<<<<<<<<<<<<<<<<<<<<<<<<<<<
✅ Scalar Data Types in PHP
>>>>>>>>>>>>>>>>>>>>>>>>>>>>
🔹 ১. Integer (পূর্ণসংখ্যা) : 
    >> Integer হচ্ছে এমন সংখ্যা যেটার মধ্যে দশমিক থাকে না। এটি ধনাত্মক বা ঋণাত্মক হতে পারে।
    >> 32-bit system: -2,147,483,648 to 2,147,483,647
    >> 64-bit system: অনেক বড় সংখ্যাও সাপোর্ট করে।
    >> দশমিক থাকলে সেটা integer হবে না।
<?php 
    $age = 25;
    $temperature = -10;
    $amount = 100000;

    echo gettype($age); // Output: integer
?>

🔹 ২. Float / Double (দশমিক সংখ্যা) : 
    >> Float টাইপ ব্যবহার হয় দশমিক সংখ্যার জন্য। একে Double ও বলা হয়।
    >> খুব ছোট বা বড় দশমিক মান scientific notation এ দেখা যায়: 1.2e3 = 1200
<?php 
    $price = 49.99;
    $weight = -65.75;

    echo gettype($price); // Output: double
?>

🔹 ৩. String (স্ট্রিং): 
    >> String মানে হলো অক্ষর বা শব্দের সমষ্টি। এটি ডাবল কোট ("") অথবা সিঙ্গেল কোট ('') এর মধ্যে থাকে।
    >> ডাবল কোটের মধ্যে ভেরিয়েবল ব্যবহার করলে তার মান দেখায়।
    >> সিঙ্গেল কোটের মধ্যে শুধুই টেক্সট হিসেবে দেখা যায়।
<?php 
    $name = "Alamin";
    echo gettype($name); // Output: string
?>

🔹 ৪. Boolean (বুলিয়ান): 
    >> Boolean টাইপে মাত্র দুইটি মান থাকে — true (সত্য) অথবা false (মিথ্যা)।
    >> এই টাইপটি সাধারণত শর্ত যাচাই করার জন্য ব্যবহৃত হয়।
    >> 0, "", null → false হিসেবে বিবেচিত হয়।
    >> যেকোনো non-zero সংখ্যা → true হিসেবে বিবেচিত হয়।
<?php 
    $isLogin = true;
    $isAdmin = false;

    echo gettype($isLogin); // Output: boolean
?>

<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
✅ Compound Data Types in PHP
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Compound মানে — একাধিক মান একসাথে ধারণ করা যায় এমন টাইপ।
PHP-তে দুটি compound data type আছে।
🔹 ১. Array (অ্যারে):
    >> Array হচ্ছে একটি ভেরিয়েবলে একাধিক মান রাখার পদ্ধতি। প্রতিটি মানের একটি index (চাবি/Key) থাকে।

# Indexed Array (সাধারণ সংখ্যার index)
<?php 
    $fruits = ["Apple", "Banana", "Mango"];

    echo $fruits[0]; // Output: Apple
    echo $fruits[2]; // Output: Mango
    echo gettype($fruits); // array
?>

# Associative Array (চাবি/Key-ভিত্তিক অ্যারে)
<?php 
    $person = [
        "name" => "Alamin",
        "age" => 25,
        "city" => "Kurigram"
    ];

    echo $person["name"]; // Output: Alamin
    echo gettype($person); // array
?>

# Multidimensional Array (একাধিক অ্যারের ভিতরে অ্যারে)
<?php 
    $students = [
        ["name" => "Alamin", "marks" => 90],
        ["name" => "Rahim", "marks" => 85]
    ];

    echo $students[0]["name"]; // Output: Alamin
    echo gettype($students); // array
?>

 
🔹 ২. Object (অবজেক্ট): Object তৈরি হয় ক্লাস (Class) থেকে। এতে প্রোপার্টি (গুণাবলি) এবং মেথড (কাজ) থাকে।
<?php 
    class Student {
        public $name = "Alamin";
        public $age = 25;

        public function greet() {
            return "Hello, I am " . $this->name;
        }
    }

    $obj = new Student();

    echo $obj->name;          // Output: Alamin
    echo $obj->greet();       // Output: Hello, I am Alamin
    echo gettype($obj);       // Output: object
?>


<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
✅ Special Data Types in PHP
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Special data types মানে — এগুলো সাধারণ মান না, বরং বিশেষ উদ্দেশ্যে ব্যবহার হয়।

PHP-তে ২টি Special Data Types আছে:

🔹 ১. NULL (নাল) :
    >> NULL হলো একটি বিশেষ টাইপ, যার মান "কোনো মান নেই"।
    >> যখন কোনো ভেরিয়েবলের কোনো মান নির্ধারণ করা হয়নি বা সেটাকে null করে দেওয়া হয়েছে — তখন তার টাইপ NULL হয়।
    ✅ কখন ব্যবহার হয়?
    1. ডেটাবেসে কোনো ফিল্ড ফাঁকা থাকলে।
    2. একটি ভেরিয়েবলের মান মুছে ফেলতে চাইলে।
    3. ডিফল্ট ফাঁকা মান রাখার জন্য।
<?php
    $name = null;

    if (is_null($name)) {
        echo "💡 Variable is NULL\n";
    }

    echo gettype($name); // Output: NULL
?>

🔹 ২. Resource (রিসোর্স) : Resource টাইপ PHP ব্যবহার করে বাইরের সিস্টেম বা ফাইলের রেফারেন্স সংরক্ষণ করার জন্য। 
    
    >> ফাইল ওপেন
    >> ডেটাবেজ কানেকশন
    >> ইমেজ প্রসেসিং
    >> cURL রিকোয়েস্ট ইত্যাদি

<?php
    # ফাইল রিসোর্স
    $file = fopen("example.txt", "r");

    if (is_resource($file)) {
        echo "📄 File is open as a resource\n";
    }

    echo gettype($file); // Output: resource

    fclose($file); // রিসোর্স বন্ধ করা জরুরি


    # ডেটাবেজ রিসোর্স (MySQLi)
    $conn = mysqli_connect("localhost", "root", "", "test_db");

    if (is_resource($conn) || $conn) {
        echo "✅ Database connected\n";
    }

    echo gettype($conn); // Output: object or resource (depends on extension)
?>

<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
✅ PHP Data Type Checking Functions – সম্পূর্ণ লিস্ট :
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

=> gettype($var) → ভেরিয়েবলের টাইপ রিটার্ন করে (string)
=> is_int($var) / is_integer() → পূর্ণসংখ্যা কিনা (true/false)
=> is_float($var) / is_double() / is_real()	→ দশমিক সংখ্যা কিনা	→ true/false
=> is_string($var)	→ স্ট্রিং কিনা	true/false
=> is_bool($var)	→ বুলিয়ান কিনা	true/false
=> is_array($var)	→ অ্যারে কিনা	true/false
=> is_object($var)	→ অবজেক্ট কিনা	true/false
=> is_null($var)	→ null কিনা	true/false
=> is_numeric($var)	→ সংখ্যা বা সংখ্যার মত স্ট্রিং কিনা	true/false
=> is_resource($var)	→ resource টাইপ কিনা	true/false
=> is_scalar($var)	→ স্কেলার টাইপ কিনা (int, float, string, bool)	true/false
=> is_callable($var)	→ ফাংশন হিসেবে কল করা যায় কিনা	true/false
=> is_iterable($var)	→ foreach loop-এ চালানো যায় কিনা (PHP 7.1+)	true/false
=> is_countable($var)	→ count() করা যায় কিনা (PHP 7.3+)	true/false
=> is_empty($var) ✅ (Custom Logic)	→ ফাঁকা কিনা (0, "", null, [], false)	true/false
=> is_numeric_string($var) ✅ (PHP 8.0+)	→ স্ট্রিংটা কি pure number?	true/false

🔹 var_dump($var) → ভেরিয়েবলের টাইপ এবং মান দুটোই দেখায়। 
🔹 print_r($array) → অ্যারে বা অবজেক্ট সহজভাবে readable আকারে দেখায়।

# বিশেষ টিপস:
is_scalar() → শুধু scalar type (int, float, bool, string) হলে true দেয়।

is_callable() → function বা ক্লোজার ফাংশন কল করার যোগ্য কিনা চেক করে।

is_iterable() → foreach চালানো যায় কিনা চেক করে।

is_countable() → count() ফাংশন চালানো যাবে কিনা।