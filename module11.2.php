<?php
    /*
    Sum Digits: Odd or Even?

    Problem Statement
    Write a program which will determine whether the sum of all the digits of the number is even or odd.

    Input
    The program will take an integer 
    �
    N as input.

    Output
    The output will print either "Odd" or "Even"

    Constraints
    0 ≤ |N| ≤ 100000
    Example:
    Enter number

    Input:
    123
    Output:
    Even
    */



    
    # Write your PHP code from here
    $numbers = trim(fgets(STDIN));
    $len = strlen($numbers);

    $array = str_split($numbers);
    $number_array = array();

    for($i=0; $i<$len; $i++){
        $temp = (int)$array[$i];
        $number_array[$i] = $temp;
    }

    $sum = 0;
    for($i=0; $i<$len; $i++){
        $sum += $number_array[$i];
    }

    if($sum % 2 == 0){
        echo "Even";
    }
    else{
        echo "Odd";
    }
    //echo $len;
    //print_r($array);
    //echo gettype($number_array[0]);
?>