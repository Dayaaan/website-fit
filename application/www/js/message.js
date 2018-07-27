"use strict";

$(function() {


	$('.btn-delete').on("click", function() {


	    if( confirm("Voulez vous vraiment supprimer ce message ?") ) {

	        alert('Suppression effectuée');

	        var id = $(this).attr("data-id");

	        location.href= getRequestUrl() + '/Admin/Deletemessage?id=' + id;

	    } 

	    return false;

	})


});