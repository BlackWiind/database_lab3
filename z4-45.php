<html> <head>
<title> Листинг 10-3. HTML-форма с выбором из списка
</title> </head> <body>

<form action="z4-47.php" method="get">

<p>Введите ваше имя

<p><input type="text" name="User">

<p>Что вы любите делать в свободное время <br>
   (можно выбрать несколько вариантов)

<p><input type="checkbox" name="hobby[]"
    value="слушать музыку">слушать музыку

<p><input type="checkbox" name="hobby[]"
    value="читать книгу">читать книгу

<p><input type="checkbox" name="hobby[]"
    value="смотреть телевизор">смотреть телевизор

<p><input type="checkbox" name="hobby[]"
    value="гулять на улице">гулять на улице

<p><input type="submit" name = "submit" value="Выбор сделан">

</form>
</body> </html>