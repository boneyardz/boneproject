<?php include("includes/page_top.php");
error_reporting(E_ALL);
  $word="";
  $list[]="";
  $filehandle=fopen("resources/blank_word.txt","r");
  while($row=fgetcsv($filehandle))
  {
  $list[]=$row[0];
  }
  fclose($filehandle);
  print_r($list);
  echo(count($list));
  echo(rand(1,count($list)-1));
  $word=$list[rand(1,count($list)-1)];
?>
<h3>BlankWord</h3>
<form action="fred.php">
  <label for="answer"><?php echo($word); ?></label>
  <input type="text" id="answer" name="answer" placeholder="Your Answer">
  <input type="submit" value="Enter">
</form>
<?php include("includes/page_bottom.php"); ?>
