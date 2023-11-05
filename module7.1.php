<?php
    /*
    Substring Occurrences Counting


    Problem Statement
    Write a program to create a function that finds and counts all occurrences of a substring within a larger string. For instance, in the string "abababab," the substring "ab" appears four times.

    Input
    The input consists of two strings.

    Output
    The output will print the number of occurrences of a substring which will be an integer.

    Constraints
    0 ≤ |S| ≤ 10000
    Example:
    Enter strings

    Input:
    abababab ab
    Output:
    4
    Notes:
    None
    */




    # Write your PHP code from here
    fscanf(STDIN, "%s %s", $main_string, $sub_string);

    $len_main_string = strlen($main_string);
    $len_sub_string = strlen($sub_string);

    function substring_occurrences_counting($matched_index, $len_sub, $main, $sub){

        $compair = "";
        
        for($i=0; $i<$len_sub; $i++){
            if(!empty($main[$matched_index])){
                $compair[$i] = $main[$matched_index];
                $matched_index += 1;
            }
        }

        if($compair == $sub){
            return true;
        } else{
            return false;
        }
    }    

    $count = 0;
    for($i=0; $i<$len_main_string; $i++){
        if($main_string[$i] == $sub_string[0]){
            
            $check = substring_occurrences_counting($i, $len_sub_string, $main_string, $sub_string);

            if($check){
                $count += 1;
                $i = $i + ($len_sub_string - 1);
            }
        }
    }

    echo $count;
?>