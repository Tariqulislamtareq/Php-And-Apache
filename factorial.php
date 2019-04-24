<html>
<body>
<h3>ENTER NUMBER</h3>
	<form action="" method="post">
		<label>Enter a number</label><input type="text" name="number" />
		<input type="submit" />
	</form>
</body>
</html>
<?php 
	
	if($_POST){
		
		$number = $_POST['number']; 
		
		if(($number % 2) == 0){
			
			echo "<h1>You entered an Even number</h1>";
			$num= $_POST['number'];
			$numStr= (String) $num;
			$revStr = strrev($numStr);
			$revNum = (int) $revStr;
			if($num == $revNum){
				echo "<h1>$num is Palindrome Number</h1>";
			}else{
				echo "<h1>It is not Plaindrome Number</h1>";
			}
			
		}else{
			echo "<h1>You entered an Odd number </h1>";
			$num = $_POST['number'];
			$fact=1;
			for($x=$num; $x>=1; $x--){
				$fact= $fact * $x;
			}
			echo "<h1>Factoril of $number is: $fact </h1>";
		}
	}
	
?>


