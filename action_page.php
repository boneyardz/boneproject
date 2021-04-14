<?php include("includes/page_top.php"); ?>
      <p>
        This is the landing page!
      </p>
      <?php
        $name=$_GET['name'];
        echo("<p>Your name is $name</p>");
        $key=$_GET['key'];
        echo("<p>Room Key is $key</p>");
      ?>
<?php include("includes/page_bottom.php"); ?>
