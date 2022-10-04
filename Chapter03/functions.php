<?php

#######################
### FUNCTION ##########
#######################

function strcat($left, $right)
{
    return $left . $right;
}

$first = "This is a ";
$second = " complete sentence!";
echo strcat($first, $second);
echo '<br /><br />';

$value = 2;
$value = $value << 1;

echo $value;
echo '<br /><br />';

#######################
### PASS ARGS EMPTY ###
#######################

function countList()
{
    if (func_num_args() == 0) {
        return false;
    }
    else {
        $count = 0;
        for ($i = 0; $i < func_num_args(); $i++) {
            $count += func_get_arg($i);
        }
        return $count;
    }
}
echo countList(1, 5, 9);

echo '<br /><br />';

#######################
### SPECIFY RETURN ####
#######################


function someMath($var1, $var2): int
{
    return $var1 * $var2;
}

echo someMath(10, 5);