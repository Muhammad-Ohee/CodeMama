<?php
    /*
    Find Number From String

    Problem Statement
    Write a program to find a number from a string. An input string will contain english letters along with a number.There will be only one number in the string.You will have to find that number and print it.

    Input
    The program will take a string 
    �
    S

    Output
    The output will print a number.

    Constraints
    0 ≤ |N| ≤ 10000
    Example:
    Enter string

    Input:
    ab1cd
    Output:
    1
    */




    # Write your PHP code from here

    $str = trim(fgets(STDIN));
    $array = str_split($str);
    $len = count($array);
    $num = 0;
    for($i=0; $i<$len; $i++){
        if(is_numeric($array[$i])){
            $num = $array[$i];
        }
    }
    echo $num;
?>