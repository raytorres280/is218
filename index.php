
<?php

require_once 'Validator.php';

if ($_POST) {

  $validator = new LoginValidator();

  $email = $validator->validateEmail($_POST['email']);
  $pwd = $validator->validatePassword($_POST['password']);

  echo $email . ' ' . $pwd;
}
 ?>
 <!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Validation</title>
  </head>
  <body>

    <form action='index.php' method="post">

      <div>
        Email: <input type="text" name="email">
      </div>
      <div>
        Password: <input type="password" name="password">
      </div>
      <div>
        <input type="submit">
      </div>
    </form>
  </body>
</html>
