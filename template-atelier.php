<?php
/**
* Template Name: Atelier
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>

<?php get_header() ?>
<main class="site__main">
     <article class="atelier">
    <h1>---- Template atelier ------</h1>
    <?php the_post_thumbnail(); ?>
   <?php if (have_posts()): the_post(); ?>
   <h1><?php the_title() ?></h1>
   <?php the_content() ?> 
   
     <h2>Description de l'atelier</h2>
   <p class="atelier__description_de_l’atelier">
        <?php the_field('description_de_l’atelier'); ?>
   </p>

   <p class="atelier__animateur">
        <?php the_field('animateur'); ?>
   </p>
     <h2>Horaire et dates de l'atelier </h2>
   <p class="atelier__date_de_debut_de_l’atelier">
     Date de début :   <?php the_field('date_de_debut_de_l’atelier'); ?>
   </p>
   <p class="atelier__date_de_fin_de_l’atelier">
     Date de fin :   <?php the_field('date_de_fin_de_l’atelier'); ?>
   </p>

   <p class="atelier__jours_de_la_semaine_de_l’atelier">
        <?php the_field('jours_de_la_semaine_de_l’atelier'); ?>
   </p>

   <p class="atelier__heure_de_debut">
     L'horaire : De    <?php the_field('heure_de_debut'); ?> à <?php the_field('heure_de_fin'); ?>
   </p>
 <p class="atelier__heure_de_fin"> 
         
   </p>

   <p class="atelier__duree_d’une_seance_d’atelier">
     Durée de chacune des séances est de  <?php the_field('duree_d’une_seance_d’atelier'); ?> heures
   </p>

   <p class="atelier__local_ou_se_deroulera_l’atelier">
        <?php the_field('local_ou_se_deroulera_l’atelier'); ?>
   </p>

     
     <?php 
$image = get_field('image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
        
     
        </article>       
   <?php endif ?>
</main>
<?php get_footer() ?>