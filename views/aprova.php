    <?php
    include_once 'views/includes/top.php';
?>
<main id="aprova">
    <section class="parceiros">
        <div class="topo">
            <a href="/"><img src="views/img/LogoNuvetoBrancaVer.png" class="logon" alt="Logo Nuveto"></a>
            <h1>Aprovação de Parceiro</h1>        
        </div>
        <p>Temos os dados abaixo do parceiro:</p>
        <?php foreach($_SESSION['parceiro'] as $parceiro): ?>
                <?php var_dump($parceiro); ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        <?php endforeach; ?>
    </section>
</main>


<?php 
    include_once 'views/includes/bottom.php';    
?>