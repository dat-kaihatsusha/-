<?php
$msg = []; 
if(isset($_POST['num_a']) && strlen($_POST['num_a'])>0 && isset($_POST['num_b']) && strlen($_POST['num_b'])>0){
	$a = $_POST['num_a'];
	$b = $_POST['num_b'];
	$msg[] = "Sum 2 numbers: $a + $b";
	require_once 'function.php';
	$sum = total($a,$b);
	$msg[] = "Result: $sum";
} else
$msg[] = 'You need to enter both a and b to calculate!';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		#result{
			color: red;
		}
	</style>
</head>
<body>
	<h1>Sum 2 numbers</h1>
	<p id="result">
		<?php 
		echo implode('<br>', $msg)
		?>
	</p>
	<form action="" method="post">
		Number a: <input type="number" name="num_a"> <br>
		Number b: <input type="number" name="num_b"> <br>
		<button type="submit">Result</button>
	</form>
</body>
</html>