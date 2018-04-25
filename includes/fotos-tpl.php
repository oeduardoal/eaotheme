<div id="fotos-conferencia" class="container">
    <div class="row">
        <div class="col text-center">
            <h2 class="font-weight-bold">
                FOTOS DA CONFERÊNCIA DE 2017
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <div id="fotos">
                <?php
                    for ($i=1 ; $i < 11; $i++):
                ?>
                    <img src="<?php echo assetsurl . "/assets/img/site/" . $i . ".png"; ?>" alt="">
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>