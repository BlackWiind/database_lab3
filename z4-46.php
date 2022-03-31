<?php
if (isset($_POST['submit'])){
    foreach($_POST as $key=>$value){
        if($key == 'submit'){continue;}
        if(gettype($value) == "array"){
            echo "$key = <br>";
            foreach($value as $val){
                echo "$val<br>";
            }
        }
        else {
            echo "$key = $value<br>";
        }
    }
}
?>