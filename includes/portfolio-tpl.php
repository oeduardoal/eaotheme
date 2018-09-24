<section id="main-portfolio">
    <div class="container">
        <h2 class="title-site theme-switcher">
            PORTFOLIO
        </h2>
    </div>
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
            if( is_single(get_the_ID()) )
            {
                $limit = 5;
            }
        ?>
    <?php
        $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => $limit ?? 20, 'orderby'   =>'rand' ) );
    ?>
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
    </div>
    <div class="container">
        <a href="<?php echo get_permalink( get_page_by_title( 'Portfolio' ) ) ?>" class="ver-todos theme-switcher">
            VER TODOS
        </a>
    </div>
</section>