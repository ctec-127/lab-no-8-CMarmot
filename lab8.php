<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">    
    <title>Temperature Convertererer</title>
</head>

<body>
<div class =container-fluid>
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class ="blue">

	
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://en.wikipedia.org/wiki/Anders_Celsius">Mr. Celsius</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://imgur.com/gallery/3ZidINK">Celsius vs Fahrenheit</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://www.famousbirthdays.com/names/kelvin.html">Kelvins</a>
				</li>
		
			</ul>
		<!-- close blue -->
		</div> 
	</nav>
</div>
<div class="jumbotron">
	<div class="homedescription">
    <h1 class="display-4">Hello, nerds!</h1>
    <p class="description">This is some really important stuff for you to pay attention to!!!</p>
    <hr class="my-4">
    <p>Use this temperature converter to see what your friends in other countries are talking about when they complain about 30 degrees Celsius being hot .</p>
</div>
</div>
	
<?php 

// function to calculate converted temperature
function convertTemp($temp,$unit1,$unit2){
	switch ($unit1) {
		case 'celsius':
			if ($unit1 == "celsius" and $unit2 == "farenheit"){
				$F = $_POST['originaltemp'] * 9/5 + 32;
				return $F;
			} // end if
			if ($unit1 == "celsius" and $unit2 == "kelvin"){
				$K = $_POST['originaltemp'] + 273.15;
				return $K;
			} // end if
		case 'farenheit':
			if ($unit1 == "farenheit" and $unit2 == "celsius"){
				$C = ($_POST['originaltemp'] - 32 ) * 5/9;
				return $C;
			} // end if
			if ($unit1 == "farenheit" and $unit2 == "kelvin"){
				$K = ($_POST['originaltemp'] + 459.67) * 5/9;
				return $K;
			} // end if	
		case 'kelvin':
			if ($unit1 == "kelvin" and $unit2 == "celsius"){
				$C = $_POST['originaltemp'] - 273.15;
				return $C;
			} // end if
			if ($unit1 == "kelvin" and $unit2 == "farenheit"){
				$F = $_POST['originaltemp'] * 9/5 - 459.67;
				return $F;
			} // end if
		default:
			if ($unit1 == $unit2){
				return $temp;
			}
	} // end switch
} // end function
#CHECK TO SEE IF FORM WAS SUBMITTED
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$originalTemperature = $_POST['originaltemp'];
	$originalUnit= $_POST['originalunit'];
	$conversionUnit = $_POST['conversionunit'];
	$convertedTemp = convertTemp($originalTemperature,$originalUnit,$conversionUnit);
} // end if
if (isset($_POST['originalunit'])){
	$originalUnit = $_POST['originalunit'];
} else {
	// looks like the form wasn't being posted
	$originalUnit = "";
} // end if
if (isset($_POST['conversionunit'])){
	$conversionUnit = $_POST['conversionunit'];
} else {
  	// looks like the form wasn't being posted
	$conversionUnit = "";
} // end if
?>

<div class="homedescription">
	<h1>Temperature Converter</h1>
	<h4>CTEC 127 - PHP with SQL 1</h4>
	<br>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<form class = "form-inline">
		<div class ="form-group">
	
			<label for="temp">Temperature</label>
			<input class="form-control" type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">

			<select class ="form-control" name="originalunit">
				<option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
	

		</div>

		<div class ="form-group">
			<label for="convertedtemp">Converted Temperature</label>
			<input class="form-control"type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
			name="convertedtemp" size="7" maxlength="7" id="convertedtemp">


  				

				<select class ="form-control" name="conversionunit">
				<option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>


		<br>
		<button type="submit" class="btn btn-default">Submit</button>
		</div>

	</form>
</div><!-- end homedescription div-->
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>