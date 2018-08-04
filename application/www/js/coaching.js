"use strict";

$(function() {


	$('.btn-delete').on("click", function() {


	    if( confirm("Voulez vous vraiment supprimer ce coaching ?") ) {

	        alert('Suppression effectuée');

	        var id = $(this).attr("data-id");

	        location.href = getRequestUrl() + '/Admin/Deletecoaching?id=' + id;

	    } 
		
	    return false;

	})
	
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
	});

});

