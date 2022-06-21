// $(document).ready(function() {
//     $('#role').html('web designer').delay(10).html('graphic designer')
//         .delay(10).html('UX developer');
// });

//Replace Text function		 
$(function() {
    count = 0;
    wordsArray = ["while Travelling", "while Shopping", "for Food", "for Entertainment", "for Literally Anything!"];
    setInterval(function() {
        count++;
        $("#phrase").fadeOut(500, function() {
            $(this).text(wordsArray[count % wordsArray.length]).fadeIn(500);
        });
    }, 5000);
});
//End Replace Text function

//Replace Text function		 
$(function() {
    count = 0;
    aboutArray = ["Roll No. 22", "Yash UG Shejwal", "from SY-CS-D"];
    setInterval(function() {
        count++;
        $("#about-phrase").fadeOut(500, function() {
            $(this).text(aboutArray[count % aboutArray.length]).fadeIn(500);
        });
    }, 2000);
});
//End Replace Text function

// $('.carousel').carousel({
//     interval: 2000,
//     cycle: true,
//     pause: null
// })