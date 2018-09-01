<section id="main-sobre">
    <div class="container" id="container-sobre">
        <h2 class="title-site theme-switcher">
            SOBRE
        </h2>
        <div class="sobre-text">
            <p class="theme-switcher">
            <?php
                $page = get_page(42);
                echo $page->post_content;
            ?>
            </p>
        </div>
    </div>
</section>