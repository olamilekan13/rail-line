<!--ssi:footer-->
<button class="icon-button back-to-top-container" title="TOP">
    <span class="inner-container-box"><span class="icon-s ico-arrow-up-grey"></span><!--<span class="button-text">TOP</span>--></span>
</button>
<footer class="footer-section">
    <ul class="footer-item-container">
                <li class="footer-item"><a href="#">Important Notice</a></li>	
                <li class="footer-item"><a href="#">Terms of Use</a></li>	
                <li class="footer-item"><a href="#">Privacy Policy</a></li>	
                <li class="footer-item"><a href="#">Mass Transit Railway By-laws</a></li>	
    </ul>
    <ul class="footer-item-container">
                <li class="footer-item"><a href="#">Contact Us</a></li>	
                <li class="footer-item"><a href="{{ url('about') }}">Frequently Asked Questions</a></li>	
                <li class="footer-item"><a href="#">Useful links</a></li>	
    </ul>
    <p>Copyright © 2023 MetroStaion</p>
</footer>
<!--end of ssi:footer-->
<script>
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
})
</script>



<script src="../../assets/folder/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../../assets/folder/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="../../assets/folder/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../../assets/folder/js/jquery.waypoints.min.js"></script>
<script src="../../assets/folder/js/sticky.js"></script>

<!-- Stellar -->
<script src="../../assets/folder/js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="../../assets/folder/js/hoverIntent.js"></script>
<script src="../../assets/folder/js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="../../assets/folder/js/jquery.magnific-popup.min.js"></script>
<script src="../../assets/folder/js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="../../assets/folder/js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="../../assets/folder/js/classie.js"></script>
<script src="../../assets/folder/js/selectFx.js"></script>

<!-- Main JS -->
<script src="../../assets/folder/js/main.js"></script>
</body>

</html>