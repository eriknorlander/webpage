<html>
<head>
<title> add_carmodel </title>

<body>
<?php
if(isset($_POST['submit'])) {
    $data_missing = array();
        /* Checking all the possible attributes.
        */
        if(empty($_POST['brand'])) {
            $data_missing[] = 'Brand';
        } else {
            $brand = trim($_POST['brand']);
        }

        if(empty($_POST['model'])){
            $data_missing[] = 'Model';
        } else {
            $model = trim($_POST['model']);
        }

        if(empty($_POST['country'])){
            $data_missing[] = 'Country';
        } else {
            $country = trim($_POST['country']);
        }

        if(empty($_POST['year'])){
            $data_missing[] = 'Year';
        } else {
            $year = trim($_POST['year']);
        }

        if(empty($_POST['price'])){
            $data_missing[] = 'Price';
        } else {
            $price = trim($_POST['price']);
        }

        if(empty($_POST['used'])){
            $data_missing[] = 'Used';
        } else {
            $used = trim($_POST['used']);
        }
        /*Done with that
        */

        if(empty($data_missing)){

            require_once('mysqli_connect.php');

            $query = "INSERT INTO carmodels (brand, model, country, year, price, used, car_id) VALUES (?, ?, ?, ?, ?, ?, NULL)";

            $stmt = mysqli_prepare($dbc, $query);

            mysqli_stmt_bind_param($stmt, "ssssds", $brand, $model, $country, $year, $price, $used);

            mysqli_stmt_execute($stmt);

            $affected_rows = mysqli_stmt_affected_rows($stmt);

            if($affected_rows == 1){
                echo 'Car Model added <br />';
                echo '<table align="left"
                cellspacing="5" cellpadding="8">

                <tr><td align="left"><b>Brand</b></td>
                <td align="left"><b>Model</b></td>
                <td align="left"><b>Country</b></td>
                <td align="left"><b>Year</b></td>
                <td align="left"><b>Price</b></td>
                <td align="left"><b>Used</b></td>';

                echo '<tr><td align="left">' .
                $brand . '</td><td align="left">' .
                $model . '</td><td align="left">' .
                $country . '</td><td align="left">' .
                $year . '</td><td align="left">' .
                $price . '</td><td align="left">' .
                $used . '</td><td align="left">';

                echo '</tr>';



                mysqli_stmt_close($stmt);
                mysqli_close($dbc);
            } else {
                echo 'Error Occurred<br />';
                echo mysqli_error();
                mysqli_stmt_close($stmt);
                mysqli_close($dbc);
            }
        } else {
            echo 'You need to enter the following data <br />';
            foreach($data_missing as $missing) {
                echo $missing . "<br />";
            }
        }
}

?>

</html>

