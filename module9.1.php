<?php
    /*
    Sorting String By Length

    Problem Statement
    Write a program to create a function that returns an array of strings sorted by length in ascending order.

    Input
    The program will take an integer 
    �
    N as the length of an array. Then it will take the string values of the array 
    �
    [
    ]
    M[].

    Output
    The output will print the strings in sorted order.

    Constraints
    0 ≤ |N| ≤ 100000
    0 ≤ |M[]| ≤ 10000
    Example:
    Enter numbers

    Input:
    6
    abcde abc abcd abcdef ab a
    Output:
    a ab abc abcd abcde abcdef
    */




    # Write your PHP code from here
    fscanf(STDIN, "%d", $array_size);
    $array = trim(fgets(STDIN));

    $string_array = explode(" ", $array);

    //print_r($string_array);

    $associative_array = array();

    for($i=0; $i<$array_size; $i++){
        $data = $string_array[$i];
        $len = strlen($data);
        $associative_array[$data] = $len; 
    }

    // foreach($associative_array as $x => $x_value) {
    //     echo "Key=" . $x . ", Value=" . $x_value . "\n";
    // }

    asort($associative_array);

    $sorted_string = "";

    foreach($associative_array as $x => $x_value) {
        //echo "Key=" . $x . ", Value=" . $x_value . "\n";
        $sorted_string = $sorted_string . $x . " ";
    }

    echo trim($sorted_string);
    //echo $sorted_string;


?>