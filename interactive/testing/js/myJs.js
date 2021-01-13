var rand=Math.random();

var player=prompt("Tebak Angka berapa :");

confirm(rand);

if(rand < 0.30){
  rand=30;
}else if(rand >= 0.30 && rand < 0.90){
  rand=90;
}else{
  rand=25;
}

if(player == rand){
  alert("Betul");
}else if(player < rand){
  alert("salah");
}

document.getElementById('hasil').innerHTML=rand