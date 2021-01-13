//Puji Ermanto - Warcumi(2018)
function HaiGaes(){
var nama = prompt('Who Are You : ');
	if(nama !== ""){
		alert('Hai '+nama);
		confirm('Selamat Datang Di Warcumi '+nama);
	}else if(nama === ""){
		alert('Ga asik ah');
		confirm('Selamat Datang Di Warcumi yah');
	}
	var tanya = prompt("0.5 * 44.4 / 2 = ");
	var jawab = Math.floor((0.5*44.4)/2);
	if(tanya == jawab){
		alert("Jawaban Benar");
		confirm("Selamat Datang di warcumi "+nama);
	}else{
		alert("Payah Jawaban Anda Salah");
	}
}
HaiGaes();