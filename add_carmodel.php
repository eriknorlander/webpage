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

        if(empty($_POST['car_id'])){
            $data_missing[] = 'ID';
        } else {
            $id = trim($_POST['car_id']);
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
                echo 'Car Model added';
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
