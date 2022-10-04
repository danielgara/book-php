<?php 

#######################
### COMMENTS ##########
#######################

// single line comment
# single line comment
/*
    block of comments
*/

#######################
### VARIABLES #########
#######################

$var = 8;
$vaR = 8; //different var (case-sensitive)

// vars starts with letter or _

#######################
### FUNCTIONS #########
#######################

// function names are NOT case-sensitive

#######################
### CLASSES ###########
#######################

// class names are NOT case-sensitive

#######################
### CONSTANTS #########
#######################

define('PUBLISHER', "O Reilly Media");

#######################
### INTEGERS ##########
#######################

$int1 = 1998;
$int2 = -641;
$int3 = +33;

echo $int1.$int2.$int3;
echo '<br /><br />';

#######################
### FLOAT #############
#######################

$float1 = 3.14;
$float2 = 0.017;
$float3 = -7.1;

echo $float1.$float2.$float3;
echo '<br /><br />';

#######################
### STRINGS ###########
#######################

$str1 = 'Big dog';
$str2 = "Fat hog";

echo "Hi $str1";
echo '<br /><br />';

#######################
### BOOL ##############
#######################

$bool1 = true;
$bool2 = false;

echo $bool1; // A boolean TRUE value is converted to the string "1". Boolean FALSE is converted to ""
echo '<br /><br />';

#######################
### ARRAYS ############
#######################

$person[0] = "Luis";
$person[1] = "Luisa";

$musician["name"] = "Feid";
$musician["genre"] = "Rock";

$people = array("Daniel", "Jeff", "Doug");
$musicMan = array(
    "name" => "Karol G", 
    "genre" => "Reggaeton"
);

echo $person[0].'<br />';
print_r($people);
echo '<br />';
print_r($musicMan);
echo '<br /><br />';

foreach($people as $p){
    echo $p.'<br />';
}

echo '<br />';

foreach($musicMan as $key => $value){
    echo $key.': '.$value.'<br />';
}

echo '<br />';

#######################
### OBJECTS ###########
#######################

class Person {
    private $name;

    public function setName($name){
        $this->name = $name; 
    }

    public function getName(){
        return $this->name; 
    }
}

$person1 = new Person();
$person1->setName("Michael");

echo $person1->getName();
echo '<br /><br />';

#######################
### TYPES #############
#######################

echo gettype($int1)."<br />";
echo gettype($float1)."<br />";
echo gettype($str1)."<br />";
echo gettype($bool1)."<br />";
echo gettype($people)."<br />";
echo gettype($person1)."<br />";
echo get_class($person1)."<br />"; // get object class

