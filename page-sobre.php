<?php get_header(); ?>
<?php
    get_template_part( "includes/header", "tpl" );
    get_template_part( "includes/banner-page", "tpl" );

    get_template_part( "includes/breadcrumbs", "tpl" );

?>

    <section id="page-container">
        <div class="container">
            <section id="main-pontos-fortes">
                <?php if( have_rows('pontos_fortes', get_the_ID()) ): while ( have_rows('pontos_fortes', get_the_ID()) ) : the_row(); ?>
                    <div class="ponto-forte">
                        <h4><?php the_sub_field('titulo', get_the_ID());?></h4>
                        <p>
                            <?php the_sub_field('descricao', get_the_ID());?>
                        </p>
                    </div>
                <?php endwhile; else : endif; ?>
            </section>
            <section id="main-equipe">
                <H3>EQUIPE</H3>
                <?php if( have_rows('equipe', get_the_ID()) ): while ( have_rows('equipe', get_the_ID()) ) : the_row(); ?>
                    <div class="equipe-item">
                        <img src="<?php the_sub_field('foto', get_the_ID());?>" alt="">
                        <span class="equipe-item-name"><?php the_sub_field('nome', get_the_ID());?></span>
                        <span class="equipe-item-cargo"><?php the_sub_field('cargo', get_the_ID());?></span>
                    </div>
                <?php endwhile; else : endif; ?>
            </section>
        </div>
    </section>

<?php
    get_template_part( "includes/contato", "tpl" );
?>
<?php get_footer(); ?>	