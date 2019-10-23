<?php 

function harga_bet($nama,$color="red"){

	if(strlen($nama) <=10){
		$hasil= strlen($nama)*300;
			echo '<font color="'.$color.'">'.$nama.'</font><br>';
			echo '<font color="'.$color.'">'.$hasil.'</font><br>';
	}
	else if(strlen($nama) > 10 && strlen($nama) <= 20 ){
		$hasil= strlen($nama)*500;
			echo '<font color="'.$color.'">'.$nama.'</font><br>';
			echo '<font color="'.$color.'">'.$hasil.'</font><br>';
			
	}
	else
	{
		$hasil= strlen($nama)*700;
			echo '<font color="'.$color.'">'.$nama.'</font><br>';
			echo '<font color="'.$color.'">'.$hasil.'</font><br>';

	}
}


harga_bet("memukul","green");
harga_bet("meja","blue");
harga_bet("kucing garong yang tak pernah mandi","red");
harga_bet("rasenggan","yellow");


?>