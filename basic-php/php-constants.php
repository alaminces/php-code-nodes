<?php

// constants
// define()
// defined()
// const variable
// define vs const
// magic constant
// variable variables

/*
✅ Constant মানে একটি স্থায়ী মান — যেটি একবার define করলে পরে পরিবর্তন করা যায় না।
✅ Variable এর মতো $ চিহ্ন ব্যবহার করা হয় না।
*/

# define() method: 
define("SITE_NAME", "Alamin's Blog");
echo SITE_NAME;

# const keyword:
const COUNTRY = "Bangladesh";
echo COUNTRY;


echo defined('SITE_NAME'); // 1

// condition
if (!defined('APP_NAME')) {
    //const APP_NAME = 'Laravel'; // doesn't work
    define('APP_NAME','Laravel');
}

echo APP_NAME;

# real life example
define("TAX_RATE", 0.15);
$price = 100;

$total = $price + ($price * TAX_RATE);
echo $total; // Output: 115


/*
🔸 const কেবল global scope বা class body এর ভিতরে সরাসরি ব্যবহার করা যায়।
🔸 কিন্তু const কোনো condition (if, for) block এর ভিতরে ব্যবহার করা যায় না।

তাই এই লাইনে error হবে।
*/




# const vs define() 
/*
    const : 
    1. type: Language construct
    2. syntax: const NAME = value;
    3. Global scope বা class body
    4. 	Compile time
    5.  Condition এর ভিতরে কাজ করে না।
    
    define() :
    1. function
    2. define('NAME', value);
    3. 	যেকোনো জায়গায় (function, block ইত্যাদি)
    4.  Condition এর ভিতরে কাজ করে
    5. Runtime
    6. Global
*/


/*
🧠 Compile Time ও Runtime এর সহজ সংজ্ঞা:
✅ Compile Time (কম্পাইল টাইম) মানে:
➡️ প্রোগ্রাম চালানোর আগেই যখন কম্পিউটার কোডগুলো পরীক্ষা করে দেখে সবকিছু ঠিক আছে কিনা —
তখন তাকে বলে Compile Time।

📌 উদাহরণ:

বানানের ভুল (syntax error) থাকলে তখনই ধরা পড়ে।

যেমন: সেমিকোলন ভুলে গেলে, বা bracket mismatch হলে।

✅ Runtime (রানটাইম) মানে:
➡️ যখন প্রোগ্রাম চলতে থাকে, অর্থাৎ ইউজার যখন প্রোগ্রাম ব্যবহার করে —
তখন যা কিছু ঘটে, সেটাই Runtime।

📌 উদাহরণ:

০ দিয়ে ভাগ করলে error দেখাবে (program run করার সময়)।

ইউজার ভুল input দিলে তখন error হবে।





✅ খুব ছোটভাবে মনে রাখো:
Compile Time
কোড চালানোর আগের সময়
ভুল থাকলে চালানোই যাবে না
Syntax error ধরা পড়ে

Runtime
কোড চালানোর সময়
চালানোর সময় ভুল ধরা পড়ে
Logic বা input error ধরা পড়ে

🧪 উদাহরণ:
*/


const NAME = "Alamin";  // ✅ Compile time constant

define("AGE", 25);      // ✅ Runtime constant