var $ = jQuery;

$(document).ready(function(){
    $('.faq > .question').click(function(){
    $('.faq > .answer').slideUp(300);
    if ($(this).siblings(".answer").css('display') == 'block') {
        $(this).siblings('.answer').slideUp(500);
        // $('#openCloseFaq #closeFaq').hide(200);
        // $('#openCloseFaq #openFaq').show(200);
    } else {
        $(this).siblings('.answer').slideToggle(500);
        
        // $('#openCloseFaq #openFaq').hide(200);
        // $('#openCloseFaq #closeFaq').show(200);
    }
    // if ($('#openCloseFaq #openFaq').is(':visible')) {
    //     $('#openCloseFaq #openFaq').hide(200);
    //     $('#openCloseFaq #closeFaq').show(200);
    // } else {
    //     $('#openCloseFaq #closeFaq').hide(200);
    //     $('#openCloseFaq #openFaq').show(200);
    // }
    });
    // $('.faq > .question').click(function(){ 
    //     if ($('#openCloseFaq #openFaq').is(':visible')) {
    //         $('#openCloseFaq #openFaq').hide(200);
    //         $('#openCloseFaq #closeFaq').show(200);
    //     } else {
    //         $('#openCloseFaq #closeFaq').hide(200);
    //         $('#openCloseFaq #openFaq').show(200);
    //     }
    // });
    // $('.faq > .question').click(function(){ 
    //     if ($('#openCloseFaq #closeFaq').is(':visible')) {
    //         $('#openCloseFaq #closeFaq').hide(200);
    //         $('#openCloseFaq #openFaq').show(200);
    //     } else {
    //         $('#openCloseFaq #openFaq').hide(200);
    //         $('#openCloseFaq #closeFaq').show(200);
    //     }
    // });
    // $('.faq > .question').click(function(){
    //     // Toggle visibility of answer for the clicked question
    //     var answer = $(this).siblings('.answer');
    //     answer.slideToggle(500);

    //     // Toggle visibility of openFaq and closeFaq buttons
    //     $('#openCloseFaq #openFaq, #openCloseFaq #closeFaq').toggle(200);
    // });
});