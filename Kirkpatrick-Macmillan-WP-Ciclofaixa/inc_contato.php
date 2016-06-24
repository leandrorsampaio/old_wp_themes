<? 
include "funcao.php";

if(strlen($_POST['nome']))
{
    if(sendMail($_POST['email'],'hmabdala@gmail.com', $_POST['mensagem'], 'Formulário de contato'))
    {
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else
    {
        echo "Ocorreu um erro ao enviar";
    }
    echo "<br><a href='index.php'>Voltar</a>";
    exit();
}
?>

    
    <form method="post" id="formulario_contato" onsubmit="validaForm(); return false;" class="form form_contato">
        <p class="name" style="margin-bottom:10px">
            
            <input type="text" name="nome" id="nome" placeholder="Seu Nome" />
        </p>
        
        <p class="email" style="margin-bottom:10px">
            
            <input type="text" name="email" id="email" placeholder="mail@exemplo.com.br" />
        </p>        
    
        <p class="text" style="margin-bottom:10px">
            
            <textarea name="mensagem" id="mensagem" placeholder="Escreva sua mensagem" /></textarea>
        </p>
        
        <p class="submit" >
            <input type="submit" value="Enviar" />
        </p>
    </form>
    <script type="text/javascript">
        function validaForm()
        {
            erro = false;
            if($('#nome').val() == '')
            {
                alert('Você precisa preencher o campo Nome');erro = true;
            }
            if($('#email').val() == '' && !erro)
            {
                alert('Você precisa preencher o campo E-mail');erro = true;
            }
            if($('#mensagem').val() == '' && !erro)
            {
                alert('Você precisa preencher o campo Mensagem');erro = true;
            }
            
            //se nao tiver erros
            if(!erro)
            {
                $('#formulario_contato').submit();
            }
        }
    </script>