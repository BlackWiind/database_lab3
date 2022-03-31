<html> <head>
<title> Листинг 7-6.  Вложенные циклы for </title>
</head> <body>

<?php
$color = "blue";
$redcolor = "Red";
print "<table border=1 cellpadding = 5>\n";
for ($y=0;  $y <= 10;  $y++)
     {print "<tr>\n";
      for ($x=0;  $x <= 10;  $x++)
          { 
		   if ($x == 0 and $y ==0){
			   print "\t<td bgcolor = $color><font color = $color>-</font>";			   
		   } else {
			   print "\t<td><font color = $color>";
			   print ($x+$y)."</font>";
		   }
           print "</td>\n";
          }
      print "</tr>\n";
     }
print "</table>";

?>
</body> </html>