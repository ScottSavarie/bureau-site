
// $(document).ready(function() {
//     $("#contact-wrap").addClass("contact-initial-hidden");
// });

// $(".page-contact__link").click(function(){
//     $("#contact-wrap").toggleClass("contact-initial-hidden");
//     $('#contact-wrap').toggleClass("contact-visible");
// });

// $("#close-trigger").click(function(){
//     $('#contact-wrap').removeClass("contact-visible");
//     $('#contact-wrap').addClass("contact-initial-hidden");
// });


/* =Contact Slide Down
============================================================================== */

$(document).ready(function() {
    $("#contact-wrap").hide(0);
});

$(".page-contact__link").click(function(){
    $("#contact-wrap").slideToggle(200);
});

$("#close-trigger").click(function(){
    $('#contact-wrap').slideUp(200);
});


$(document).on( 'keydown', function ( e ) {
    if ( e.keyCode === 27 ) { // ESC
        $("#contact-wrap").slideUp(200);
    }
});



/* =Home fade ins
============================================================================== */
$(document).ready(function() {
    $("#video-trigger, #home-arrow").hide(0);
    $("#video-trigger, #home-arrow").delay(500).fadeIn('slow');
});



// $(document).ready(function() {
//     var width = $(window).width();
//     if (width >= 767) {
//         $("#home-nav").hide();
//         $("#home-nav").delay(200).slideDown('fast');
//     }
//     else {
//         //Do Something Else
//     }
// });




/* =Home arrow slide
============================================================================== */

$("#home-arrow").click(function(){
    $('html,body').animate({scrollTop: jQuery("#specialty").offset().top - 100},'slow'); 

});





/* =Home specialty fade
============================================================================== */

$(document).ready(function() {
    var width = $(window).width();
    if (width >= 767) {
        $("#specialty-one, #specialty-two, #specialty-three").addClass("hidden");
            

            $(window).scroll(function(event) {
            if($("#specialty").offset().top < $(window).scrollTop() + $(window).outerHeight()) {
                $("#specialty-one").removeAttr( 'style' );
                $("#specialty-one").addClass("visible");

                $("#specialty-two").removeAttr( 'style' );
                $("#specialty-two").addClass("visible");

                $("#specialty-three").removeAttr( 'style' );
                $("#specialty-three").addClass("visible");

            } else {
                // do nothing
            }
            });


                



    
    }
    else {
        //Do Something Else
    }
    
});


/* =Home video swap
============================================================================== */

$("#videotrigger").click(function () { 
    $("#videotarget").attr("src", "http://www.youtube.com/embed/1sYNgnUaAyg?list=PL6NX9H_ihCfDqariNCYuP8Tqu3AfZ_Ik6&amp;title=0&amp;modestbranding=1&amp;showinfo=0&amp;byline=0&amp;portrait=0&amp;color=757778&amp;autoplay=1&amp;autohide=1&amp;controls=0&amp;start=2&amp;loop=1");
    $(this).hide(0);

});



/* =Sticky Nav enhance
============================================================================== */


        var lastScrollTop = 0;
        $(window).scroll(function(event){
           var st = $(this).scrollTop();
           if (st > lastScrollTop){
                    $("#nav-fixed").removeClass("visible");
                    $("#nav-fixed").addClass("hidden"); 
           } 

           else {
                    $("#nav-fixed").removeClass("hidden");  
                    $("#nav-fixed").addClass("visible");
           }
           lastScrollTop = st;
        });



        $(window).scroll(function(event){
           var st = $(this).scrollTop();
           if (st <= 10){

                    $("#nav-fixed").removeClass("hidden");  
                    $("#nav-fixed").addClass("visible");

           }

           else{

           }

       });



