<?php
    /*
    Triplet Sum

    Problem Statement
    Write a program where you will be given an array arr[] of size N and an integer P. Find the triplet in the array which sums up to the given integer P.

    Input
    The program will take an integer 
    �
    N as the size of an array. Then it will take the integer values of the array 
    �
    �
    �
    [
    ]
    arr[]. Finally, it will take the target value 
    �
    P.

    Output
    The output will print the triplet numbers which will generate the sum.

    Constraints
    0 ≤ N ≤ 100000
    0 ≤ arr[] ≤ 100000
    0 ≤ P ≤ 100000
    Example:
    Enter numbers

    Input:
    6
    12 3 4 1 6 9
    24
    Output:
    3 9 12
    */




    # Write your PHP code from here
    function findTriplet($arr, $targetSum, $n) {
        sort($arr);
        // Iterate through each element as a potential first element of the triplet
        for ($i = 0; $i < $n - 2; $i++) {
            // Use two-pointer approach for the remaining elements
            $left = $i + 1;
            $right = $n - 1;
    
            while ($left < $right) {
                $currentSum = $arr[$i] + $arr[$left] + $arr[$right];
    
                // Check if the current triplet satisfies the condition
                if ($currentSum == $targetSum) {
                    return [$arr[$i], $arr[$left], $arr[$right]];
                } elseif ($currentSum < $targetSum) {
                    // If the current sum is less than the target, move the left pointer to the right
                    $left++;
                } else {
                    // If the current sum is greater than the target, move the right pointer to the left
                    $right--;
                }
            }
        }
    
        // If no triplet is found, return an empty array
        return [];
    }

    fscanf(STDIN, "%d", $arr_len);
    $array = trim(fgets(STDIN));
    $number_array = explode(" ", $array);
    fscanf(STDIN, "%d", $taget_value);
    
    $result = findTriplet($number_array, $taget_value, $arr_len);
    
    if (!empty($result)) {
        echo implode(' ', $result);
    } else {
        echo "No triplet found.\n";
    }    
?>