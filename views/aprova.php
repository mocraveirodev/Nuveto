<?php
    include_once 'views/includes/top.php';
?>
<main id="aprova">
    <section class="parceiros">
        <a href="/"><img src="views/img/LogoNuvetoBrancaVer.png" class="logon" alt="Logo Nuveto"></a>
        <h1>Aprovação de Parceiro</h1>
        <?php var_dump($_SESSION['parceiro']); ?>
    </section>
</main>


<?php 
    include_once 'views/includes/bottom.php';    
?>