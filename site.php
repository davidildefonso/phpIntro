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
		<h2>Arrays</h2>
		<p>List of my new friends: </p>
		<ul>
			<?php
				$friends = array("Carlos", "Ana", "Lily"
				, "Natalia");

				for($i = 0; $i < sizeof($friends); $i++){
					echo "<li> $friends[$i] </li>";
				}

			?>
		</ul>
	</div>

	




	<div>
		<h2>Post Method</h2>
		<form action = "site.php" method ="post">
			
			<div>
				<label for = "username">username: </label>
				<input type = "text" name = "username">
			</div>
			<div>
				<label for = "password">password: </label>
				<input type = "password" name = "password">
			</div>					
			<input value = "Log in" type = "submit">

		</form>
	</div>

	<p>
		<?php
			echo $_POST["password"];
		?>
	</p>


	<div>
		<h2>Simple Calculator</h2>
		<form action = "site.php" method ="get">
			
			<div>
				<label for = "number1">Number 1: </label>
				<input type = "number" name = "number1">
			</div>
			<div>
				<label for = "number2">Number 2: </label>
				<input type = "number" name = "number2">
			</div>			
			<div>
				<select name="operation">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="X">X</option>
					<option value="÷">÷</option>
				</select>
				
			</div>
			<input value = "=" type = "submit">

		</form>
	</div>

	<?php
		$number1 = $_GET["number1"];
		$number2 = $_GET["number2"];
		$operation = $_GET["operation"];
		$result;

		if($operation == "+"){
			$result = $number1 + $number2;
		}else if($operation == "-"){
			$result = $number1 - $number2;
		}else if($operation == "X"){
			$result = $number1 * $number2;
		}else{
			$result = $number1 / $number2;
		}
		
	
	?>

	<?php
		echo "$number1 $operation $number2 = $result" ; 
	?>
	

</body>
</html>