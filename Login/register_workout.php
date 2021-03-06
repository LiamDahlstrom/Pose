<?php
  // To make sure we don't need to create the header section of the website on multiple pages, we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page on our website. In this way if we need to make a small change to our header we just need to do it in one place. This is a VERY cool feature in PHP!
  require "header.php";
?>
    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <!--
          We can choose whether or not to show ANY content on our pages depending on if we are logged in or not. I talk more about SESSION variables in the login.inc.php file!
          -->
         <?php    
          echo '<div class="register_workout">
          <img src="" alt="logo" class="logo">
          <button class="register_workout">Register</button>'  
          ?>
        </section>
      </div>
    </main>
<?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "footer.php";
?>
