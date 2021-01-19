$(document).ready(function(){
		// pilih provinsi lewat select input
	ObjData.select.on('click', '#pilih-provinsi', function(){
		const dataProv = $('#select-provinsi').val();

		if(dataProv === null || dataProv === 'Choose...'){
			ObjData.errors.show('slow').fadeIn(1000);
			$('.card-body').html('');
			ObjData.chartLine.hide();
			ObjData.chartGender.hide();
			ObjData.ageChart.hide();
		}else{
			$('.card-body').html('');			
			$('#select-provinsi').val('Choose...');

			ObjData.errors.hide('slow').slideUp(1000);
			ObjData.card.hide('slow').slideUp(1000);
			ObjData.loading.show('slow').load('components/loading.html').fadeIn(1000);

			$.ajax({
				url: `${ObjData.api.proxy}${ObjData.api.covid}${ObjData.dataCovid}`,
				type: 'get',
				dataType: 'json',
				data: dataProv,
				success: (res)=> {
					genderChart('', '');
					ageChart('', '');
					ObjData.loading.hide('slow').slideUp(1000);
					ObjData.card.show('slow').fadeIn(1000);

					const last_date = res.last_date;
					const setFirst = res.list_data[dataProv];
					const provName = setFirst.key;

					document.querySelector('#title').append(provName);

					 const resData = {
                        'Kasus': setFirst.jumlah_kasus,
                        'Dirawat': setFirst.jumlah_dirawat,
                        'Meninggal': setFirst.jumlah_meninggal, 
                        'Sembuh': setFirst.jumlah_sembuh
                    };

                    const dataCovid = Object.keys(resData).map((key)=>resData[key]);

                    // const labels = Object.keys(resData).map((key)=>key);

                    const labels = [
                    	`Kasus : ${setFirst.jumlah_kasus}`, 
                    	`Dirawat : ${setFirst.jumlah_dirawat}`, 
                    	`Meninggal : ${setFirst.jumlah_meninggal}`, 
                    	`Sembuh : ${setFirst.jumlah_sembuh}`
                    ];
                    
					const objData = Object.entries(resData);
					
					ObjData.cardBody.append(`
						<h5 class="card-title">${provName}</h5>
						<small class="text-success">Update terakhir : ${last_date}</small>
						<ul style="list-style:none;width:100%;">
							${objData.map((data) => (
								`<li>${data}</li>`
							)).join('')}
							<li class="mt-2"> <b>Lihat Berdasarkan : </b><br/>
								<button class="mt-2 btn btn-primary btn-sm" data-id="${dataProv}" id="gender">Gender</button> <button class="mt-2 btn btn-danger btn-sm" data-id="${dataProv}" id="age">Usia</button></li>
							</li>
						</ul>
					`)

					covidChart(last_date, labels, provName, dataCovid);

				}
			});

		}

	});
});