<?php

# Read input from user to convert
$usrString = readline("Type a sentence to be converted: ");
$usrHash = readline("Encode in md5 or sha1? ");

# Convert user input for encode type to lowercase
$lowerHash = strtolower($usrHash);

# Converts users sentence into the correct hash type then prints to screen
if($lowerHash == 'md5') {
    $usrmd5 = md5($usrString);
    print("Your sentence converted into md5 hash is: " . $usrmd5);
} else if($lowerHash == 'sha1') {
    $usrsha1 = sha1($usrString);
    print("Your sentence converted into sha1 hash is: " . $usrsha1);
}

?>