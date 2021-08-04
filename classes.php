<?php


	class Chef{
		function makeChicken(){
			echo "<p>The chef makes chicken</p>";
		}

		function sayHelloToCustomers(){
			echo "<p>Welcome to my restaurant";
		}
	}

	class ItalianChef extends Chef{
		function makeChicken(){
			echo "<p>The italian chef makes
			  chicken a la parmesana</p>";
		}
	}

	class Movie{
	
		private $title;
		private $rating;
		

		function __construct($t, $r){
			$this -> title = $t;
			$this -> setRating($r);		
		}

		function getRating(){
			return $this -> rating;
		}

		function setRating($rat){
			if($rat == "PG" ||
				$rat == "G" ||
				$rat == "PG-13" ||
				$rat == "R" ||
				$rat == "NR")
				{

					$this->rating = $rat;	
				}
			else{
				$this->rating = "NR";
			}
		}

		function getTitle(){
			return $this -> title;
		}

		function setTitle($ti){
			$this -> title = $ti;
		}


	}

	class Book{
	
		var $title;
		var $author;
		var $pages;

		function __construct($t, $a, $p){
			$this -> title = $t;
			$this -> author = $a;
			$this -> pages = $p;
		}


	}

	class Student{
	
		var $name;
		var $major;
		var $gpa;

		function __construct($n, $m, $g){
			$this -> name = $n;
			$this -> major = $m;
			$this -> gpa = $g;
		}

		function hasHonors(){
			return $this->gpa < 3.5 
				? false
				: true;
		}

		function showIfHasHonors(){
			if($this->hasHonors()){
				return $this->name." has honors";
			}else{
				return $this->name." does not have honors";
			}
		}


	}



?>