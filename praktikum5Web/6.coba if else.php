<?php
	include "filephp.php";
	echo $angka;
	echo "<br>";
		if ($angka == 100){
			echo "bagus sangadd";
		}
		elseif ($angka<100&&$angka>85) {
			echo "bagus lah ya";
		}
		elseif ($angka<85&&$angka>70) {
			echo "hmm lumayan";
		}
		elseif ($angka<70&&$angka>65) {
			echo "coba lagi";
		}
		elseif ($angka<65) {
			echo "belajarrrrr";
		}

?>