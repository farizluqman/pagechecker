<?php

class PageChecker {
    
    /**
     * method to return the $status if $filename matches the current page filename
     * $filename can be either array or a single string
     */
    function check_page($filename, $status){
        $to_return = '';
        if(is_array($filename) == true){
            $curr = basename($_SERVER['SCRIPT_NAME']);
            foreach($filename as $f){
                if($curr == $f){
                    $to_return = $status;
                }
            }
        }else{
            $curr = basename($_SERVER['SCRIPT_NAME']);
            if($curr == $filename){
                $to_return = $status;
            }
        }
        
        return $to_return;
    }
    
}
