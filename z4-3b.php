<?php

#$otv = [0];
#$name = "User";

if(isset($_POST['submit'])){
    if(isset($_POST['otv'])){
        $otv = $_POST['otv'];
    } else {
        exit("Вы не выбрали ниодного ответа!<br>
        <li><a href='z4-3a.htm'>Назад</a></li>");
    }
    if($_POST['name']!=''){
        $name = $_POST['name'];
    } else $name = "User";
} 

function answer_check(array $check): int
{
    $ranswer = array(6,9,4,1,3,2,5,8,7);
    $r_ans = 0;
    for ($i = 0; $i < count($check); $i++) {
        if ($ranswer[$i] == $check[$i]){
            $r_ans++;
        }
    }
    return $r_ans;
}

echo $name.", вы ";

switch(answer_check($otv)){
    case 9:
        echo "великолепно знаете географию";
        break;
    case 8:
        echo "отлично знаете географию";
        break;
    case 7:
        echo "очень хорошо знаете географию";
        break;
    case 6:
        echo "хорошо знаете географию"; 
        break;
    case 5:
        echo "удовлетворительно знаете географию";
        break;
    case 4:
        echo "терпимо знаете географию";
        break;
    case 3:
        echo "плохо знаете географию";
        break;
    case 2:
        echo "очень плохо знаете географию";
        break;
    default:
        echo "вообще не знаете географию";
        break;
}
echo "<br> <li><a href='z4-3a.htm'>Назад</a></li>";
?>