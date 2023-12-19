<?php
    /*
    Sum of Natural Numbers
    
    Problem Statement
    Write a program that calculates the sum of natural numbers up to a given number 'n'. For example, if the input is 5, the program should calculate and display the sum of natural numbers from 1 to 5 (1 + 2 + 3 + 4 + 5 = 15)
    
    Input
    The program will take an integer 
    �
    N
    
    Output
    The output will print sum of 
    �
    N numbers.
    
    Constraints
    0 ≤ |N| ≤ 10000
    Example:
    Enter number
    
    Input:
    5
    Output:
    15
    */



    
    # Write your PHP code from here
    fscanf(STDIN, "%d", $number);
    $sum = 0;
    for($i=1; $i<=$number; $i++){
        $sum += $i;
    }
    echo $sum;
?>