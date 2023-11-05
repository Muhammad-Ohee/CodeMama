<?php

    /*
    Concatenate Two String


    Problem Statement
    Write a program where two strings will be given, firstName and lastName, return a single string in the format "lastName, firstName".

    Input
    The input consists of two strings.

    Output
    The output will print a string.

    Constraints
    0 ≤ |S| ≤ 10000
    Example:
    Enter strings

    Input:
    John Doe
    Output:
    Doe, John
    Notes:
    None
    */




    # Write your PHP code from here
    $string = trim(fgets(STDIN));

    $final = explode(" ", $string);
    print $final[1] . ", " . $final[0];
?>