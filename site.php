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
		<h2>Zodiac Sing Finder</h2>
		<p>Enter your birthdate day and month: </p>
		<form action = "site.php" method ="get">
			
			<div>
				<label for = "day">day: </label>
				<input type = "text" name = "day">
			</div>
			<div>
				<label for = "month">month: </label>
				<input type = "text" name = "month">
			</div>		
			<input value = "find zodiac" type = "submit">

		</form>

		<?php
			$day = $_GET["day"];
			$month = $_GET["month"];

			$date = new DateTime("2021-".$month."-".$day);

			$firstDayOfYear = new DateTime("2021-01-01");
			
			$acuarioStart = new DateTime("2021-01-20");
			$piscisStart = new DateTime("2021-02-20");
			$ariesStart = new DateTime("2021-03-21");
			$tauroStart = new DateTime("2021-04-21");
			$geminisStart = new DateTime("2021-05-21");
			$cancerStart = new DateTime("2021-06-21");
			$leoStart = new DateTime("2021-07-23");
			$virgoStart = new DateTime("2021-08-23");
			$libraStart = new DateTime("2021-09-23");
			$scorpioStart = new DateTime("2021-10-23");
			$sagitarioStart = new DateTime("2021-11-23");
			$capricornioStart = new DateTime("2021-12-23");

			$lastDateOfYear = new DateTime("2021-12-31");

			$result = "";

			$signs = array();			
			
			$signs[] = array("acuario",$acuarioStart);
			$signs[] = array("piscis",$piscisStart);
			$signs[] = array("aries",$ariesStart);
			$signs[] = array("tauro",$tauroStart);
			$signs[] = array("geminis",$geminisStart);
			$signs[] = array("cancer",$cancerStart);
			$signs[] = array("leo",$leoStart);
			$signs[] = array("virgo",$virgoStart);
			$signs[] = array("libra",$libraStart);
			$signs[] = array("escorpio",$scorpioStart);
			$signs[] = array("sagitario",$sagitarioStart);
			$signs[] = array("capricornio",$capricornioStart);			
		


			for($i = 0; $i < sizeof($signs) - 1; $i++){
				if($date > $signs[$i][1] &&
				$date < $signs[$i+1][1]){
					$result = $signs[$i][0];
				}
				
			}

			if($result == "") $result = "capricornio";

			echo "Your zodiac sign is $result";



		//	$diff = $firstDayOfYear->diff($capricornioStart);
		//	$greater =  $firstDayOfYear > $capricornioStart;
		//	echo $greater == 0;
		//	$compare = var_dump($firstDayOfYear > $capricornioStart); 
		//	echo $compare;
			//echo $diff->format('%r%d days');
		//	echo  date_format($diff, "d/m/y");

			switch($date){

			}

	//		echo  date_format($date, "d/m/y");


			function findZodiacSin($date){
				
			}

			

			

		?>


	</div>



	
	<div>
		<h2>Simple Calculator</h2>
		<form action = "site.php" method ="get">
			
			<div>
				<label for = "number1">Number 1: </label>
				<input type = "text" name = "number1">
			</div>
			<div>
				<label for = "number2">Number 2: </label>
				<input type = "text" name = "number2">
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
		$number1 = floatval($_GET["number1"]);
		$number2 = floatval($_GET["number2"]);
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
















	<div>
		<h2>Functions</h2>

		<?php
			$sentence = "the vida is loca";


			function reverseString($string){
				$result = "";
				for($i = strlen($string) - 1; $i >= 0; $i--){
					$result = $result.$string[$i];
				}

				return $result;
			}

			$reversed = reverseString($sentence);

			echo "<p>$reversed</p>"

		?>


	</div>
	



	<div>
		<h2>Associative Arrays</h2>

		<?php
			$grades = array("JIM" => "A+",
				"PAM" => "B-",
				"TOM" => "C-"
			);

		?>

		<p>Student grades: </p>
		<ul>
			<?php				

				foreach($grades as $student => $grade){
					echo "<li>  $student got a $grade </li>";
				}

			?>
		</ul>

	</div>







	<div>
		<h2>Checkboxes example</h2>
		<form action = "site.php" method ="post">
			
			<div>
				<label >Apples: </label>
				<input type = "checkbox" name = "fruits[]"
				 value="apples">
			</div>
			<div>
				<label >Bananas: </label>
				<input type = "checkbox" name = "fruits[]"
				 value="bananas">
			</div>
			<div>
				<label >Oranges: </label>
				<input type = "checkbox" name = "fruits[]"
				 value="oranges">
			</div>
			<input value = "Send" type = "submit">

		</form>


		<p>fruits selected: </p>
		<ul>
			<?php
				$fruits = $_POST["fruits"];

				for($i = 0; $i < sizeof($fruits); $i++){
					echo "<li> $fruits[$i] </li>";
				}

			?>
		</ul>

	</div>


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


	

</body>
</html>