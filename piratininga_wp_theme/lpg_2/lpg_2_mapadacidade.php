


<div class="onlyDesk mapaDaCidade">


    <script>
        function norte() {
            document.getElementById("norte_css").style.display = "block";
            document.getElementById("oeste_css").style.display = "none";
            document.getElementById("sul_css").style.display = "none";
            document.getElementById("leste_css").style.display = "none";
            document.getElementById("centro_css").style.display = "none";
        }
        function oeste() {
            document.getElementById("norte_css").style.display = "none";
            document.getElementById("oeste_css").style.display = "block";
            document.getElementById("sul_css").style.display = "none";
            document.getElementById("leste_css").style.display = "none";
            document.getElementById("centro_css").style.display = "none";
        }
        function sul() {
            document.getElementById("norte_css").style.display = "none";
            document.getElementById("oeste_css").style.display = "none";
            document.getElementById("sul_css").style.display = "block";
            document.getElementById("leste_css").style.display = "none";
            document.getElementById("centro_css").style.display = "none";
        }
        function leste() {
            document.getElementById("norte_css").style.display = "none";
            document.getElementById("oeste_css").style.display = "none";
            document.getElementById("sul_css").style.display = "none";
            document.getElementById("leste_css").style.display = "block";
            document.getElementById("centro_css").style.display = "none";
        }
        function centro() {
            document.getElementById("norte_css").style.display = "none";
            document.getElementById("oeste_css").style.display = "none";
            document.getElementById("sul_css").style.display = "none";
            document.getElementById("leste_css").style.display = "none";
            document.getElementById("centro_css").style.display = "block";
        }
    </script>



    <img src="<?php echo get_bloginfo('template_url'); ?>/images/planeje_mapadacidade.png" width="1150" height="856" usemap="#Map" border="0" style="background-color: #F79D1F;"  />

    <map name="Map" id="Map">
        <area shape="poly" 
              onclick="norte()"
              coords="732,301,725,280,718,263,712,254,714,246,710,241,713,234,720,233,725,232,731,231,735,235,739,235,745,235,750,231,755,230,757,230,759,221,762,218,768,220,772,223,776,224,782,222,784,222,789,223,793,227,797,229,803,231,803,235,804,239,807,240,810,240,812,244,813,247,816,249,820,250,820,254,821,255,826,256,830,257,833,255,834,251,837,248,842,248,846,251,854,258,859,262,867,261,874,260,878,260,882,258,887,254,890,252,895,249,896,246,899,237,902,231,906,229,909,228,909,223,910,220,916,218,920,213,924,210,928,207,934,208,944,201,950,195,955,190,959,193,964,197,964,201,962,205,958,210,957,213,956,218,952,225,947,230,946,233,945,237,946,239,944,243,942,245,938,247,936,251,937,258,938,264,937,267,938,271,937,275,934,288,938,300,942,305,942,312,942,317,942,320,943,325,943,330,943,334,944,336,944,337,944,346,942,348,938,349,934,350,927,350,923,351,917,352,912,353,908,349,903,348,901,348,896,345,892,345,887,345,878,345,867,345,844,341,831,336,824,334,817,335,806,334,798,337,792,335,785,335,778,334,774,330,774,326,773,323,769,322,764,321,762,315,761,311,761,308,761,306,760,303,753,300,753,298,753,296,746,295,743,294,742,290,739,288,736,288,736,291,735,293,734,298,733,301" />

        <area shape="poly" 
              onclick="oeste()"
              coords="769,331,783,339,792,339,795,344,804,339,818,338,834,341,843,345,855,347,851,356,851,364,846,371,838,378,852,386,861,395,847,407,841,421,838,433,830,447,821,441,812,439,803,434,795,435,787,438,776,438,780,429,771,423,765,416,763,421,746,426,733,428,726,431,724,424,730,416,729,413,736,410,745,403,755,398,761,391,765,386,769,380,770,372,769,365,768,358,774,356,778,353,779,349,775,347,771,344,769,340,765,335,767,332"/>

        <area shape="poly" 
              onclick="sul()"
              coords="865,397,880,406,893,406,900,397,903,396,915,418,924,430,923,439,921,448,921,454,920,458,920,467,908,475,897,480,895,478,883,484,882,481,886,476,889,474,890,471,881,453,868,451,863,452,862,460,857,463,855,461,845,465,838,473,835,481,843,493,843,509,835,515,832,521,843,527,849,540,861,554,864,571,872,585,886,603,885,625,881,639,876,651,878,668,892,677,891,695,893,708,896,719,898,729,894,741,898,754,898,764,897,773,893,777,877,786,879,801,864,810,854,797,838,798,828,792,816,799,809,803,801,802,792,805,787,800,777,804,769,810,756,815,767,801,773,785,767,779,763,771,756,768,755,761,743,752,728,749,723,727,728,714,728,706,739,711,753,709,754,672,753,661,763,661,766,644,755,632,746,627,733,626,741,610,742,596,757,585,761,575,759,570,744,564,736,549,737,536,740,523,735,517,735,499,740,481,740,470,754,457,764,447,772,439,776,444,783,442,787,444,797,438,807,442,823,449,831,453,839,442,845,427,847,412" />

        <area shape="poly" 
              onclick="leste()"
              coords="887,350,897,353,905,353,915,357,933,355,943,354,948,349,949,340,952,336,957,337,960,334,958,330,969,317,976,316,978,310,986,306,996,307,1005,313,1016,309,1029,312,1031,321,1039,321,1047,318,1052,311,1063,308,1077,308,1077,315,1086,316,1094,312,1101,309,1110,327,1112,337,1098,346,1089,355,1088,365,1092,373,1087,376,1092,387,1097,392,1098,403,1099,415,1096,424,1087,427,1086,438,1078,447,1072,457,1067,464,1059,459,1051,463,1039,464,1023,461,1018,449,1005,448,992,448,978,437,966,436,957,430,946,434,928,424,922,422,901,380,888,378,886,366"/>

        <area shape="poly" 
              onclick="centro()"
              coords="861,348,883,349,883,362,882,369,884,382,896,384,902,392,897,394,891,401,880,402,870,396,859,386,852,381,845,379,853,370,855,362,859,351"/>
    </map>

    <div class="mapaDaCidade_itens wpWysiwyg" id="norte_css">
        <h1 class="mapaDaCidade_itens_h1" style="color: #F79D1F;">NORTE</h1>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="mapaDaCidade_itens wpWysiwyg" id="oeste_css">
        <h1 class="mapaDaCidade_itens_h1" style="color: #F79D1F;">OESTE</h1>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="mapaDaCidade_itens wpWysiwyg" id="sul_css">
        <h1 class="mapaDaCidade_itens_h1" style="color: #F79D1F;">SUL</h1>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="mapaDaCidade_itens wpWysiwyg" id="leste_css">
        <h1 class="mapaDaCidade_itens_h1" style="color: #F79D1F;">LESTE</h1>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="mapaDaCidade_itens wpWysiwyg" id="centro_css">
        <h1 class="mapaDaCidade_itens_h1" style="color: #F79D1F;">CENTRO</h1>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>

    <div class="introbox wpWysiwyg">
        <h5 class="mapaDaCidade_itens_h5">REGI&Otilde;ES E BAIRROS DE S&Atilde;O PAULO:</h5>
        <p class="mapaDaCidade_itens_p">The Valley is the largest region in Los Angeles, a sprawling area that is home to historic movie studios, acclaimed restaurants, and some of LAs most popular cultural attractions</p>
    </div>

    <div class="maps-all">
        <div class="maps-first">
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/mapadacidade_1.png" />
            <div class="textbox">
                <h2 class="mapaDaCidade_itens_h2">PA&Iacute;S: <b>BRASIL</b></h2>
                <ul class="mapaDaCidade_itens_ul">
                    <li class="mapaDaCidade_itens_ul_li"><p class="mapaDaCidade_itens_ul_li_p">- 4&ordf; economia mundial</p></li>
                    <li class="mapaDaCidade_itens_ul_li"><p class="mapaDaCidade_itens_ul_li_p">- 3&ordm; mais populoso</p></li>
                    <li class="mapaDaCidade_itens_ul_li"><p class="mapaDaCidade_itens_ul_li_p">- pa&iacute;s laico</p></li>
                    <li class="mapaDaCidade_itens_ul_li"><p class="mapaDaCidade_itens_ul_li_p">- turismo e turista</p></li>
                </ul>
            </div>
        </div>

        <div class="maps">
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/mapadacidade_2.png" />
            <div class="textbox">
                <h2 class="mapaDaCidade_itens_h2">ESTADO: <b>S&Atilde;O PAULO</b></h2>
                <ul>
                    <li><p>- Mata Atl&acirc;ntica</p></li>
                    <li><p>- 3&ordm; mais populoso</p></li>
                    <li><p>- pa&iacute;s laico</p></li>
                    <li><p>- 8 milh&otilde;es m2</p></li>
                </ul>
            </div>
        </div>

        <div class="maps-last">
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/mapadacidade_3.png" />
            <div class="textbox">
                <h2 class="mapaDaCidade_itens_h2">CIDADE: <b>S&Atilde;O PAULO</b></h2>
                <ul>
                    <li><p>- Mata Atl&acirc;ntica</p></li>
                    <li><p>- 3&ordm; mais populoso</p></li>
                    <li><p>- pa&iacute;s laico</p></li>
                    <li><p>- 8 milh&otilde;es m2</p></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="downloadbox">
        <a href="<?php echo get_permalink($lpg_5_downloads); ?>">
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/mapadacidade_downloadicon.png" />
            <p> BAIXE O MAPA OU 
                RETIRE O SEU NUMA 
                DAS CITs ESPALHADAS
                PELA CIDADE 
            </p>
        </a>
    </div>


</div>

<div class="onlyMobile">

    <div class="mapaDaCidadeMobile">
        <img src="<?php echo get_bloginfo('template_url'); ?>/images/planeje_mapadesaopaulo.png" alt="Mapa da Cidade" />
    </div>

</div>