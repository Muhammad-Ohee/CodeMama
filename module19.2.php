<?php
    /*
    Number to String

    Problem Statement
    Write a program to convert number into string. The program will print every digit of the number as a string.

    Input
    The program will take an integer 
    �
    N as input.

    Output
    The output will print strings.

    Constraints
    0 ≤ N ≤ 1000
    Example:
    Enter Number

    Input:
    203
    Output:
    two zero three
    */




    # Write your PHP code from here
    function NumberToString( $number ) {
        if( $number == 0) return "zero";
        else if ( $number == 1) return "one";
        else if ( $number == 2) return "two";
        else if ( $number == 3) return "three";
        else if ( $number == 4) return "four";
        else if ( $number == 5) return "five";
        else if ( $number == 6) return "six";
        else if ( $number == 7) return "seven";
        else if ( $number == 8) return "eight";
        else if ( $number == 9) return "nine";
    }

    fscanf(STDIN, "%d", $number);
    $array  = array_map('intval', str_split($number));
    
    $finalString = "";
    $len = count($array);
    for( $i = 0; $i < $len; $i++ ) {
        $string = NumberToString($array[$i]);
        $finalString = $finalString . $string . " ";
    }

    echo $finalString;
?>