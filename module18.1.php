<?php
    /*
    Repdigit

    Problem Statement
    Write a program to check whether a number is Repdigit or not. A repdigit is a positive number composed out of the same digit.

    Input
    The input consists of a positive integer number 
    �
    N.

    Output
    The output will print either "true" or "false".

    Constraints
    0 ≤ |N| ≤ 10000
    Example:
    Enter number

    Input:
    55
    Output:
    true
    */




    # Write your PHP code from here
    fscanf(STDIN, "%d", $number);
    $array = array();
    convertArray($number);

    function convertArray($number) { 
        global $array;
        $remainder = $number % 10;
        if ($remainder == 0) return $array;
        array_push($array, $remainder);
        $quotient = (int)($number / 10);
        convertArray($quotient);
    }

    $arrayLength = count($array);
    $temp = $array[0];
    $ans = true;
    for ($i = 1; $i < $arrayLength; $i++) {
        if ($array[$i] == $temp) {
            $ans = true;
        }
        else {
            $ans = false;
            break;
        }
    }

    echo ($ans) ? "true":"false";
?>