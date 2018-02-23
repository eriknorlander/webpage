<?php
require_once('mysqli_connect.php');

$query = "SELECT * FROM employees";
$response = @mysqli_query($dbc, $query);


// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>First Name</b></td>
<td align="left"><b>Last Name</b></td>
<td align="left"><b>ID</b></td>
<td align="left"><b>Birth date</b></td>
<td align="left"><b>Email</b></td>
<td align="left"><b>Adress</b></td>
<td align="left"><b>Sales</b></td>
<td align="left"><b>Phone</b></td>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' .
$row['first_name'] . '</td><td align="left">' .
$row['last_name'] . '</td><td align="left">' .
$row['employee_id'] . '</td><td align="left">' .
$row['birth_date'] . '</td><td align="left">' .
$row['email'] . '</td><td align="left">' .
$row['Adress'] . '</td><td align="left">' .
$row['sales'] . '</td><td align = "left">' .
$row['mobile_phone'] . '</td><td align="left">' ;

echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}


?>
