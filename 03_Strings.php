<?php
    $str = "This";
    echo $str. " <br>";
    $lenn = strlen($str);
    echo "The length of this string is " . $lenn . "<br> Thank you";
    echo "The number of words in  this string is " . str_word_count($str) . "<br> Thank you";
    echo "The reversed string is " . strrev($str) . "<br> Thank you";
    echo "The search for is in this string is " . strpos($str, "is") . "<br> Thank you";



    // echo $lenn;
?>