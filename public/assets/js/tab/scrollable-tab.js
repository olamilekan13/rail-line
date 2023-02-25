$(document).ready(function(){
    var activeSlides = window.location.hash ? window.location.hash.split('#')[1] : 0
    activeSlides = parseInt(activeSlides) ? parseInt(activeSlides) : 0
    $.map($('.scrollable-tab .dropdown').children(), function(item, id){
        var selected = $(item).parents('.select-container').siblings('.tab-container').find('.active .content-wrapper').attr('section')
        $(item).attr('section') == selected ? $(item).parents('.dropdown').val(selected) : null
    })

    $('.scrollable-tab .dropdown').change(function(event){
        var selected = event.target.value
        $(this).parents('.select-container').siblings('.tab-container').find("[section=" + selected + "]").trigger('click');
    })

    $('.scrollable-tab .tab-item').on('click', function(e){
        e.preventDefault()
        window.location.href = $(this).attr('href') + (activeSlides == 0 ? '' : ('#' + activeSlides))
    })

    initScrollableTab(activeSlides)
    
    function initScrollableTab(){
        var swiper = new Swiper('.scrollable-tab .scrollable-content', {
            centeredSlides: false,
            slidesPerView: 'auto',
            spaceBetween : 0,
            initialSlide: activeSlides,
            autoHeight: false,
            autoResize: true,
            navigation: {
                nextEl: '.next',
                prevEl: '.prev'
            },
            onSlideChangeEnd:function(){
                swiper.update(true);
            }
        })
        swiper.on('slideChange', function (e) {
            activeSlides = swiper.activeIndex
            window.location.hash = activeSlides
        });
    }
});