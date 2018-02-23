<html>

<?php
  /*
  */
  echo "<p>\Data processed</>";

  date_default_timezone_set('UTC');

  echo date('h:i:s:u a, l F jS Y e');

  $usersName = $_POST['username'];
  $streetAdress = $_POST['streetadress'];
  $cityAdress = $_POST['cityAdress'];

  echo $usersName  . "</br>"
?>

</html>
