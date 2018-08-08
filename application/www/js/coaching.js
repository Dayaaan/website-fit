"use strict";

$(function() {

	// confirmation de supression

	$('.btn-delete').on("click", function() {


	    if( confirm("Voulez vous vraiment supprimer ce coaching ?") ) {

	        alert('Suppression effectuée');

	        var id = $(this).attr("data-id");

	        location.href = getRequestUrl() + '/Admin/Deletecoaching?id=' + id;

	    } 
		
	    return false;

	})
	
	// requette ajax 
	
	$("a[href$='readme']").on("click", function() {
		
		var coachingId = $(this).attr("data-id");

		console.log(coachingId);

		var urlHTML = getRequestUrl() + '/Admin/Onecoaching';

		var param = {
			id : coachingId
		};

		$.get(urlHTML, param, function (html) {
			
			$('#readme').html(html);

		});

		//Defilement Fluide lors du click 

		var the_id = $(this).attr("href");

		if (the_id === '#') {

			return;

		}
		$('html, body').animate({

			scrollTop:$(the_id).offset().top

		}, 'slow');

		return false;

	});
});

