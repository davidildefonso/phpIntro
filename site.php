<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$name = "David";
		$middleName = strtolower("ALEJANDRO");				
		$nameLength = strlen($name);
		$firstMiddleNameLetter = $middleName[0];

		echo  "<h1>HELLO WORLD</h1>
		<hr>
		 <p>this is $name $middleName</p>
		 <p>my name has $nameLength letters.</p>
		 <p>my middle name starts with letter 
		  $firstMiddleNameLetter</p>
		 ";

	?>

	<div>
		<form action = "site.php" method ="get">
			
			<div>
				<label for = "username">Username: </label>
				<input type = "text" name = "username">
			</div>
			<div>
				<label for = "password">Password: </label>
				<input type = "password" name = "password">
			</div>			
			<input type = "submit">

		</form>
	</div>

	<p>username: <?php echo $_GET["username"];?></p>
	<p>password: <?php echo $_GET["password"];?></p>
	
	

</body>
</html>