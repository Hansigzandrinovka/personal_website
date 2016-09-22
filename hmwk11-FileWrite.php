<! Hans Brown - HW 11 -for Website Hw 2>
<!DOCTYPE html>
<html>

  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  </head>

  <body>

    <table id="mainTable_div">
      <form>


        <tr>

          <td rowspan="6"><img src="http://identity.ku.edu/images/KUlogo1C.gif" alt="KU Logo" align="left"></td>

          <td height="30">Username
            <input id="userName_div" type="text" name="username" style="width:65%;float:right">
          </td>

        </tr>

        <tr>

          <td height="30">Password
            <input id="pw_div" type="text" name="password" style="width:65%;float:right">
          </td>

        </tr>

        <tr>

          <td height="30">Confirm
            <input id="pw2_div" type="text" name="confirmpw" style="width:65%;float:right">
          </td>

        </tr>

        <tr>

          <td height="30">Image Link
            <input id="imgLnk_div" type="text" name="imagelink" style="width:65%;float:right">
          </td>

        </tr>

        <tr>

          <td height="30">
            <button id="subBtn" style="width:100%;float:right">Submit</button>
          </td>

        </tr>

        <tr>

          <td height="30">
            <button id="clrBtn" style="width:100%;float:right">Clear</button>
          </td>

        </tr>
		<tr>
		  <td id="userFeedBack">
		  No User Input Supplied
		  </td>
		</tr>

      </form>
    </table>

  </body>


<script>
$(document).ready(function() {
  //alert("JS Running");

  $("#userName_div").css("background-color", "green");
  //$("button").css("background-color","green");
  $("#subBtn").click(function(e) {
    e.preventDefault();
    //display the feedback to user
    //$("#userName_div").css("background-color","blue");
    if ($("#userName_div").val() == "") //if user didn't put anything in
    {
      alert("Please supply a Username");
    } else if ($("#pw_div").val() == "") //if did not supply password
    {
      alert("Please supply a Password");
    } else if ($("#pw_div").val() == $("#pw2_div").val()) //otw user, but possibly mismatching pws - enters if they are valid
    {
		//OTW, if valid input: do stuff
		
      //add a new row that has password and username on it
      $('#mainTable_div').append('<tr><td>' + "Logged User: " + $("#userName_div").val() + '</td><td>' + "Password: " + $("#pw_div").val() + '</td></tr>');

	  useFileMethod();
	  //update user Feedback
    } else {
      alert("Passwords don't match");
    }

  });

  $("#clrBtn").click(function(e) {
    e.preventDefault();

	$('#userName_div').val("");
	$('#pw_div').val("");
	$('#pw2_div').val("");
	$('#imgLnk_div').val("");
  });

  // Button Click Handler
});

var useFileMethod = function()
{
	
	var serverFile = "serverStorageRW.php"; //track location of serverFile
	var inputData = { personName: $('#userName_div').val() }; // Get the value of the search term box and put it in our data object. Call it 'personName'
	
	var callFromServer = $.post(serverFile, inputData, function(datafromserver) 
	{	// Send the data to the file specified (A)
			// At this point the server has finished working with the data we sent and has sent us a response (B)
			// the 'datafromserver' variable contains the data sent from the server.
			
			//$('#matches').html(datafromserver);
    		$('#userFeedBack').html("Running List of Users: " + datafromserver);
	});
}
</script>
