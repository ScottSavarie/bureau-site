/* =Language URL
============================================================================== */



var newURLFR = window.location.protocol + "//" + window.location.host + "/fr" + window.location.pathname;


$(".fr").click(function(){
    window.location.href = newURLFR;
    reload();
});


var getURL = window.location.protocol + "//" + window.location.host + window.location.pathname;
var newURLEN = getURL.replace("fr/", "");

$(".en").click(function(){
    window.location.href = newURLEN;
    reload();
});
