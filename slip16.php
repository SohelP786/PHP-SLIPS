<html>
<body>
 <form method="post" action="slip16.php">
  Enter serial number of subjects
   <input type="text" name="t1"><br>
  enter 5 subject name:
    <input type="text" name="t2"><br>
  enter 5 subject marks:
    <input type="text" name="t3"><br>
  <input type="submit">
 </form>
</body>
</html>

<?php
 $s1=$_POST["t1"];
 $s2=$_POST["t2"];
 $s3=$_POST["t3"];

 $sno=explode(" ",$s1);
 $sname=explode(" ",$s2);
 $marks=explode(" ",$s3);
 $t=array_sum($marks);
 $p=$t/5;
 $grade="";
 if($p>90)
  $grade="O";
 else if($p>80)
  $grade="A+";
 else if($p>70)
  $grade="A";
 else if($p>60)
  $grade="B";
 else if($p>40)
  $grade="pass";
 else
  $grade="Fail";

 echo("<table border=1>");
  echo("<tr><th> Serial no</th>");
  echo("<th> Subject</th>");
  echo("<th> marks</th><tr>");
  for($i=0;$i<5;$i++)
   {
    echo("<tr><td>$sno[$i] <td>$sname[$i] <td>$marks[$i]</tr>");
   }
    echo("<tr> <td colspan=2>Total=<td>$t</tr>");
     echo("<tr> <td colspan=2>percentage=<td>$t</tr>");
     echo("<tr> <td colspan=2>grade=<td>$t</tr>");
     echo("</table>");
?>



