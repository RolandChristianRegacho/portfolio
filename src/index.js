$(() => {
    $("body").scroll(() => {
        if($("body").scrollTop()) { //abuse 0 == false :)
            $(".navbar").addClass("with_background")
        }
        else {
            $(".navbar").removeClass("with_background")
        }
    })
})

function goTo(form) {
    $('body').animate({
        scrollTop: $("#" + form).offset().top
    }, 1000);
}