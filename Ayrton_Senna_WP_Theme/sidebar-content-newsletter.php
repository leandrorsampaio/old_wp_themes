<script type="text/javascript">
    function validaForm() {

        var email = document.getElementById('email');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(email.value)) {
            alert('Por favor, informe um endereco de e-mail valido.');
            email.focus;
            return false;
        } 
    }
</script>
<div id="theContent_cadastro">
    <?php
    if (is_page($newsletter)) {
        
    } else {
        ?>
        <h1>Newsletter</h1>
<?php } ?>
    <form method="post" name="form1" action="http://cache.mail2easy.com.br/integracao" onsubmit="return validaForm()">
        <input type="hidden" name="CON_ID" value="20107.a5aa8c1dc75a6fead303b3898f74796e">
        <input type="hidden" name="DESTINO" value="http://www.autodromodeinterlagos.com.br/wp1/confirmacao-de-newsletter">
        <input type="hidden" name="GRUPOS_CADASTRAR" value="16">
        <input type="hidden" name="GRUPOS_DESCADASTRAR" value="">
        <input class="theContent_cadastroInput" id="email" type="text" name="SMT_email" value="Digite aqui seu e-mail e receba nossas novidades!" onclick="this.value=''"maxlenght="150">
        <div style="display: none;">
            <input type="radio" name="SMT_RECEBER" value="1" checked>receber
            <input type="radio" name="SMT_RECEBER" value="2">não receber    
        </div>
        <input id="theContent_cadastroBtn" type="submit" name="submit" value="ok">
    </form>
</div>