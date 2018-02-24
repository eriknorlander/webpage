<?php
require_once('mysqli_connect.php');

$query = "SELECT * FROM carmodels";
$response = @mysqli_query($dbc, $query);


// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>Brand</b></td>
<td align="left"><b>Model</b></td>
<td align="left"><b>Country</b></td>
<td align="left"><b>Year</b></td>
<td align="left"><b>Price</b></td>
<td align="left"><b>Used</b></td>
<td align="left"><b>ID</b></td>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
    while($row = mysqli_fetch_array($response)){

        echo '<tr><td align="left">' .
        $row['brand'] . '</td><td align="left">' .
        $row['model'] . '</td><td align="left">' .
        $row['country'] . '</td><td align="left">' .
        $row['year'] . '</td><td align="left">' .
        $row['price'] . '</td><td align="left">' .
        $row['used'] . '</td><td align="left">' .
        $row['car_id'] . '</td><td align="left">';

        echo '</tr>';
    }

echo '</table>';

} else {

    echo "Couldn't issue database query<br />";

    echo mysqli_error($dbc);
}
$html_content="<p>hello this is sample text";
$json_array=array(

  'content'=>50,
  'html_content'=>$html_content
);

?>

