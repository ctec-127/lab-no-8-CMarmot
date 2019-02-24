<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<html>
<head>
	<title>Temperature Converter</title>
	<!-- add boostrap css link -->
	<!-- add a style.css link -->
	<!-- add link to jquery -->
	<!-- add link to bootstrap js -->
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
        
    </div>
</nav>
	
<?php 
// function to calculate converted temperature

include 'inc/functions.php';

?>

<div class="homedescription">
	<h1>Temperature Converter</h1>
	<h4>CTEC 127 - PHP with SQL 1</h4>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="section">
			<label for="temp">Temperature</label>
			<input type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">

			<select name="originalunit">
				<option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
		</div>
		<div class="section">
			<label for="convertedtemp">Converted Temperature</label>
			<input type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
			name="convertedtemp" size="7" maxlength="7" id="convertedtemp">

			<select name="conversionunit">
				<option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
		</div>
		<input type="submit" value="Convert"/>   
	</form>
</div><!-- end homedescription div-->
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>