$(document).ready(function(){
	document.querySelector('#title').append('Belajar ChartJS | ');
	ObjData.select.load('components/select-data.html');	
	ObjData.errors.hide();
	ObjData.card.hide();
	ObjData.loading.hide();

	const data = ObjData.dataCovid;
	
	$.ajax({
		url: `${ObjData.api.proxy}${ObjData.api.covid}${data}`,
		type: 'get',
		dataType: 'json',
		data: data,
		success: function(res){
			const dataProvinsi = res.list_data;
			const result = Object.keys(dataProvinsi).map((key) => [dataProvinsi[key].key]);

			$('#select-provinsi').append(`
				<option selected>Choose...</option>
			`);
			result.map((data, key) => (
				$('#select-provinsi').append(`
					<option value="${key}">${data}</option>
				`)
			));
		}
	});

});