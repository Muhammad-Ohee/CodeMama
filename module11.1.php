<?php
    /*
    Positivity

    Problem Statement
    Write a program to check if an array contains more positivity than negativity.An array has more positivity if it contains strictly more unique positive values than unique negative values. If the number of positive and negative values are equal then it is also taken as negativity.

    Input
    The program will take an integer 
    �
    N as the size of an array. Then it will take the integer values of the array 
    �
    [
    ]
    M[].

    Output
    The output will print either "Positivity" or "Negativity"

    Constraints
    0 ≤ |N| ≤ 10000
    0 ≤ |M[]| ≤ 10000
    Example:
    Enter numbers

    Input:
    5
    1 -3 6 -2 -8
    Output:
    Negativity
    */



    
    # Write your PHP code from here
    fscanf(STDIN, "%d", $array_size);
    $array = trim(fgets(STDIN));

    $number_array = explode(" ", $array);
    $positive_count = 0;
    $negative_count = 0;
    
    for($i=0; $i<$array_size; $i++){
        if($number_array[$i] > 0){
            $positive_count += 1;
        }
        else{
            $negative_count += 1;
        }
    }

    if($positive_count > $negative_count){
        echo "Positivity";
    }
    else{
        echo "Negativity";
    }
?>