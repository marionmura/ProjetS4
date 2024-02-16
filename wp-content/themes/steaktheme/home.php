<?php
get_header();?>

<script>
    // const nightModeBtn = document.getElementById('night-mode-btn');
    // const body = document.body;
    // const image = document.querySelector('.toggle-button img');

    // nightModeBtn.addEventListener('click', () => {
    //     body.classList.toggle('night-mode');
    //     if (body.classList.contains('night-mode')) {
    //         image.src = "<?php echo wp_get_attachment_url(22); ?>";
    //     } else {
    //         image.src = "<?php echo wp_get_attachment_url(23); ?>";
    //     }
    // });
</script>



    <div class="grid grid-cols-2 md:grid-cols-1 bg-blanc-ivoir items-center gap-0 ">
        <div class="">
            <img class="relative z-50 w-[80%] sm:w-[100%] right-0 flex flex-end" src="<?php
            echo wp_get_attachment_url(13); ?>" alt="banniere" />
            <img class="absolute w-[480px] left-[-100px] top-[50px]  sm:w-[400px] sm:top-[-110px] sm:left-[-40px] " src="<?php
            echo wp_get_attachment_url(16); ?>" alt="cercle violet blur" /> 
            <img class="absolute w-[250px] top-[320px] left-[200px] md:w-[200px] md:left-[150px] sm:w-[200px] sm:left-10 sm:top-[200px]" src="<?php
            echo wp_get_attachment_url(17); ?>" alt="cercle orange blur" />
            <img class="absolute w-[240px] top-0 left-[180px] md:w-[200px] sm:w-[190px] sm:right-[0px] sm:top-[-70px] overflow-hidden" src="<?php
            echo wp_get_attachment_url(18); ?>" alt="cercle vert blur" />
        </div>
        <div class="z-20 pt-[50px] md:mx-[10%]" >
            <p class="home-h3  text-[34px] md:text-[26px] sm:text-[16px]">Je suis Marion , graphiste et web designeuse</p>
            <p class="text-gris text-[96px] font-Paytone md:text-2xl sm:text-[40px] z-40">Marion MURA</p>
        <!-- <img class="cercle-rouge" src="<?php
            echo wp_get_attachment_url(19); ?>" alt="cercle rouge blur" /> -->
    </div>     
    </div>

    <div class="">
        
    </div>
<!-- 
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
    </div> -->

<?php 
get_footer();
?>
