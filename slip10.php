<html>
<body>
<form method="post" action="slip10.php">
enter first numbere:<br>
<input type="text" name="t1"><br>
enter second number<br>
<input type="text" name="t2"><br><br>
choice:<br>
1.find mod of two numbers:<br>
2.power of first number raised to second number:<br>
3.sum of first n numbers:<br>
4.find the factorial of given number:
<input type="text" name="t3">  <br><br>
<input type="submit">
      
</form>
</body>
</html>

<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$ch=$_POST["t3"];
switch($ch)
 {
  case 1: mod($a,$b);
  break;
  case 2: power($a,$b);
  break;
  case 3: sum($a,$b);
  break;
  case 4: factoriel($a,$b);
  break;
 }
 function mod($a,$b)
  {
   echo("remainder=".$a%$b);
  }
 function power($a,$b)
  {
    $p=1;
    while($b>0)
     {
       $p=$p*$a;
       $b--;
     }
    echo("power=".$p);
  }

 function sum($a,$b)
  {
   $c=$a+$b;
    echo("Sum=".$c);
  }
 function factoriel($a,$b)
  {
   $f=1;
   for($i=1;$i<=$b;$i++)
    {
     $f=$f*$i;
    }
   echo("factoriel=".$f);
  }

?>