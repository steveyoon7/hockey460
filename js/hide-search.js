/* This fucntion will enable the search bar to open and closed when clicked on  */

jQuery(document).ready(function($){
	$(".search-toggle").click(function(){
		$("#search-container").slideToggle('slow', function(){
			$(".search-toggle").toggleClass('active');
		});	
	});
});