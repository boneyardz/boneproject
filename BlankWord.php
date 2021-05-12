<?php
  error_reporting(E_ALL);
  include("includes/page_top.php");
  $word="";
  //GET THE WORDS FROM BLANK_WORD
  $filehandle=fopen("resources/blank_word.txt","r"); //175 WORDS
  while($row=fgetcsv($filehandle)) $BlankWord[]=$row[0];
  fclose($filehandle);
  //GET THE WORDS FROM WORD_BLANK
  $filehandle=fopen("resources/word_blank.txt","r"); //323 WORDS
  while($row=fgetcsv($filehandle)) $WordBlank[]=$row[0];
  fclose($filehandle);
  //print_r($list);
  //echo(count($list));
  //echo(rand(1,count($list)-1));
  $choice=random_int(1,2);
  switch($choice){
    case 1:
      $word=$BlankWord[random_int(1,count($BlankWord)-1)];
      break;
    case 2:
      $word=$WordBlank[random_int(1,count($WordBlank)-1)];
      break;
      default:
        $word="oops";
	}
?>
<h3>BlankWord</h3>
<form action="fred.php">
	<?php
	  switch($choice){
    case 1:
      echo("<label for='answer'>____ $word</label>\n");
      break;
    case 2:
      echo("<label for='answer'>$word ____</label>\n");
      break;
      default:
        $word="oops";
	  }
	?>
    <input type="text" id="answer" name="answer" placeholder="Your Answer">
  <input type="submit" value="Enter">
</form>
<?php include("includes/page_bottom.php"); ?>
