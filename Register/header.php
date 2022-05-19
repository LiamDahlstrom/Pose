<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
 require "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- Here is the header where I decided to include the login form for this tutorial. -->
    <header>
      
      <div class="header-login">        
        <?php
        if (!isset($_SESSION['id'])) {
          echo 'Liams registreringssystem';
        }
        else if (isset($_SESSION['id'])) {
          echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
          </form>';
        }
        ?>
      </div>
    </header>
