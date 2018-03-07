/**
 * Created by Sandro_Sherozia on 28/01/2018.
 */
'use strict';

//Paginnation

$(document).ready(function() {

    $(".next_btn").focus(function() { // Function Runs On NEXT Button Click
        $(this).parent().next().fadeIn('slow');
        $(this).parent().css({
            'display': 'none'
        });


// Adding Class Active To Show Steps Forward;
        $('.active').next().addClass('active');
    });
    $(".pre_btn").focus(function() { // Function Runs On PREVIOUS Button Click
        $(this).parent().prev().fadeIn('slow');
        $(this).parent().css({
            'display': 'none'
        });
// Removing Class Active To Show Steps Backward;
        $('.active:last').removeClass('active');
    });

//   -------   POP-UP SUPPRESSION    --------

    $('.delete').click(function(){
        $('#popup-delete').fadeIn('fast');
    });
    $('#cancel').click(function(){
        $('#popup-delete').css('display', 'none');
    });

//-----------     APPARITION DU MENU DES BOUTONS    -----------
/*
    $('.cont').mouseover(function(){
        $('aside').css('display', 'block');
    });
    $('.cont').mouseout(function(){
        $('aside').css('display', 'none');
    });
*/

    /*$('.error-list').css('background-color', 'red');*/


/**   POP-UP des proprietés de la photo à uploader  ***/

    $('.form-control-file').mouseover(function(){
    $('.photo-uploader-popup').fadeIn('fast');
    });


    $('.form-control-file').mouseout(function(){
        $('.photo-uploader-popup').fadeOut('fast');
    });


/* APPARITION DU CV-EXEMPLE SUR HOMEPAGE */

    $('button#show-cv-exemple').click(function(){
        $('img#cv-exemple').fadeIn('fast');
    });

    $('#show-cv-exemple').keypress(function(){
        $('#cv-exemple').fadeOut('fast');
    });


// Validating All Input And Textarea Fields
   /*$(".submit_btn").click(function(e) {
        if ($('input').val() == "" || $('textarea').val() == "") {
            alert("*All Fields are mandatory*");
            return false;
        } else {
            return true;
        }
      });  */




});