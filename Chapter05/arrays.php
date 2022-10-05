<?php

#######################
### ARRAYS ############
#######################

$addresses[0] = "spam@cyberpromo.net";
echo $addresses[0];
echo '<br /><br />';

$addresses = array("spam@cyberpromo.net", "abuse@example.com",
"root@example.com");

echo $addresses[1];
echo '<br /><br />';

#######################
### APPEND ############
#######################

$family = array("Fred", "Wilma");
$family[] = "Pebbles"; 


echo $family[2].'<br />';
$size = count($family); 
echo $size.'<br />';

#######################
### SLICE #############
#######################

$people = array("Tom", "Dick", "Harriet", "Brenda", "Jo");
$middle = array_slice($people, 2, 2);
print_r($middle);

echo '<br /><br />';

#######################
### KEY VALUE #########
#######################

$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
$keys = array_keys($person); 
print_r($keys);

echo '<br /><br />';

if (array_key_exists('age', $person)) {
    echo "exists!";
}

echo '<br /><br />';

$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");
print_r($subjects);
echo '<br /><br />';
$removed = array_splice($subjects, 0, 1); // removes first element
print_r($subjects);
echo '<br /><br />';

#######################
### ITERATE ###########
#######################

$addresses = array("spam@cyberpromo.net", "abuse@example.com");
$addressCount = count($addresses);
for ($i = 0; $i < $addressCount; $i++) {
    $value = $addresses[$i];
    echo "{$value}<br />";
}

echo '<br /><br />';

#######################
### SEARCH ############
#######################

$addresses = array("spam@cyberpromo.net", "abuse@example.com",
"root@example.com");
$gotSpam = in_array("spam@cyberpromo.net", $addresses); // $gotSpam is true
echo $gotSpam.'<br />';
$gotMilk = in_array("milk@tucows.com", $addresses); // $gotMilk is false
echo $gotMilk.'<br />';

echo '<br /><br />';

// PHP automatically indexes the values in arrays, so in_array() is generally much 
// faster than a loop checking every value in the array to find the one you want.

#######################
### SORT ##############
#######################

$names = array("Cath", "Angela", "Brad", "Mira");
sort($names);
print_r($names);

echo '<br /><br />';

#######################
### MERGE #############
#######################

$first = array("hello", "world"); // 0 => "hello", 1 => "world"
$second = array("exit", "here"); // 0 => "exit", 1 => "here"
$merged = array_merge($first, $second);
print_r($merged);
echo '<br /><br />';

$first = array(1, "two", 3);
$second = array("two", "three", "four");
$merged = array_merge($first, $second);
$union = array_unique($merged); //unique
print_r($union);