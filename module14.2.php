<?php
    /*
    Remove Special Character

    Problem Statement
    Write a program to Create a function that takes a string, removes all "special" characters (e.g. ., !, @, #, $, %, ^, &, , *, (, )) and returns the new string.

    Input
    The program will take a string 
    �
    S

    Output
    The output will print a string without any special character.

    Constraints
    0 ≤ |S| ≤ 1000
    Input special characters will be from (., !, @, #, $, %, ^, &, , *, (, ))
    Example:
    Enter string

    Input:
    ab!cd
    Output:
    abcd
    */



    
    # Write your PHP code from here
    fscanf(STDIN, "%s", $str);
    $array = str_split($str);
    $len = count($array);
    //print_r($array);
    $new = "";

    for($i=0; $i<$len; $i++){
        if (ctype_upper($array[$i])){
            $new .= $array[$i];
        }
        elseif (ctype_lower($array[$i])){
            $new .= $array[$i];
        }
    }
    echo $new;
?>