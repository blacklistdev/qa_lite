 const header = document.getElementById('QUheader');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        
// home page testimonial carousel script

jQuery(function () {
    var owl = jQuery(".testimonialOwl-carousel");
    owl.owlCarousel({
        responsive: {
            0: {
                items: 1,
                dots: false
            },
            770: {
                items: 2,
                dots: false
            },
            1200: {
                items: 3,
                dots: false
            }
        },
        margin: 10,
        loop: true,
        nav: true
    });
});

// Aboutus page team member carousel script

jQuery(function () {
    var owl = jQuery(".MeetOurTeammemb");
    owl.owlCarousel({
        responsive: {
            0: {
                items: 1,
                dots: false
            },
            770: {
                items: 2,
                dots: false
            },
            992: {
                items: 3,
                dots: false
            },
            1200: {
                items: 4,
                dots: false
            }
        },
        margin: 15,
        loop: true,
        nav: true
    });
});