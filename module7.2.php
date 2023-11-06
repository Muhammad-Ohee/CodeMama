<?php
    # Write your PHP code from here
    fscanf(STDIN, "%s %s", $str1, $str2);

    $len = strlen($str1);

    function stringRotation($index, $len, $str1){
        
        $sub1 = "";
        $sub2 = "";

        $new_len = $len - $index;

        $first_index = $index;

        for($i=0; $i<$new_len; $i++){
            if(!empty($str1[$index])){
                $sub1 = $sub1 . $str1[$index];
                $index += 1;
            }
        }

        for($i=0; $i<$first_index; $i++){
            $sub2 = $sub2 . $str1[$i];    
        }

        return $sub1 . $sub2;
    }

    $flag = false;

    for($i=0; $i<$len; $i++){
        $rotaredString = "";
        if($str2[0] == $str1[$i]){
            $rotaredString = stringRotation($i, $len, $str1);
        }
        if($rotaredString == $str2){
            $flag = true;
        }
    }

    if($flag){
        echo "True";
    } else{
        echo "False";
    }
?>