<?php 
$name = "z";
$age = null;

echo "Name : $name \n";    
echo var_dump(is_null($age));

echo "unset & inset\n";
$example = "testing";

unset($example);
var_dump(isset($example));
?>