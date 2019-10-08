<?php

for ($i=1; $i <= 37; $i++) { 
	$r=0;
	for ($j=1; $j < 10; $j++) {
		if ($i % $j == 0){
			$r++;
		} 
	}
	if ($r <=2 ){
	 echo "$i";
	 echo "  ";
	}
}

?>