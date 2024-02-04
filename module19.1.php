<?php
    /*
    Fibonacci Series

    Problem Statement
    Write a program to print fibonacci series.

    Input
    The program will take an integer 
    �
    N as input.

    Output
    The output will print a series of fibonacci numbers.

    Constraints
    0 ≤ N ≤ 1000
    Example:
    Enter Number

    Input:
    7
    Output:
    0 1 1 2 3 5 8
    */




    # Write your PHP code from here 
    function fibonacciSeriesWithRecursion($n, $firstNumber = 0, $secondNumber = 1) {
        if($n == 0) {
            return;
        }
        echo $firstNumber . " ";
        $nextNumber = $firstNumber + $secondNumber;
        fibonacciSeriesWithRecursion($n-1, $secondNumber, $nextNumber);
    }

    fscanf(STDIN, "%d", $number);
    fibonacciSeriesWithRecursion($number);
?>