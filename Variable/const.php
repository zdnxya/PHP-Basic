<?php 
define("GREETING", "Hellow ");
const NEWGREETING = "Hello ";
function user_greeting($name){
    echo GREETING . "$name \n";
    echo NEWGREETING . $name;
}

user_greeting("Test");
?>