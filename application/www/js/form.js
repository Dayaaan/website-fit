"use strict";

$(function() {

    $("#contact_form").css("display","none");

    $("#contact_form").fadeIn(3500);

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

                    if ( $(this).val() == "" ) {

                        $(this).next().css("display","block");

                        event.preventDefault();

                    } else {

                        $(this).next().css("display","none");

                    }
                })
            })
        }
        formValidator();
    })
});