<?php
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