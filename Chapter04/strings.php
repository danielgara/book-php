<?php

$n = 12;
echo "You are the $n th person";
echo "You are the {$n}th person";

echo '<br /><br />';

echo "Printy";
echo("Printy"); //also valid

echo '<br /><br />';

printf('%.2f', 27.452);

echo '<br /><br />';

$a = array('name' => 'Fred', 'age' => 35, 'wife' => 'Wilma');

print_r($a);
echo '<br /><br />';
var_dump($a);

echo '<br /><br />';

$message = "hola";
for($i=0; $i<strlen($message); $i++){
    echo $message[$i].'<br />';
}

echo '<br /><br />';

$string1 = "FRED flintstone";
$string2 = "barney rubble";
print(strtolower($string1).'<br />');
print(strtoupper($string1).'<br />');
print(ucfirst($string2).'<br />');
print(ucwords($string2).'<br />');

echo '<br />';

$o1 = 3;
$o2 = "3";
if ($o1 == $o2) {
echo("== returns true<br>");
}
if ($o1 === $o2) {
echo("=== returns true<br>");
}

echo '<br />';

#######################
### MANIPULATE STRING #
#######################

$name = "Fred Flintstone";
$fluff = substr($name, 6, 4); // "lint"
$sound = substr($name, 11); // "tone"

$input = 'Fred,25,Wilma';
$fields = explode(',', $input);

var_dump($fields);

echo '<br /><br />';

$record = "Fred,Flintstone,35,Wilma";
$pos1 = strpos($record, ","); // find first comma
$pos2 = strrpos($record, ","); // find last comma

echo $pos1.'<br />';
echo $pos2.'<br />';