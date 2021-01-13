// function interactive() {

// 	let nama = prompt('Nama Anda : ');
// 	let email = prompt('Email Anda : ');

// 	if(nama && email){
// 		document.getElementById('legend').innerHTML = nama;
// 		document.getElementById('header').innerHTML = nama;
// 		document.getElementById('nama').innerHTML = nama;
// 		document.getElementById('email').innerHTML = email;

// 		document.getElementById('header').style.color = "brown";
// 		document.getElementById('email').style.color = "firebrick";
// 	}else{
// 		document.getElementById('nama').innerHTML = "-";
// 		document.getElementById('email').innerHTML = "-";
// 	}

// }


function interactive() {
	const nama = prompt('Siapa nama kamu ? ');
	const ayam = prompt('Masukan Jumlah anak ayam ? ');


	if(isNaN(parseInt(ayam))){
		alert('yang anda input = '+ayam);
		confirm ('Anda harus menginput angka');
	}else{
		const tanya = confirm('Apa mau lanjut ? ');
		if(tanya === true && ayam % 2 === 0 || ayam % 2 === 1){
			for(let i = ayam; i >= 1; i--){
				let n=i-1;
				alert('Anak ayam turun '+i+' ,');
				if(n >= 1){
					alert('Mati satu tinggal '+n+' ,');
				}
			}

			confirm('Mati satu tinggal induknya');
			document.getElementById('legend').innerHTML = nama;
			document.getElementById('header').innerHTML = nama;
		}
	}
}