<?php get_header(); ?>
<?php
    get_template_part( "includes/header", "tpl" );
    get_template_part( "includes/banner-portfolio", "tpl" );
?>
    
    <div id="page-portfolio">
        <div class="container">
            <section id="single-portfolio-video">
                <?php
                    if( get_field("escolher_plataforma") == "vimeo" ):
                ?>
                    <iframe class="c-frame" src="https://player.vimeo.com/video/<?php echo get_field('id_video'); ?>?autoplay=1" width="100%" height="440" frameborder="0"></iframe>
                <?php
                    else:
                ?>
                    <iframe class="c-frame" src="https://www.youtube.com/embed/<?php echo get_field('id_video'); ?>" width="100%" height="440" frameborder="0"></iframe>
                <?php
                    endif;
                ?>
            </section>
            <section id="single-portfolio-descricao">
                <?php echo get_field('descricao_cliente'); ?>
            </section>
        </div>
        <section id="main-categories">
            <div class="container">
                <h3>Categorias</h3>
            </div>
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
    </div>

<?php
    get_template_part( "includes/portfolio", "tpl" );
    get_template_part( "includes/contato", "tpl" );
?>
<?php get_footer(); ?>	