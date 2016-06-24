<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet"  type="text/css" media="all" href="style.css" />
        <!-- COMEÇO Script para validar campos obrigatorios-->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
        <style type="text/css">
            * { font-family: Verdana; font-size: 96%; }
            label { display: block; }
            label.error { width/*\**/: 615px\9; float: left; color: red; margin: 4px 66px 0 7px;  margin/*\**/: 10px 0 10px 0\9; font-size: 11px }
            input.error { border: 1px dotted red; }
            p { clear: both; }
            .submit { margin-top: 1em; }
            em { font-weight: bold; padding-right: 1em; vertical-align: top; }

        </style>
        <script>
            $(document).ready( function() {
                $("#formularioContato").validate({
                    // Define as regras
                    rules:{
                        campoNome:{
                            // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
                            required: true, minlength: 2
                        },
                        campoEmail:{
                            // campoEmail será obrigatório (required) e precisará ser um e-mail válido (email)
                            required: true, email: true
                        },
                        campoTelefone:{
                            // campoTelefone será obrigatório (required) e terá tamanho mínimo (minLength)
                            required: true, minlength: 8
                        },
                        campoVeículoimprensa_empresa:{
                            // campoVeículoimprensa_empresa será obrigatório (required)
                            required: true
                        },
                        campoSite:{
                            // campoSite será obrigatório (required) 
                            required: true
                        },
                        campoMotivo:{
                            // campoMotivo será obrigatório (required) e terá tamanho mínimo (minLength)
                            required: true
                        },
                        campoAgree:{
                            required:true
                        }
                         
                    },
                    // Define as mensagens de erro para cada regra
                    messages:{
                        campoNome:{
                            required: "Digite o seu nome",
                            minlength: "O seu nome deve conter, no mínimo, 2 caracteres"
                        },
                        campoEmail:{
                            required: "Digite o seu e-mail para contato",
                            email: "Digite um e-mail válido"
                        },
                        campoTelefone:{
                            required: "Digite seu telefone para contato",
                            minlength: "Digite um telefone válido"
                        },
                        campoVeículoimprensa_empresa:{
                            required: "Digite o veículo de imprensa ou empresa"
                        },
                        campoSite:{
                            required: "Digite o site de sua empresa"
                        },
                        campoMotivo:{
                            required: "Digite o motivo para utilização das imagens"
                        },
                        campoAgree:{
                            required: "Por favor, leia e aceite os termos"
                        }
                    }
                });
            });
        </script>
        <!-- FIM Script para validar a aceitação do termo de uso-->
    </head>
    <body>       
        <div id="cadastro_form">
            <div id="contato_adendo">(*)Campos de preenchimento obrigat&oacute;rio</div>
            <form id="formularioContato" action="http://spturis.com/sistemas/mailer_imprensa/fotos_envia.php" method="post">

                <label class="form_inputText" for="nome">Nome*</label>
                <input id="nome" name="campoNome" class="form_input" type="text" />

                <label class="form_inputText" for="email">E-mail*</label>
                <input id="email" name="campoEmail" class="form_input" type="text" />

                <label class="form_inputText" for="telefone">Telefone*</label>
                <input id="telefone" name="campoTelefone" class="form_input" type="text" />

                <label class="form_inputText" for="veiculo">Veículo de imprensa ou empresa*</label>
                <input id="veiculo" name="campoVeículoimprensa_empresa" class="form_input" type="text" />

                <label class="form_inputText" for="site">Site*</label>
                <input id="site" name="campoSite" class="form_input" type="text" />

                <label class="form_inputText" for="motivo">Motivo da utilização das imagens*</label>
                <textarea id="motivo" name="campoMotivo" class="form_textarea"></textarea>

                <label class="form_inputText" for="agree">Termos de utilização</label>
                <textarea class="form_textarea" name="textarea" cols="50" rows="6" readonly="readonly"> 
                    Ao aceitar os termos de utiliza&ccedil;&atilde;o aqui descritos, o usu&aacute;rio compromete-se a cumprir integralmente as seguintes condi&ccedil;&otilde;es:

                    1. As fotos disponibilizadas s&oacute; poder&atilde;o ser utilizadas a fim de promover a cidade de S&atilde;o Paulo.

                    1.1. &eacute; expressamente proibida a associa&ccedil;&atilde;o das fotos disponibilizadas a:
                    - bebidas alco&oacute;licas, fumo e/ou consumo de quaisquer drogas, l&iacute;citas ou n&atilde;o; 
                    - qualquer esp&eacute;cie de ofensa ou discrimina&ccedil;&atilde;o racial, social, pol&iacute;tica, religiosa ou de nacionalidade; 
                    - pornografia ou material de conte&uacute;do sexualmente expl&iacute;cito; 
                    - id&eacute;ias e/ou interesses contr&aacute;rios aos da S&atilde;o Paulo Turismo e/ou Prefeitura da Cidade de S&atilde;o Paulo; 
                    - promessas enganosas e/ou milagrosas; 
                    - qualquer outro s&iacute;mbolo que possa denegrir a imagem e/ou reputa&ccedil;&atilde;o da S&atilde;o Paulo Turismo, Prefeitura da Cidade de S&atilde;o Paulo, bem como a cidade de S&atilde;o Paulo. 

                    1.2. Imagens ou textos n&atilde;o podem ser sobrepostos &agrave;s fotos da cidade de S&atilde;o Paulo disponibilizadas.

                    2. Independentemente do meio de veicula&ccedil;&atilde;o da foto disponibilizada, seja ele impresso, digital ou qualquer outro, as fotos devem obrigatoriamente conter a indica&ccedil;&atilde;o de copyright, apresentando com clareza e objetividade os respectivos cr&eacute;ditos junto &agrave; foto.

                    2.1. Os cr&eacute;ditos das fotos disponibilizadas devem seguir o padr&atilde;o: Nome do Fot&oacute;grafo / SPTuris.

                    3. S&atilde;o expressamente proibidos quaisquer tipos de comercializa&ccedil;&atilde;o das fotos disponibilizadas.

                    4. &eacute; expressamente proibido alterar as fotos de maneira a descaracterizar suas qualidades originais. 

                    4.1. Altera&ccedil;&otilde;es nas fotos disponibilizadas devem se resumir somente &agrave;s modifica&ccedil;&otilde;es necess&aacute;rias para adapta&ccedil;&atilde;o das dimens&otilde;es da foto ao espa&ccedil;o a ser utilizado por ela, de forma a n&atilde;o se perder sua respectiva proporcionalidade.

                    5. Fica determinado pelo presente termo de uso a elei&ccedil;&atilde;o do foro da Comarca de S&atilde;o Paulo, Estado de S&atilde;o Paulo, como competente para dirimir quaisquer controv&eacute;rsias decorrentes deste Termo de Uso, independentemente de qualquer outro, por mais privilegiado que seja ou venha a ser. 
                </textarea>
                <div class="form_inputText" style="margin-bottom: 23px;">
                    <input id="agree" name="campoAgree" type="checkbox"/> Li e aceito os termos de utiliza&ccedil;&atilde;o acima
                </div>
                <input class="form_btn" type="submit" value="Cadastrar"  />
            </form>
        </div>
        <div id="cadastro_samples">
            <div class="cadastro_samples_img">
                <img src="http://imprensa.spturis.com.br/wp-content/themes/Kane-WP-SPTuris-03/images/fotos-cadastro-1.jpg" alt="Marcado Municipal - Foto: Priscilla Vilarinho" title="Marcado Municipal - Foto: Priscilla Vilarinho" />
            </div>
            <div class="cadastro_samples_img">
                <img src="http://imprensa.spturis.com.br/wp-content/themes/Kane-WP-SPTuris-03/images/fotos-cadastro-2.jpg" alt="Ponte Estaiada - Foto: Caio Pimenta" title="Ponte Estaiada - Foto: Caio Pimenta" />
            </div>
            <div class="cadastro_samples_img">
                <img src="http://imprensa.spturis.com.br/wp-content/themes/Kane-WP-SPTuris-03/images/fotos-cadastro-3.jpg" alt="Parque Burle Marx - Foto: Caio Pimenta" title="Parque Burle Marx - Foto: Caio Pimenta" />
            </div>
            <div class="cadastro_samples_img">
                <img src="http://imprensa.spturis.com.br/wp-content/themes/Kane-WP-SPTuris-03/images/fotos-cadastro-4.jpg" alt="Edificio Copan - Foto: Priscilla Vilarino" title="Edificio Copan - Foto: Priscilla Vilarino" />
            </div>
            <div class="cadastro_samples_img">
                <img src="http://imprensa.spturis.com.br/wp-content/themes/Kane-WP-SPTuris-03/images/fotos-cadastro-5.jpg" alt="Virada Cultural - Foto: Caio Pimenta" title="Virada Cultural - Foto: Caio Pimenta" />
            </div>
            <div class="cadastro_samples_img">
                <img src="http://imprensa.spturis.com.br/wp-content/themes/Kane-WP-SPTuris-03/images/fotos-cadastro-6.jpg" alt="Pinacoteca do Estado - Foto: Jose Cordeiro" title="Pinacoteca do Estado - Foto: Jose Cordeiro" />
            </div>
            <div class="cadastro_samples_img">
                <img src="http://imprensa.spturis.com.br/wp-content/themes/Kane-WP-SPTuris-03/images/fotos-cadastro-7.jpg" alt="Virada Cultural - Foto: Caio Pimenta" title="Virada Cultural - Foto: Caio Pimenta" />
            </div>
            <div class="cadastro_samples_img">
                <img src="http://imprensa.spturis.com.br/wp-content/themes/Kane-WP-SPTuris-03/images/fotos-cadastro-8.jpg" alt="Fotos Aereas - Foto: Caio Pimenta" title="Fotos Aereas - Foto: Caio Pimenta" />
            </div>
            <div class="cadastro_samples_img">
                <img src="http://imprensa.spturis.com.br/wp-content/themes/Kane-WP-SPTuris-03/images/fotos-cadastro-9.jpg" alt="Parque do Ibirapuera - Foto: Caio Pimenta" title="Parque do Ibirapuera - Foto: Caio Pimenta" />
            </div>
            <div class="cadastro_samples_img">
                <img src="http://imprensa.spturis.com.br/wp-content/themes/Kane-WP-SPTuris-03/images/fotos-cadastro-10.jpg" alt="Mercado Municipal - Foto: Priscilla Vilarino" title="Mercado Municipal - Foto: Priscilla Vilarino" />
            </div>
        </div>
    </body>
</html>