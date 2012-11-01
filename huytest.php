<html>
<body>
<form action="" method="post">
	<input type="text" name="n1"> 
	<select name="sel">
		<option name="add">+</option>
		<option name="subtract">-</option>
		<option name="multiply">X</option>
		<option name="divide">/</option>
	</select> 
	<input type="text" name="n2"> 
	<input type="submit" name="submit" value="Calculate">
</form>

<?php
	$submit = $_POST['submit'];
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$sel = $_POST['sel'];	
	
	if ($submit)
	{		
		switch ($sel) 
		{
			case '+':
			$total = $n1 + $n2;
			echo $total;
			break;
			
			case '-':
				$total = $n1 - $n2;
				echo $total;
				break;
			
			case 'X':
				$total = $n1 * $n2;
				echo $total;
				break;
				
			case '/':
				$total = $n1 / $n2;
				echo $total;
				break;
			default:
				echo "You must select an operation";
			break;
		}
	}
?>
</body>
</html>