//Menu Collapse
//Last Modified 02.04.2013
//
//
$(document).ready(function() {
    setTimeout(function() {
        // Slide: Menu celular
        $('#menu1 > li > a.expanded + ul').slideToggle('medium');
        $('#menu1 > li > a').click(function() {
            $(this).toggleClass('expanded').toggleClass('collapsed').parent().find('> ul').slideToggle('medium');
        });
        $('#example1 .expand_all').click(function() {
            $('#menu1 > li > a.collapsed').addClass('expanded').removeClass('collapsed').parent().find('> ul').slideDown('medium');
        });
        $('#example1 .collapse_all').click(function() {
            $('#menu1 > li > a.expanded').addClass('collapsed').removeClass('expanded').parent().find('> ul').slideUp('medium');
        });
        // Slide: Menu Video
        $('#btnVideo > li > a.expanded + ul').slideToggle('medium');
        $('#btnVideo > li > a').click(function() {
            $(this).toggleClass('expanded').toggleClass('collapsed').parent().find('> ul').slideToggle('medium');
        });
        // Slide: Menu Audio
        $('#btnAudio > li > a.expanded + ul').slideToggle('medium');
        $('#btnAudio > li > a').click(function() {
            $(this).toggleClass('expanded').toggleClass('collapsed').parent().find('> ul').slideToggle('medium');
        });
        //Close Audio
        $('#close_audio').click(function(){
            $('#btnAudio > li > a').toggleClass('expanded').toggleClass('collapsed').parent().find('> ul').slideToggle('medium'),
            $('#btnAudio').show();
        });
        //Close Video
        $('#close_video').click(function(){
            $('#btnVideo > li > a').toggleClass('expanded').toggleClass('collapsed').parent().find('> ul').slideToggle('medium'),
            $('#btnVideo').show();
        });
    }, 250);
});


                 
