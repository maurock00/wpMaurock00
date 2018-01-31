$(document).ready( function (){
    var $btn = $('#mobile-nav'),
        $nav = $('#main-nav'),
        $search = $('#search'),
        $nav_icon = $('#mobile-nav').find('.fa') 

    $btn.click(function (){
        $nav.slideToggle()
        $search.slideToggle()
        
        if($nav_icon.hasClass('fa-bars')) {
            $nav_icon.removeClass('fa-bars').addClass('fa-times')
        }
        else {
            $nav_icon.removeClass('fa-times').addClass('fa-bars')
        }
            
    })
})