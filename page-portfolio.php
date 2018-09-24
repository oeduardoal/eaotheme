<?php get_header(); ?>
<?php
    get_template_part( "includes/header", "tpl" );
    get_template_part( "includes/banner-page", "tpl" );

    get_template_part( "includes/breadcrumbs", "tpl" );

?>

    <section id="main-categories">
        <div class="container">
            <ul id="menu-categories">
            <li>
                <a href="<?php echo get_permalink( get_page_by_title( 'Portfolio' ) ) ?>">Todos</a>
            </li>
            <?php
                $customPostTaxonomies = get_object_taxonomies('portfolio');

                if(count($customPostTaxonomies) > 0)
                {
                    foreach($customPostTaxonomies as $tax)
                    {
                        $args = array(
                            'orderby' => 'name',
                            'show_count' => 0,
                            'pad_counts' => 0,
                            'hierarchical' => 1,
                            'taxonomy' => $tax,
                            'title_li' => ''
                            );
                
                        wp_list_categories( $args );
                    }
                }
            ?>
            </ul>
        </div>
    </section>

    <section id="page-container">
        <section id="main-portfolio">
            <div class="masonry masonry--h">
                <?php 
                    $arrayEfects = array(
                        "imghvr-push-up",
                        "imghvr-push-down",
                        "imghvr-push-left",
                        "imghvr-push-right",
                        "imghvr-hinge-up",
                        "imghvr-flip-vert",
                    );
                ?>
            <?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 20 ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post();  ?>
                <?php 
                    $efect = array_rand($arrayEfects, 1);
                ?>
                        <figure class="masonry-brick masonry-brick--h <?php echo $arrayEfects[$efect]; ?>" style="background-color: #000;">
                            <img src="<?php echo get_field('imagem_portfolio') ?>" class="masonry-img" alt="">
                            <figcaption style="background-color: #000;">
                                    <a href="#" id="portfolio-item-<?php echo get_field("id_video"); ?>" data-link="<?php echo the_permalink(); ?>"  data-title="<?php echo get_field("nome_do_cliente"); ?>" data-descricao="<?php echo get_field("descricao_cliente"); ?>" data-tipo="<?php echo get_field("escolher_plataforma"); ?>" data-id="<?php echo get_field("id_video"); ?>" >
                                        <h3>
                                            <?php echo get_the_title(); ?>
                                        </h3>
                                        <?php 
                                            $part = substr(strip_tags(get_field("descricao_cliente")), 0, 200) . "...";
                                            echo $part;
                                        ?>
                                        <br>
                                        <br>
                                        <span>VER MAIS</span>
                                    </a>
                            </figcaption>
                        </figure>
                <?php endwhile; wp_reset_query(); ?>
        </section>
        </div>
    </section>

<?php
    get_template_part( "includes/contato", "tpl" );
?>
<?php get_footer(); ?>	