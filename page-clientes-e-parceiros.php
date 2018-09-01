<?php get_header(); ?>
<?php
    get_template_part( "includes/header", "tpl" );
    get_template_part( "includes/banner-page", "tpl" );

    get_template_part( "includes/breadcrumbs", "tpl" );

?>

    <section id="page-container">
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
                <a href="<?php echo get_permalink( get_page_by_title( 'Clientes e parceiros' ) ) ?>" class="ver-todos theme-switcher">
                    VER TODOS
                </a>
            </div>
        </section>
    </section>

<?php
    get_template_part( "includes/contato", "tpl" );
?>
<?php get_footer(); ?>	