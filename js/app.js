function myFunction () {

	   var interval = setInterval(function () {
	     var value = parseInt($('#badge').html());
	     value++;
	     $('#badge').html(value);
	}, 1000);
}

function stopFunction () {
	value = 0;
	$('#badge').html(value);
	clearInterval(parseInt);
}
