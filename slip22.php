<html>
 <body>
  <form method="post" action="slip22.php">
     Enter your choice:
      <br><input type="text" name="t1">
    <br>1. Insert an element in queue 
    <br>2. Delete an element from queue 
    <br>3. Display the contents of queue<br><br>

    <br>4. Insert an element in stack 
    <br>5. Delete an element from stack 
    <br>6. Display the contents of stack
      <input type="submit"> 
  </form>
 </body>
</html>
<?php
  $ch=$_POST["t1"];
  $a=array(11,22,33,44,55);
  echo("<br> original array=");
  print_r($a);
   switch($ch)
    {
     case 1:Array_push($a,77);
            echo("<br>after inserting in queue:");
            print_r($a);
            break;
    case 2:Array_pop($a);
           echo("<br>after deleting from queue:");
           print_r($a);
           break;
    case 3:echo("<br>display the contents of queue:");
           print_r($a);
           break;
    case 4:Array_unshift($a,65);
           echo("<br>after inserting in queue:");
            print_r($a);
            break;
    case 5:Array_shift($a);
           echo("<br>after deleting from queue:");
            print_r($a);
            break;
    case 6:echo("<br>display the content of queue:");
            print_r($a);
            break;
  }


?>