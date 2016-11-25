<?php
function scope() {
  $test = "this is a test for superglobals";
  echo $GLOBALS["test"];
}
$test = 'something else';
scope();
//$GLOBAL looks for global scope of variable first and returns that if possible.
echo '<br>';

print_r($_SERVER);
echo '<br>';
//returns an array of all server info
?>
<?php
function see() {
  print_r($_GET); //pulls data from url parameters as an array.
  echo '<br>';
}
 ?>
<form action="superglobals.php" method="see">
  <input type="text" name="name">
  <input type="submit">
</form>
<br></br>
<?php
function see2() {
  print_r($_POST);
  echo '<br>';
  print_r($_COOKIE["name"]);

}
 ?>


 <br></br>

 <form action="superglobals.php" method="see2">
   <input type="text" name="name2">
   <input type="submit">
 </form>
<?php
echo '<br>';
print_r($_FILES); //shows files uploaded via $_POST
$arry = array('this', 'is', 'a', 'session');
$_SESSION['arry'] = 1;
print_r($_SESSION); //good to push a bunch of variables onto a session to sore in arry. Perhaps user logins?

echo '<br>';
print_r($_SERVER);

var_dump($_REQUEST); //gets all post and get requests from server.
echo '<br>';
var_dump($_ENV); //gets all environment variables depending on shell you're working with.
 ?>
