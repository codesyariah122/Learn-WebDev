$(document).ready(function(){
	ObjData.cardBody.on('click', '#gender', function(){
		ObjData.chartAge.hide();
		const dataGender = $('#gender').data('id');

		$.ajax({
			url: `${ObjData.api.proxy}${ObjData.api.covid}${ObjData.dataCovid}`,
			type: 'get',
			dataType: 'json',
			data: dataGender,
			success: function(res){
				const setFirst = res.list_data[dataGender].jenis_kelamin;
				const gender = Object.keys(setFirst).map((key) => [key, setFirst[key]]);
				const count = Object.keys(setFirst).map((key) => [key, setFirst[key]]);

				
				const genderData = [
					gender[0][1].key,
					gender[1][1].key
				];
				const genderCount = [
					count[0][1].doc_count,
					count[1][1].doc_count,
				];
				
				genderChart(genderData, genderCount);

			}
		})

	});
});