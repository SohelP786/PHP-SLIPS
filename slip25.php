<html>
 <body>
  <form method="post" action="slip24.php">
   enter file name:
   <input type="text" name="t1">
   <br><br>enter your choice:
      <input type="text" name="t2">
  <br>1. Display type of file. 
  <br>2. Display last modification time of file 
  <br>3. Display the size of file 
  <br>4. Delete the file
   <br><input type="submit">
  </form>
 </body>
</html>
<?php 
 $file_name=$_POST["t1"];
 $ch=$_POST["t2"];
 switch($ch)
 {
 	case 1:echo("<br> file type=".filetype($file_name));
 	      break;
 	case 2:echo("<br>file last access time=".date('h:m:s',fileatime($file_name)));
 	      break;
   case 3:echo("<br> file size=".Filesize("abc.txt"));
        break;
   case 4:unlink($file_name);
         echo("file deleted succ...");
         break;
 		
 } 
?>