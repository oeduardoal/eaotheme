<?php
    if(get_field('imagem_portfolio')){
        $b = get_field('imagem_portfolio');
    }else{
        $b = assetsurl . "/assets/img/banner.jpg";
    }
?>

<section id="main-banner" class="banner-portfolio">
    <div class="owl-carousel owl-theme">
        <div class="item align-items-center" style="background-image: url(<?php echo $b; ?>);" id="banner-1">
            <div id="main-breadcrumbs">
                <div class="container">
                    <div class="breadcrumbs">
                        <span> <a href="<?php echo get_home_url() ?>">HOME</a> - <?php echo get_the_title() ?> </span>
                        <h1><?php echo get_the_title() ?> </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>