<?php 

/*
if ($uninitializedVariable === NULL) { //generates warning
    echo "Yes!";
}
*/

#######################
### VARS OF VARS ######
#######################

$var1 = "Dan";
$$var1 = "Correa";
echo $var1.'<br />';
echo $Dan.'<br />';

echo '<br />';

#######################
### POINTERS ##########
#######################

$color1 = "blue";
$color2 = "green";
$color1 = &$color2;
$color2 = "red";
echo $color1.'<br />';

echo '<br />';

#######################
### LOCAL VARS ########
#######################

function updateCounter0()
{
    $counter++;
}

$counter = 10;
updateCounter0();
echo $counter; //print 10

echo '<br /><br />';

#######################
### GLOBAL VARS #######
#######################

function updateCounter()
{
    global $counter;
    $counter++;
}

$counter = 10;
updateCounter();
echo $counter; //print 11

echo '<br /><br />';

#######################
### STATIC VARS #######
#######################

function updateCounter2()
{
    static $counter = 0;
    $counter++;
    echo "Static counter is now {$counter}<br/>";
}

$counter = 10;

updateCounter2(); //print 1
updateCounter2(); //print 2
echo "Global counter is {$counter}"; // print 10

echo '<br /><br />';

#######################
### CUSTOM OPERATORS ##
#######################

$op1 = 4;
$op2 = 90;

echo $op1 <=> $op2;
echo '<br />';
echo $op2 <=> $op1;
echo '<br />';

$op3 = null;
$op4 = 67;

echo $op3 ?? $op4;
echo '<br /><br />';

$active = true;

if($active) { echo "yes"; } else { echo "no"; }
echo '<br />';
echo $active ? "yes" : "no";
echo '<br /><br />';