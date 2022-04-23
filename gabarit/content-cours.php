<?php 

                // get_category_by_slug()
    $categorie = get_the_category();
    // var_dump($categorie);
    // echo $categorie[1]->slug

?>
<article class="formation__cours  <?php  echo $categorie[1]->slug; ?>">
    <?php          
    $titre = get_the_title();
    $titreFiltreCours = substr($titre, 3, -6);
    //$nbHeures = substr($titre, -6);
    $nbHeures = get_field("nombre_dheures");
    $departement = get_field("departement");
    $sigleCours = substr($titre, 0, 4);
    $descCours = wp_trim_words(get_the_content(), 15,"<button class='cours__desc__ouvrir'> la suite </button>");
    ?>
    <?php the_post_thumbnail("thumbnail"); ?>
    <h3 class="cours__titre">
        <a href="<?php echo get_permalink(); ?>">
            <?= $titreFiltreCours; ?>
        </a>
    </h3>
    <p class="cours__sigle"><?= $sigleCours. "-" . $nbHeures . "heures"; ?> </p>
    <p class="cours__desc"> <?= $descCours; ?></p>
    <p class="cours__departement"> <?= $departement; ?></p>
    <?php  the_post_thumbnail("large"); ?>
    
</article>