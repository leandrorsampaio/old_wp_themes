<?php get_header(); ?>
<div id="all_content">
    <div id="orangeBox"></div>
    <div id="contentIntern">
        <!------------------------------------------ BLOCO 1 ---------------------------------->
        <div id="content_bloco1">
            <div id="content_bloco1_sliderNavegation"></div>
            <div id="traductor">
                <?php get_sidebar('traducao'); ?>
            </div>
            <div id="content_bloco1_search">
                <?php get_search_form(); ?>
            </div>
        </div>
        <div id="content_breadcrumb">
            <h4 id="content_breadcrumb_text">
                <a href="<?php echo the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h4>
        </div>
        <!------------------------------------------ Esquerda ---------------------------------->
        <div id="content_esquerda">
            <div class="content_esquerda_sidebarX">
                <?php
                get_sidebar('publicidade');
                get_sidebar('fale-conosco');
                ?>

                <div>

                    <h1>Valores:</h1>
                    <br/>
                    <br/>
                    <p>Total Internet:<spam id="JStotalInternet">OO</spam></p>
                    <p>Total Telefonia:<spam id="js_totalTelefonia"> </spam></p>
                    <p>Total Locacao:<spam id="js_totalLocacao"> </spam></p>
                    <p>Total Servicos:<spam id="js_totalServicos"> </spam></p>
                    <br/>
                    <p>Total Geral:<spam id="js_totalGeral"> </spam></p>







                </div>







            </div>
        </div>
        <div id="content_border">
            <div id="content_borde_color"></div>
        </div>
        <!------------------------------------------ Direita ---------------------------------->
        <div id="content_direita">
            <?php while (have_posts()): the_post(); ?>
                <article class="content_direita_article">
                    <div id="content_direita_article_theContent_topBar">
                        <div id="recursos">
                            <div id="recursos_print">
                                <a id="recursos_print_link" target="_self" href="javaScript:window.print()"></a> 
                            </div>
                            <div id="recursos_sendEmail">
                                <?php
                                if (function_exists('wp_email')) {
                                    email_link();
                                }
                                ?>
                            </div>
                            <div id="recursos_pdf">
                                <a id="recursos_pdf_link" href="<?php bloginfo('url') ?>/wp-content/plugins/post2pdf-converter/post2pdf-converter-pdf-maker.php?id=<?php the_ID(); ?>" rel="nofollow"></a>
                            </div>
                            <div id="recursos_textSize">
                                <p id="recursos_textSize_title">Texto:</p>
                                <ul class="resizer">
                                    <li class="small">
                                        <a id="btn_small" href="#"></a>
                                    </li>
                                    <li class="medium">
                                        <a id="btn_medium" href="#"></a>
                                    </li>
                                    <li class="large">
                                        <a id="btn_large" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content_direita_article_theContent">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <div id="contato">









                <!--- Mascara do formulario --->
                <script type="text/javascript">
                    jQuery(function($){
                        $("#cnpj_mj").mask("99.999.999/9999-99");
                        $("#cobranca_cep").mask("99999-999");
                        $("#fatura_cep").mask("99999-999");
                        $("#tel").mask("(99) 9999-9999");
                        $("#cel").mask("(99) 99999-9999");
                        $("#rep_cpf").mask("999.999.999-99");
                        $("#rep_cep").mask("99999-999");
                        $("#internetData").mask("99/99/9999 | 99/99/9999");
                        $("#locacaoData").mask("99/99/9999 | 99/99/9999");
                        $("#servicosData").mask("99/99/9999 | 99/99/9999");
                        $("#telefoniaData").mask("99/99/9999 | 99/99/9999");
                    });
                </script>
                <!--- Validação dos campos do formulario --->
                <script type="text/javascript">
                    function validaForm()
                    {
                        var x=document.forms["telecomForm"]["email"].value;
                        var atpos=x.indexOf("@");
                        var dotpos=x.lastIndexOf(".");
                        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
                        {
                            alert("Por favor, informe um e-mail válido");
                            return false;
                        }
                        if (document.telecomForm.nome_evento.value == ""){
                            alert("Por favor, informe o nome do evento/feira.");
                            return false;
                        } else if (document.telecomForm.nome_estande.value==""){
                            alert("Por favor, informe o nome do estande.")
                            return false
                        }
                        else if (document.telecomForm.local.value==""){
                            alert("Por favor, informe a localização.")
                            return false
                        }
                        else if (document.telecomForm.razao_social.value==""){
                            alert("Por favor, informe a Razão Social.")
                            return false
                        }
                        else if (document.telecomForm.cnpj_mj.value==""){
                            alert("Por favor, informe o CNPJ.")
                            return false
                        }
                        else if (document.telecomForm.cobranca_end.value==""){
                            alert("Por favor, informe o endereço para cobrança.")
                            return false
                        }
                        else if (document.telecomForm.cobranca_cep.value==""){
                            alert("Por favor, informe o CEP para cobrança.")
                            return false
                        }
                        else if (document.telecomForm.cobranca_bairro.value==""){
                            alert("Por favor, informe o bairro para cobrança.")
                            return false
                        }
                        else if (document.telecomForm.cobranca_cidade.value==""){
                            alert("Por favor, informe a cidade para cobrança.")
                            return false
                        }
                        else if (document.telecomForm.cobranca_uf.value==""){
                            alert("Por favor, informe o UF para cobrança.")
                            return false
                        }
                        else if (document.telecomForm.tel.value==""){
                            alert("Por favor, informe o telefone para contato.")
                            return false
                        }
                        else if (document.telecomForm.rep.value==""){
                            alert("Por favor, informe o representante legal.")
                            return false
                        }
                        else if (document.telecomForm.rep_cargo.value==""){
                            alert("Por favor, informe o cargo do representante legal.")
                            return false
                        }
                        else if (document.telecomForm.rep_rg.value==""){
                            alert("Por favor, informe o RG.")
                            return false
                        }
                        else if (document.telecomForm.rep_cpf.value==""){
                            alert("Por favor, informe o CPF.")
                            return false
                        }
                    }
                </script>
                </head>
                <body style="background: #fff">

                    <p style="color: #ff0000; font-size: 11px; font-family: 'CenturyBold', arial, sans-serif;">* Itens obrigat&oacute;rios</p><br/>
                    <form action="http://spturis.com/sistemas/mailer_anhembi/mailer_telecom_envia.php" name="telecomForm" method="post" onsubmit="return validaForm()" >

                        <!------------------------------------------- Início Bloco Um: Evento/Feira ---> 
                        <div id="telecomForm_bloco1" class="bloco">
                            <div class="telecomForm_bloco_title">
                                <div class="telecomForm_bloco_title_1"></div>
                            </div>
                            <div class="telecomForm_bloco_content">
                                <p class="telecomForm_title" style="font-size: 14px">Evento/Feira:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputLongo" type="text" id="nome_evento" name="nome_evento" maxlength="150">
                                <p class="telecomForm_title">Nome do Estande:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputCurto" type="text" name="nome_estande" maxlength="150">
                                <p class="telecomForm_title_dir">Localização:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputCurto_dir" type="text" id="local" name="local" maxlength="150">
                                <p class="telecomForm_title">Razão Social:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputLongo" type="text" name="razao_social" maxlength="150">
                                <p class="telecomForm_title">CNPJ/MJ:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputLongo" type="text" id="cnpj_mj" name="cnpj_mj" maxlength="150">
                            </div>
                        </div>
                        <!------------------------------------------- Fim Bloco Um ---> 


                        <!------------------------------------------- Início Bloco Dois: Cobrança/Faturamento ---> 
                        <div id="telecomForm_bloco2" class="bloco">
                            <div class="telecomForm_bloco_title">
                                <div class="telecomForm_bloco_title_2"></div>
                            </div>
                            <div class="telecomForm_bloco_content">
                                <p class="telecomForm_title">Endereço para cobrança:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputLongo" type="text" id="cobranca_end" name="cobranca_end" maxlength="150">
                                <p class="telecomForm_title">CEP:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputSuperCurto" type="text" id="cobranca_cep" name="cobranca_cep" maxlength="150">        
                                <p class="telecomForm_title_SuperCurto">Bairro:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputSuperCurto" type="text" id="cobranca_bairro" name="cobranca_bairro" maxlength="150">         
                                <p class="telecomForm_title_SuperCurto">Cidade:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputSuperCurto" type="text" id="cobranca_cidade" name="cobranca_cidade" maxlength="150">
                                <p class="telecomForm_title_SuperCurto">UF:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputSuperCurto" type="text" id="cobranca_uf" name="cobranca_uf" maxlength="150">
                                <p class="telecomForm_title">Endereço de Faturamento:</p>
                                <input class="telecomForm_inputLongo" type="text" id="fatura_end" name="fatura_end" maxlength="150">
                                <p class="telecomForm_title">CEP:</p>
                                <input class="telecomForm_inputSuperCurto" type="text" id="fatura_cep" name="fatura_cep" maxlength="150">        
                                <p class="telecomForm_title_SuperCurto">Bairro:</p>
                                <input class="telecomForm_inputSuperCurto" type="text" id="fatura_bairro" name="fatura_bairro" maxlength="150">         
                                <p class="telecomForm_title_SuperCurto">Cidade:</p>
                                <input class="telecomForm_inputSuperCurto" type="text" id="fatura_cidade" name="fatura_cidade" maxlength="150">
                                <p class="telecomForm_title_SuperCurto">UF:</p>
                                <input class="telecomForm_inputSuperCurto" type="text" id="fatura_uf" name="fatura_uf" maxlength="150">
                                <p class="telecomForm_title">Contato:</p>
                                <input class="telecomForm_inputCurto" style="width: 286px!important;" type="text" id="contato_nome" name="contato_nome" maxlength="150">           
                                <p class="telecomForm_title_SuperCurto">Telefone:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputSuperCurto" type="text" id="tel" name="tel" maxlength="15">
                                <p class="telecomForm_title_SuperCurto">Celular:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputSuperCurto" type="text" id="cel" name="cel" maxlength="15">
                                <p class="telecomForm_title">E-mail:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputCurto" type="text" id="email" name="email" maxlength="150">
                                <p class="telecomForm_title_dir">Cargo:</p>
                                <input class="telecomForm_inputCurto_dir" type="text" name="cargo" maxlength="150">
                            </div>
                        </div>
                        <!------------------------------------------- Fim Bloco Dois ---> 

                        <!------------------------------------------- Início Bloco Três: Representante --->
                        <div id="telecomForm_bloco3" class="bloco">
                            <div class="telecomForm_bloco_title">
                                <div class="telecomForm_bloco_title_3"></div>
                            </div>
                            <div class="telecomForm_bloco_content">
                                <p class="telecomForm_title">Representante Legal:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputLongo" type="text" name="rep" maxlength="150">
                                <p class="telecomForm_title">Cargo:<span style="color: #ff0000;">*</span></p>
                                <input class="telecomForm_inputCurto" type="text" name="rep_cargo" maxlength="150">
                                <p class="telecomForm_title_dir">Nacionalidade:</p>
                                <input class="telecomForm_inputCurto_dir" type="text" name="rep_nac" maxlength="150">
                                <p class="telecomForm_title">Profissão:</p>
                                <input class="telecomForm_inputCurto" type="text" name="rep_profissao" maxlength="150">
                                <p class="telecomForm_title_dir">Estado Civil:</p>
                                <input class="telecomForm_inputCurto_dir" type="text" name="rep_escivil" maxlength="150">
                                <p class="telecomForm_title">RG<span style="color: #ff0000;">*</span>:</p>
                                <input class="telecomForm_inputCurto" type="text" id="rep_rg" name="rep_rg" maxlength="150">
                                <p class="telecomForm_title_dir">CPF<span style="color: #ff0000;">*</span>:</p>
                                <input class="telecomForm_inputCurto_dir" type="text" id="rep_cpf" name="rep_cpf" maxlength="150">
                            </div>
                        </div>
                        <!------------------------------------------- Fim Bloco Três ---> 
                        <!--            Para complementar sua solicitação, informe o número de dias que o serviço será contratado (período). Em seguida, escolha os serviços e insira nos campos abaixo a quantidade desejada para cada serviço.-->

                        <!--- ######################################################## FORMULÁRIOS DE SERVIÇOS --->
                        <!------------------------------------------------------------- Início Bloco 1: Internet -->
                        <div id="telecomForm_servicos_bloco1" class="servicos_bloco">
                            <h3 class="telecomForm_servicos_title">Internet</h3>
                            <p class="telecomForm_servicos_input_title">Per&iacute;odo:</p>
                            <input class="telecomForm_inputServico" type="text" id="internetData" name="internetData" maxlenght="30">

                            <!-------------- Internet Serviço 01: Banda Larga Compartilhado --->
                            <p class="telecomForm_servicos_input_title">
                                Banda Larga - Compartilhado<br/>
                                (C&oacute;digo 01 a 07)
                            </p>
                            <br/>
                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    512 kbps &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; R$250,00
                                </p>
                                <span id="internet_cod01_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod01" class="qtdade_select" id="number1">
                                        <option value="0">-</option>
                                        <option value="1">1</option>  
                                        <option value="2">2</option>  
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>


                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    01 mbps &nbsp; &nbsp; &nbsp; &nbsp; R$350,00
                                </p>
                                <span id="internet_cod02_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod02" class="qtdade_select" id="number2">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    02 mbps &nbsp; &nbsp; &nbsp; &nbsp; R$450,00
                                </p>
                                <span id="internet_cod03_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod03" class="qtdade_select" id="number3">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    04 mbps &nbsp; &nbsp; &nbsp; &nbsp; R$750,00</p>
                                <span id="internet_cod04_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod04" class="qtdade_select" id="number4">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    06 mbps &nbsp; &nbsp; &nbsp; &nbsp; R$950,00</p>
                                <span id="internet_cod05_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod05" class="qtdade_select" id="number5">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    08 mbps  &nbsp; &nbsp; &nbsp; &nbsp; R$1150,00</p>
                                <span id="internet_cod06_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod06" class="qtdade_select" id="number6">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    10 mbps  &nbsp; &nbsp; &nbsp; &nbsp; R$1350,00</p>
                                <span id="internet_cod07_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod07" class="qtdade_select" id="number7">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>
                            <br/>

                            <!------ Internet Serviço 02: Banda Larga Dedicado com IP --->
                            <p class="telecomForm_servicos_input_title">
                                Banda Larga - Dedicado com IP v&aacute;lido<br/>
                                (C&oacute;digo 20 a 26)
                            </p>
                            <br/>
                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    512 kbps &nbsp; &nbsp; &nbsp; &nbsp; R$1900,00
                                </p>
                                <span id="internet_cod20_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod20" class="qtdade_select" id="number8">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    01 mbps &nbsp; &nbsp; &nbsp; &nbsp; R$2700,00
                                </p>
                                <span id="internet_cod21_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod21" class="qtdade_select" id="number9">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    02 mbps &nbsp; &nbsp; &nbsp; &nbsp; R$3050,00
                                </p>
                                <span id="internet_cod22_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod22" class="qtdade_select" id="number10">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    04 mbps &nbsp; &nbsp; &nbsp; &nbsp R$3750,00
                                </p>
                                <span id="internet_cod23_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod23" class="qtdade_select" id="number11">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    06 mbps &nbsp; &nbsp; &nbsp; &nbsp R$4450,00
                                </p>
                                <span id="internet_cod24_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod24" class="qtdade_select" id="number12">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    08 mbps &nbsp; &nbsp; &nbsp; &nbsp R$5150,00
                                </p>
                                <span id="internet_cod25_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod25" class="qtdade_select" id="number13">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    10 mbps &nbsp; &nbsp; &nbsp; &nbsp; R$5850,00</p>
                                <span id="internet_cod26_Qtd">
                                    <p class="telecomForm_servicos_input_itens">                                              
                                        Quantidade:
                                    </p> 
                                    <select name="cod26" class="qtdade_select" id="number14">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                        </div>
                        <!------------------------ Fim Bloco 1: Internet -->

                        <!------------------------------------------------------------- Início Bloco 2: Telefonia e Locação -->
                        <div id="telecomForm_servicos_bloco2" class="servicos_bloco">
                            <!----------------------- Telefonia ---->
                            <h3 class="telecomForm_servicos_title">Telefonia</h3>
                            <p class="telecomForm_servicos_input_title">Per&iacute;odo:</p>
                            <input class="telecomForm_inputServico" type="text" id="telefoniaData" name="telefoniaData" maxlenght="30">

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    Linha Telef&ocirc;nica DDR (C&oacute;digo 60)
                                </p>
                                <p class="telecomForm_servicos_input_itens">
                                    Valor: R$80,00 </p>
                                <br/>
                                <span id="telefonia_cod60_Qtd">
                                    <p class="telecomForm_servicos_input_itens">
                                        Quantidade: 
                                    </p>
                                    <select name="cod60" class="qtdade_select">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div id="telecomForm_servicos_separator"></div>

                            <!------------------------ Locação --->
                            <h3 class="telecomForm_servicos_title">Loca&ccedil;&atilde;o</h3>
                            <p class="telecomForm_servicos_input_title">Per&iacute;odo:</p>
                            <input class="telecomForm_inputServico" type="text" id="locacaoData" name="locacaoData" maxlenght="30">

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    Aparelho telef&ocirc;nico anal&oacute;gico (C&oacute;digo 70)
                                </p>
                                <p class="telecomForm_servicos_input_itens">
                                    Valor: R$15,00 </p>
                                <br/>
                                <span id="locacao_cod70_Qtd">
                                    <p class="telecomForm_servicos_input_itens">
                                        Quantidade: </p>
                                    <select name="cod70" class="qtdade_select">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    Switch 10/100 Mbps de 08 Portas (C&oacute;digo 71)
                                </p>
                                <p class="telecomForm_servicos_input_itens">
                                    Valor: R$30,00 </p>
                                <br/>
                                <span id="locacao_cod71_Qtd">
                                    <p class="telecomForm_servicos_input_itens">
                                        Quantidade: </p>
                                    <select name="cod71" class="qtdade_select">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    Roteador 2 portas (C&oacute;digo 72)
                                </p>
                                <p class="telecomForm_servicos_input_itens">
                                    Valor: R$80,00 </p>
                                <span id="locacao_cod72_Qtd">
                                    <p class="telecomForm_servicos_input_itens">
                                        Quantidade: </p>
                                    <select name="cod72"class="qtdade_select">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <!------------------------ Fim Bloco 2: Telefonia e Locação -->         


                        <!------------------------------------------------------------- Início Bloco 3: Serviços -->

                        <div id="telecomForm_servicos_bloco3" class="servicos_bloco">
                            <h3  class="telecomForm_servicos_title">Servi&ccedil;os</h3>
                            <p class="telecomForm_servicos_input_title">Per&iacute;odo:</p>
                            <input class="telecomForm_inputServico" type="text" id="servicosData" name="servicosData" maxlenght="30">

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    Instala&ccedil;&atilde;o por ponto de voz (C&oacute;digo 80)
                                </p>
                                <p class="telecomForm_servicos_input_itens">
                                    Valor: R$100,00 </p>
                                <span id="servicos_cod80_Qtd">
                                    <p class="telecomForm_servicos_input_itens">
                                        Quantidade: </p>
                                    <select name="cod80" class="qtdade_select">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>


                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    Instala&ccedil;&atilde;o por ponto de dados (C&oacute;digo 81)
                                </p>
                                <p class="telecomForm_servicos_input_itens">
                                    Valor: R$100,00 </p>
                                <span id="servicos_cod81_Qtd">
                                    <p class="telecomForm_servicos_input_itens">
                                        Quantidade: </p>
                                    <select name="cod81" class="qtdade_select">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    Progama&ccedil;&atilde;o Hotline - Linha telef&ocirc;nica direta (C&oacute;digo 82)
                                </p>
                                <p class="telecomForm_servicos_input_itens">
                                    Valor: R$150,00
                                </p>
                                <span id="servicos_cod82_Qtd">
                                    <p class="telecomForm_servicos_input_itens">
                                        Quantidade: </p>
                                    <select name="cod82" class="qtdade_select">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>


                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    Bloqueio de ramal (C&oacute;digo 83)
                                </p>
                                <p class="telecomForm_servicos_input_itens">
                                    Valor: R$20,00
                                </p>
                                <span id="servicos_cod83_Qtd">
                                    <p class="telecomForm_servicos_input_itens">
                                        Quantidade: </p>
                                    <select name="cod83" class="qtdade_select">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    Captura entre ramais (C&oacute;digo 84)
                                </p>
                                <p class="telecomForm_servicos_input_itens">
                                    Valor: R$20,00
                                </p>
                                <span id="servicos_cod84_Qtd">
                                    <p class="telecomForm_servicos_input_itens">
                                        Quantidade: </p>
                                    <select name="cod84" class="qtdade_select">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    Consecutivo entre ramais (C&oacute;digo 85)
                                </p>
                                <p class="telecomForm_servicos_input_itens">
                                    Valor: R$20,00 
                                </p>
                                <span id="servicos_cod85_Qtd">
                                    <p class="telecomForm_servicos_input_itens">
                                        Quantidade: 
                                    </p>
                                    <select name="cod85" class="qtdade_select">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    Linha privativa de voz (C&oacute;digo 86)
                                </p>
                                <p class="telecomForm_servicos_input_itens">
                                    Valor: R$150,00 </p>
                                <span id="servicos_cod86_Qtd">
                                    <p class="telecomForm_servicos_input_itens">
                                        Quantidade: </p>
                                    <select name="cod86" class="qtdade_select">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>

                            <div class="telecomForm_servicosItem">
                                <p class="telecomForm_servicos_input_title">
                                    Linha privativa de dados (C&oacute;digo 87)
                                </p>
                                <p class="telecomForm_servicos_input_itens">
                                    Valor: R$1000,00 </p>
                                <span id="servicos_cod87_Qtd">
                                    <p class="telecomForm_servicos_input_itens">
                                        Quantidade: </p>
                                    <select name="cod87" class="qtdade_select">
                                        <option value="0">-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            </div>
                            <p class="telecomForm_servicos_input_title">
                                Outros servi&ccedil;os
                            </p>
                            <input class="telecomForm_inputServico" type="text" id="outrosServicos" name="outrosServicos" maxlenght="30">

                        </div>


                        <div id="telecomForm_bloco4" class="bloco">
                            <h1>Selecione seu vendedor:</h1> 
                            <span id="vendedor">
                                <select id="vendedor_select" name="vendedor">
                                    <option value="0">-</option>
                                    <option value="1">Marcos</option>
                                    <option value="2">Diego</option>
                                    <option value="3">William</option>
                                </select>
                            </span>
                        </div>
                        <input id="telecomForm_btn" style="margin: 10px 0 0!important" type="submit" value="Enviar">
                    </form>






                    <script>
                        $('select[id*="number"]').change(function() { // when any one dropdown change
                            total = 0; // reset the total
                            $('select[id="number1"]').each(function() { 
                                var diaria1 = 100;
                                if ((this.value)==0)
                                {
                                    total1 = 0; 
                                } else {
                                    total1 = ((this.value) * diaria1) + 150; 
                                }
                            });
                            $('select[id="number2"]').each(function() { 
                                var diaria2 = 200;
                                if ((this.value)==0)
                                {
                                    total2 = 0; 
                                } else {
                                    total2 = ((this.value) * diaria2) + 150; 
                                }
                            });
                            
                            var totalgeral = total1 + total2;
                            
                            // do something with total here
                            document.getElementById("JStotalInternet").innerHTML=totalgeral;
                        });
                    </script>




            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>