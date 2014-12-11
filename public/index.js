$(document).ready(function(){
	$('#state').change(function(){
		var value = $(this).val();
			$.post('..\\helper/upitt_gradovi.php', {value: value}, 
			function(data){
				$('#city').html(data);
			});
		});
	});