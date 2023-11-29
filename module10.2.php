<?php
    /*
    Bracket Matching

    Problem Statement
    Write a program to verify that all the brackets in a given string are correctly matched and nested.

    Input
    The program will take a string 
    �
    S as input.

    Output
    The output will either print "Brackets are balanced." if the brackets are matched or print "Brackets are not balanced."

    Constraints
    0 ≤ |S| ≤ 100000
    Example:
    Enter string

    Input:
    [{{()}}]
    Output:
    Brackets are balanced.
    */




    # Write your PHP code from here
    $expression = trim(fgets(STDIN));

    $array = str_split($expression);
    
    $initail_len = count($array);

    $half_len = (int)$initail_len / 2;

    $flag = true;

    for ($i = 0; $i < $half_len; $i++) {
        if ($array[$i] == "[") {
            if($array[$initail_len -1] == chr(93)){
                $flag = true;
            } else {
                $flag = false;
                break;
            }
        } else if ($array[$i] == "{") {
            if($array[$initail_len -1] == chr(125)){
                $flag = true;
            } else {
                $flag = false;
                break;
            }
        } else if ($array[$i] == "(") {
            if($array[$initail_len -1] == chr(41)){
                $flag = true;
            } else {
                $flag = false;
                break;
            }
        }

        $initail_len -= 1;
    }
    if ($flag) {
        echo"Brackets are balanced.";
    } else {
        echo "Brackets are not balanced.";
    }
?>