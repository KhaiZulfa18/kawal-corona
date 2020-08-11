$(document).ready(function(){
	getData();
	showTime();
});

$('#located').change(function(){
	getData();
});

// $('#provinsi').change(function(){
// 	getData();
// });

function showTime() {
	var date = new Date();
	var t = date.getFullYear();
	var b = date.getMonth();
	var h = date.getDay();
	var j = date.getHours();
	var m = date.getMinutes();

	var time = "Data diperbarui pukul " + j + ":" + m + " "+ h + "-" + b + "-" + t ;

	document.getElementById('waktu').innerText = time;
	document.getElementById('waktu').textContent = time;

	setTimeout(showTime, 10000);
}

function getData(){
	var base_url = $('#base_url').val();
	var located = $('#located').val();

	$.ajax({
		type: 'POST',
		url: base_url+'corona/get_data',
		data: {
			located: located
		},
		dataType : "json", 
		success: function(response) {
			$('#positif').text(response.positif);
			$('#sembuh').text(response.sembuh);
			$('#location').text(response.location);
			$('#meninggal').text(response.meninggal);
		}
	}); 
}