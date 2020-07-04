<section id="modal-contato">
            <div class="modal fade" id="modalOk" tabindex="-1" role="dialog" aria-labelledby="modalOkTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3>Pronto!</h3>
                            <p><?php if(isset($_SESSION['mailresult'])) echo $_SESSION['mailresult'] ?></p>
                            <?php
                                if(isset($_SESSION['parceiro'])){
                                    echo "<form action='/?email' method='post' enctype='multipart/form-data'>
                                        <div class='form-group'>
                                            <input value='confirmacao@nuveto.com.br' name='from' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['mailContato']."' name='toemail' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='Confirmação de Registro de Oportunidade | Nuveto' name='subject' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['nomeContato']."' name='nome' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['empresaContato']."' name='empresa' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['mailContato']."' name='email' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['cargoContato']."' name='cargo' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['telefoneContato']."' name='telefone' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['tecatual']."' name='tecatual' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['numberAgents']."' name='numberAgents' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['industry']."' name='industry' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['expecnegocio']."' name='expecnegocio' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['excpecacordo']."' name='excpecacordo' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <textarea class='form-control' name='notes' id='notes' rows='3' placeholder='Notas sobre a oportunidade' hidden>".$_SESSION['parceiro']['notes']."</textarea>
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['nomerep']."' name='nomerep' type=text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['emailrep']."' name='emailrep' type=text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['telefonerep']."' name='telefonerep' type=text' hidden />
                                        </div>
                                        <button type='submit' class='btn btn-success btn-padrao'>Fechar</button>
                                    </form>";
                                }else{
                                    echo "<a class='btn btn-success btn-padrao' data-dismiss='modal' aria-label='Fechar'>Fechar</a>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalErro" tabindex="-1" role="dialog" aria-labelledby="modalErroTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3>Erro!</h3>
                            <p><?php if(isset($_SESSION['ErrorInfo'])) echo $_SESSION['ErrorInfo'] ?></p>
                            <?php
                                if(isset($_SESSION['parceiro'])){
                                    echo "<form action='/?email' method='post' enctype='multipart/form-data'>
                                        <div class='form-group'>
                                            <input value='confirmacao@nuveto.com.br' name='from' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['mailContato']."' name='toemail' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='Confirmação de Registro de Oportunidade | Nuveto' name='subject' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['nomeContato']."' name='nome' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['empresaContato']."' name='empresa' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['mailContato']."' name='email' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['cargoContato']."' name='cargo' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['telefoneContato']."' name='telefone' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['tecatual']."' name='tecatual' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['numberAgents']."' name='numberAgents' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['industry']."' name='industry' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['expecnegocio']."' name='expecnegocio' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['excpecacordo']."' name='excpecacordo' type='text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <textarea class='form-control' name='notes' id='notes' rows='3' placeholder='Notas sobre a oportunidade' hidden>".$_SESSION['parceiro']['notes']."</textarea>
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['nomerep']."' name='nomerep' type=text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['emailrep']."' name='emailrep' type=text' hidden />
                                        </div>
                                        <div class='form-group'>
                                            <input value='".$_SESSION['parceiro']['telefonerep']."' name='telefonerep' type=text' hidden />
                                        </div>
                                        <button type='submit' class='btn btn-success btn-padrao'>Fechar</button>
                                    </form>";
                                }else{
                                    echo "<a class='btn btn-success btn-padrao' data-dismiss='modal' aria-label='Fechar'>Fechar</a>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-between">
                            <img src="views/img/Nuveto-normal.svg" class="logonav" alt="Logo Nuveto">
                            <h3 class="modal-title" id="modalLoginTitle">Login</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="erro"><?php if(isset($_SESSION['errologin'])) echo $_SESSION['errologin'] ?></p>
                            <form action="/?login" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="parceiro">Parceiro:</label>
                                    <input type="text" class="form-control" name="parceiro" id="parceiro" placeholder="Insira sua Empresa" required>
                                </div>
                                <div class="form-group">
                                    <label for="senha">Senha:</label>
                                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira sua senha" minlength="6" required>
                                </div>
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-sm btn-success">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>