<div class="sidebar">
    <?php
    if (is_search() || is_404()) {
        ?>
        <h1 class="dummySidebar">
            Search sidebar =)
        </h1>
        <?php
    } elseif ($getPty == $pty_agenda || $getPty == $pty_novidades) {
        ?>
        <div class="sidebar_acontece">
            <div class="sidebar_acontece_servico">
                <h4 class="sidebar_acontece_servico_title">Servi&ccedil;o:</h4>
                <div class="sidebar_acontece_servico_box">
                    <p>
                        <strong>Restaurante Micaela</strong>
                        <br/>
                        <br/><strong>Endereco</strong>
                        <br/>Rua Jose Maria Lisboa, 228 - Jardins 
                        <br/>
                        <br/><strong>Horario de funcionamento</strong>
                        <br/>Segunda a sabado, das 12h as 15h30 e das 19h as 23h
                        <br/>
                        <br/><strong>Contato</strong>
                        <br/>(011) 3473-6849
                        <br/>www.restaurantemicaela.com.br
                    </p>
                </div>
            </div>
            <div class="sidebar_acontece_maisEventos">
                <h5 class="sidebar_acontece_maisEventos_title">Mais Eventos</h5>
            </div>
        </div>
        <?php
    } else {
        ?>
        <h1 class="dummySidebar">
            Search sidebar =)
        </h1>
        <?php
    }
    ?>
</div>