$(document).ready(function(){

	ObjData.cardBody.on('click', '#age', function(){
		const dataAge = $('#age').data('id');
		ObjData.chartGender.hide();

		$.ajax({
			url: `${ObjData.api.proxy}${ObjData.api.covid}${ObjData.dataCovid}`,
			type: 'get',
			dataType: 'json',
			data: dataAge,
			success: function(res){
				const setFirst = res.list_data[dataAge].kelompok_umur;
				const age = Object.keys(setFirst).map((key) => [key, setFirst[key]]);
				const count = Object.keys(setFirst).map((key) => [key, setFirst[key]]);

				const ageData = [
					age[0][1].key,
					age[1][1].key,
					age[2][1].key,
					age[3][1].key,
					age[4][1].key,
					age[5][1].key
				];
				const ageCount = [
					age[0][1].doc_count,
					age[1][1].doc_count,
					age[2][1].doc_count,
					age[3][1].doc_count,
					age[4][1].doc_count,
					age[5][1].doc_count
				];

				ageChart(ageData, ageCount);
			}
		})

	});

});