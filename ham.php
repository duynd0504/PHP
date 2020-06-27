<?php
	$number = 38 ; 
	if(kiemtra($number)== true){
		echo ' chan';  
	}
	else 
	{
		echo 'le' ; 
	}
	function kiemtra($number){
		if($number%2 ==0)
			return true; 
		else return false;
	}
echo 
?>