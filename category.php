<?php get_header() ?>
<main class="principal">
    
    <section class="formation">
        <?php if (is_category(array('cours', 'creation-3d','web','jeu','design','utilitaire','video'))): ?>
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        
        
        <?php wp_nav_menu(array(
            "menu" => "categories_cours",
            "container" => "nav")); ?>
            
           
            
<a href="?cletri=title&ordre=asc">Tri ascendant</a>
<a href="?cletri=title&ordre=desc">Tri descendant</a>       
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>

                <?php $categories = get_the_category();
                //var_dump($categories); 
                

                ?>
                <?php get_template_part('gabarit/content','cours'); ?>
                
                
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
    <?php endif; //if (is_category('cours')))?> 
</main>
<?php get_footer() ?>




