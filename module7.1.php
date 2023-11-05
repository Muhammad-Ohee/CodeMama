<?php
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