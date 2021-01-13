$('.detail').on('click', function(){
	$('#detail').load('detail.php').fadeIn(1000);
	let key = $('#key').data('key');
	// alert(key);
	$.ajax({
		url:'detail.php?key='+key,
		type: 'post',
		data: 'key='+key,
		success: function(data){
			if(data){
				$('#detail').html(data).fadeIn(1000);
			}
		}
	})	
})