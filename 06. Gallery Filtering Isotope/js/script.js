$(document).ready(function () {
    const gallery = $('.gallery');

    gallery.isotope({
        itemSelector: '.item',
        layoutMode: 'fitRows'
    });

    $('.cat-menu > li').on('click', function (e) {
        e.preventDefault();
        let filter = $(this).attr('data-filter');
        $('.cat-menu > li').removeClass('active');
        $(this).addClass('active');
        gallery.isotope({
            filter: filter
        });
    });
});