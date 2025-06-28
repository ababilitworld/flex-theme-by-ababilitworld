<?php get_template_part('Asset/Appearence/template/header'); ?>

<div class="content-container">
    <div class="content">
        <?php 
        get_template_part( 'Asset/Appearence/template/content', get_post_format() );
        ?>
    </div>
</div>

<?php get_template_part('Asset/Appearence/template/footer'); ?>