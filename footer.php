<footer class="site__footer">
    <!-- première rangé de colonne -->
    <div class="site__footer__colonne">
        <section class="footer__article">
            <?php get_sidebar( 'footer_colonne_1' ); ?>
        </section>
        <section class="footer__adresse">
            <?php get_sidebar( 'footer_colonne_2' ); ?>
        </section>
        <section class="footer__liens">
            <?php get_sidebar( 'footer_colonne_3' ); ?>
        </section>
    </div>
    <!-- section de plusieurs lignes -->
    <div class="site__footer__ligne">
        <section class="footer__description"></section>
        <section class="footer__nav"></section>
        <section class="footer__sociaux">
            <?php get_sidebar( 'footer_ligne_1' ); ?>
        </section>
        
        <section class="footer__auteur"></section>
    </div>

    










    
    <p class="footer__presentation">Un site web fait par une élève du TIM à l'aide de Wordpress.</p>
    <h3 class="footer__author">Fait par Marc-Anderson Gilles</h3>
    
<?php 

$icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#f00"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
wp_nav_menu(array(
                    "menu"=>"simple",
                    "container"=>"nav",
                    "container_class"=>"site__footer__menu",
                    "menu_class"=>"site__footer__menu__ul",

                    "link_before"=>$icone)); ?>
                    <?php get_search_form(); ?>

                    
        <section class="adresseCollege">
   
        <h3>3 800, rue Sherbrooke Est Montréal (Québec) H1X 2A2 | 514 254-7131</h3>
        </section>
        <section class="copyright">
        <h3>Copyright © 2022, Tous droits réservés TIM</h3>
        </section>
        
</footer>
<?php wp_footer(); ?>
</body>

</html>