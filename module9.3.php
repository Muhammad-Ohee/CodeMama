<?php
    /*
    Lexicographically At The End

    Problem Statement
    Write a program to create a function that returns the lexicographically last rearrangements of a lowercase string.

    Input
    The program will take a string 
    �
    S as input.

    Output
    The output will print a string.

    Constraints
    0 ≤ |S| ≤ 100000
    Example:
    Enter string

    Input:
    hello
    Output:
    ollhe
    */



    
    # Write your PHP code from here
    $string = trim(fgets(STDIN));
    //$string = "hello";
    $len = strlen($string);
    $array = str_split($string);
    //print_r($array);

    $ascii_array = array();
    for ($i = 0; $i < $len; $i++) {
        $ascii_array[$i] = ord($array[$i]);
    }
    //print_r($ascii_array);

    rsort($ascii_array);

    //print_r($ascii_array);

    $sorted_array = array();

    for ($i = 0; $i < $len; $i++) {
        $sorted_array[$i] = chr($ascii_array[$i]);
    }

    //print_r($sorted_array);

    $final_string = "";

    for ($i = 0; $i < $len; $i++) {
        $final_string .= $sorted_array[$i];
    }

    echo $final_string;
    
?>