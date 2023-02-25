$(document).ready(function(){
    var param = window.location.hash
    $('.item-title').on('click', function(){
        $(this).parent().hasClass('active') ? (
            $(this).parent().removeClass('active'),
            $(this).siblings('.item-content').slideUp()
        ) : (
            $(this).parent().addClass('active'),
            $(this).siblings('.item-content').slideDown()
        )
    })
    setTimeout(function(){
        if(param && param.split('#').length > 1){
            var targetId = param.split('#')[1],
                selector = '[collapsableid="' + targetId + '"]';
            
            if ($(selector).length > 0) {
                var scrollTop = getElementScrollTop(selector);
                
                $(selector).find('a').trigger('click');
                $('body').animate({scrollTop: scrollTop - getStickyHeight()});
            }
        }
    }, 500)
    $('.attractions .list-item .item-container').find('.item-title').first().trigger('click');
});