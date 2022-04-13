<?php 

                // get_category_by_slug()
    $categorie = get_the_category();
    // var_dump($categorie);
    // echo $categorie[1]->slug

?>
<article class="formation__cours  <?php  echo $categorie[1]->slug; ?>">
    <?php          
    $titre = get_the_title();
  
    ?>
    <?php the_post_thumbnail("thumbnail"); ?>
    <h3 class="cours__titre">
        <a href="<?php echo get_permalink(); ?>">
            <?= $titre; ?>
        </a>
    </h3>
    <?php the_category(); ?>
    <?php the_content(); ?>
</article>