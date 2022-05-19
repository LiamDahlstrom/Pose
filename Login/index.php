<?php
  require "header.php";
  require "includes/dbh.inc.php";
?>
    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <!--
          We can choose whether or not to show ANY content on our pages depending on if we are logged in or not. I talk more about SESSION variables in the login.inc.php file!
          --><?php
          if (!isset($_SESSION['id'])) {
            echo '<form action="includes/login.inc.php" method="post">          
              <input type="text" name="mailuid" placeholder="E-mail/Username"><br>
              <input type="password" name="pwd" placeholder="Password"><br>
              <button type="submit" name="login-submit" class="login">Login</button>
            </form>';
          }
          else if (isset($_SESSION['id'])) {
            echo '<form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit">Logout</button>
            </form>';
          }
          ?>
          
        </section>
      </div>
    </main>
<?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "footer.php";
?>
