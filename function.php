<?php
    function strip_post($field){
        if (isset($_POST[$field])){
            if(strlen($_POST[$field]) == 0){
                $_POST[$field] = 0;
            }
        }
        else{
            $_POST[$field] = 0;
        }
        return htmlspecialchars(stripslashes($_POST[$field]));
}
?>