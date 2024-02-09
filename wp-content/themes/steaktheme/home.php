<?php
get_header();?>

<button class="toggle-button" id="night-mode-btn">
    <img class="" src="<?php
        echo wp_get_attachment_url(23); ?>" alt="moonfull" /> 
            Night Mode
</button>
<script>
    const nightModeBtn = document.getElementById('night-mode-btn');
    const body = document.body;
    const image = document.querySelector('.toggle-button img');

    nightModeBtn.addEventListener('click', () => {
        body.classList.toggle('night-mode');
        if (body.classList.contains('night-mode')) {
            image.src = "<?php echo wp_get_attachment_url(22); ?>";
        } else {
            image.src = "<?php echo wp_get_attachment_url(23); ?>";
        }
    });
</script>



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

    <div class="section-nuit">
        <div>
            <p>Je suis étudiante en 2ème année au BUT MMI à Montbéliard</p>
        </div>
        <div>
            <p>je suis en parcours création numérique, c’est ...</p>
        </div>
        <div>
            <p>... du design, de l’animation et de la créativité </p>
        </div>
    </div>

    <div class="presentation-grid-2">
        <div>
            <h1>Moi c’est Marion</h1>
            <p>J’ai 21 ans et je suis étudiante au BUT MMI à Montbéliard.</p>
            <p>Je suis en 2ème année et je travaille avec la suite Adobe (InDesign, After Effect, Illustrator et Photoshop).</p>
            <p>J’ai déjà eu l’occasion de réaliser des sites web avec Wordpress ou en HTML/ CSS ou en Vue JS et pocketbase pour la gestion des pages dynamiques.</p>
            <p>Et pendant mon temps libre j’adore dessiner, vous pouvez me retrouver sur Instagram sous steakosaure.png.</p>
        </div>
        <div>
            <img class="photodemoi" src="<?php
                echo wp_get_attachment_url(15); ?>" alt="banniere" />
            <img class="cercles" src="<?php
                echo wp_get_attachment_url(18); ?>" alt="banniere" />
            <img class="cercles" src="<?php
            echo wp_get_attachment_url(19); ?>" alt="banniere" />
        </div>
    </div>

<?php 
get_footer();
?>
