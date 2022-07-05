// JavaScript Document


/*
$(window).load(function() {
    $(".zoom-images").zoomScroller({
        animationTime: 2e3,
        easing: "ease",
        initZoom: 1.15,
        zoom: 1
    })
});
*/

$(document).ready(function() {
    $("body").addClass("js");
    $("a.scrollto").click(function(e) {
        e.preventDefault();
        var t = $($(this).attr("href"));
        $("html, body").animate({
            scrollTop: t.offset().top - 53
        }, 1e3)
    });
    $("#select-options a").click(function(e) {
        $("#select-options li").removeClass("active");
        $(this).parent().addClass("active");
        $("body").attr("class", "");
        $("body").addClass("fus-" + $(this).attr("href").substring(1))
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $(".navbar").addClass("fus-navbar-solid");
			$(".navbar").addClass("animated");
			$(".navbar").addClass("fadeInDown")
        } else {
            $(".navbar").removeClass("fus-navbar-solid");
			$(".navbar").removeClass("animated");
			$(".navbar").removeClass("fadeInDown")
        }
    })
})

