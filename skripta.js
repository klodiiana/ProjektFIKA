var searchForm = document.querySelector('.search-form');

searchForm.onclick = () => {
    searchForm.classList.toggle('active');
}

new Swiper('.home-slider', {
    loop: true,
    effect: "fade",
    autoplay: {
        delay: 2000
    },
    speed: 1000
});
/*menu */
(function($) {

    // Menu filter
    $("#menu-filters li a").click(function() {
        $("#menu-filters li a").removeClass('active');
        $(this).addClass('active');

        var selectedFilter = $(this).data("filter");
        //  $("#menu-wrapper").fadeTo(100, 0);

        $(".menu-restaurant").fadeOut();

        setTimeout(function() {
            $(selectedFilter).slideDown();
            //$("#menu-wrapper").fadeTo(300, 1);
        }, 300);
    });

})(jQuery);
/*menu */