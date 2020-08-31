<?php include_once 'views/includes/top.php'; ?>

<main id="aprova">
    <section class="parceiros">
        <div class="topo">
            <a href="/"><img src="views/img/LogoNuvetoBrancaVer.png" class="logon" alt="Logo Nuveto"></a>
            <h1>Aprovação de Parceiro</h1>        
        </div>
        <p>Temos os dados abaixo do parceiro:</p>
        <?php foreach($_SESSION['parceiro'] as $parceiro): ?>
            <form action="/?aprova" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input value="<?= $parceiro->id_parceiro ?>" name="from" type="text" hidden />
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nome">Nome Completo:</label>
                            <input type="text" name="nome" id="nome" class="form-control" value="<?= $parceiro->nome ?>">
                        </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" class="form-control" value="<?= $parceiro->email ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="empresa">Empresa:</label>
                            <input type="text" name="empresa" id="empresa" class="form-control" value="<?= $parceiro->empresa ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="cargo">Cargo:</label>
                            <input type="text" name="cargo" id="cargo" class="form-control" value="<?= $parceiro->cargo ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" id="telefone" class="form-control" value="<?= $parceiro->telefone ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="tecatual">Tecnologia Atual de CC:</label>
                            <input type="text" name="tecatual" id="tecatual" class="form-control" value="<?= $parceiro->tec_atual ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="numberAgents">Posições de Atendimento:</label>
                            <input type="text" name="numberAgents" id="numberAgents" class="form-control" value="<?= $parceiro->num_agents ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="industry">Setor:</label>
                            <input type="text" name="industry" id="industry" class="form-control" value="<?= $parceiro->industry ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="expecnegocio">Valor estimado:</label>
                            <input type="text" name="expecnegocio" id="expecnegocio" class="form-control" value="<?= $parceiro->expec_negocio ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="excpecacordo">Data estimada do Fechamento:</label>
                            <input type="text" name="excpecacordo" id="excpecacordo" class="form-control" value="<?= $parceiro->expec_acordo ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="notes">Notas sobre a oportunidade:</label>
                    <textarea class="form-control" name="notes" id="notes" rows="3"><?= $parceiro->expec_acordo ?></textarea>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nomerep">Nome Representante:</label>
                            <input type="text" name="nomerep" id="nomerep" class="form-control" value="<?= $parceiro->nome_rep ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="telefonerep">Telefone Representante:</label>
                            <input type="text" name="telefonerep" id="telefonerep" class="form-control" value="<?= $parceiro->telefone_rep ?>">
                        </div>
                    </div>
                </div>
                <div class="row flex-column">
                    <div class="col">
                        <div class="form-group">
                            <label for="emailrep">E-mail Representante:</label>
                            <input type="text" name="emailrep" id="emailrep" class="form-control" value="<?= $parceiro->email_rep ?>">
                        </div>
                    </div>
                    <div class="col text-center">
                        <button type="submit" class="btn btn-success">APROVAR</button>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
    </section>
</main>

<?php include_once 'views/includes/bottom.php'; ?>