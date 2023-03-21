'use strict';

function getCurrentURLParams() {
    var params = {};
    window.location.href.split('?')[1] && window.location.href.split('?')[1].split('&').map(function (item, id) {
        var paramKeyandValue = item.split('=');
        params[paramKeyandValue[0]] = paramKeyandValue[1];
    });
    return params;
}

function searchSpecificURLParam(key) {
    var params = getCurrentURLParams();
    return params[key] ? params[key] : undefined;
}

function fontSizePreference() {
    !sessionStorage.getItem('fontSize') && sessionStorage.setItem('fontSize', 'n');
    return sessionStorage.getItem('fontSize');
}

function bodyFontSizeControl() {
    $('.size-switch .active').removeClass('active');
    $('[font-size=' + fontSizePreference() + ']').addClass('active');
    $('html').removeClass('font-size-s font-size-l');
    if (fontSizePreference() === 's') {
        $('html').addClass('font-size-s');
    } else if (fontSizePreference() === 'l') {
        $('html').addClass('font-size-l');
    }
}

function changeFontSize(size) {
    var currentFontSize = fontSizePreference();
    currentFontSize !== size ? (sessionStorage.setItem('fontSize', size), bodyFontSizeControl()) : null;
}

function languagePreference() {
    var langList = ['en', 'tc', 'sc'],
        lang = window.location.pathname.match(/\w+(?=\/)/g) ? window.location.pathname.match(/\w+(?=\/)/g)[0] : 'tc';
    return langList.indexOf(lang) > -1 ? lang : 'tc';
}

function checkActiveMenu() {
    $('.desktop-responsive .menu-list > .menu-item').each(function (index, element) {
        // currentPageUrl = location.href.match(/(\/en\/|\/tc\/|\/sc\/)(.*)(.html)/g)
        var currentPageUrl = location.href.match(/(\/en\/|\/tc\/|\/sc\/)(.*)(.html)/g);
        // console.log(currentPageUrl, $(element).find('a[href="'+ currentPageUrl +'"]'));
        if ($(element).find('a[href="' + currentPageUrl + '"]').length > 0) {
            $(this).addClass('active');
            return false;
        }
    });
    if ($('.desktop-responsive .menu-list > .menu-item.active').length <= 0) {
        $('.desktop-responsive .menu-list > .menu-item').eq(0).addClass('active');
    }
}

function generateBreadcrumb() {
    var breadcrumb = '<li><a href="' + $('.desktop-responsive .menu-list > .menu-item:first-child .main-level-item').attr('href') + '">' + $('.desktop-responsive .menu-list > .menu-item:first-child .main-level-item').text() + '</a></li>';
    var secordLevelMenuText = '';
    if ($('.desktop-responsive .menu-list > .menu-item:not(:first-child).active').length > 0) {
        secordLevelMenuText = $('.desktop-responsive .menu-list > .menu-item:not(:first-child).active .main-level-item').text();
        breadcrumb += '<li>' + $('.desktop-responsive .menu-list > .menu-item:not(:first-child).active .main-level-item').text() + '</li>';
    }
    // console.log($('.title-box > .h2').text() !== secordLevelMenuText)
    // console.log($('.title-box > .h2').text(),  secordLevelMenuText)
    if ($('.title-box > .h2').text() !== secordLevelMenuText) {
        breadcrumb += '<li>' + $('.title-box > .h2').text() + '</li>';
    }

    $('#breadcrumb').append(breadcrumb);
}

function getElementScrollTop(element) {
    return $(element).position().top + ($(element).outerHeight(true) - $(element).outerHeight());
}

function getStickyHeight() {
    return $('.content-container .sticky-content .search-bar-container').outerHeight();
}

function decimalPlace(number, decimalPlace, roundup) {
    var regex = new RegExp('(\\d*([.]\\d{0,' + decimalPlace + '}))');
    return roundup ? number.toFixed(decimalPlace) : number.toString().match(/([.])/g) ? number.toString().match(regex)[0] : number.toFixed(decimalPlace);
}

function appDisplay() {
    var locationHash = window.location.hash;
    if (locationHash.includes('#app-display')) {
        setTimeout(function(){
            window.scrollTo(0, getElementScrollTop('#app-display'));
        }, 50);
    }
}

$(document).ready(function () {
    bodyFontSizeControl();
    checkActiveMenu();
    generateBreadcrumb();
    appDisplay();
});
