<?php

class Person {
    public $name;

    final function getName() { // final -> subclasses cannot redefine
        return $this->name;
    }
}

class Person2 {
    public $name = '';

    function getName() {
        return $this->name;
    }

    function setName($newName) {
        $this->name = $newName;
    }
}

class Person3 {
    public $age;

    public function __construct() {
        $this->age = 0;
    }

    public function incrementAge() {
        $this->age += 1;
        $this->ageChanged();
    }
    
    public function decrementAge() {
        $this->age -= 1;
        $this->ageChanged();
    }

    private function ageChanged() {
        echo "Age changed to {$this->age}";
    }
}

$person = new Person3();
$person->incrementAge();

class Person4 {
    public $username = 'Anyone can see me';
    public static $global = 23;
    public const TYPE_CASH = 1; // constant

    function takeJob(Job $job) { //type hinting
        echo "Now employed as a {$job->title}\n";
    }

    function bestJob(): Job { //type hinting
        $job = Job("PHP developer");
        return $job;
    }   
}

class Person5 {
    public $name, $address, $age;
}

#######################
### INHERITANCE #######
#######################

class Employee extends Person5 {
    public $position, $salary;
}

#######################
### INTERFACE #########
#######################
    
interface Printable {
    function printOutput();
}

class ImageComponent implements Printable {
    function printOutput() {
        echo "Printing an image...";
    }
}

#######################
### TRAIT #############
#######################

trait Logger {
    public function log($logString) {
        $className = __CLASS__;
        echo date("Y-m-d h:i:s", time()) . ": [{$className}] {$logString}";
    }
}

class User {
    use Logger;
    public $name;

    function __construct($name = '') {
        $this->name = $name;
        $this->log("Created user '{$this->name}'");
    }

    function __toString() {
        return $this->name;
    }
}

echo '<br /><br />';

$user = new User("Daniel");

#######################
### CONSTRUCTOR #######
#######################

class Person {
    public $name, $address, $age;

    function __construct($name, $address, $age) {
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
    }
}

class Employee extends Person {
    public $position, $salary;

    function __construct($name, $address, $age, $position, $salary) {
        parent::__construct($name, $address, $age); // parent
        $this->position = $position;
        $this->salary = $salary;
    }
}

// Introspection
// Introspection is the ability of a program to examine an object’s characteristics, such as
// its name, parent class (if any), properties, and methods. 

// class_exists()
// get_declared_classes()
// get_parent_class() 
// get_class_methods()
// get_class_vars()
// $isObject = is_object(var);
// $classname = get_class(object);


// Serialization
// Serializing an object means converting it to a bytestream representation that can be
// stored in a file. This is useful for persistent data; for example, PHP sessions automati‐
// cally save and restore objects.

//$encoded = serialize($something);
//$something = unserialize($encoded);
