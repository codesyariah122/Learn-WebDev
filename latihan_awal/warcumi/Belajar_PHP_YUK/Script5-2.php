<?php
require_once 'BaseClass.php';


class Gaji extends BaseClass {

  public function setGajibersih($gajipokok,$tunjanganKerja){
		$this->gajiPokok=$gajipokok;
		$this->tunjangan=$tunjanganKerja;
		define('__PAJAK',self::$pajak);
	}

	public function getGajibersih(){
      if(($this->gajiPokok == $this->gajiPokok)&&($this->tunjangan == $this->tunjangan)):
				$this->gajiKotor = $this->gajiPokok + $this->tunjangan;
				$this->gajiBersih = $this->gajiPokok + $this->tunjangan - __PAJAK*($this->gajiPokok + $this->tunjangan);
				echo "
				<table border=\"1\">
				<tr>
				<th>Gaji Pokok</th>
				<th>Gaji Kotor</th>
				<th>Pajak</th>
				<th>Gaji Bersih</th>
				</tr>
				<tr>
				<td>".$this->gajiPokok."</td>
				<td>".$this->gajiKotor."</td>
				<td>".__PAJAK."</td>
				<td>".$this->gajiBersih."</td>
				</tr>
				</table>";
			endif;
	}

}

