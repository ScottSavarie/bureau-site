

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



