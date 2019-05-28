(function ($) {
    $(".nav-toggle-search-icon").on('click', function (e) {
        e.preventDefault();
        $(".main-navigation .search-field").toggle("slide").focus();
    })
    $(".main-navigation .search-field").on('blur', function (e) {
        e.preventDefault();
        $(".main-navigation .search-field").hide("slide");
    })
    let $body = $('body');
    if ($body.hasClass('home')||$body.hasClass( 'page-about') || $body.hasClass('single-adventure')) {

        let $heroImageHeader = $(".hero-image-header");
        let $homeBanner = $(".home-banner");
        let $singleAdventureImage = $(".single-adventure img");
        $(window).scroll(function () {
            let heightToTop = $(window).scrollTop();
            function heightLimit() {
                if ( $heroImageHeader.height() !== 0 
                && $heroImageHeader.height() != null
                ) {
                    return $heroImageHeader.height();
                }
                else if ($homeBanner.height() !== 0 
                && $homeBanner.height() != null
                ) {
                    return $homeBanner.height();
                }
                else if ($singleAdventureImage.height() !== 0 
                && $singleAdventureImage.height() != null
                ) {
                    return $singleAdventureImage.height();
                }
            }
            console.log(heightLimit());

            if (heightToTop > heightLimit() - 5) {
                $(".site-header-container").removeClass("site-header-container-white");
            }
            if (heightToTop < heightLimit() - 5) {
                $(".site-header-container").addClass("site-header-container-white");
            }
        })

    } else {console.log('not the home page')}

})(jQuery);