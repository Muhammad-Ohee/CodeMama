<?php
    /*
    Substitution Cipher

    Problem Statement
    A substitution cipher is a method of encryption where each letter in the plaintext is replaced by another letter according to a fixed system. One of the simplest substitution ciphers is the Caesar cipher, where each letter in the plaintext is shifted a certain number of places down or up the alphabet. You will be given a plaintext and a shift number. You will have to have to shift each letter of the plaintext according to the number.

    Input
    The program will take a string 
    �
    S and an integer 
    �
    N

    Output
    The output will print a string shifted by a particular number.

    Constraints
    0 ≤ |N| ≤ 10000
    0 ≤ |S| ≤ 10000
    Example:
    Enter string and number

    Input:
    abcd 1
    Output:
    bcde
    */




    # Write your PHP code from here
    $array = trim(fgets(STDIN));
    $number_array = explode(" ", $array);
    $text = $number_array[0];
    $shift = $number_array[1];
    //echo gettype($text) . "\n";
    //echo $shift . "\n";
    //echo chr(97) . "\n";
    //echo ord('a') . "\n";
    $len = strlen($text);
    $cipher = "";
    for($i=0; $i<$len; $i++){
        $temp = $text[$i];
        $temp_ascii_value = ord($temp);
        $temp_ascii_value += $shift;
        $new_cipher = chr($temp_ascii_value);
        $cipher .= $new_cipher;
    }
    echo $cipher;
?>