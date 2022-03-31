<?php
if(isset($_POST['submit'])){
    $align = $_POST['align'] ?? '0';
    $valign = $_POST['valign'] ?? '0';
}
print "<table border = 1 height = 100 width = 100>";
print "<tr><td align = $align valign = $valign>Текст</td></tr>";
print "</table><br>";

print "<li><a href='z4-1a.htm'>Назад</a></li>";

?>