<?php
class BaseClass {


//@script 5-1
    //private static $percent=0.05;
	protected
             $penjualan,
             $pendapatan;

//@script 5-2
	private
            $gajiPokok,
	        $tunjangan,
	        $gajiKotor,
	        $gajiBersih;
	protected static $pajak=0.15;


//@script 5-3
	protected
             $jamkeDetik,
             $menitkeDetik,
	         $detikkeDetik,
	         $totalDetik,
	         $jam,
	         $menit,
	         $detik;

//@script 5-4
	private
	         $sisa,
	         $dalamJam,
             $dalamMenit,
	         $dalamDetik;

}

//define('PERCENT', self::$percent);