<?php

function Get_hfbrownProjectIdea($index) {
	if($index == 0)
	{
		return "Settlers of Catan Board Game App";
	}
	else if($index == 1)
	{
		return "Motor powered Remote Control Drone";
	}
	else if($index == 2)
	{
		return "Rock Paper Scissors Advanced Game";
	}
	else if($index == 3)
	{
		return "Simple Unreal Engine game";
	}
	else if($index == 4)
	{
		return "Neat Little Android App";
	}
	else
	{
		return "Javascript Game";
	}
}
?>

<html>
	<head>
	</head>
	<body>
				<p><a href = "http://people.eecs.ku.edu/~hfbrown/index.html">I am returning to town...</a></p>
				<p></p>
				<p">Project Ideas:</p>
		<ul style="list-style-type:square">
			<li><?php echo Get_hfbrownProjectIdea(0); ?></li>
			<li><?php echo Get_hfbrownProjectIdea(1); ?></li>
			<li><?php echo Get_hfbrownProjectIdea(2); ?></li>
			<li><?php echo Get_hfbrownProjectIdea(3); ?></li>
			<li><?php echo Get_hfbrownProjectIdea(4); ?></li>
			<li><?php echo Get_hfbrownProjectIdea(5); ?></li>
		</ul>
		
	</body>
</html>