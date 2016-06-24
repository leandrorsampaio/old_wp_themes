//Menu Collapse
//Last Modified 04.07.2013
//by Dani Parra
//
$(document).ready(function() {
    setTimeout(function() {
        // Menu Collapse - Aside
        $('#menuEsp > li > a.expanded + ul').slideToggle('medium');
        $('#menuEsp > ul li > a').click(function() {
            $(this).toggleClass('expanded').toggleClass('collapsed').parent().find('> ul').slideToggle('medium');
        });
        // Menu Collapse - Topo (Mobile)
        $('#menuMobile > li > a.expanded + ul').slideToggle('medium');
        $('#menuMobile > ul li > a').click(function() {
            $(this).toggleClass('expanded').toggleClass('collapsed').parent().find('> ul').slideToggle('medium');
        });
       
    }, 250);
});

