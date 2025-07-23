<?php
// integer_datatype.php

// ✅ সাধারণ দশমিক পূর্ণসংখ্যা
$number1 = 100; // ১০০ একটি সাধারন integer সংখ্যা
echo "Decimal integer: $number1<br>";

// ✅ ঋণাত্মক integer সংখ্যা
$number2 = -50; // ঋণাত্মক সংখ্যা
echo "Negative integer: $number2<br>";

// ✅ অক্টাল সংখ্যা (০ দিয়ে শুরু হয়)
$number3 = 0123; // Octal 0123 হল decimal 83
echo "Octal (0123) as decimal: $number3<br>";

// ✅ হেক্সাডেসিমেল সংখ্যা (0x দিয়ে শুরু হয়)
$number4 = 0x1A; // Hexadecimal 1A হল decimal 26
echo "Hexadecimal (0x1A) as decimal: $number4<br>";

// ✅ বাইনারি সংখ্যা (0b দিয়ে শুরু হয়)
$number5 = 0b1010; // Binary 1010 = decimal 10
echo "Binary (0b1010) as decimal: $number5<br>";

// ✅ integer চেক করা হচ্ছে কি না
$value = 123;
if (is_int($value)) {
    echo "$value একটি integer সংখ্যা<br>";
} else {
    echo "$value একটি integer নয়<br>";
}

// ✅ float সংখ্যা কে integer এ type cast করা
$floatValue = 12.9;
$intCast = (int)$floatValue; // দশমিক বাদ দিয়ে পূর্ণসংখ্যা নেয়
echo "Float 12.9 কে integer cast করলে: $intCast<br>";

// ✅ string কে integer এ রূপান্তর
$stringValue = "150";
$intFromString = (int)$stringValue;
echo "String '150' কে integer cast করলে: $intFromString<br>";

// ✅ অপ্রাসঙ্গিক string কে integer এ রূপান্তর
$invalidString = "abc";
$intInvalid = (int)$invalidString; // সংখ্যা না থাকায় 0 হবে
echo "String 'abc' কে integer cast করলে: $intInvalid<br>";

// ✅ ভগ্নাংশসহ string কে integer cast করা
$mixedString = "123.45";
$intMixed = (int)$mixedString; // . এর পর বাদ যাবে
echo "String '123.45' কে integer cast করলে: $intMixed<br>";

// ✅ Boolean কে integer এ cast করা
$trueBool = true;
$falseBool = false;
echo "true কে integer cast করলে: " . (int)$trueBool . "<br>";  // 1
echo "false কে integer cast করলে: " . (int)$falseBool . "<br>"; // 0

?>
