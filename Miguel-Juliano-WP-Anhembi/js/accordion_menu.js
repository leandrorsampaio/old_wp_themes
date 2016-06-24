// Portions of this were adapted from "http://www.i-marco.nl/weblog/jquery-accordion-menu/".
$(document).ready( function($) {

    // This hides all the sub menus on page load
    $('#nav-main ul.sub-menu').show();
    // This makes sure that all the sub menus are open when applicable
    $('#nav-main li.current-menu-item').children().show();
     // Esconde os sub-sub menus.
     $('.sub-menu ul.sub-menu').hide();
   
    $('#nav-main ul li a').click(
        function() {
            var checkElement = $(this).next();
            if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                $(this).parent().siblings("li:has(ul)").find("ul").slideUp('normal');      	      	
                $('#nav-main ul ul li ul:visible').slideUp('normal');
                checkElement.slideDown('normal');
                return false;
            }
        }
        );
    $('#nav-main ul ul li a').click(
        function() {
            var checkElement = $(this).next();
            if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                return false;
            }
            if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                $('#nav-main ul ul').slideUp('normal');    
                $('#nav-main ul ul li ul:visible').slideUp('normal');
                checkElement.slideDown('normal');
                return false;
            }
        }
        );	

}); 
