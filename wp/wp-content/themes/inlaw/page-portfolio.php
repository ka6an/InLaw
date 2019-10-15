<?php get_header(); ?>
    <?php get_template_part('template/modal-window'); ?>
    <header id="header-common">
        <div class="header content">
            <a href="/" class="header__logo">
            </a>
            <?php get_template_part('template/nav'); ?>
        </div>
    </header>
    <main class="wrap">
        <div class="content service case">
            <div class="title_wrap animation-element">
                <h1 class="service__h1">Портфолио</h1>
            </div>
            <div class="frame">
                <p class="service__text">В данном разделе сайта Вы сможете ознакомиться с кратким описанием нескольких кейсов из моей судебной практики и принятыми по делам судебными актами.</p>
            </div>
            <?php
                $paged = get_query_var( 'paged', 1 );
                $id = 1;
                $count_items = 3;
                $recent = new WP_Query("cat=$id&posts_per_page=$count_items&paged=$paged&order=ASC");

                function add_class_to_list( $content ) {
                    $content = str_replace( '<h3>', '<h3 class="title__h3">', $content );
                    $content = str_replace( '<h5>', '<p class="service__text">', $content );
                    $content = str_replace( '<a', '<a class="btn case-btn"', $content );
                    return $content;
                }

                while($recent->have_posts()) {
                    $recent->the_post();
                ?>
                    <div class="block services block-case">
                        <div class="title_wrap animation-element">
                            <h2 class="title__h2"><?php the_title(); ?></h2>
                        </div>
                        <?php
                            add_filter( 'the_content', 'add_class_to_list' );
                            the_content();
                        ?>
                        <?php
                            if(has_post_thumbnail()) {                    
                                $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                                echo '<img class="case__bg" src="' . $image_src[0] . '" >';
                            }
                        ?>
                    </div>
            <?php
                }
                wp_reset_postdata();
            ?>
        </div>
        <?php
            wp_pagenavi( array( 'query' => $recent ) );
        ?>
    </main>
<?php get_footer(); ?>