<?php
//
include ('sidebar-idioma.php');
//
?>
<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <input class="topBar_item_search_btn" type="submit" id="searchsubmit" value="" />
    <input class="topBar_item_search_input" type="text" value="
           <?php
           if ($idioma == 'pt') {
               echo 'Buscar...';
           } else {
               echo 'Search...';
           }
           ?>
           " name ="s" maxlenght="20" onclick="this.value=''"/>
</form>