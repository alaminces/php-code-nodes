🔢 ১. Decimal (দশমিক সংখ্যা পদ্ধতি)
➡️ Base: 10
➡️ Digits used: 0 to 9
➡️ আমরা প্রতিদিন যেই সংখ্যা ব্যবহার করি সেটা decimal

📌 উদাহরণ:

<?php
    $decimal = 123; // সাধারণ integer সংখ্যা
    echo $decimal;  // Output: 123
?>

✅ বুঝে রাখো:

এটি PHP-তে default format।

যেমন $x = 25; এটা decimal ধরা হয়।

🟠 ২. Octal (অক্টাল সংখ্যা পদ্ধতি)
➡️ Base: 8
➡️ Digits used: 0 to 7
➡️ PHP-তে Octal সংখ্যা লেখার সময় 0 দিয়ে শুরু করতে হয়

📌 উদাহরণ:

<?php 
    $octal = 0123; // Octal 0123 = Decimal 83
    echo $octal;   // Output: 83
?>

✅ বুঝে রাখো:

0123 মানে: (1×64) + (2×8) + (3×1) = 64 + 16 + 3 = 83

PHP Octal হিসেবে চিনে যদি শুরুতে 0 থাকে

🟣 ৩. Hexadecimal (হেক্সাডেসিমেল সংখ্যা পদ্ধতি)
➡️ Base: 16
➡️ Digits used: 0 to 9 and A to F
➡️ PHP-তে Hexadecimal সংখ্যা লেখার সময় 0x দিয়ে শুরু করতে হয়

📌 উদাহরণ:

<?php 
    $hex = 0x1A; // Hex 1A = Decimal 26
    echo $hex;   // Output: 26
?>

✅ বুঝে রাখো:

A = 10, B = 11, ..., F = 15

0x1A = (1×16) + (10×1) = 16 + 10 = 26

⚫ ৪. Binary (বাইনারি সংখ্যা পদ্ধতি)
➡️ Base: 2
➡️ Digits used: 0 and 1 only
➡️ PHP-তে Binary সংখ্যা লেখার সময় 0b দিয়ে শুরু করতে হয়

📌 উদাহরণ:

<?php 
    $binary = 0b1010; // Binary 1010 = Decimal 10
    echo $binary;     // Output: 10
?>

✅ বুঝে রাখো:

Binary 1010 = (1×8) + (0×4) + (1×2) + (0×1) = 8 + 0 + 2 + 0 = 10


🔁 Number Conversion Tools (মান কনভার্ট করা):
<?php

echo "<h2>🔁 Number Conversion Examples</h2>";

// ✅ Binary to Decimal
$binary = "1010";
echo "Binary to Decimal (bindec): bindec('1010') = " . bindec($binary) . "<br>";  // 10

// ✅ Decimal to Binary
$decimal = 10;
echo "Decimal to Binary (decbin): decbin(10) = " . decbin($decimal) . "<br>";    // 1010

// ✅ Octal to Decimal
$octal = "123";
echo "Octal to Decimal (octdec): octdec('123') = " . octdec($octal) . "<br>";    // 83

// ✅ Decimal to Octal
$decimal2 = 83;
echo "Decimal to Octal (decoct): decoct(83) = " . decoct($decimal2) . "<br>";    // 123

// ✅ Hexadecimal to Decimal
$hex = "1A";
echo "Hex to Decimal (hexdec): hexdec('1A') = " . hexdec($hex) . "<br>";         // 26

// ✅ Decimal to Hexadecimal
$decimal3 = 26;
echo "Decimal to Hex (dechex): dechex(26) = " . dechex($decimal3) . "<br>";      // 1a

// ✅ Binary → Octal (Binary → Decimal → Octal)
$binary2 = "11010"; // binary for 26
$toOctal = decoct(bindec($binary2)); // binary → decimal → octal
echo "Binary to Octal: decoct(bindec('11010')) = $toOctal<br>";                 // 32

// ✅ Binary → Hexadecimal (Binary → Decimal → Hex)
$toHex = dechex(bindec($binary2)); // binary → decimal → hex
echo "Binary to Hex: dechex(bindec('11010')) = $toHex<br>";                    // 1a

// ✅ Hexadecimal → Binary (Hex → Decimal → Binary)
$hex2 = "2F";
$toBinary = decbin(hexdec($hex2));
echo "Hex to Binary: decbin(hexdec('2F')) = $toBinary<br>";                    // 101111

// ✅ Octal → Binary (Octal → Decimal → Binary)
$octal2 = "77";
$toBinary2 = decbin(octdec($octal2));
echo "Octal to Binary: decbin(octdec('77')) = $toBinary2<br>";                 // 111111
?>
