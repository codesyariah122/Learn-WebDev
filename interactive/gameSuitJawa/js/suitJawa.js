//™codesyariah-2019 
//suit jawa Game
/*
author: puji ermanto
          sanusi bisri
*/
alert("Selamat Datang \ndi game suit jawa");
var start=confirm('Mau coba main : \nkamu bisa memilih karakter berikut : \n-gajah \n-semut \n-orang');
if(start){

var tanya=true;

while(tanya){
//menangkap pilihan player

  var player=prompt('Silahkan Pilih : \n-gajah\n-semut\n-orang \n*Ketik di popup yg telah muncul');

//menangkap pilihan komputer
//menentukan dengan bilangan random

  var comp=Math.random();

//lakukan pengecekan bilangan random dari console.log()
//dan tentukan nilainya dalam variable hasil

  if(comp<0.34){
    comp='gajah';
  }else if(comp >= 0.34 && comp < 0.67){
    comp='orang';
  }else{
    //selain dari itu comp=semut
    comp='semut';
  }

  var hasil='';
//menentukan hasil
//dan membandingkannya sekaligus
//melakukan pengkondisian bersarang
  if(player==comp){
    hasil = '^|SERI|^';
//membandingkan hasil p dan comp
  }else if(player=='gajah'){

  /*if(comp=='orang'){
      hasil='*|MENANG|*';
    }else{
      hasil='~|KALAH|~';
    }*/
//mempersingkat pengkondisian dengan ternary
  hasil=(comp=='orang') ? 'hore...*|MENANG|*...hore' : 'yah.... ~|KALAH|~';

  }else if(player=='orang'){
  hasil=(comp=='gajah') ? '~|KALAH|~' : 'hore...*|MENANG|*...hore';

  }else if(player=='semut'){
  hasil=(comp=='orang') ? 'yah... ~|KALAH|~' : 'hore...*|MENANG|*...hore';

  }else if(player==''){
  hasil='kamu tidak mengisi prompt popup box nya.\n*Silahkan ulangi dengan merefresh(reload)browser kamu*';
 var lanjut = confirm(hasil);
   if(lanjut==true){
     continue;
   }else{
     break;
   }
  }else{
    hasil='Kamu memasukan pilihan yang salah...%|ULANGI ya bro..|% \n*pilihan harus sesuai dengan yang kami tentukan diawal*';
  }
//TAMPILKAN HASIL melalui popup??
  alert('Kamu memilih : ~'+player+'  \nKomputer memilih : ~'+comp+' \nMaka Hasilnya : '+hasil);
tanya=confirm('Main Lagi ... ?');

}//endwhile;

//tunjukan hasil
alert('Terima kasih Sudah bermain!');

//lakukan pengecekan
confirm('Yu mari...\n™Codesyariah-2019');

//end start
  }else{
    confirm('Bye.... \n™Codesyariah-2019');
  }