//javascript functions

//e.preventDefault(); u meniju href je #, 
//po difoltu kad se klikne skrola stranu na vrh
jQuery(document).ready(function($) {

	$(document).on('click', '.open-search a', function(e){
		e.preventDefault();
		
		$('.search-form-container').slideToggle(300);
	});

});