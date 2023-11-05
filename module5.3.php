<?php
    /*
    Second to Hour:Minute


    Problem Statement
    Write a program which will take seconds as input and output into hour:minute.

    Input
    The input consists of a integer.

    Output
    The output will print in the form hour:minute. For example if it takes 130 as input then it will print 0:2.

    Constraints
    0 ≤ |S| ≤ 10000
    Example:
    Enter number

    Input:
    130
    Output:
    0:2
    Notes:
    None
    */





    # Write your PHP code from here
    $seconds = (int)trim(fgets(STDIN));
    //echo gettype($seconds);

    $minutes = (int)($seconds / 60);
    //echo $minutes . "\n";
    $hours = (int)($minutes / 60);
    //echo $hours . "\n";
    $minutes_clone = $hours * 60;
    $minutes_final = $minutes - $minutes_clone;
    //echo $minutes_final . "\n";
    //$minutes = 60 * $hours;

    echo $hours . ":" . $minutes_final;
?>