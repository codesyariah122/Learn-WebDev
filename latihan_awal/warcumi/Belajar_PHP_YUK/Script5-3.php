<?php

require_once (dirname(__FILE__)).'/BaseClass.php';

class ConvertWaktuTempuh extends BaseClass {
	public function __construct($jam,$menit,$detik){
		$this->jam=$jam;
		$this->menit=$menit;
		$this->detik=$detik;
	}
	public function getConvert(){
		if(($this->jam == $this->jam)&&($this->menit == $this->menit)&&($this->detik == $this->detik)):
			$this->jamkeDetik = $this->jam * 3600;
			$this->menitkeDetik = $this->menit * 60;
			$this->detikkeDetik = $this->detik;
			$this->totalDetik = $this->jamkeDetik + $this->menitkeDetik + $this->detikkeDetik;
			echo "
			<table border=\"1\">
			<tr>
			<th>Jam</th>
			<th>Menit</th>
			<th>Detik</th>
			<th>Total Detik</th>
			</tr>
			<tr>
			<td>".$this->jam." Jam</td>
			<td>".$this->menit." Menit</td>
			<td>".$this->detik." Detik</td>
			<td>".$this->totalDetik." Second</td>
			</tr>
			</table>";
		endif;

	}

}