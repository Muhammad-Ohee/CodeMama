<?php
    # Write your PHP code from here
    /*
    Prefix Expression Evaluation

    Problem Statement
    Write a program to evaluate Prefix expression.A prefix expression is an expression where the operator appears before the operands.

    Input
    The program will take a string 
    �
    S as input.

    Output
    The output will print the result after evaluation which will be an integer.

    Constraints
    0 ≤ |S| ≤ 100000
    Example:
    Enter string

    Input:
    *56
    Output:
    30
    */
    


    /*
    ALGORITHM
    First Reverse the expression.
    Scan the symbols of the given prefix expression from left to right and for each symbol, do the following:
    1. If symbol is an operand
        Push it on the stack.
    2. If symbol is an operator
        Pop two symbols out of the stack and apply the operator on these symbols.
        Push the result on the stack
    3. After scanning all the symbols of the postfix expression, pop the remaining symbol out of the stack and print it on the screen. 
        The remaining symbol is the result obtained after evaluating the postfix expression.
    */




    class Stack {
    private $stack;

    public function __construct() {
        $this->stack = [];
    }

    public function push($item) {
        array_push($this->stack, $item);
    }

    public function pop() {
        if ($this->isEmpty()) {
            return null; // Stack is empty
        }
        return array_pop($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }

    public function peek() {
        if ($this->isEmpty()) {
            return null; // Stack is empty
        }
        return end($this->stack);
    }

    public function printStack() {
        echo "Stack: ";
        echo implode(', ', $this->stack);
        echo PHP_EOL;
    }
}

    $stack = new Stack();

    $expression = trim(fgets(STDIN));

    $array = str_split($expression);

    $array = array_reverse($array);

    $len = count($array);

    $operand_array = array(1,2,3,4,5,6,7,8,9);
    $oparetor_array = array("+", "-", "*", "/");

    for( $i = 0; $i < $len; $i++ ) {
        // if(in_array($array[$i], $operand_array)){
        //     $stack->push( $array[$i] );
        // }

        if(in_array($array[$i], $oparetor_array)){
            $num1 = $stack->pop();
            $num2 = $stack->pop();
            if($array[$i] == "+"){
                $ans = $num1 + $num2;
                //echo "Adding {$num1} and {$num2}\n";
                $stack->push($ans);
            } else if($array[$i] == "-"){
                $ans = $num1 - $num2;
                //echo "Subtracting {$num1} from {$num2}\n";
                $stack->push($ans);
            } else if($array[$i] == "*"){
                $ans = $num1 * $num2;
                //echo "Multiplying {$num1} and {$num2}\n";
                $stack->push($ans);
            } else if($array[$i] == "/"){
                $ans = $num1 / $num2;
                //echo "Dividing {$num1} by {$num2}\n";
                $stack->push($ans);
            }
        } else{
            $stack->push( $array[$i] );
        }
        //$stack->printStack();
    }

    echo $stack->pop();
?>