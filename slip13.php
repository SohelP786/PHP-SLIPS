<?php
  echo("<table border=1>");
  $n=0;
  for($i=1;$i<=8;$i++)
   {
     $n=$i;
     echo("<tr>");
      for($j=1;$j<=8;$j++)
       {
         $n++;
          if($n%2==0)
           echo("<td style='width:50;height:50;background-color:black;'> </td>");
          else
           echo("<td style='width:50;height:50;'> </td>"); 
       }
      echo("</tr>");
   }
  echo("</table>");
?>