<?php
/**
 * index.php is the entry page for our website
  * @author johnargles
   * @version 15/04/2021
    */
  /* bring in the starting html for our webpage */
     include("includes/page_top.php"); ?>
      <form action="action_page.php">
        <!-- label for="key">Room Key:</label -->
        <input type="text" id="key" name="key" placeholder="Room Key">
        <!-- label for="name">Input Name:</label -->
        <input type="text" id="name" name="name" placeholder="Your Name">
        <input type="submit" value="Enter">
      </form>
<?php
  // bring in the ending html for our webpage
   include("includes/page_bottom.php"); ?>
