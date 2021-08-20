
    $(function() {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 10) {
                $('.navbar').addClass('active');
            } else {
                $('.navbar').removeClass('active');
            }
        });
    });

    $(function() {
        $(window).on('aria-expanded', 'true', function() {
            if ($(window).scrollTop() < 10) {
                $('.navbar').removeClass('active');
            } else {
                $('.navbar').removeClass('active');
            }
        });
    });
