<?php
$params = (isset($_POST['submit']))
? $_POST : $_GET;

foreach($params as $key=>$value){
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

?>