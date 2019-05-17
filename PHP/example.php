<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>example.com greetings</title>
  </head>
  <body>
    <p>
      Hello,
      <?php
    // We have now gone into php mode. Instead of static variable. the next three lines could easily be database calls or even cookies; or they could have been passed from a form.
      $firstname = 'Joyce';
      $lastname = 'Park';
      $title = 'Ms.';
      echo "$title $lastname";
    // OK. We are going back to HTML
      ?>.
    </p>
    <p>
      We know who you are! Your first name is <?php echo $firstname; ?>.
    </p>
    <p>
      You are visitng our site at <?php echo date('Y-m-d H:i:s'); ?>
    </p>
    <p>
       Here is a link to your account management page: <a href="www.example.com/accounts/<?php echo "$firstname$lastname"; ?>/"><?php echo $firstname; ?>'s account management page</a>
     </p>
  </body>
</html>
