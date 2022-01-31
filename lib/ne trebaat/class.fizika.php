<?php

class Fizika
{
	public function Spat($v,$t) {
		$S=$v*$t;
		echo 'S='.$S;
	}

	public function Vbrz($S,$t) {
		$V=$S/$t;
		echo 'V='.$V;
	}

	public function tVreme($S,$v) {
		$t=$S/$v;
		echo 't='.$t;
	}
}



?>