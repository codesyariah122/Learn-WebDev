<?php
trait Sapaan {

    public function salam($nama){
    $this->nama=$nama;
      return
        "Assalamu'alaikum? ... {$this->nama}<br>" . PHP_EOL;
    }

}