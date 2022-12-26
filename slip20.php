<html>
 <body>
  <form method="post" action="slip20.php">
   <br> Enter choice:
      <input type="text" name="t1">
      <br>1. Split an array into chunks 
      <br>2. Sort the array by values without changing the keys. 
      <br>3. Filter the even elements from an array.   
       <br> <input type="submit">
  </form>
 </body>
</html>
<?php
 $ch=$_POST["t1"];
 $a=array("om"=>"01","sai"=>"02","ram"=>"03","sham"=>"04");
 echo("<br> Original Array:");
 print_r($a);

 switch($ch)
  {
    case 1:$b=array_chunk($a,2);
           echo("<br> array chunk:");
           print_r($b);
           break;
   case 2: asort($a);
           echo("<br>sort values withought changing the keys:");
           print_r($a);
           break;
   case 3:function check_num($n)
            {
              if($n%2==0)
                return true;
              else
                return false; 
             }
            $b=array_filter($a,'check_num');
              echo("<br> Filter even numbers:");
               print_r($b);
             break;
  }
?>