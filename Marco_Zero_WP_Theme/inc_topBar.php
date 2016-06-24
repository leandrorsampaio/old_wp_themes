<!--------------------------------- Traducao ---->
<div id="topBar_language" class="block">
    <li id="transposh-2" class="widget widget_transposh">
        <div class="no_translate transposh_flags" >
            <a href="<?php echo $monta_link_pt ?>" class="tr_active">
                <span title="Português" class="trf trf-pt"></span>
            </a>
            <a href="<?php echo $monta_link_en ?>">
                <span title="English" class="trf trf-us"></span>
            </a>
            <a href="<?php echo $monta_link_es ?>">
                <span title="Español" class="trf trf-es"></span>
            </a>
        </div>
    </li>
</div>
<?php
if (is_single()) {
    //Menu Multimidia so aparece nas singles
    ?> 
    <!---------------------------------- Multimidia ----->
    <div id="topBar_multimidia" class="block">
        <script>
            $(document).ready(function($){
                $('.megamenu').megaMenuReloaded({
                    menu_speed_show : 300, 
                    menu_speed_hide : 200, 
                    menu_speed_delay : 200, 
                    menu_effect : 'open_close_slide', // Drop down effect, choose between 'hover_fade', 'hover_slide', 'click_fade', 'click_slide', 'open_close_fade', 'open_close_slide'
                    menu_easing : 'jswing', // Easing Effect : 'easeInQuad', 'easeInElastic', etc.
                    menu_click_outside : 1, // Clicks outside the drop down close it (1 = true, 0 = false)
                    menu_show_onload : 0, // Drop down to show on page load (type the number of the drop down, 0 for none)
                    menubar_trigger : 1, // Show the menu trigger (button to show / hide the menu bar), only for the fixed version of the menu (1 = show, 0 = hide)
                    menubar_hide : 0, // Hides the menu bar on load (1 = hide, 0 = show)
                    menu_responsive : 0, // Enables mobile-specific script
                    menu_carousel : 1, // Enable / disable carousel
                    menu_carousel_groups : 2 
                });
            });
        </script>
        <!------------------- Menu Multimidia -------->
        <div class="megamenu_container">
            <ul class="megamenu">
                <!------------------------------------------ VIDEO -->
                <?php include('inc_video.php'); ?>
                <!---------------------------------------- AUDIO -->
                <?php include('inc_audio.php'); ?>
            </ul>
        </div>
    </div>
    <?php
} else {
    
}
?>