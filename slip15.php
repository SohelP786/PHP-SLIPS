<html>
 <body>
  <form action="slip15.php" method="post">
    Enter string :
      <input type="text" name="t1"><br>
   <br> Enter choice:
    <input type="text" name="t2"><br>
    enter padding size:
      <input type="text" name="t3"><br>
   <br> To select first 5 words from the string<br>
   <br>1. Convert the given string to lowercase and then to Title case.
   <br>2. Pad the given string with “*” from left and right both the sides. 
   <br>3. Remove the leading whitespaces from the given string. 
   <br>4. Find the reverse of given string<br>
     <input type="submit">
   <br>
  </form>
 </body>
</html>
<?php
  $s1=$_POST["t1"];
  $ch=$_POST["t2"];
  switch($ch)
   {
     case 1:$s2=strtolower($s1);
            $s3=ucwords($s2);
             echo("<br> Lower case=".$s2);
             echo("<br> Title case=".$s3);
             break;
     case 2:$n=$_POST["t3"];
            $s2=str_pad($s1,$n,"*",STR_PAD_BOTH);
             echo("string=".$s2);
            break; 
     case 3:$s2=ltrim($s1);
            echo("string=".$s2);
             break;
     case 4: $s2=strrev($s1);
             echo("reverse string=".$s2);
             break;
   }
?>