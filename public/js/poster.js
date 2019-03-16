$(document).ready(function() {
	$('input[type=file]').change(function(){
	    readImage(this);
	});
	
	$('#posterform').on('submit',(function(e) 
	{
		e.preventDefault();
		var formData = new FormData(this);
		
		$.ajax({
		  type: 'POST',
		  url: '/posters',
		  headers: {
	        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
	  		},
	  		processData : false,
	  		contentType : false,
	  		processData: false,

		  data: formData,
		  cache       : false,
		
		  success: function(data){
		    L.marker([data.lat, data.lon]).addTo(map);
		  },
		  error: function(XMLHttpRequest, textStatus, errorThrown) { 
	        console.log(XMLHttpRequest.responseText); 
			} 
		});

		modalClose();	
	}));
	
	function readImage ( input ) {
	    if (input.files && input.files[0]) {
	      var reader = new FileReader();
	 
	      reader.onload = function (e) {
	        $('#preview').attr('src', e.target.result);
	      }
	 
	      reader.readAsDataURL(input.files[0]);
	    }
	  }
})