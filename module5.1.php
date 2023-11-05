<?php

    /*
    Look For Ten

    Problem Statement
    Write a program to create a function that takes two arguments. Both arguments are integers, a and b. Return true if one of them is 10 or if their sum is 10.

    Input
    The input consists of two integers.

    Output
    The output will print "True" if one of the input is 10 or their sum is 10. Otherwise, it will print "False".

    Constraints
    0 ≤ |S| ≤ 10000
    Example:
    Enter numbers

    Input:
    5 5
    Output:
    True
    Notes:
    None
    */



    # Write your PHP code from here

    $numbers = trim(fgets(STDIN));
    $number_array = explode(" ", $numbers);

    $number_array[0] = (int) $number_array[0];
    $number_array[1] = (int) $number_array[1];

    if($number_array[0] == 10 or $number_array[1] == 10){
        print "True";
    }
    elseif(($number_array[0] + $number_array[1]) == 10){
        print "True";
    }
    else{
        print "False";
    }

    //print gettype($number_array[0]);
?>