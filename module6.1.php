<?php

    /*
    Find Discount


    Problem Statement
    Write a program to create a function that takes two arguments: the original price and the discount percentage as integers and returns the final price after the discount.

    Input
    The input consists of two integers: the original price and the discount.

    Output
    The output will print the final price after discount which will be a float number.

    Constraints
    0 ≤ |S| ≤ 10000
    Example:
    Enter numbers

    Input:
    50 20
    Output:
    Price: 40.00
    Notes:
    Your answer should be rounded to two decimal places.
    */





    # Write your PHP code from here
    fscanf(STDIN, "%d %d", $a, $b);
    function find_discount($og_price, $discount){
        $final_price = $og_price * ((100 - $discount)/100);
        return number_format($final_price, 2);
    }

    $final_price = find_discount($a, $b);
    echo "Price: " . $final_price;
    
?>