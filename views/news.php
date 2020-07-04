<?php
    include_once 'views/includes/top.php';
    include_once 'views/includes/header.php';
?>

    <main>
        <section id="banner">
            <div class="banner-news">
                <h1 class="banner-yellow">Confira as notícias sobre a Nuveto</h1>            
            </div>
        </section>
        <section id="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="destaque">
                            <h4 class="titulo">DESTAQUE</h4>
                            <div id="player"></div>
                            <h5 class="noticia">Sharecare inovadora em serviços de saúde adota solução cloud Nuveto de contact center</h5>
                            <p class="texto-noticia">Nicolas Toth Jr, Presidente, fala do amplo leque de serviços da empresa que atua desde ações preventivas, acompanhamento de qualidade de vida, atendimento presencial e neste momento também via telemedicina. Toda o sistema de atendimento aos clientes foi migrada para uma plataforma digital de saúde que colocou a equipe de atendimento em home office em 24 horas ao adotar a solução emergencial da Nuveto de contact center.</p>
                            <a class="btn btn-secondary btn-block" href="http://www.papofacil.com.br/2020/06/505-sharecare-nuveto.html" target="_blank" rel="noopener noreferrer">Leia mais</a>
                        </div>
                        <div class="vejatbm">
                            <h4 class="titulo">VEJA TAMBÉM</h4>
                            <div class="card-deck">
                                <div class="card">
                                    <img src="views/img/noticia1.jpg" class="card-img-top" alt="Imagem notícia 1">
                                    <div class="card-body">
                                        <h5 class="card-title noticia">Wiz garante continuidade com cloud</h5>
                                        <h6 class="card-subtitle noticia-small leiamais">Plataforma de contact center em nuvem facilita migração de colaboradores para home office</h6>
                                        <p class="card-text texto-noticia leiamais">A Wiz, distribuidora de produtos financeiros e seguros, migrou os programas de relacionamento com os clientes para a solução Cloud Contact Center da Nuveto, representante da Five9. A decisão permitiu manter a operação ativa de forma remota, nesse momento que foi preciso garantir a excelência de atendimento aos clientes, mesmo diante do isolamento social requerido pela crise do coronavírus.</p>
                                        <a href="https://www.callcenter.inf.br/cases/70341/wiz-garante-continuidade-com-cloud/ler.aspx" target="_blank" class="btn btn-secondary btn-block">Leia mais</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="views/img/noticia2.jpg" class="card-img-top" alt="Imagem notícia 2">
                                    <div class="card-body">
                                        <h5 class="card-title noticia">O home office também é uma opção no setor de saúde</h5>
                                        <h6 class="card-subtitle noticia-small leiamais">Regulamentado há quase três anos, o regime de home office – legalmente chamado de teletrabalho – demorou para ser visto com naturalidade pela maioria das empresas. Muitas delas, contudo, olharam para esse modelo como uma estratégia de sobrevivência diante do surto de COVID-19.</h6>
                                        <p class="card-text texto-noticia leiamais">Enquanto isso, havia ainda companhias que sempre viram o trabalho remoto como um recurso a ser utilizado. É o caso da Sharecare, empresa de gestão de saúde integrada e digital, que sempre teve como política incentivar seus colaboradores a trabalharem em home office. Por isto, quando a Organização Mundial de Saúde (OMS) decretou a pandemia do novo coronavírus, a empresa de saúde decidiu que, oficialmente, ofereceria aos colaboradores de atendimento a possibilidade de trabalhar em casa.</p>
                                        <a href="hhttps://www.consumidormoderno.com.br/2020/04/13/sharecare-home-office-saude/amp/" target="_blank" class="btn btn-secondary btn-block">Leia mais</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="views/img/noticia3.jpg" class="card-img-top" alt="Imagem notícia 3">
                                    <div class="card-body">
                                        <h5 class="card-title noticia">Luis Sirera é o novo country manager da Five9 no Brasil</h5>
                                        <h6 class="card-subtitle noticia-small leiamais">O executivo atuará com a Nuveto, empresa que representa com exclusividade a Five9 no País, com objetivo de alcançar maior crescimento no mercado local</h6>
                                        <p class="card-text texto-noticia leiamais">A Five9, fornecedora líder de contact center inteligente em nuvem, acaba de anunciar a contratação de Luis Sirera, executivo de ampla experiência no segmento de soluções e tecnologias de relacionamento e atendimento ao cliente, como country manager responsável pela atuação e vendas da Five9 no Brasil, desenvolvendo um trabalho conjunto com a Nuveto, empresa de soluções de contact center na nuvem e representante exclusiva no Brasil.</p>
                                        <a href="https://computerworld.com.br/2020/04/03/luis-sirera-e-o-novo-country-manager-da-five9-no-brasil/" target="_blank" class="btn btn-secondary btn-block">Leia mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="newsletter">
                            <h4 class="titulo text-center">INSCREVA-SE E RECEBA A NOSSA NEWSLETTER</h4>
                            <form action="/?email" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input value="marketing@nuveto.com.br" name="toemail" type="text" hidden />
                                </div>
                                <div class="form-group">
                                    <input value="Newsletter Site | Nuveto" name="subject" type="text" hidden />
                                </div>
                                <div class="form-group">
                                    <input value="newsletter@nuveto.com.br" name="from" type="text" hidden />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome" required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="telefone" id="telefone" value="" hidden />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="empresa" id="empresa" value="" hidden/>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message" rows="4" hidden>Newsletter</textarea>
                                </div>
                                <button type="submit" class="btn btn-block btn-danger">Enviar</button>
                            </form>
                        </div>
                        <div class="socialnews">
                            <a href="https://www.linkedin.com/company/nuveto/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.facebook.com/nuveto/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/nuvetobr" target="_blank"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="noticias">
                            <h4 class="titulo bg-danger">TODAS AS NOTÍCIAS</h4>
                            <div class="linknews">
                                <div class="link">
                                    <a href="https://cio.com.br/wiz-coloca-em-seis-dias-metade-da-forca-de-trabalho-remota-com-solucao-baseada-na-nuvem/" target="_blank">Wiz coloca, em seis dias, metade da força de trabalho remota com solução baseada na nuvem</a>
                                    <p class="noticia-small text-secondary text-right">Maio 15, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://www.tecflow.com.br/2020/05/wiz-utiliza-plataforma-de-cloud-contact-center-da-nuveto.html" target="_blank">Wiz utiliza plataforma de Cloud Contact Center da Nuveto para garantir continuidade da oferta de produtos financeiros e de seguros</a>
                                    <p class="noticia-small text-secondary text-right">Maio 15, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://docmanagement.com.br/05/14/2020/wiz-utiliza-plataforma-de-cloud-contact-center-da-nuveto-para-garantir-continuidade-da-oferta-de-produtos-financeiros-e-de-seguros/" target="_blank">Wiz utiliza plataforma de Cloud Contact Center da Nuveto para garantir continuidade da oferta de produtos financeiros e de seguros</a>
                                    <p class="noticia-small text-secondary text-right">Maio 14, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://portalerp.com/distribuidora-de-produtos-financeiros-aprimora-servico-remoto-com-oferta-em-nuvem" target="_blank">Distribuidora de produtos financeiros aprimora serviço remoto com oferta em nuvem</a>
                                    <p class="noticia-small text-secondary text-right">Maio 14, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="http://www.revistadocallcenter.com.br/tecnologia/5320-sharecare-adota-solucao-nuveto-de-contact-center-na-nuvem" target="_blank">Sharecare adota solução Nuveto de contact center na nuvem</a>
                                    <p class="noticia-small text-secondary text-right">Maio 12, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://www.callcenter.inf.br/cases/70341/wiz-garante-continuidade-com-cloud/ler.aspx" target="_blank">Wiz garante continuidade com cloud</a>
                                    <p class="noticia-small text-secondary text-right">Maio 06, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://www.jcam.com.br/Noticia/Empresa-de-saude-usa-home-office-52662#.Xtb3DDpKjIU" target="_blank">Empresa de saúde usa home office</a>
                                    <p class="noticia-small text-secondary text-right">Abril 15, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://www.consumidormoderno.com.br/2020/04/13/sharecare-home-office-saude/amp/" target="_blank">O home office também é uma opção no setor de saúde</a>
                                    <p class="noticia-small text-secondary text-right">Abril 06, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://www.callcenter.inf.br/gente/70201/novidade-no-comando-da-five9/ler.aspx" target="_blank">Novidade no comando da Five9</a>
                                    <p class="noticia-small text-secondary text-right">Abril 07, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://computerworld.com.br/2020/04/03/luis-sirera-e-o-novo-country-manager-da-five9-no-brasil/" target="_blank">Luis Sirera é o novo country manager da Five9 no Brasil</a>
                                    <p class="noticia-small text-secondary text-right">Abril 03, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://www.callcenter.inf.br/implementacao/70136/sharecare-migra-50-da-equipe-para-home-office/ler.aspx" target="_blank">Sharecare migra 50% da equipe para home office</a>
                                    <p class="noticia-small text-secondary text-right">Março 25, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://ipnews.com.br/nuveto-lanca-solucao-emergencial-para-manter-operacao-de-canais-de-contact-centers/" target="_blank">Nuveto lança solução emergencial para manter operação de canais de contact centers</a>
                                    <p class="noticia-small text-secondary text-right">Março 24, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://inforchannel.com.br/sumup-aumenta-produtividade-de-atendentes-em-ate-35-com-adocao-de-solucao-de-contact-center-na-nuvem/" target="_blank">SumUp aumenta produtividade de atendentes em até 35% com adoção de solução de Contact Center na Nuvem</a>
                                    <p class="noticia-small text-secondary text-right">Março 10, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://ipnews.com.br/com-contact-center-na-nuvem-sumup-aumenta-produtividade-de-atendentes-em-35/" target="_blank">Com contact center na nuvem, SumUp aumenta produtividade de atendentes em 35%</a>
                                    <p class="noticia-small text-secondary text-right">Março 10, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://www.callcenter.inf.br/produtos/70025/nuveto-oferece-solucao-com-certificado-pci-dss-nivel-1/ler.aspx" target="_blank">Nuveto oferece solução com certificado PCI DSS nível 1</a>
                                    <p class="noticia-small text-secondary text-right">Março 09, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://inforchannel.com.br/nuveto-oferece-solucao-de-contact-center-na-nuvem-da-five9/" target="_blank">Nuveto oferece solução de contact center na nuvem da Five9</a>
                                    <p class="noticia-small text-secondary text-right">Março 05, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://ipnews.com.br/sercom-adquire-empresa-de-cobranca-como-parte-de-plano-de-expansao-e-digitalizacao/" target="_blank">Sercom adquire empresa de cobrança como parte de plano de expansão e digitalização</a>
                                    <p class="noticia-small text-secondary text-right">Fevereiro 21, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://canalexecutivoblog.wordpress.com/2020/02/13/nuveto-quer-acelerar-a-adocao-de-contact-centers-na-nuvem-no-brasil/" target="_blank">Nuveto quer acelerar a adoção de contact centers na nuvem no Brasil</a>
                                    <p class="noticia-small text-secondary text-right">Fevereiro 13, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://tiinside.com.br/13/02/2020/nuveto-acelera-adocao-de-contact-centers-na-nuvem-apos-aquisicao-da-whendu-pela-five9/" target="_blank">Nuveto acelera adoção de contact centers na nuvem após aquisição da Whendu pela Five9</a>
                                    <p class="noticia-small text-secondary text-right">Fevereiro 13, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://inforchannel.com.br/nuveto-visa-acelerar-a-adocao-de-contact-centers-na-nuvem-no-brasil/" target="_blank">Nuveto visa acelerar a adoção de Contact Centers na nuvem no Brasil</a>
                                    <p class="noticia-small text-secondary text-right">Fevereiro 13, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://ipnews.com.br/nuveto-quer-acelerar-a-adocao-de-contact-centers-na-nuvem-no-brasil-apos-aquisicao-da-whendu-pela-five9/" target="_blank">Nuveto quer acelerar a adoção de contact centers na nuvem no Brasil após aquisição da Whendu pela Five9</a>
                                    <p class="noticia-small text-secondary text-right">Fevereiro 13, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://canalexecutivoblog.wordpress.com/2020/01/14/nuveto-anuncia-criacao-de-unidade-focada-em-internet-das-coisas/" target="_blank">Nuveto anuncia criação de unidade focada em Internet das Coisas</a>
                                    <p class="noticia-small text-secondary text-right">Janeiro 14, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://www.channel360.com.br/nuveto-cria-unidade-de-negocios-focada-em-internet-das-coisas/" target="_blank">Nuveto cria unidade de negócios focada em Internet das Coisas</a>
                                    <p class="noticia-small text-secondary text-right">Janeiro 14, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://www.clientesa.com.br/players/69801/nuveto-cria-unidade-de-negocios-focada-em-iot" target="_blank">Nuveto cria unidade de negócios focada em IoT</a>
                                    <p class="noticia-small text-secondary text-right">Janeiro 14, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="http://eexponews.com/nuveto-anuncia-criacao-de-sua-nova-unidade-de-negocios-focada-em-internet-das-coisas-fuse-iot_5049048811175936" target="_blank">Nuveto anuncia criação de sua nova unidade de negócios focada em Internet das Coisas: Fuse IoT</a>
                                    <p class="noticia-small text-secondary text-right">Janeiro 13, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://cryptoid.com.br/identidade-digital-destaques/nuveto-anuncia-criacao-de-sua-nova-unidade-de-negocios-focada-em-internet-das-coisas-fuse-iot/" target="_blank">Nuveto anuncia criação de sua nova unidade de negócios focada em Internet das Coisas: Fuse IoT</a>
                                    <p class="noticia-small text-secondary text-right">Janeiro 13, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://tiinside.com.br/13/01/2020/nuveto-anuncia-criacao-de-unidade-focada-em-internet-das-coisas-fuse-iot/" target="_blank">Nuveto anuncia criação de unidade focada em Internet das Coisas: Fuse IoT</a>
                                    <p class="noticia-small text-secondary text-right">Janeiro 13, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="http://www.decisionreport.com.br/destaque/financas-destaque/sumup-aumenta-produtividade-de-atendentes-em-ate-35/" target="_blank">SumUp aumenta produtividade de atendentes em até 35%</a>
                                    <p class="noticia-small text-secondary text-right">Janeiro 10, 2020</p>
                                </div>
                                <div class="link">
                                    <a href="https://www.callcenter.inf.br/artigos/69605/contact-center-repensando-o-modelo/ler.aspx" target="_blank">Contact Center: repensando o modelo</a>
                                    <p class="noticia-small text-secondary text-right">Novembro 19, 2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once 'views/includes/modal.php'; ?>
    </main>

    <?php 
        include_once 'views/includes/redessociais.php';
        include_once 'views/includes/footer.php';
        include_once 'views/includes/scripts.php';
    ?>
    
    <script>
        $('.leiamais').each(function(item, index) {
            var windowWidth = window.innerWidth;
            var leiamais_limit;
            
            if(windowWidth > 992){
                leiamais_limit = 100;
            }else if(windowWidth <= 992 && windowWidth > 768){
                leiamais_limit = 80;
            }else if(windowWidth <= 768 && windowWidth > 576){
                leiamais_limit = 40;
            }else{
                leiamais_limit = 30;
            }

            console.log(index);

            var html = $(this).html();
            
            if (html.length > leiamais_limit) $(this).html(html.substring(0, leiamais_limit) + "...");
        });
        
        var alturaDestaque = document.querySelector('.destaque').offsetHeight;
        var alturaVeja = document.querySelector('.vejatbm').offsetHeight;
        var alturaNL = document.querySelector('.newsletter').offsetHeight;
        var alturaRS = document.querySelector('.socialnews').offsetHeight;
        var alturaTitulo = document.querySelector('.bg-danger').offsetHeight;
        var alturaCol8 = alturaDestaque + alturaVeja;
        var alturaNLRS = alturaNL + alturaRS + alturaTitulo;
        var novaAltura = alturaCol8 - alturaNLRS - alturaRS;
        document.querySelector('.noticias').style.height = novaAltura + "px";
    </script>
<?php include_once 'views/includes/bottom.php';?>