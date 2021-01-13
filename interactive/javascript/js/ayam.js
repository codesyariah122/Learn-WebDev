//pujiermanto-codesyariah 2019
//dasar anak ayam lu
//freak to the beat
var ayam=prompt("Masukan jumlah anak ayam : *inputan harus angka dan bebas berapapun jumlahnya*");

alert("Anak ayam turun "+ayam);

//validasi
if(isNaN(parseInt(ayam))){

   confirm("error (anda tidak memasukan angka/tidak menginput apapun samasekali(nothing gitu)");
  alert("Anda menginput "+ayam);

  confirm("error bray");

}else{

var tanya=confirm("Apakah lanjut?");

if(tanya === true && ayam % 2 === 0 || ayam % 2 === 1 ){

for(var i=ayam; i >= 1; i--){
var n=i-1;
alert("Anak ayam turun "+i+" ,");
if(n >= 1){
alert("Mati satu tinggal "+n+",");
}
}
confirm("Mati satu tinggal induknya");
  confirm("the end....");
}else{
confirm("Byee...bye...!!");
}

}