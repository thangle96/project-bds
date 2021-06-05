$(document).ready(function () {
    $('.your-class').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
            {
                breakpoint: 1333,
                settings: {
                    dots: true,
                    infinite: true,
                    margin: 30,
                    speed: 300,
                    slidesToShow: 4,
                    slidesToScroll: 1,

                }
            },
            {
                breakpoint: 1024,
                settings: {
                    dots: true,
                    infinite: true,
                    margin: 30,
                    speed: 300,
                    slidesToShow: 2,
                    slidesToScroll: 1,

                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});