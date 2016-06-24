<?php
$result = file_get_contents('http://weather.yahooapis.com/forecastrss?w=455827&u=c');

if($result!=""){
$xml = simplexml_load_string($result);

$xml->registerXPathNamespace('yweather', 'http://xml.weather.yahoo.com/ns/rss/1.0');
$location = $xml->channel->xpath('yweather:location');

if (!empty($location)) {
    foreach ($xml->channel->item as $item) {
        $current = $item->xpath('yweather:condition');
        $forecast = $item->xpath('yweather:forecast');
        $current = $current[0];

        $temperatura = $current['temp'];

        $codigoyahoo = $current['code'];

        if ($codigoyahoo <= 8) {
            $icone = "chuvaforte";
        } elseif ($codigoyahoo <= 16) {
            $icone = "chuva";
        } elseif ($codigoyahoo <= 18) {
            $icone = "chuvaforte";
        } elseif ($codigoyahoo <= 19) {
            $icone = "ensolarado";
        } elseif ($codigoyahoo <= 22) {
            $icone = "nublado";
        } elseif ($codigoyahoo <= 24) {
            $icone = "chuvaforte";
        } elseif ($codigoyahoo <= 26) {
            $icone = "nublado";
        } elseif ($codigoyahoo <= 27) {
            $icone = "noitenublada";
        } elseif ($codigoyahoo <= 28) {
            $icone = "nublado";
        } elseif ($codigoyahoo <= 29) {
            $icone = "noitenublada";
        } elseif ($codigoyahoo <= 30) {
            $icone = "nublado";
        } elseif ($codigoyahoo <= 31) {
            $icone = "noiteclara";
        } elseif ($codigoyahoo <= 32) {
            $icone = "ensolarado";
        } elseif ($codigoyahoo <= 33) {
            $icone = "noiteclara";
        } elseif ($codigoyahoo <= 34) {
            $icone = "ensolarado";
        } elseif ($codigoyahoo <= 35) {
            $icone = "chuvaforte";
        } elseif ($codigoyahoo <= 36) {
            $icone = "ensolarado";
        } elseif ($codigoyahoo <= 39) {
            $icone = "chuvaforte";
        } elseif ($codigoyahoo <= 43) {
            $icone = "chuva";
        } elseif ($codigoyahoo <= 44) {
            $icone = "nublado";
        } elseif ($codigoyahoo <= 47) {
            $icone = "chuvaforte";
        } else {
            $icone = "nublado";
        }
        $verifica = 1;
    }
} else {
    $verifica = 2;
}
if ($verifica == 1) {
    ?>
    <div class="contentInterna_aside_box">
        <div id="contentInterna_aside_boxClima">
            <div id="contentInterna_aside_boxClima_weather">
                <img id="contentInterna_aside_boxClima_weather_icone" src="<?php bloginfo('template_url') ?>/images/<?php echo $icone; ?>.png" 
                     alt="Este &iacute;cone foi desenhado por Adam Whitcroft, dispon&iacute;vel em thenounproject.com/adamwhitcroft"
                     title="Este &iacute;cone foi desenhado por Adam Whitcroft, dispon&iacute;vel em thenounproject.com/adamwhitcroft" 
                     />
                <p id="contentInterna_aside_boxClima_weather_temperatura"><?php echo $temperatura; ?><span>&deg;C</span></p>
            </div>
            <p id="contentInterna_aside_boxClima_linkYahoo">
                <a id="contentInterna_aside_boxClima_linkYahoo_link" href="http://weather.yahoo.com/brazil/sao-paulo/sao-paulo-455827/" target="_blank">Powered by Yahoo!</a>
            </p>
        </div>
    </div>
    <?php
} else {
    echo "<!-- Modulo do clima Yahoo Offline. -->";
}
	 
}else{
	echo "<!-- Modulo do clima Yahoo Offline. -->";
}
?>
