"use strict";

$(function() {

    $("#contact_form").css("display","none");

    $("#contact_form").fadeIn(4000);

    $('#contact_form').on("submit", function(event) {

        function formValidator() {

            $('#contact_form').each(function () {

                $('.form-control').each(function () {

                    if ( ! $(this).val() ){

                        $(this).next().css("display","block");

                        event.preventDefault();

                    } else {

                        $(this).next().css("display","none");
                    }
                })

                $('.custom-select').each(function() {

                    if ( $('#gender').val() == "Sexe..." ) {

                        $('#gender').next().css("display","block");

                        event.preventDefault();

                    } else {

                        $('#gender').next().css("display","none");

                    }

                    if ( $('#nb-training').val() == "Nombre de séances par semaine" ) {

                        $('#nb-training').next().css("display","block");

                        event.preventDefault();

                    } else {

                        $('#nb-training').next().css("display","none");
                        
                    }

                    if ( $('#nb-year').val() == "Nombre d'années de sport" ) {

                        $('#nb-year').next().css("display","block");

                        event.preventDefault();

                    } else {

                        $('#nb-year').next().css("display","none");
                        
                    }
                })
            })
        }
        formValidator();
    })
});