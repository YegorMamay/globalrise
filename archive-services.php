<?php get_header(); ?>
<div class="archives-cases">
<div class="container">
    <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » '); ?>
    <h1 class="h1 text-center archives-title"><?php post_type_archive_title(); ?></h1>
        <?php if (have_posts()) { ?>
            <div class="services" id="services" data-aos="fade-up">
                <div class="services__wrapper">
                    <?php
                    global $post;
                    $args = array(
                        'post_type'=> 'services',
                        'publish' => true,
                        'posts_per_page' => 100
                    );
                    $services_item = get_posts($args);
                    foreach ($services_item as $post) {
                        ?>
                        <?php
                        $services_image = get_field('services_image', get_the_ID());
                        ?>
                        <a href="<?php echo get_permalink(); ?>" class="services__item-wrapper">
                            <div class="services__item">
                                <div class="services__icon-wrapper">
                                    <img class="services__icon" src="<?php echo $services_image; ?>" alt="icon"/>
                                </div>
                                <div class="services__item-title"><?php the_title(); ?></div>
                            </div>
                        </a>
                        <?php
                    }

                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        <?php } else {
            get_template_part('loops/content', 'services');
        } ?>
        <?php /*
    <div class="col-12 col-md-4"><?php dynamic_sidebar('sidebar-widget-area2'); ?></div>
    */ ?>
</div>
</div>

<?php get_footer(); ?>
