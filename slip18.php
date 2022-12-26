<html>
 <body>
  <form method="post" action="slip18.php">
   Enter choice:
    <input type="text" name="t1">
     <br> 1. Reverse the order of each element’s key-value pair.
     <br> 2. Traverse the element in an array in random order.
     <br> 3. Convert the array elements into individual variables.
     <br> 4. Display the elements of an array along with key. 
     <br><input type="submit">
  </form>
 </body>
</html>

 <?php
  $ch=$_POST["t1"];
  $a=array("om"=>"10","sai"=>"11","ram"=>"12","aman"=>"13");
  echo("original array:");
  print_r($a);
  switch($ch)
  {
    case 1:$b=array_reverse($a);
           echo("<br> reverse array:");
           print_r($b);
           break;

    case 2:shufle($a);
           echo("<br>");
           print_r($a);
           break;
 
    case 3:extract($a);
            echo("<br>");
           print_r($a);
           break;

    case 4:print_r($a);
            echo("<br>");
           break;
  }
  
 ?>