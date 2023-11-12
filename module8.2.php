<?php
    /*
    Rotated Sorted Array

    Problem Statement
    Write a program to find the minimum in a rotated sorted array using binary search algorithm. If a sorted array is like {0,1,2,4,5,6,7} then the rotated sorted array can be {4,5,6,7,0,1,2}.

    Input
    The program will take an integer
    �
    N as the size of a rotated sorted array. Then it will take the integer values of the array
    �
    [
    ]
    M[]. Finally, it will take the target value
    �
    P

    Output
    The output will print either the index of the target element or "Element not found" if the element is not found.

    Constraints
    0 ≤ |N| ≤ 100000
    0 ≤ |M[]| ≤ 100000
    0 ≤ |P| ≤ 100000
    Example-1:
    Enter numbers

    Input:
    7
    4 5 6 7 0 1 2
    0
    Output:
    4
    Example-2:
    Enter numbers

    Input:
    7
    4 5 6 7 0 1 2
    8
    Output:
    Element not found
    Notes:
    There will be no repeated elements.
     */




    # Write your PHP code from here
    fscanf(STDIN, "%d", $array_size);
    $numbers = trim(fgets(STDIN));
    $number_array = explode(" ", $numbers);
    fscanf(STDIN, "%d", $target_value);

    $result = array_search($target_value, $number_array);
    if ($result != null){
        echo $result;
    } else{
        echo "Element not found";
    }
?>