//Menu Collapse
//Last Modified 02.04.2013
//
//
$(document).ready(function() {
    setTimeout(function() {
        // Slide
        $('#menuCollapse > li > a.expanded + ul').slideToggle('medium');
        $('#menuCollapse > li > a').click(function() {
            $(this).toggleClass('expanded').toggleClass('collapsed').parent().find('> ul').slideToggle('medium');
        });
    }, 250);
});
