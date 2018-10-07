<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tính Tổng</title>

</head>
<body>
	<?php 
	function TinhTong($a, $b )
	{
		
		return $a + $b;
	}
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$sum = TinhTong($number1, $number2 );
	echo 'Kết quả tổng hai số' .@number1. 'và' .@number2. 'là' .$sum
	?>
</body>
</html>