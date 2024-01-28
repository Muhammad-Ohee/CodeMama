<?php
    /*
    Stair Climbing

    Problem Statement
    Write a program to count number of ways a person can climb N stairs when a person can climb either 1 stair or 2 stairs at a time.The program should count the number of ways a person can reach the top.

    Input
    The program will take an integer 
    �
    N as input

    Output
    The output will be an integer.

    Constraints
    0 ≤ N ≤ 1000
    Example:
    Enter number

    Input:
    5
    Output:
    8
    */




    # Write your PHP code from here
    fscanf(STDIN, "%d", $n);
    //print $n;
    print climb($n);
    
    function climb($n) {
        if ($n == 0 || $n==1) return 1;
        return climb($n-1) + climb($n-2);
    }
?>