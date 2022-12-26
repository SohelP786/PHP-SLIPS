<html>
  <body>
   <form method="post" action="slip8.php">
    Enter first string:
       <input type="text" name="t1"><br>
    <br>Enter second string:
       <input type="text" name="t2">
    <br>
 <br> 
      compare n chars:
     <input type="text" name="t3">
        <br>enter choice:
       <br> <input type="text" name="t4">
    <br> 1. Find whether the small string appears at the start of the large string. 
    <br>2. Find the position of the small string in the big string. 
    <br>3. Compare both the string for first n characters, also the 
             comparison should not be case sensitive.
    <br>
    <br>
    <input type="submit">

   <?php
     
    $s1=$_POST["t1"]; 
    $s2=$_POST["t2"];
    $ch=$_POST["t4"];
    switch($ch)
     {
        case 1:if(strstr($s1,$s2)==true)
                 echo("found");  
               else 
                echo("not found");
               break;
       case 2: $p=strpos($s1,$s2);
                if($p==false)
                  echo("not found");
                else
                  echo("small string found=".$p);
                break;
       case 3:$n=$_POST["t3"];
              $k=strncmp($s1,$s2,$n);
               if($K==0)
                echo("String are same");
               else if($K>0)
                echo("String 1 is greater");
               else if($K<0)
                echo("String 2 is greater");
               break;
     }
   ?>

   </form>
  </body>
</html>