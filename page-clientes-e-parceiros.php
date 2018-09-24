<?php get_header(); ?>
<?php
    get_template_part( "includes/header", "tpl" );
    get_template_part( "includes/banner-page", "tpl" );
?>
    
    <div id="page-clientes-parceiros">
        <?php 
            get_template_part( "includes/breadcrumbs", "tpl" );
        ?>
        <section id="page-container"  class="margin-top">
            <section id="main-clientes-parceiros">
                <div class="container" id="container-clientes-parceiros" >
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
        </section>
    </div>

<?php
    get_template_part( "includes/contato", "tpl" );
?>
<?php get_footer(); ?>	