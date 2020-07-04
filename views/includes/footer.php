<footer>
        <div class="container">
            <div class="row">
                <img src="views/img/LogoNuvetoBrancaVer.png" class="footer-logo" alt="Logo Nuveto">
                <div class="footer-text">
                    <div class="footer-endereco">
                        <p class="loc">SÃO PAULO - SP - BRASIL</p>
                        <p>Av. Roque Petroni Júnior, 850</p>
                        <p>10º andar, Torre Jaceru</p>
                        <p>Jardim das Acácias - CEP: 04707-000</p>
                        <br>
                        <p class="loc">BOGOTÁ - COLÔMBIA</p>
                        <p>Carrera 7 #116-50</p>
                        <p>Piso 6 - Oficina 6-127</p>
                    </div>
                    <div class="footer-map">
                        <div class="footer-map-empresa">
                            <nav>
                                <ul>
                                    <li><a data-scroll href="/" class="footer-map-titulo">Empresa</a></li>
                                    <li><a data-scroll href="/?#solucoes">Quem Somos</a></li>
                                    <li><a data-scroll href="/?news">Notícias</a></li>
                                    <!-- <li><a data-scroll href="#solucoes">O que Fazemos</a></li> -->
                                    <!-- <li><a data-scroll href="">Por que a Nuvem?</a></li>
                                    <li><a data-scroll href="">Imprensa</a></li> -->
                                    <li><a data-scroll href="/?#contato">Contato</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="footer-map-solucoes">
                            <nav>
                                <ul>
                                    <li><a data-scroll href="/?#solucoes" class="footer-map-titulo">Soluções</a></li>
                                    <li><a data-scroll href="/?#cases">Cases de Sucesso</a></li>
                                    <li><a data-scroll href="/?#clientes">Clientes</a></li>
                                    <?php
                                        if($_SERVER['REQUEST_URI'] != "/?parceiro"){
                                            echo "<li><a data-scroll href='/?login'>Parceiros</a></li>";
                                        }
                                    ?>
                                    <!-- <li><a data-scroll href="">Blog</a></li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="footer-direitos">
                    <p>Copyright &copy; 2020 Nuveto. Todos os direitos reservados.</p>
                    <div class="footer-redes">
                        <nav>
                            <ul>
                                <li><a target="_blank" href="https://www.linkedin.com/company/nuveto/"><i class="fab fa-2x fa-linkedin-in"></i></a></li>
                                <li><a target="_blank" href="https://www.facebook.com/nuveto/"><i class="fab fa-2x fa-facebook-square"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/nuvetobr"><i class="fab fa-2x fa-twitter"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>