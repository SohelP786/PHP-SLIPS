<html>
 <body>
  <form method="post" action="slip18.php">
   Enter choice:
    <input type="text" name="t1">
     a. Delete a small part from first string after accepting position and number of characters to 
       remove. 
     b. Insert the given small string in the given
      big string at specified position without removing 
     any characters from the big string. 
c. Replace some characters/ words from given big string with the given small string at 
specified position
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