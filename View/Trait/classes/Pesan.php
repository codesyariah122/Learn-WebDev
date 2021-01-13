<?php

class Pesan extends BaseClass  {
  // mengeliminasi method salam()
  // dari trait Ucapan dan Sapaan
  // mengguanakan insteadof
  use Ucapan, Selamat, Sapaan {
    Selamat::salam insteadof
      Ucapan, Sapaan;
    Sapaan::salam as salamKedua;
  }
}