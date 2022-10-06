<?php

class ReversePolishNotation{
    public static function main(array $args){
        $listOfNumbers = [];
        $i = 0;

        if(count($args) <= 2){
            return false;
        }

        while($i < count($args)) {
            if(is_numeric($args[$i])){
                $listOfNumbers[] = intval($args[$i]);
            }else if($args[$i] == "+" || $args[$i] == "-" || $args[$i] == "*" || $args[$i] == "/"){
                $result = ReversePolishNotation::evaluateTwoNumbers($listOfNumbers, $args[$i]);
                if($result == false){
                    return $result;
                }
                else if($i == count($args)-1){
                    return $result;
                }else{
                    $listOfNumbers[] = $result;
                }
            }
            $i = $i+1;
        }
    }

    public static function evaluateTwoNumbers($listOfNumbers, $arg){
        if(count($listOfNumbers)>=2){
            $lastElement = array_splice($listOfNumbers, count($listOfNumbers)-1, 1);
            $lastElement = $lastElement[0];
            $prevElement = array_splice($listOfNumbers, count($listOfNumbers)-1, 1);
            $prevElement = $prevElement[0];
            $result = ReversePolishNotation::executeOperation($prevElement, $lastElement, $arg);
            return $result;
        }
    }

    public static function executeOperation($num1, $num2, $op){
        if($op == "+"){
            return $num1+$num2;
        }else if($op == "-"){
            return $num1-$num2;
        }else if($op == "*"){
            return $num1*$num2;
        }else if($op == "/"){
            if($num2 == 0){
                return false;
            }else{
                return $num1/$num2;
            }
        }
    }


}

// TEST 1
$args1 = ["2", "3", "+"];
if(ReversePolishNotation::main($args1) == 5){
    echo "Passed Test1<br />";
}

// TEST 2
$args2 = ["2", "3", "-"];
if(ReversePolishNotation::main($args2) == -1){
    echo "Passed Test2<br />";
}

// TEST 3
$args3 = ["2", "3", "-", "2", "+"];
if(ReversePolishNotation::main($args3) == 1){
    echo "Passed Test3<br />";
}

// TEST 4
$args4 = ["2", "3", "*"];
if(ReversePolishNotation::main($args4) == 6){
    echo "Passed Test4<br />";
}

// TEST 5
$args4 = ["2", "*"];
if(ReversePolishNotation::main($args4) == false){
    echo "Passed Test5<br />";
}

// TEST 6
$args5 = ["2", "0", "/"];
if(ReversePolishNotation::main($args5) == false){
    echo "Passed Test6<br />";
}