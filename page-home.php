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

        <?php get_template_part('loops/content', 'home'); ?>

    </div>
</div>
<?php get_footer(); ?>
