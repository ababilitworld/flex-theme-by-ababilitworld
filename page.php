<?php
get_template_part('Asset/Appearence/Template/header'); ?>

<div class="content-container">
    <div class="content">
        <?php
        while (have_posts()) : the_post();
            get_template_part('Asset/Appearence/Template/content', get_post_format());
        endwhile;
        ?>
    </div>
</div>

<?php get_template_part('Asset/Appearence/Template/footer'); ?>
