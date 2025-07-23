✅ What is Boolean in PHP? / PHP-তে Boolean কী?
Boolean হলো এমন একটি ডেটা টাইপ, যা দুটি মাত্র মান নিতে পারে:
🔹 true (সত্য)
🔹 false (মিথ্যা)

এই ডেটা টাইপটি মূলত লজিক্যাল অপারেশন ও শর্ত যাচাইয়ের জন্য ব্যবহৃত হয়।

✅ How to Declare a Boolean / কীভাবে Boolean ডিক্লেয়ার করতে হয়
<?php 
    $isOnline = true;
    $isAdmin = false;

    var_dump($isAdmin);
    echo is_bool($isOnline);
?>


✅ Using Boolean in Conditional Statements / শর্তে Boolean ব্যবহার
<?php
    $isLoggedIn = true;

    if ($isLoggedIn) {
        echo "Welcome back!";
    } else {
        echo "Please log in first.";
    }
?>



✅ Boolean Type Casting in PHP / অন্য টাইপকে Boolean-এ কনভার্ট করা
PHP-তে যখন আপনি যেকোনো ভ্যালুকে if বা bool হিসেবে ব্যবহার করেন, তখন PHP অটোমেটিকলি সেটাকে Boolean-এ কনভার্ট করে নেয়।

false	            ->  false
0 (integer)         ->	false
0.0 (float)	        ->  false
"" (empty string)	->  false
"0" (string zero)	->  false
null	            ->  false
[] (empty array)	->  false
Any other value	    ->  true
