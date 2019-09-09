(function($){
	
	$(document).ready(function(){
			// alert('script loaded');
		$("#movies_rating").on("change", function(){
			var formObj = {
				action: "aady_rate_movie",
				movieid: $(this).data("movieid" ),
				movierating: $(this).val()
			}
			
			$.post(movie_obj.ajax_url, formObj, function(data){
				console.log(data);
			});
		});

	});

		
	
})(jQuery);