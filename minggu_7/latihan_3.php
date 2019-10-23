<?php 
function faktorial($bil){
	$resoult=1;
for ($i=1; $i <= $bil; $i++){

	$resoult= $resoult*$i;
}
echo $resoult;
}

faktorial(4);

 ?>