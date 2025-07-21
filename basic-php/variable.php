<?php 

/**
 * What is a Variable in PHP?
 * 
 * PHP-তে ভ্যারিয়েবল (Variable) হলো এমন একটি পাত্র/কন্টেইনার, যেখানে আমরা কোনো তথ্য/মান জমা রাখি।
 * 
 */


$name = "Alamin";
$age = 22;
$district = "Kurigram";
$price = 99.99;

echo $name;     // Alamin
echo $age;      // 22
echo $district;      // Kurigram
echo $price;      // 99.99


/**
 * Variable এর নামকরণের নিয়ম (Rules for Naming Variables):
✅ ভ্যারিয়েবল নাম সবসময় $ দিয়ে শুরু হবে
✅ নামের মধ্যে শুধু letter, number, underscore (_) থাকতে পারে
✅ সংখ্যা দিয়ে শুরু করা যাবে না
✅ স্পেস দেওয়া যাবে না
✅ কেস-সেনসিটিভ: $name আর $Name আলাদা
 */

# ভ্যারিয়েবল নাম সবসময় $ দিয়ে শুরু হবে
$name = "Alamin";

# নামের মধ্যে শুধু letter, number, underscore (_) থাকতে পারে
$student1 = "Rahim";
$_id = 101;
$user_name = "Alamin";

# সংখ্যা দিয়ে শুরু করা যাবে না
// $1player = "Sakib"; // ভুল, কারণ সংখ্যা দিয়ে শুরু
$player1 = "Sakib"; // ঠিক আছে

# স্পেস দেওয়া যাবে না
// $my name = "Alamin"; // ভুল
$my_name = "Alamin"; // ঠিক

#  কেস-সেনসিটিভ: $name আর $Name আলাদা
$name = "Alamin";
$Name = "Hasan";