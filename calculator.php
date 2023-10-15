<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div align="center" style="background: skyblue; box-sizing: border-box; display: inline-block; margin-left: 600px;     margin-top: 220px;">
		<h1>Calculator</h1>
			<form action="calculator.php" method="post">
		<table>
			<tr>
				<td>Enter Num 1:</td>
				<td><input type="Num" name="num1"></td>
			</tr>
			<tr>
				<td>Enter Num 2:</td>
				<td><input type="Num" name="num2"></td>
			</tr>
			<tr>
				<td>Enter operator:</td>
				<td>
				 <input type="radio" name="radio" value="add">Addition <br>
				 <input type="radio" name="radio" value="sub">Subtraction <br>
				 <input type="radio" name="radio" value="mul">Multiplication <br>
				 <input type="radio" name="radio" value="div">Division <br>
				 </td>
			</tr>
			<!-- <tr>
				<td>Enter Num operator:</td>
				<td><input type="text" name="op"></td>
			</tr> -->
			<tr>
				<td ><input type="submit" name="submit" value="calculate"></td>
			</tr>
		</table>
	</form>
	</div>

	<?php
		print_r($_POST);
		$num1=$_POST['num1'];
		$op =$_POST['radio'];
		$num2=$_POST['num2'];
		$result;
		// $sum=$num1 $add $num2;
		if($op=='add')
		{
			$result=$num1+$num2;
		}
		elseif ($op=='sub') 
		{
			$result=$num1-$num2;	 
		}
		elseif ($op=='mul') 
		{
			$result=$num1*$num2;	 
		}
		elseif ($op=='div') 
		{
			$result=$num1/$num2;	 
		}

		// isset($result)

			echo "Result :", $result;
		
	?>
</body>
</html>