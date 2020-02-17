<?php get_header(); ?>
<div class="archives-cases">
<div class="container">
    <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » '); ?>
    <h1 class="h1 text-center archives-title"><?php post_type_archive_title(); ?></h1>
        <?php if (have_posts()) { ?>
            <div class="block-cases" id="cases" data-aos="fade-up">
                <div class="block-cases__section row">
                    <?php
                    global $post;
                    $args = array(
                        'post_type' => 'cases',
                        'publish' => true,
                        'posts_per_page' => 100
                    );
                    $cases_item = get_posts($args);
                    foreach ($cases_item as $post) {
                        ?>
                        <?php
                        $cases_image = get_field('cases_image', get_the_ID());
                        $cases_description = get_field('cases_description', get_the_ID());
                        $cases_color_text = get_field('cases_text_color', get_the_ID());
                        ?>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                            <a href="<?php echo get_permalink(); ?>" class="block-cases__item-wrapper archives-cases__item">
                                <div class="block-cases__item">
                                    <img class="block-cases__image" src="<?php echo $cases_image; ?>" alt="image"/>
                                    <div class="block-cases__caption">
                                        <p class="block-cases__item-title"
                                           style="color: <?php echo $cases_color_text; ?>"><?php the_title(); ?></p>
                                        <div class="block-cases__description"
                                             style="color: <?php echo $cases_color_text; ?>"><?php echo $cases_description; ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }

                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        <?php } else {
            get_template_part('loops/content', 'cases');
        } ?>
        <?php /*
    <div class="col-12 col-md-4"><?php dynamic_sidebar('sidebar-widget-area2'); ?></div>
    */ ?>
</div>
</div>

<?php get_footer(); ?>
