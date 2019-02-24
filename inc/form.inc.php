
<!-- Form for Temp Conversion -->

<div class="homedescription mx-auto">
	<h1>Temperature Converter</h1>

	<br>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<!-- <form class = "form-inline"> -->
		<div class ="form-group">
			<label for="temp">Temperature</label><br>
			<input class="form-control" type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">

			<select class ="form-control" name="originalunit">
				<option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Fahrenheit</option>
				<option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
		</div>

		<div class ="form-group">
			<label for="convertedtemp">Converted Temperature</label><br>
			<input class="form-control" type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
			name="convertedtemp"  id="convertedtemp">
				<select class ="form-control" name="conversionunit">
				<option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Fahrenheit</option>
				<option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
		<br><br>
		<button type="submit" class="btn btn-default">Submit</button>
		</div>

	</form>
</div><!-- end homedescription div-->
