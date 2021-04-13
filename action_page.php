<html>
  <head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
  </head>
  <body>
    <main><!-- this is our container -->
      <header>
      </header>
      <p>
        This is the landing page!
      </p>
      <?php
        $name=$_GET['name'];
        echo("<p>Your name is $name</p>");
        $key=$_GET['key'];
        echo("<p>Room Key is $key</p>");
      ?>
    </main>
  </body>
</html>
