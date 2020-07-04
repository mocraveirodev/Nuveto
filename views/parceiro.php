<?php include_once 'views/includes/top.php'; ?>
    <main>
        <section id="parceiro">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="distribuidor">
                            <a href="/"><img src="views/img/Logo Nuveto 2.jpg" class="logon" alt="Logo Nuveto"></a>
                            <img src="views/img/logofive9fundotransparente.png" class="logof" alt="Logo Five9">
                        </div>

                        <!-- <h1>Nuveto</h1> -->
                        <p>Obrigado por registrar sua oportunidade de negócio em nome da Nuveto. Você precisará fornecer todas as informações que solicitarmos para que possamos revisar, encaminhar e acompanhar sua inscrição. Se você tiver dúvidas ao completar este formulário, por favor, envie um e-mail para <a class="text-success" href="mailto:oportunidade@nuveto.com.br">oportunidade@nuveto.com.br</a> e um membro do nosso time de canais irá entrar em contato para ajudá-lo a completar o processo.</p>
                        <p>Após preencher todos os campos, certifique-se de clicar no botão "Submeter" para garantir que a sua oportunidade seja registrada. Uma vez submetida, você irá receber um e-mail para confirmar o status da sua solicitação.</p>
                        <p>Obrigado por registrar sua oportunidade.</p>
                    </div>
                    <div class="col-xl-6">
                        <form action="/?email" method="post" enctype="multipart/form-data">
                            <h5>Informações do Cliente Final</h5>
                            <div class="form-group">
                                <input value="oportunidade@nuveto.com.br" name="from" type="text" hidden />
                            </div>
                            <div class="form-group">
                                <input value="oportunidade@nuveto.com.br" name="toemail" type="text" hidden />
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
                                        <input type="text" name="excpecacordo" id="excpecacordo" class="form-control" placeholder="* Data estimada do Fechamento" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="notes" id="notes" rows="3" placeholder="Notas sobre a oportunidade"></textarea>
                            </div>
                            <h5>Informações do Parceiro</h5>
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
                            <button type="submit" class="btn btn-block btn-sm btn-success">Submeter</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once 'views/includes/modal.php'; ?>
    </main>

    <?php 
        include_once 'views/includes/footer.php';
        include_once 'views/includes/scripts.php';
        include_once 'views/includes/bottom.php';    
    ?>