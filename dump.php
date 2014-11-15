<?php
/**
 Dumps formatted information about a variable
 */
function dump($array,$arrayName = ''){   
	echo "<br>"; 
	echo $arrayName;  
	echo "<pre>";  
	print_r($array);  
	echo "</pre>";  
}  
?>