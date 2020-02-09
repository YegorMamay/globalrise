<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<?php
$attachment_elem_id = get_post_meta(get_the_ID(), 'main_image', true);
$attachment_image = wp_get_attachment_url($attachment_elem_id);
$main_content = get_field('main_content');
?>
<div class="top-section" style="background: url('<?php echo $attachment_image; ?>') no-repeat center / cover">
    <div class="container">
        <div class="top-section__wrapper">
            <div class="top-section__description"><?php echo $main_content['main_description']; ?></div>
            <h1 class="top-section__title"><?php echo $main_content['main_title']; ?></h1>
            <button type="button" class="top-section__button js-order"><?php echo $main_content['main_button_text']; ?></button>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <a href="#services" class="content__button js-scroll-down">Scroll Down
            <svg class="content__arrow">
                <use xlink:href="#icon_arrow_down"></use>
            </svg>
        </a>
        <div class="content__wrapper">
            <div class="services" id="services">
                <div class="services__top-section">
                    <p class="services__title h1"><?php echo get_post_meta(get_the_ID(), 'services_title', true); ?></p>
                    <div class="services__description"><?php echo get_post_meta(get_the_ID(), 'services_description', true); ?></div>
                </div>
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
                        <div class="services__item-wrapper">
                            <div class="services__item">
                                <div class="services__icon-wrapper">
                                    <img class="services__icon" src="<?php echo $services_image; ?>" alt="icon"/>
                                </div>
                                <div class="services__item-title"><?php the_title(); ?></div>
                            </div>
                        </div>
                        <?php
                    }

                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="block-cases" id="cases">
                <p class="main-title h1"><?php echo get_post_meta(get_the_ID(), 'cases_title', true); ?></p>
                <div class="block-cases__wrapper js-slider-case">
                    <?php
                    global $post;
                    $args = array(
                        'post_type'=> 'cases',
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
                        <div class="block-cases__item-wrapper">
                            <div class="block-cases__item">
                                <img class="block-cases__image" src="<?php echo $cases_image; ?>" alt="image"/>
                                <div class="block-cases__caption">
                                    <p class="block-cases__item-title" style="color: <?php echo $cases_color_text; ?>"><?php the_title(); ?></p>
                                    <div class="block-cases__description" style="color: <?php echo $cases_color_text; ?>"><?php echo $cases_description; ?></div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }

                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
        <?php get_template_part('loops/content', 'home'); ?>
    </div>
</div>
<?php get_footer(); ?>
