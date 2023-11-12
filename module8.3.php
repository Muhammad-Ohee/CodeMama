<?php
    /*
    Calculate Square Root

    Problem Statement
    Write a program to approximate the square root of a non-negative integer using binary search. Your function should return an integer representing the floor of the square root. For example, for 6 it will print 2.

    Input
    The input consists of an integers
    �
    N.

    Output
    The output will print the square root integer value of the input.

    Constraints
    0 ≤ |N| ≤ 10000
    Example:
    Enter number

    Input:
    6
    Output:
    2
     */




    # Write your PHP code from here
    fscanf(STDIN, "%d", $number);
    $sqrt_number =  sqrt($number);
    $floored = floor($sqrt_number);
    echo $floored;
?>