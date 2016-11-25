<?php
function scope() {
  $test = "this is a test for superglobals";
  echo $GLOBALS["test"];

}
$test = 'something else';
scope();
//$GLOBAL looks for global scope of variable first and returns that if possible.
echo '<br><br>';

?>

<form action="superglobals.php" method="get">
  <input type="text" name="name">
  <input type="submit">
</form>

<br><br>

 <form action="superglobals.php" method="post">
   <input type="text" name="name2">
   <input type="submit">
 </form>
<?php
print_r($_GET['name']); //passes data to URL parameters to be used. good for user profiles or anything that woud would apply to using a unique URL, otherwise use post
echo '<br>';
print_r($_POST['name2']);//passes data thru body of the request.

echo '<br>';
echo "this is the files array: ";
print_r($_FILES); //shows files uploaded via $_POST
echo '<br>';
$arry = array('this', 'is', 'a', 'session');
$_SESSION['arry'] = 1;
echo "this is the sessions array: ";
print_r($_SESSION); //good to push a bunch of variables onto a session to store in arry variables can be single data or other arrays. vars are $_SESSION['vars'] keys, you set values. Perhaps user logins?

echo '<br>';

var_dump($_REQUEST); //gets all post and get requests from server.
echo '<br>';
var_dump($_ENV); //gets all environment variables depending on shell you're working with.

echo '<br>';
print_r($_SERVER);

//returns an array of all server info
 ?>
