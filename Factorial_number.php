<form action="" method="post">
	
	<h3> Factorial of any number </h3>
	<br>
	Enter any number: <input type="text" name="fact_number" value=""><br>
	<input type="submit" name="submit" value="submit">
</form>	

<?php
	if(isset($_POST['submit'])){
		$number = $_POST['fact_number']; /*number to get factorial */
		
		$fact   = 1;
		for($k=1;$k<=$number;$k++)    
		   {
			$fact =  $fact*$k;	//	Logic of Factorial number 
		    
		   }
		echo "Factorial of $number is ".$fact;

	}

?> 
