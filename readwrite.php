<?php

function Read_InputFile() {
	$filePath = "rw_file.txt";
	$filePointer = fopen($filePath,"a+"); //build pointer to file read in "rw_file" (is a stream)
	
	//echo "FileSize: " . filesize($filePath) . "<br>";
	
	$amountWritten = fwrite($filePointer,"<br>Viewed on: " . date('l jS \of F Y h:i:s A'));
	rewind($filePointer); //jumps back to beginning of file
	
	echo fread($filePointer,filesize($filePath) + $amountWritten); //reads from Pointer all text located at filePath
	
	
	
	fclose($filePointer); //close stream after done
	return;
}
?>

<html>
	<head>
	</head>
	<body>
				<p><a href = "http://people.eecs.ku.edu/~hfbrown/index.html">I am returning to town...</a></p>
				<p></p>
				<p">Last Update:</p>
		<ul style="list-style-type:square">
			<li><?php echo Read_InputFile(); ?></li>
		</ul>
		
	</body>
</html>