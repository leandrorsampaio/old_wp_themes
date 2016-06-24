<?php
//
//IDs das pagina em ingles.
//
$index_pt = 372;
$index_en = 373;

$compras_pt = 31;
$compras_en = 207;

$cultura_pt = 15;
$cultura_en = 208;

$diversao_pt = 50;
$diversao_en = 209;

$eventos_pt = 37;
$eventos_en = 337;

$face_pt = 148;
$face_en = 211;

$gastronomia_pt = 33;
$gastronomia_en = 212;

$noite_pt = 35;
$noite_en = 213;

$roteiro_pt = 52;
$roteiro_en = 214;

$top10_pt = 39;
$top10_en = 215;


//chama os widgets para essa sidebar cadastrados no admin do WP 
//!dynamic_sidebar('traducao');
//
//
// Links da Traducao. 
if (is_single($index_pt) || is_single($index_en)) {
    $link_pt = $index_pt;
    $link_en = $index_en;
} elseif (is_page($compras_pt) || is_page($compras_en)) {
    $link_pt = $compras_pt;
    $link_en = $compras_en;
} elseif (is_page($cultura_pt) || is_page($cultura_en)) {
    $link_pt = $cultura_pt;
    $link_en = $cultura_en;
} elseif (is_page($diversao_pt) || is_page($diversao_en)) {
    $link_pt = $diversao_pt;
    $link_en = $diversao_en;
} elseif (is_page($eventos_pt) || is_page($eventos_en)) {
    $link_pt = $eventos_pt;
    $link_en = $eventos_en;
} elseif (is_page($face_pt) || is_page($face_en)) {
    $link_pt = $face_pt;
    $link_en = $face_en;
} elseif (is_page($gastronomia_pt) || is_page($gastronomia_en)) {
    $link_pt = $gastronomia_pt;
    $link_en = $gastronomia_en;
} elseif (is_page($noite_pt) || is_page($noite_en)) {
    $link_pt = $noite_pt;
    $link_en = $noite_en;
} elseif (is_page($roteiro_pt) || is_page($roteiro_en)) {
    $link_pt = $roteiro_pt;
    $link_en = $roteiro_en;
} elseif (is_page($top10_pt) || is_page($top10_en)) {
    $link_pt = $top10_pt;
    $link_en = $top10_en;
} else {
    $link_pt = "#";
    $link_en = "#";
}
$url_site = get_bloginfo('url');
$monta_link_pt = $url_site . '/?page_id=' . $link_pt;
$monta_link_en = $url_site . '/?page_id=' . $link_en;
?>
<a href="<?php echo $monta_link_pt ?>">
    <img src="<?php bloginfo('template_url') ?>/images/pt.png" title="Portugues" alt="Portugues" />
</a>
<a href="<?php echo $monta_link_en ?>">
    <img src="<?php bloginfo('template_url') ?>/images/en.png" title="English" alt="English" />
</a>
<?php ?>