(function ($) {
    $(".nav-toggle-search-icon").on('click', function (e) {
        e.preventDefault();
        $(".main-navigation .search-field").toggle("slide").focus();
    })
    $(".main-navigation .search-field").on('blur', function (e) {
        e.preventDefault();
        $(".main-navigation .search-field").hide("slide");
    })

    $(window).scroll(function () {
        let heightToTop = $(window).scrollTop();
        function heightLimit() {
            if ($(".hero-image-header").height() !== 0 && $(".hero-image-header").height() !=null) {
                return $(".hero-image-header").height();
            }
            else if ($(".home-banner").height() !== 0 && $(".home-banner").height() !=null) {
                return $(".home-banner").height();
            }
            else if ($(".single-adventure img").height() !== 0 && $(".single-adventure .entry-header").height() !=null) {
                return $(".single-adventure img").height();
            }

        }
        console.log(heightLimit());

        if (heightToTop > heightLimit()-5) {
            $(".site-header-container").removeClass("site-header-container-white");
        }
        if (heightToTop < heightLimit()-5) {
            $(".site-header-container").addClass("site-header-container-white");
        }
    })

})(jQuery);