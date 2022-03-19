<?php get_header() ?>
<main class="site__main">
<!-- Geestion des pages pour le site Web-->
    
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>        
   <?php endif ?>
</main>
<?php get_footer() ?>