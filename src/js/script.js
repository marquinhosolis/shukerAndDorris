/**
 * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
 *
 * @private
 * @author Todd Motto
 * @link https://github.com/toddmotto/foreach
 * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
 * @callback requestCallback      callback   - Callback function for each iteration.
 * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
 * @returns {}
 */
var forEach = function (t, o, r) {
    if ("[object Object]" === Object.prototype.toString.call(t))
        for (var c in t)
            Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
    else for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t);
};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function (hamburger) {
        hamburger.addEventListener(
            "click",
            function () {
                this.classList.toggle("is-active");
            },
            false
        );
    });
}

$(document).ready(function () {
    // SHOW / HIDE MAIN MENU WHEN CLICK ON HAMBURGER ICON
    $('.hamburger').click(function(){
        $('.mainNav').toggleClass('mainNav--visible')
    })

    // FIX / HIDE SECONDARY NAV ON TOP
    if($(window).width() > 1024){
        $(window).scroll(function(){
            var scroll = $(this).scrollTop();
            if(scroll > 200){
                $('header').addClass('header--mini');
            }else{
                $('header').removeClass('header--mini');
            }	
        })
    } 
    
    // REPLACE "{{&}}" FOR "GREEN &"
    $("main").children().each(function() {  
        var originalHTML = $(this).html();
        var newHTML = originalHTML.replace("{{", "<span class='specialColor'>");
        var outputHTML = newHTML.replace("}}", "</span>");
        $(this).html(outputHTML);
    });

    // AUTO SUBMIT SELECT BLOG PAGE
    $(".selectWrapper select").change(function () {
        $(".selectWrapper form").submit();
    });

    // ADJUST PADDING?MARGIN SINGLE POST IMAGE
    var postImageHeight = $('.blogPostImage').outerHeight();
    $('.singlePostMain').css('padding-top', (postImageHeight/2)+30)
    $('.singlePostMain').css('margin-top', (postImageHeight/2)+30)

    // READ MORE PRACTICE AREAS
    var showChar = 400;  
    $('.practiceAreaMainTextContent').each(function() {
        var content = $(this).html();
        if(content.length > showChar) {
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
            var html = c + '...<div class="hiddenContent">' + h + '</div>';
            $(this).html(html);
            $('.hiddenContent').hide();
        }
    });
    $(".practiceAreaMainTextContentMore").click(function(e){
        e.preventDefault();
        $('.hiddenContent').slideDown('fast', function() {
            if ($(this).is(':visible'))
                $(this).css('opacity','1');
        });
        $(this).hide();
    });




    

    

});
