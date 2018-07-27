'use strict';

$(function() {

	//Page Loading..

	setTimeout(function() {

  		$('.loader').fadeOut(function() {

  			$('body').show();

  			sessionStorage.setItem('loader',1);

  		});

	}, 3000);

	//Si le loader à dejà été exécuté on le cache
	
	if ( sessionStorage.loader == 1 ) {

		$('.loader').hide();

	}

})

  		



