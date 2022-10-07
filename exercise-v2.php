<?php

class ReversePolishNotation{
    public static function main(array $args){
        $listOfNumbers = [];
        $validOperators = ["+", "-", "/", "*"];

        if(count($args) <= 2){
            throw new InvalidArgumentException('Array should contain 3 or more elements');
        }

        foreach($args as $arg){
            if(is_numeric($arg)){
                $listOfNumbers[] = intval($arg);
            }else if(in_array($arg, $validOperators) && count($listOfNumbers)>=2){
                $lastElement = array_pop($listOfNumbers);
                $prevElement = array_pop($listOfNumbers);
                switch($arg) {
                    case "+":
                        $result = $prevElement+$lastElement;
                        break;
                    case "-":
                        $result = $prevElement-$lastElement;
                        break;
                    case "*":
                        $result = $prevElement*$lastElement;
                        break;
                    case "/":
                        if($lastElement==0){
                            throw new InvalidArgumentException('Zero division');
                        }
                        $result = $prevElement/$lastElement;
                        break;
                }
                $listOfNumbers[] = $result;
            }else{
                throw new InvalidArgumentException('Invalid operator or arguments order');
            }
        }

        return $listOfNumbers[0];
    }
}

class TestReversePolishNotation{
    public static function test(array $tests){
        foreach($tests as $test){
            try{
                $name = $test["name"];
                $result = ReversePolishNotation::main($test["args"]);
                if($result == $test["result"]){
                    echo "Passed $name<br />";
                }else{
                    echo "Not passed $name<br />";
                }
            }catch(InvalidArgumentException $e){
                if($test["result"] == false){
                    echo "Passed $name<br />";
                }else{
                    echo "Not passed $name<br />";
                }
            }
        }
    }
}

$tests = array(
    ["name" => "Test 1", "args" => ["2", "3", "+"], "result" => 5],
    ["name" => "Test 2", "args" => ["2", "3", "-"], "result" => -1],
    ["name" => "Test 3", "args" => ["2", "3", "-", "2", "+"], "result" => 1],
    ["name" => "Test 4", "args" => ["2", "3", "*"], "result" => 6],
    ["name" => "Test 5", "args" => ["2", "*"], "result" => false],
    ["name" => "Test 6", "args" => ["2", "0", "/"], "result" => false],
    ["name" => "Test 7", "args" => ["18", "2", "+", "10", "/"], "result" => 2],
);

TestReversePolishNotation::test($tests);
