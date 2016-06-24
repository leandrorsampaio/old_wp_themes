<?php
// inclui o header
get_header();

//looping
while (have_posts()): the_post();

    // escolhe as cores
    include ('sidebar-escolheacor.php');
    // pega o id das paginas
    include ('sidebar-idspaginas.php')
    ?>
    <div id="noticias" style="color: <?php echo $cor1; ?>; width:970px !important;">
        <div id="noticias_section" style="width:910px !important;">
            <div id="noticias_section_head">
                <h1 id="noticias_section_head_title"><?php the_title(); ?></h1>
                <?php
                if ($menu == 1) {
                    include ('sidebar-submenu.php');
                } else {
                    
                }
                ?>
            </div>
            <div id="noticias_section_conteudo">
                <div id="page_section_conteudo">
                    <?php the_content(); ?>
                    <br/>
                    <br/>
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/chart/highcharts.js"></script>
                    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/chart/exporting.js"></script>
                    <?php
                    // Sorteia qual das séries aparecerá por default
                    $escolaSorteada = rand(1, 22);
                    $visibilidade_01 = 'false';
                    $visibilidade_02 = 'false';
                    $visibilidade_03 = 'false';
                    $visibilidade_04 = 'false';
                    $visibilidade_05 = 'false';
                    $visibilidade_06 = 'false';
                    $visibilidade_07 = 'false';
                    $visibilidade_08 = 'false';
                    $visibilidade_09 = 'false';
                    $visibilidade_10 = 'false';
                    $visibilidade_11 = 'false';
                    $visibilidade_12 = 'false';
                    $visibilidade_13 = 'false';
                    $visibilidade_14 = 'false';
                    $visibilidade_15 = 'false';
                    $visibilidade_16 = 'false';
                    $visibilidade_17 = 'false';
                    $visibilidade_18 = 'false';
                    $visibilidade_19 = 'false';
                    $visibilidade_20 = 'false';
                    $visibilidade_21 = 'false';
                    switch ($escolaSorteada) {
                        case "1":
                            $visibilidade_01 = 'true';
                            break;
                        case "2":
                            $visibilidade_02 = 'true';
                            break;
                        case "3":
                            $visibilidade_03 = 'true';
                            break;
                        case "4":
                            $visibilidade_04 = 'true';
                            break;
                        case "5":
                            $visibilidade_05 = 'true';
                            break;
                        case "6":
                            $visibilidade_06 = 'true';
                            break;
                        case "7":
                            $visibilidade_07 = 'true';
                            break;
                        case "8":
                            $visibilidade_08 = 'true';
                            break;
                        case "9":
                            $visibilidade_09 = 'true';
                            break;
                        case "10":
                            $visibilidade_10 = 'true';
                            break;
                        case "11":
                            $visibilidade_11 = 'true';
                            break;
                        case "12":
                            $visibilidade_12 = 'true';
                            break;
                        case "13":
                            $visibilidade_13 = 'true';
                            break;
                        case "14":
                            $visibilidade_14 = 'true';
                            break;
                        case "15":
                            $visibilidade_15 = 'true';
                            break;
                        case "16":
                            $visibilidade_16 = 'true';
                            break;
                        case "17":
                            $visibilidade_17 = 'true';
                            break;
                        case "18":
                            $visibilidade_18 = 'true';
                            break;
                        case "19":
                            $visibilidade_19 = 'true';
                            break;
                        case "20":
                            $visibilidade_20 = 'true';
                            break;
                        case "21":
                            $visibilidade_21 = 'true';
                            break;
                        default:
                            $visibilidade_01 = 'true';
                    }
                    ?>
                    <script type="text/javascript">
                        $(function () {
                            $('#containerEspecial').highcharts({
                                credits: {
                                    enabled: false
                                },
                                chart: {
                                    type: 'spline'
                                },
                                title: {
                                    text: 'Carna Cardiograma - Grupo Especial'
                                },
                                xAxis: {
                                    categories: [
                                        '1991', '1992', '1993', '1994', '1995', '1996', 
                                        '1997', '1998', '1999', '2000', '2001', '2002',
                                        '2003', '2004', '2005', '2006', '2007', '2008',
                                        '2009', '2010', '2011', '2012', '2013', '2014', 2015]
                                },
                                yAxis: {
                                    tickPositions: [1, 2, 3 , 4, 5, 6, 7, 8, 9, 10, 11 ,12, 13, 14, 15, 16],
                                    reversed: true,
                                    showFirstLabel: true,
                                    showLastLabel: true,
                                    tickLength: 16,
                                    max: 16,
                                    title: {
                                        text: ''
                                    },
                                    labels: {
                                        useHTML: true
                                    },
                                    plotBands: [
                                        {
                                            color: '#FCFFC5',
                                            from: -1,
                                            to: 3.5,
                                            id: 'plotband-1'
                                            //label: { text: 'Campeã' }
                                        }
                                    ]
                                },
                                tooltip: {
                                    crosshairs: true,
                                    shared: true
                                },
                                plotOptions: {
                                    spline: {
                                        marker: {
                                            radius: 4,
                                            lineColor: '#eeeeee',
                                            lineWidth: 1
                                        }
                                    }
                                },
                                series: [
                                    //{
                                    //    name: 'Vai Vai',
                                    //    marker: {
                                    //        symbol: 'url(http://www.highcharts.com/demo/gfx/sun.png)'
                                    //    },
                                    //    data: [1, 5, 5, 6 ,7, 1 ,5 ,4 ,1 , null, 8, 9, 8, 5, 1, 5, 5, 15 ,7, 1 ,5 ,4 ,1 , 8]
                                    //},
                                    {
                                        name: 'Mocidade Alegre',
                                        color: '#33378f',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_01; ?>,
                                        data: [05, 03, 03, 04, 07, 03, 06, 04, 07, 03, 07, 08, 02, 01, 03, 03, 01, 02, 01, 02, 07, 01, 01, 01, 02]
                                    },
                                    {
                                        name: 'Nene de Vila Matilde',
                                        color: '#8e1c8e',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_02; ?>,
                                        data: [07, 04, 04, 06, 06, 06, 03, 02, 02, 03, 01, 04, 04, 04, 09, 11, 07, 17, 13, 08, 13, 17, 08, 12, 07]
                                    },
                                    {
                                        name: 'Aguia de Ouro',
                                        color: '#986440',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_03; ?>,
                                        data: [08, 01, 17, 17, 17, 17, 10, 17, 10, 07, 06, 07, 11, 08, 10, 07, 04, 13, 017, 11, 06, 12, 03, 03, 04]
                                    },
                                    {
                                        name: 'Gavioes da Fiel',
                                        color: '#59595b',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_04; ?>,
                                        data: [17, 06, 05, 02, 01, 04, 05, 05, 01, 02, 04, 01, 01, 16, 17, 15, 17, 11, 04, 05, 05, 09, 09, 10, 09]
                                    },
                                    {
                                        name: 'PerolaNegra',
                                        color: '#b71233',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_05; ?>,
                                        data: [17, 17, 17, 17, 17, 10, 17, 17, 17, 17, 13, 17, 17, 17, 17, 17, 12, 10, 09, 10, 11, 13, 17, 13, 17]
                                    },
                                    {
                                        name: 'Imperio de Casa Verde',
                                        color: '#41a8df',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_06; ?>,
                                        data: [17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 11, 03, 01, 01, 05, 09, 05, 07, 12, 11, 05, 08, 08]
                                    },
                                    {
                                        name: 'Academicos do Tatuape',
                                        color: '#3173b9',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_07; ?>,
                                        data: [17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 09, 13, 14, 17, 17, 17, 17, 17, 17, 11, 06, 12]
                                    },
                                    {
                                        name: 'Rosas de Ouro',
                                        color: '#e5008c',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_08; ?>,
                                        data: [01, 01, 02, 01, 02, 02, 04, 06, 06, 03, 02, 03, 06, 05, 07, 05, 06, 04, 03, 01, 08, 02, 02, 02, 03]
                                    },
                                    {
                                        name: 'Vai-Vai',
                                        color: '#272525',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_09; ?>,
                                        data: [02, 02, 01, 08, 04, 01, 02, 01, 01, 01, 01, 05, 05, 11, 05, 02, 03, 01, 02, 03, 01, 03, 07, 09, 01]
                                    },
                                    {
                                        name: 'Leandro de Itaquera',
                                        color: '#eb737c',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_10; ?>,
                                        data: [03, 05, 07, 05, 09, 17, 07, 08, 04, 05, 08, 06, 06, 12, null, 13, 17, 17, 12, 14, 17, 17, 17, 14, 17]
                                    },
                                    {
                                        name: 'Academicos do Tucuruvi',
                                        color: '#fff300',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_11; ?>,
                                        data: [17, 17, 06, 12, 17, 17, 17, 10, 05, 06, 09, 09, 09, 07, 06, 08, 09, 12, 07, 08, 02, 06, 06, 04, 06]
                                    },
                                    {
                                        name: 'Dragoes da Real',
                                        color: '#f1922b',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_12; ?>,
                                        data: [17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 08, 04, 05, 05]
                                    },
                                    {
                                        name: 'X-9 Paulistana',
                                        color: '#45b64c',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_13; ?>,
                                        data: [17, 17, 17, 17, 05, 07, 01, 09, 03, 01, 03, 10, 03, 02, 02, 06, 10, 06, 06, 09, 10, 10, 10, 11, 11]
                                    },
                                    {
                                        name: 'Tom Maior',
                                        color: '#b71233',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_14; ?>,
                                        data: [17, 17, 17, 17, 17, 08, 09, 17, 17, 10, 17, 17, 17, 17, 14, 09, 08, 05, 11, 12, 09, 07, 12, 07, 14]
                                    },
                                    {
                                        name: 'Camisa Verde e Branco',
                                        color: '#7ca73e',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_15; ?>,
                                        data: [01, 02, 01, 03, 03, 09, 17, 03, 08, 04, 05, 02, 06, 10, 11, 12, 17, 14, 17, 17, 17, 14, 17, 17, 17]
                                    },
                                    {
                                        name: 'Unidos do Peruche',
                                        color: '#7ca73e',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_16; ?>,
                                        data: [04, 04, 08, 07, 08, 05, 08, 07, 09, 11, 17, 12, 13, 15, 17, 10, 13, 17, 14, 17, 14, 17, 17, 17, 17]
                                    },
                                    {
                                        name: 'Colorados do Bras',
                                        color: '#b71233',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_17; ?>,
                                        data: [08, 10, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17]
                                    },
                                    {
                                        name: 'Imperador do Ipiranga',
                                        color: '#fff300',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_18; ?>,
                                        data: [17, 17, 10, 17, 10, 17, 17, 17, 11, 08, 12, 17, 17, 13, 15, 17, 14, 17, 17, 13, 17, 17, 17, 17, 17]
                                    },
                                    {
                                        name: 'Unidos de Vila Maria',
                                        color: '#00a852',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_19; ?>,
                                        data: [17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 11, 17, 17, 04, 04, 02, 03, 08, 06, 03, 05, 14, 17, 10]
                                    },
                                    {
                                        name: 'Morro da Casa Verde',
                                        color: '#e950a0',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_20; ?>,
                                        data: [17, 17, 17, 17, 17, 17, 17, 17, 17, 09, 10, 13, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17]
                                    },
                                    {
                                        name: 'Mancha Verde',
                                        color: '#00733c',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_21; ?>,
                                        data: [null, 17, 17, 17, 17 ,17 ,17 ,17 ,17 ,17 ,17, 17, 17, 17, 12, 01, 01, 07, 10, 04, 04, 04, 13, 17, 13]
                                    },
                                ]
                            });
                            $('#containerAcesso').highcharts({
                                credits: {
                                    enabled: false
                                },
                                chart: {
                                    type: 'spline'
                                },
                                title: {
                                    text: 'Carna Cardiograma - Grupo de Acesso'
                                },
                                xAxis: {
                                    categories: [
                                        '1991', '1992', '1993', '1994', '1995', '1996', 
                                        '1997', '1998', '1999', '2000', '2001', '2002',
                                        '2003', '2004', '2005', '2006', '2007', '2008',
                                        '2009', '2010', '2011', '2012', '2013', '2014', '2015']
                                },
                                yAxis: {
                                    tickPositions: [1, 2, 3 , 4, 5, 6, 7, 8, 9, 10],
                                    reversed: true,
                                    showFirstLabel: true,
                                    showLastLabel: true,
                                    tickLength: 10,
                                    max: 10,
                                    min: -1,
                                    title: {
                                        text: ''
                                    },
                                    labels: {
                                        useHTML: true
                                    },
                                    plotBands: [
                                        {
                                            color: '#FCFFC5',
                                            from: -1,
                                            to: 2.5,
                                            id: 'plotband-1'
                                            //label: { text: 'Campeã' }
                                        }
                                    ]
                                },
                                tooltip: {
                                    crosshairs: true,
                                    shared: true
                                },
                                plotOptions: {
                                    spline: {
                                        marker: {
                                            radius: 4,
                                            lineColor: '#eeeeee',
                                            lineWidth: 1
                                        }
                                    }
                                },
                                series: [
                                    {
                                        name: 'Nene de Vila Matilde',
                                        color: '#8e1c8e',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_02; ?>,
                                        data: [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 01, null, 01, null, null, null]
                                    },
                                    {
                                        name: 'Aguia de Ouro',
                                        color: '#986440',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_03; ?>,
                                        data: [-1, 03, 05, 06, 04, 02, -1, 1, null, null, null, null, null, null, null, null, null, null, 01, null, null, null, null, null, null]
                                    },
                                    {
                                        name: 'Gavioes da Fiel',
                                        color: '#59595b',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_04; ?>,
                                        data: [1, null, null, null, null, null, null, null, null, null, null, null, null, null, 01, null, 01, null, null, null,	null, null, null, null, null]

                                    },
                                    {
                                        name: 'Perola Negra',
                                        color: '#b71233',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_05; ?>,
                                        data: [4, 4, 3, 4, 2, -1, 3, 3, 4, 1, 3, 6, 4, 3, 2, -1, null,	null, null, null, null, 1, null, 02]
                                    },
                                    {
                                        name: 'Imperio de Casa Verde',
                                        color: '#41a8df',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_06; ?>,
                                        data: [null, null, null, null, null, null, null, -1, 5, 3, 4, 2, -1, null, null, null, null, null, null, null,	null, null, null, null, null]
                                    },
                                    {
                                        name: 'Academicos do Tatuape',
                                        color: '#3173b9',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_07; ?>,
                                        data: [null, null, null, null, null, null, null, null, null, null, 11, 6, 1, null, null, -1, 6, 6, 8, -1, 6, 2, -1, null, null]
                                    },
                                    {
                                        name: 'Leandro de Itaquera',
                                        color: '#eb737c',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_10; ?>,
                                        data: [null, null, null, null, null, 1, null, null, null, null, null, null, null, null, null, -1, 3, 2, -1, -1, 5, 3, 2, null, 04]
                                    },
                                    {
                                        name: 'Academicos do Tucuruvi',
                                        color: '#fff300',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_11; ?>,
                                        data: [5, 2, -1, -1, 6, 4, 2, -1, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null]
                                                     
                                    },
                                    {
                                        name: 'Dragoes da Real',
                                        color: '#f1922b',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_12; ?>,
                                        data: [null, null, null, null, null, null, null, null, null, null, null, null, null, null, 11, 5, 5, 5, 3, 3, 1, null, null, null, null]
                                    },
                                    {
                                        name: 'X9-Paulistana',
                                        color: '#45b64c',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_13; ?>,
                                        data: [6, 6, 4, 1, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null]
                                    },
                                    {
                                        name: 'Tom Maior',
                                        color: '#b71233',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_14; ?>,
                                        data: [null, 11, 7, 5, 1, null, -1, 5, 1, -1, 5, 5, 4, 2, -1, null, null, null, null, null, null, null, null, null, null]
                                    },
                                    {
                                        name: 'Camisa Verde e Branco',
                                        color: '#7ca73e',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_15; ?>,
                                        data: [null, null, null, null, null, null, 1, null, null, null, null, null, null, null, null, -1, 2, -1, 4, 4, 2, -1, 4, 3, 3]
                                    },
                                    {
                                        name: 'Unidos do Peruche',
                                        color: '#7ca73e',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_16; ?>,
                                        data: [null, null, null, null, null, null, null, null, null, -1, 2, -1, null, -1, 2, -1, null, 1, -1, 2, -1, 6, 6, 7, 1]
                                    },
                                    {
                                        name: 'Colorados do Bras',
                                        color: '#b71233',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_17; ?>,
                                        data: [null, -1, 11, 9, 11, null, null, null, null, null, 11, 8, 11, 8, 11, null, null, null, null, null, null, null, null, 5, 5]
                                    },
                                    {
                                        name: 'Imperador do Ipiranga',
                                        color: '#fff300',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_18; ?>,
                                        data: [3, 1, -1, 2, -1, 6, 5, 2, -1, null, -1, 4, 2, -1, null, 1, -1, 4, 2, -1, 4, 7, 7, 6, 7]
                                    },
                                    {
                                        name: 'Unidos de Vila Maria',
                                        color: '#00a852',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_19; ?>,
                                        data: [null, null, null, null, null, null, null, null, null, null, 1, 9, 6, -1, null, null, null, null, null, null, null, null, null, 1, null]
                                    },
                                    {
                                        name: 'Morro da Casa Verde',
                                        color: '#e950a0',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_20; ?>,
                                        data: [null, null, null, null, 11, 5, 7, 8, 2, -1, null, -1, 7, 7, -1, 6, 7, -1, 5, 5, 3, 5, 5, 4, 6]
                                    },       
                                    {
                                        name: 'Mancha Verde',
                                        color: '#00733c',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_20; ?>,
                                        data: [null, null, null, null, null, null, null, null, null, null, null, 11, 3, 1, null, null, null, null, null, null, null, null, null, 2, null]
                                    },
                                      {
                                        name: 'Estrela do 3 Milenio',
                                        color: '#de0023',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_20; ?>,
                                        data: [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 11, 8, 11]
                                    },         
                                            {
                                        name: 'Independente',
                                        color: '#ff0000',
                                        marker: {
                                            symbol: 'circle'                          
                                        },
                                        visible: <?php echo $visibilidade_20; ?>,
                                        data: [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, 11, 9]
                                    },     


                                ]
                            });
                                                            
                        }
                    );
                    </script>
                    <div id="containerEspecial" style="width: 100%; height: 700px; margin: 0 auto; background-color: #ccc;">
                    </div>
                    <div id="containerAcesso" style="width: 100%; height: 450px; margin: 0 auto; background-color: #ccc;">
                    </div>
                </div>
            </div>
            <br/>
            <br/>
            <?php
            include ('sidebar-servicebar.php');
            ?>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>