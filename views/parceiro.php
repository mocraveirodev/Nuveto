<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="description" content="Conheça a Nuveto, uma empresa inovadora de tecnologia para Atendimento ao cliente e Customer Experience CX. Visando a transformação das estratégias para melhorar o relacionamento das marcas com seus clientes, ajudando-as a se diferenciar neste cenário extremamente competitivo. Descubra o Cloud Solution Center.">
    <meta name="keywords" content="Nuveto,Atendimento ao Cliente,CX,Customer Experience,Relacionamento ao cliente,Cloud,Cloudcomputing,CallCenter,Call-Center,Cloud Solution Center">
    <meta name="author" content="Monica Craveiro">
    <title>Nuveto - Cloud Solution Center</title>
    <script src="https://kit.fontawesome.com/3e0edc3a21.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="views/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="views/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/m-style.css">
</head>
<body class="bg-light">
    <main>
        <section id="parceiro">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <img src="views/img/Nuveto-normal.svg" class="logon" alt="Logo Nuveto">
                        <div class="distribuidor">
                            <p>Distribuidor</p>
                            <img src="views/img/logofive9fundotransparente.png" class="logof" alt="Logo Five9">
                        </div>

                        <h1>Nuveto</h1>
                        <p>Obrigado por registrar sua oportunidade de negócio em nome da Nuveto. Você precisará fornecer todas as informações que solicitarmos para que possamos revisar, encaminhar e acompanhar sua inscrição. Se você tiver dúvidas ao completar este formulário, por favor, envie um e-mail para <a class="text-success" href="mailto:oportunidade@nuveto.com.br">oportunidade@nuveto.com.br</a> e um membro do nosso time de canais irá entrar em contato para ajudá-lo a completar o processo.</p>
                        <p>Após preencher todos os campos, certifique-se de clicar no botão "Submeter" para garantir que a sua oportunidade seja registrada. Uma vez submetida, você irá receber um e-mail para confirmar o status da sua solicitação.</p>
                        <p>Obrigado por registrar sua oportunidade.</p>
                    </div>
                    <div class="col-xl-6">
                        <form action="/?email" method="post" enctype="multipart/form-data">
                            <h5 class="text-uppercase">Informações do Cliente Final</h5>
                            <div class="form-group">
                                <input value="oportunidade@nuveto.com.br" name="from" type="text" hidden />
                            </div>
                            <div class="form-group">
                                <input value="marketing@nuveto.com.br" name="toemail" type="text" hidden />
                            </div>
                            <div class="form-group">
                                <input value="Oportunidade Parceiro | Nuveto" name="subject" type="text" hidden />
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="nome" id="nome" class="form-control" placeholder="* Primeiro Nome" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder="* Sobrenome" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="empresa" id="empresa" class="form-control" placeholder="* Nome da Empresa" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="* E-mail Comercial" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="cargo" id="cargo" class="form-control" placeholder="* Cargo" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="* Telefone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="tecatual" id="tecatual" class="form-control" placeholder="Tecnologia Atual de CC">
                                    </div>
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <select class="form-control" name="numberAgents" id="numberAgents" required>
                                            <option value="" disabled selected>* Posições de Atendimento</option>
                                            <option value="1-4">1-4</option>
                                            <option value="5-9">5-9</option>
                                            <option value="10-25">10-25</option>
                                            <option value="26-50">26-50</option>
                                            <option value="51-100">51-100</option>
                                            <option value="101-500">101-500</option>
                                            <option value="505-1000">505-1000</option>
                                            <option value="1001+">1001+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <select class="form-control" name="industry" id="industry">
                                            <option value="" disabled selected>Setor</option>
                                            <option value="Agricultura & Mineração">Agricultura & Mineração</option>
                                            <option value="Atacado & Distribuição">Atacado & Distribuição</option>
                                            <option value="Computadores & Eletrônicos">Computadores & Eletrônicos</option>
                                            <option value="Educação">Educação</option>
                                            <option value="Empresas de Terceirização">Empresas de Terceirização</option>
                                            <option value="Energia & Serviços Públicos">Energia & Serviços Públicos</option>
                                            <option value="Finanças">Finanças</option>
                                            <option value="Governo">Governo</option>
                                            <option value="Imóveis & Construção">Imóveis & Construção</option>
                                            <option value="Indústria">Indústria</option>
                                            <option value="Mídia & Entretenimento">Mídia & Entretenimento</option>
                                            <option value="Saúde, Farmacêutica e Biotecnologia">Saúde, Farmacêutica e Biotecnologia</option>
                                            <option value="Sem Fins Lucrativos">Sem Fins Lucrativos</option>
                                            <option value="Serviços ao Consumidor">Serviços ao Consumidor</option>
                                            <option value="Serviços para a Indústria">Serviços para a Indústria</option>
                                            <option value="Software & Internet">Software & Internet</option>
                                            <option value="Telecomunicações">Telecomunicações</option>
                                            <option value="Transporte & Armazenagem">Transporte & Armazenagem</option>
                                            <option value="Varejo">Varejo</option>
                                            <option value="Viagem & Lazer">Viagem & Lazer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="expecnegocio" id="expecnegocio" class="form-control" placeholder="Valor estimado">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="excpecacordo" id="excpecacordo" class="form-control" placeholder="Data estimada do Fechamento">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="notes" id="notes" rows="3" placeholder="Notas sobre a oportunidade"></textarea>
                            </div>
                            <h5 class="text-uppercase">Informações do Parceiro</h5>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="nomerep" id="nomerep" class="form-control" placeholder="* Primeiro Nome" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="sobrenomerep" id="sobrenomerep" class="form-control" placeholder="* Sobrenome" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="email" name="emailrep" id="emailrep" class="form-control" placeholder="* E-mail Comercial" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="telefonerep" id="telefonerep" class="form-control" placeholder="* Telefone" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-sm btn-success" onsubmit="toggle();">
                                Submeter
                                <div class="spinner-border text-light ml-2" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section id="modal-contato">
            <div class="modal fade" id="modalOk" tabindex="-1" role="dialog" aria-labelledby="modalOkTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3>Pronto!</h3>
                            <p>Em breve nossos especialistas irão entrar em contato para dar mais informações.</p>
                            <a href="/?emailparceiro" class="btn btn-success btn-padrao" data-dismiss="modal" aria-label="Fechar">OK</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalErro" tabindex="-1" role="dialog" aria-labelledby="modalErroTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3>Erro!</h3>
                            <p>Houve um erro enviando o email. Tente de novo mais tarde!</p>
                            <a href="/?emailparceiro" class="btn btn-success btn-padrao" data-dismiss="modal" aria-label="Fechar">OK</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
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
                                    <li><a data-scroll href="#banner" class="footer-map-titulo">Empresa</a></li>
                                    <li><a data-scroll href="#solucoes">Quem Somos</a></li>
                                    <li><a data-scroll href="/?news">Notícias</a></li>
                                    <!-- <li><a data-scroll href="#solucoes">O que Fazemos</a></li> -->
                                    <!-- <li><a data-scroll href="">Por que a Nuvem?</a></li>
                                    <li><a data-scroll href="">Imprensa</a></li> -->
                                    <li><a data-scroll href="#contato">Contato</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="footer-map-solucoes">
                            <nav>
                                <ul>
                                    <li><a data-scroll href="#solucoes" class="footer-map-titulo">Soluções</a></li>
                                    <li><a data-scroll href="#cases">Cases de Sucesso</a></li>
                                    <li><a data-scroll href="#clientes">Clientes</a></li>
                                    <!-- <li><a data-scroll href="">Parceiros</a></li>
                                    <li><a data-scroll href="">Blog</a></li> -->
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./views/js/smoothscroll.js"></script>
    <script>
        function toggle() {
            $(".spinner-border").toggle();
        }
    </script>
    <?php
        if(isset($_SESSION['mailresult'])){
            if($_SESSION['mailresult'] != ""){
                echo "<script>$('#modalOk').modal('show');</script>";
                unset($_SESSION['mailresult']);
            }
        }

        if(isset($_SESSION['ErrorInfo'])){
            if($_SESSION['ErrorInfo'] != ""){
                echo "<script>$('#modalErro').modal('show');</script>";
                unset($_SESSION['ErrorInfo']);
            }
        }
    ?>
</body>
</html>