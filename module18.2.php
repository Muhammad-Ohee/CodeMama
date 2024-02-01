<?php
    /*
    Remove Trailing Zeroes

    Problem Statement
    Write a program that takes in a number as a string S and 
    returns the number without trailing zeros. 
    Trailing zeroes before decimal point has importance , 
    so they will not be removed. Only the trailing zeroes after 
    decimal point which does not have any importance will be removed.

    Input
    The input consists of a string 
    �
    S.

    Output
    The output will print a number without trailing zeroes.

    Constraints
    0 ≤ |S| ≤ 10000
    Example:
    Enter number

    Input:
    505.4500
    Output:
    505.45
    Notes:
    If there are only zeroes after decimal point 
    then it will print the number without any decimal point. 
    For example, 50.00 will be printed as 50.
    */




    # Write your PHP code from here
    fscanf(STDIN, "%s", $string);
    
    $string_array = explode(".", $string);

    if (!empty($string_array[1])) {
        $updatedDecimal = remover($string_array[1]);
        if ($updatedDecimal == null) {
            echo $string_array[0];
        }
        else{
            echo $string_array[0] . "." . $updatedDecimal;
        }     
    }
    else {
        $integer = $string_array[0];
        echo $integer;
    }

    function remover($string){
        $array = str_split($string);
        $len = count($array);
        for ($i = $len-1; $i >= 0; $i--) {
            if ($array[$i] == "0"){
                array_pop($array);
            }
            else {
                break;
            }
        }
        $string = implode("",$array);
        return $string;
    }
?>