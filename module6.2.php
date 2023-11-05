<?php

    /*
    Build Toy Cars


    Problem Statement
    Suppose, you work in a toy car workshop, and your job is to build toy cars from a collection of parts. Each toy car needs 4 wheels, 1 car body, and 2 figures of people to be placed inside. Write a program which will calculate how many complete toy cars can be made, given the total number of wheels, car bodies and figures available.

    Input
    The input consists of three integers: number of wheels, car bodies, figures.

    Output
    The output will print the number of cars.

    Constraints
    0 ≤ |S| ≤ 10000
    Example:
    Enter numbers

    Input:
    43 15 87
    Output:
    10
    Notes:
    None
    */





    # Write your PHP code from here
    fscanf(STDIN, "%d %d %d", $a, $b, $c);
    
    function build_car($wheels, $car_body, $sit_number){
        if($wheels>= 4 && $car_body>=1 && $sit_number>=2){
            return true;
        }
        else{
            return false;
        }
    }

    $status = true;
    $count = 0;
    while($status){
        $count += 1;
        $status = build_car($a, $b, $c);
        $a = $a - 4;
        $b = $b - 1;
        $c = $c - 2;
    }

    echo $count - 1;
    
    
?>