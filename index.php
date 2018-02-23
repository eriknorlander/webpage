<html>
	<head>
		<style type="text/css">
			h1 {color:red}
		</style>

		<meta name = "description" content = "Welcome to The Body Shop"/>
		<meta name = "keywords" content = "Cars,Wheels,Fun" />
		<meta name = "author" content = "shrimpcocktail"/>

		<title>Welcome to The Body Shop</title>
	</head>

	<body>

		<h1> Welcome to my website </h1>

		<form action ="learnphp.php"  method="post">

		<table border ="0">

		<tr>
			<td>Name</td>
			<td align="center"><input type="text" name="username"  size ="30" /></td>
		</tr>

		<tr>
			<td>Adress</td>
			<td align="center"><input type="text" name="streetadress"  size ="30" /></td>
		</tr>

		<tr>
			<td>City</td>
			<td align="center"><input type="text" name="cityadress"  size ="30" /></td>
		</tr>

		<input type="hidden" name="Submitted" value="True" />

		<input type="submit" value="Send" />

	</body>

</html>
