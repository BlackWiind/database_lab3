<?php
if ($site != "") {
    header("Location: $site");
    exit;
}

else {
    $list_sites = array('yandex.ru',
                    'rambler.ru',
                    'google.com',
                    'yahoo.com',
                    'duckduckgo.com');
    $x = 0;
?>
<html> <head>
<title> Листинг 10-9. Посылка заголовка с помощью
        функции header() </title> </head> <body>
<form action = # method = "post">
<select name = "site">
<option value = ""> Choose a site:
<?php
while($x < sizeof($list_sites)):
    echo '<option value = "$list_sites[$x]">$list_sites[$x]';
    $x++;
?>
</select>
<input type="submit" value="Перейти">
</form>
</body> </html>
<?php
}
?>