<?php 



// error_logger



// function logError($message) {
//     $logMessage = "[ERROR] " . date('Y-m-d H:i:s') . "\n";
//     $logMessage .= "Message   : $message\n";
//     $logMessage .= "File      : " . __FILE__ . "\n";
//     $logMessage .= "Line      : " . __LINE__ . "\n";
//     $logMessage .= "Function  : " . __FUNCTION__ . "\n";
//     $logMessage .= "Directory : " . __DIR__ . "\n";
//     $logMessage .= "------------------------------\n";

//     // Write log to file
//     file_put_contents("logs.txt", $logMessage, FILE_APPEND);
// }


// class User {
//     public function createUser($name) {
//         $logMessage = "[USER CREATED] " . date('Y-m-d H:i:s') . "\n";
//         $logMessage .= "Name     : $name\n";
//         $logMessage .= "Class    : " . __CLASS__ . "\n";
//         $logMessage .= "Method   : " . __METHOD__ . "\n";
//         $logMessage .= "------------------------------\n";

//         file_put_contents("logs.txt", $logMessage, FILE_APPEND);
//     }
// }


// // Test logError function
// logError("Database connection failed!");

// // Test user creation
// $user = new User();
// $user->createUser("Alamin");

// echo "✅ Log saved to logs.txt\n";
// ?>