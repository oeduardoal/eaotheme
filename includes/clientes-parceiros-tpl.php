<section id="main-clientes-parceiros">
    <div class="container" id="container-clientes-parceiros" >
        <h2 class="title-site theme-switcher">
            CLIENTES E PARCEIROS
        </h2>
        <div class="clientes owl-carousel">
            
            <?php $loop = new WP_Query( array( 'post_type' => 'clientes', 'posts_per_page' => -1 ) ); ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="cliente item">
                    <img src="<?php echo the_field('logo_do_cliente') ?>" alt="">
                </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
       
    </div>
</section>