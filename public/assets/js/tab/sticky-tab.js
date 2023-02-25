$(document).ready(function(){
    //sticky tab
    $(window).on('scroll scrollstart', function(){
        initStickyBar()
    })

    initLangSwitch();
    initBackToTop();

    function initStickyBar(){
        $.map($('.content-container .sticky-bar-container'), function(item, index){
            var offsetTop = $(item).offset().top
            if($(document).scrollTop() >= offsetTop && $(document).width() > 960){
                if(!$(item).hasClass('sticky')){
                    $('.sticky').removeClass('sticky')
                    $(item).height($(item).find('.sticky-content').outerHeight())
                    $(item).addClass('sticky')
                } 
            } else {
                if($(item).hasClass('sticky')){
                    $('.sticky').removeClass('sticky')
                    $(item).removeClass('sticky').height('auto')
                }
            }
        })
    }

    function initLangSwitch(){
        $.map($('.lang-switch'), function(item, id){
            $.map($(item).children(), function(item, id){
                var newLink = window.location.pathname.replace(/(\/tc|\/sc|\/en)/g, '') + (window.location.pathname == '/' ? 'main/index.html' : '') + window.location.search
                $(item).attr('href', '/' + $(item).attr('langKey') + newLink)
            })
        })
    }

    function initBackToTop(){
        var scrolling = false
        $('.back-to-top-container').on('click', function(){
            if(!scrolling){
                scrolling = true
                $('body').animate({scrollTop: 0}, function(){
                    scrolling = false
                })
            }
        })
    }
});