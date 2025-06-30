<?php get_template_part('Asset/Appearence/Template/header'); ?>

<div class="content-container">
    <div class="content">
        <?php 
        get_template_part( 'Asset/Appearence/Template/content', get_post_format() );
        ?>
    </div>
</div>

<?php get_template_part('Asset/Appearence/Template/footer'); ?>