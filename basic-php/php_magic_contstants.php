/**
 * ✨ Magic Constants in PHP (ম্যাজিক কনস্ট্যান্ট)
🔹 এগুলো PHP built-in constant যেগুলোর মান অটোভাবে পরিবর্তিত হয় context অনুযায়ী।
🔹 এগুলো প্রতি সময় ব্যবহার অনুযায়ী কাজ করে, তাই এগুলোকে বলা হয় "magic".
 */


/**
 ✅ Magic Constants List & Explanation:
    __LINE__	    -> বর্তমান লাইনের নাম্বার	তুমি যে লাইনে এটা লিখছো
    __FILE__	    -> ফাইলের path	পুরো ফাইলের নাম ও লোকেশন
    __DIR__	        -> ডিরেক্টরি path	ফাইল যেখানে আছে সেই ফোল্ডার
    __FUNCTION__	-> ফাংশনের নাম	যে function-এ use হয়েছে
    __CLASS__	    -> ক্লাসের নাম	যেই class এ লেখা হয়েছে
    __METHOD__	    -> class method নাম	className::methodName
    __NAMESPACE__	-> namespace নাম	যে namespace এ লিখা হয়েছে
**/

<?php 
// very first 
namespace App\Model\User;

// check line number
echo __LINE__;

// check file path
echo __FILE__;

// check directory
echo __DIR__;

// check method name of a function
function sayHi() {
    echo __FUNCTION__;
}
sayHi();


// check class name and method name 
class Person{
    function __construct() {
        echo __CLASS__;
       $this->demo();
    }
    function demo() {
        echo __METHOD__;
    }
}
new Person();


// check namespace name
echo __NAMESPACE__;



?>

✅ উপসংহার:
Magic constants হলো এমন constant যেগুলোর মান অটোমেটিকভাবে নির্ধারিত হয়।

এগুলো debugging, logging বা path management এর জন্য খুবই কাজে লাগে।

=======================================
# Degul Logger Project
=======================================
<?php 

function debugLog($message) {
    echo "[LOG] Message: {$message}\n";
    echo "        File: " . __FILE__ . "\n";
    echo "        Line: " . __LINE__ . "\n";
    echo "        Function: " . __FUNCTION__ . "\n";
    echo "        Directory: " . __DIR__ . "\n";
    echo "-----------------------------\n";
}



class User{
    public function createUser($name) {
        echo "[USER CREATED]\n";
        echo "Name: $name\n";
        echo "Class: " . __CLASS__ . "\n";
        echo "Method: " . __METHOD__ . "\n";
        echo "-----------------------------\n";
    }
}

// call debug function
debugLog("Something went wrong");

// create user
$user = new User();
$user->createUser("Alamin");

?>