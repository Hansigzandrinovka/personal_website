<! Hans Brown - HW 11 -for Website Hw 2>
<?php

//=========== SET TIMEZONE =======================
date_default_timezone_set('America/Denver');

//=========== PHP ERROR REPORTING ================
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Declare the array that holds all our possible values
//$arrayToMatch = array("Smith", "MisterSmith", "JoBob", "BillyBob", "Bob Smith", "Whiskey Foxtrot", "House Bravo", "Helldivers", "Dogmeat"); //if user input comes close to matching any of these, return them

if(!isset($_POST)){ // Make sure that something was sent from the javascript
	return; // If nothing was sent then stop everything
}
	
// Get the data that JavaScript posted to us in index.php at Line (A)
$inputValue = $_POST['personName']; //look for input supplied under the name "personName"

//add it to file, then return list of users
$filePath = "usersFile.txt"; //access usersFile for rw
$filePointer = fopen($filePath,"a+");
$amountWritten = fwrite($filePointer,"<br>" . $inputValue); //write user name to file
rewind($filePointer); //jumps back to beginning of file
$outputString = fread($filePointer,filesize($filePath) + $amountWritten); //return the amount we wrote
fclose($filePointer); //close access to file
echo $outputString;
// Create a new string to hold our results

// Loop through the array and add each element that contains the input 

// Send the string back to Javascript where it will appear in the "datafromserver" variable in Line (B)
?>