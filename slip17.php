<html>
 <body>
   <form method="post" action="slip17.php">
    Enter choice:
      <input type="text" name="t1">
       <br>1. ascending order sort by Value
       <br>2. ascending order sort by Key
       <br>3. descending order sorting by Value
       <br>4. descending order sorting by Key
       <br> <input type="submit">
 </body>
</html>
<?php
 $ch=$_POST["t1"];
 $a=array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40");
 echo("<br>original array:");
 print_r($a);
 switch($ch)
  {
    case 1:asort($a);
           echo("<br>After ascending order sort val:");
           print_r($a);
           break;
    case 2:ksort($a);
           echo("<br>After ascending order sort key:");
           print_r($a);
           break;
    case 3:arsort($a);
           echo("<br>After decending order sort val:");
           print_r($a);
           break;
    case 4:krsort($a);
           echo("<br>After decending order sort key:");
           print_r($a);
           break;
  }
?>