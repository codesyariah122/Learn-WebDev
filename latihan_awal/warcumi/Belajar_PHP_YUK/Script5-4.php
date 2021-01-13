<?php
require_once (dirname(__FILE__)).'/BaseClass.php';

class KonversiDetik extends BaseClass {

	public function __construct($_totalDetik){
		$this->totalDetik=$_totalDetik;
	}

	public function mulaiKonversi() {
		if($this->totalDetik == $this->totalDetik):
			echo
			"<script language=\"javascript\">confirm(\"Total Detik = ".$this->totalDetik."\");
			</script>";
			//dalam jam
			$this->sisa = $this->totalDetik % 3600;
			$this->dalamJam = ($this->totalDetik - $this->sisa) / 3600;
			//konversi dalam menit
			$this->totalDetik = $this->sisa;
			$this->sisa = $this->totalDetik % 60;
			$this->dalamMenit = ($this->totalDetik - $this->sisa) / 60;
			//konversi dalam detik
			$this->totalDetik = $this->sisa;
			$this->sisa = $this->totalDetik % 1;
			$this->dalamDetik = ($this->totalDetik - $this->sisa) / 1;
			echo "
			<table border=\"1\">
			<tr>
			<th>Dalam Jam</th>
			<th>Dalam Menit</th>
			<th>Dalam Detik</th>
			</tr>
			<tr>
			<td>".$this->dalamJam." Jam</td>
			<td>".$this->dalamMenit." Menit</td>
			<td>".$this->dalamDetik." Detik</td>
			</tr>
			</table>";
		endif;
	}

}