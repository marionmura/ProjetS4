<?php
get_header();?>
    
    <div class="home-banniere-section">
        <div class="">
            <img class="img-banniere" src="<?php
            echo wp_get_attachment_url(13); ?>" alt="banniere" /> 
        </div>
        <div class="home-titre">
            <p>Bienvenue sur mon portfolio  !</p>
        <p>Je suis Marion MURA,
        graphiste et web designeuse</p>
    </div>
    </div>

    <div class="">

    <div>
    <?php $args = array(
    'post_type' => 'equipe',
    'posts_per_page' => 3,
        );

        // LA REQUETE
        $the_query = new WP_Query( $args );
        // La boucle
        if ( $the_query->have_posts() ) {
            echo '<div class="">';
            while ( $the_query->have_posts() ) {
                echo '<article class="">' . 
                $the_query->the_post();
                get_the_title() .
                the_post_thumbnail("thumbnail") ;
                echo '</article>';
            }
        echo '</div>';
        } else {
            // Rien à afficher
        }
        // / Remettre les données initiales /
        wp_reset_postdata();?>
        </div>
    </div>

    <div class="">
    <div class="">
    
    </div>
<?php echo wp_get_attachment_image(21, array(500, 500)); ?>
    </div>

<?php 
get_footer();
?>
