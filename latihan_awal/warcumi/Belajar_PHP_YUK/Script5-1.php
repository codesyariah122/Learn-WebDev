<?php
require_once 'BaseClass.php';

class SalesMan extends BaseClass {

	private static $percent=0.05;

public function setPenjualan($penjualan){

$this->penjualan=$penjualan;

	}


	public function getPenjualan() {

define('PERCENT', self::$percent);

    if($this->penjualan == $this->penjualan):
$this->pendapatan=PERCENT * $this->penjualan;
		echo "
		<table border=\"1\">
		<tr>
		<td>Nilai Jual</td>
		<td>Percentase Perusahaan</td>
		<td>Komisi Salesman</td>
		</tr>
		<tr>
		<td>".$this->penjualan."</td>
		<td>".PERCENT."</td>
		<td style=\"font-weight:bold;\">Rp. ".number_format($this->pendapatan,2)."</td>
		</tr>";
      endif;

	}

}