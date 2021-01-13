const color = 'default';
$('.result').css({'background': 'rgba(111, 0.3, 0.2, 0.7)'});
$('#result').html(color.charAt(0).toUpperCase() + color.slice(1));

$(document).ready(function(){
	$('input[type=checkbox][name=color]').on('click', function(){
		let color = $(this).val();

		console.log("Warna yang dipilih = "+ color);

		switch(color){
			case "red":
			$('.result').hide().show('slow').fadeIn(1000).animate({
				left: '250px'
			}).css({
				'background':color
			});

			$('#result').html(color.charAt(0).toUpperCase()+color.slice(1));

			setTimeout(function(){
				$('input[name=color]').prop("checked", false);	
			}, 1000);
			
			break;

			case "coral":
			$('.result').hide().show('slow').fadeIn(1000).animate({
				left: '250px'
			}).css({
				'background':color
			});

			$('#result').html(color.charAt(0).toUpperCase()+color.slice(1));
			
			setTimeout(function(){
				$('input[name=color]').prop("checked", false);	
			}, 1000);
			
			break;

			case "blue":
			$('.result').hide().show('slow').fadeIn(1000).animate({
				left: '250px'
			}).css({
				'background':color
			});

			$('#result').html(color.charAt(0).toUpperCase()+color.slice(1));
			
			setTimeout(function(){
				$('input[name=color]').prop("checked", false);	
			}, 1000);
			
			break;
		}
	})

	$('#reset').on('click', function(){
		$('.result').hide().show('slow').fadeIn(1000).css({'background': 'rgba(111, 0.3, 0.2, 0.7)'});
		$('#result').html(color.charAt(0).toUpperCase() + color.slice(1));
	});

});
