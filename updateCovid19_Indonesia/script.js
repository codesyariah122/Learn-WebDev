// Puji Ermanto - 2020
/*
source-code : 	https://github.com/codesyariah122/Learn-WebDev/blob/master/updateCovid19_Indonesia/readme.md
author  : Puji Eramnto
update : aug-2020
Semoga lekas sembuh semuanya
*/
	$(document).ready(function(){
		$('#data').hide();
		$('select').on('change', function(e){
			$('#detail').hide().slideUp(1000);
			let provinsi = $(this).val();

			$('#data').show('slow').fadeIn(1000);
			if(provinsi == "-Pilih Provinsi-"){
				alert("Pilih provinsi terlebih dahulu");
				$('select').val('');
			}else{
				$.ajax({
					url: 'dataProcess.php?provinsi='+provinsi,
					method: 'post',
					data: 'provinsi='+provinsi,
					success: function(response){
						if(response){
							$('select').val("-Pilih Provinsi-");
							console.log(response);
							$('#result').show('slow').fadeIn(1000);
							$('#result').html(response);
						}
					}
				})
			}
			
		});

	});
