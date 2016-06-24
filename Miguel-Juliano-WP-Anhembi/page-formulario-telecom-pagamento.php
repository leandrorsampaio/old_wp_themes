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
                <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
                <script src="<?php echo get_template_directory_uri(); ?>/jquery.mask.min.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $("#cnpj_mj").mask("00.000.000/0000-00");
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
                <!--- Validação dos campos do formulario 
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
                </script>--->
                </head>
                <body style="background: #fff">

                    <p style="color: #ff0000; font-size: 11px; font-family: 'CenturyBold', arial, sans-serif;">* Itens obrigat&oacute;rios</p><br/>
                   






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
<?php get_footer(); ?>>>>>>>>>>>>>>>>>>>>>>>