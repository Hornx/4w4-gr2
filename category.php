<?php get_header() ?>
<main class="principal">
    
    <section class="formation">
        <?php if (is_category(array('cours', 'creation-3d','web','jeu','design','utilitaire','video'))): ?>
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        
        <?php wp_nav_menu(array(
            "menu" => "categories_cours",
            "container" => "nav")); ?>
            
           
            
        
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>

                <?php $categories = get_the_category();
                //var_dump($categories); 
                

                ?>
                <?php get_template_part('gabarit/content','cours'); ?>
                


                <article class="formation__cours <?php echo $categories[1]->slug;  ?>">
                        <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 7, -6);
                        $nbHeures = substr($titre, -6);
                        $sigleCours = substr($titre, 0, 7);
                        $descCours = get_the_excerpt();
                        ?>
                        <?php the_post_thumbnail("thumbnail") ?>
                        <h3 class="cours__titre">
                            <a href="<?php echo get_permalink(); ?>">
                                <?= $titreFiltreCours; ?>
                            </a> 
                        </h3>
                        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                        <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <p class="cours__desc"> <?= $descCours; ?></p>
                        
                    </article>
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
    <?php endif; //if (is_category('cours')))?> 
</main>
<?php get_footer() ?>