<section class="container-fluid" id="perguntas">
    <div class="row">
        <div class="col">
            <div class="owl-carousel owl-theme">

                <?php 
                    
                    $perguntas = array(
                        array( "PERGUNTAS FREQUENTES", "", "first" ),
                        array( "Vai rolar transmissão ao vivo?", "A princípio, não teremos transmissão ao vivo por vídeo, mas você poderá acompanhar tudo o que acontecerá através do Facebook e Instagram." ),
                        array( "Haverá ingressos à venda no dia?", "Os ingressos são limitados, por isso, te encorajamos garantir sua participação antecipada através do site: www.diflenconference.com/fortaleza" ),
                        array( "Comprei o ingresso pela internet, como devo trocar?", "A troca do ingresso acontecerá nos guichês de credenciamento da Conference.  Você deve trazer o comprovante impresso, de preferência, para facilitar a troca e apresentá-lo no balcão." ),
                        array( "Quais dias serão a Diflen Conference?", "A Conference acontece nos dias 31 de maio, 1 e 2 de junho. Em breve vamos divulgar a programação completa no site www.diflenconference.com/fortaleza" ),
                        array( "Terá estacionamento?", "Sim, temos estacionamento no espaço interno da igreja, é gratuito e seguro. Chegue cedo para garantir o seu lugar!" ),
                    );


                ?>                    
                
                <?php foreach($perguntas as $key => $pergunta): ?>
                <div class="item">
                    <div class="row">
                        <div class="col text-center">
                            <h2 id="perguntas-title" class="border-dcf <?php echo $pergunta[2]; ?> font-weight-bold"><?php echo $pergunta[0]; ?></h2>
                        </div>
                    </div>
                    <div class="row mx-auto">
                        <div class="col col-lg-8 mx-auto text-center">
                            <p id="perguntas-response">
                                <?php echo $pergunta[1]; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>