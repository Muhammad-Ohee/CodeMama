<?php
    /*
    Lone Zeroes

    Problem Statement
    Write a program to create a function which counts how many lone 0s appear in a given number. Lone means the number doesn't appear twice or more in a row.Previous and next numbers are not zeroes. For example - countLoneZeroes(10101) ➞ 2

    Input
    The program will take an integer 
    �
    N as input

    Output
    The output will print the number of lone 0's in the integer.

    Constraints
    0 ≤ N ≤ 100000
    Example:
    Enter number

    Input:
    10101
    Output:
    2
    */



    
    # Write your PHP code from here
    fscanf(STDIN, "%d", $str);
    $array = str_split($str);
    $len = count($array);
    $count = 0;
    for($i=0; $i<$len; $i++){
        if($array[$i] == 0){
            if($array[$i-1] != 0 && $array[$i+1] != 0){
                $count += 1;
            }
        }   
    }
    echo $count;
?>