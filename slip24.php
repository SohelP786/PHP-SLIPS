<html>
 <body>
  <form method="post" action="slip24.php">
   enter source file name:
   <input type="text" name="t1">
   <br><br> enter destination file name:
    <input type="text" name="t1">
   <br><input type="submit">
  </form>
 </body>
</html>
<?php 
 $file1=$_POST["t1"];
 $file2=$_POST["t2"];
  
 $f1=fopen($file1,"r");
 $f2=fopen($file2,"w");

 if($f1==false)
   die("File not found....");

  while(!(feof($f1)))
    {
      $s1=fgets($f1);
      fputs($f2,$s1);
    }

 echo("file append successfully...");
 
 		
  
?>