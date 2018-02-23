<html>
<head>
		<style type="text/css">

		</style>

		<meta name = "description" content = "Welcome to The Body Shop"/>
		<meta name = "keywords" content = "Cars,Wheels,Fun" />
		<meta name = "author" content = "Erik Norlander"/>

		<title>Welcome to The Body Shop</title>
</head>

<body>

		<h1> Welcome to the Body Shop </h1>
    <h2> What would you want to know? </h2>

		<form action ="http://localhost/get_employees.php/"  method="post">

        <input type="hidden" name="Submitted" value="True" />

  		  <input type="submit" value="Employees">
    </form>

    <form action = "http://localhost/get_carmodels.php/" method="post">
      <input type="hidden" name="Submitted" value="True" />

      <input type="submit" value="Car Models">
    </form>

    <h2> Would you like to add something to our database? </h2>

    <form action ="http://localhost/add_carmodel.php/"  method="post">
        <p> Brand:
            <input type="text" name="brand" size = "30" value="" />
        </p>
        <p> Model:
            <input type="text" name="model" size = "30" value="" />
        </p>
        <p> Country:
            <input type="text" name="country" size = "30" value="" />
        </p>
        <p> Year:
            <input type="text" name="year" size = "30" value="" />
        </p>
        <p> Price:
            <input type="text" name="price" size = "30" value="" />
        </p>
        <p> Used:
            <input type="text" name="used" size = "30" value="" />
        </p>
        <p> ID:
            <input type="text" name="car_id" size = "30" value="" />
        </p>

        <p>
  		      <input type="submit" name="submit" value="New Car Model" />
        </p>
    </form>

    <form action ="http://localhost/get_employees.php/"  method="post">

        <input type="hidden" name="Submitted" value="True" />

  		  <input type="submit" value="Get All Sales">
    </form>

</body>

</html>
