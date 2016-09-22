<! Hans Brown - HW 11 -for Website Hw 1>
<?php

//=========== SET TIMEZONE =======================
date_default_timezone_set('America/Denver');

//=========== PHP ERROR REPORTING ================
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Declare the array that holds all our possible values
$arrayToMatch = array("Smith", "MisterSmith", "JoBob", "BillyBob", "Bob Smith", "Whiskey Foxtrot", "House Bravo", "Helldivers", "Dogmeat"); //if user input comes close to matching any of these, return them

if(!isset($_POST)){ // Make sure that something was sent from the javascript
	return; // If nothing was sent then stop everything
}
	
// Get the data that JavaScript posted to us in index.php at Line (A)
$inputValue = $_POST['personName']; //look for input supplied under the name "personName"


// Create a new string to hold our results
$outputString = "";

// Loop through the array and add each element that contains the input 
for($i = 0; $i < sizeof($arrayToMatch); $i++){
	if(strlen(trim($inputValue)) == 0){ //if trimmed string has length of 0
		// Since the input value is blank we just return all the elements
		$outputString = $outputString . $arrayToMatch[$i] . "<br />"; //stick the string on the end
	}else{
		$contains = strpos($arrayToMatch[$i],$inputValue); //looks through current string in array, and attempts to match inputValue to a continuous selection of Chars in the string, ie nowelcome would contain welcome
		if($contains !== false){  //if a number, (so not false), then there is at least one in string
			// The string contains our input value
			$outputString = $outputString . $arrayToMatch[$i] . "<br />";// Append to our output string. (In php '.' means concatenate)
		}
	}
}

// Send the string back to Javascript where it will appear in the "datafromserver" variable in Line (B)
echo $outputString;

?>