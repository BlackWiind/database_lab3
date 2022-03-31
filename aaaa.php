<?php
if ($day != "") {
    header("Location: $day");
    exit;
}

else { // начало блока else
?>

<html> <head>
<title> Листинг 10-9. Посылка заголовка с помощью
        функции header() </title> </head> <body>

<form action = "<? print $PHP_SELF ?>" method="post">

<select name="day">
<option value = "">Дни недели:

<option value='d1.htm'>Понедельник

<option value='d2.htm'>Вторник

<option value='d3.htm'>Среда

</select>
<input type="submit" value="Перейти">
</form>

<?php
     } // конец блока else
?>
</body> </html>