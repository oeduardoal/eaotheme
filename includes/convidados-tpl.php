<div class="container" id="convidados">
    <div class="row text-center">
        <div class="col" id="convidados-header">
            <h1 class="font-weight-bold" id="convidados-title">
                CONVIDADOS
            </h1>
            <small class="border-dcf" id="convidados-subtitle">
                PRELETOES
            </small>
        </div>
    </div>
    <div class="row">
        <div class="col" id="palestrantes">
                <?php
                    $palestrantes = array(
                        1 => array("class" => "andre"),
                        6 => array("class" => "rebeca"),
                        2 => array("class" => "luma"),
                        7 => array("class" => "alisio"),
                        3 => array("class" => "lipao"),
                        8 => array("class" => "tarcisio"),
                        4 => array("class" => "teo"),
                        9 => array("class" => "samuel"),
                    );
                    foreach ($palestrantes as $key => $value):
                        $class = $value['class'];
                        $src = assetsurl . "/dist/imgs/0".$key."-min.png"; 
                ?>
                <section class="palestrante__perfil <?= $class ?>">
                        <a href="#">
                            <img src="<?= $src ?>" alt="">
                        </a>
                </section>
                <?php
                    endforeach;
                ?>
        </div>
    </div>
</div>