        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <!-- HEADER -->
        <?php get_header(); ?>
        <!-- Hero Section -->
        <main>
            <section class="hero">
                <div class="hero__container">
                    <div class="hero__content">
                        <h1>Building intelligence unlock</h1>
                        <p>Akila is a digital twin data platform that centralizes and visualizes all data from your buildings, from one site up to an entire global property portfolio.</p>
                        <div class="collaborators">
                            <div class="collaborators__text">
                                <p>Strategig Collaborators</p>
                            </div>
                            <div class="collaborator__logos">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nvidia.svg" alt="Partner 1" loading="lazy">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/deloite.svg" alt="Partner 2" loading="lazy">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/world.svg" alt="Partner 3" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA HERO -->
            <section class="cta__hero__container">
                <div class="cta__hero__content">
                    <div class="cta__hero__left__container">
                        <div class="chevron-up"></div>
                        <div class="cta__hero__left" id="ctaHeroLeft"></div>
                        <div class="chevron-down"></div>
                    </div>
                    <div class="cta__hero__right__container">
                        <div class="chevron-up"></div>
                        <div class="cta__hero__right" id="ctaHeroRight"></div>
                        <div class="chevron-down"></div>
                    </div>
                    <div id="imageContainer" style="display:none; text-align: center; margin-top: 20px;">
                        <img src="" alt="Displayed Image" id="displayedImage" />
                    </div>
                </div>
            </section>

        </main>
        </body>


        <script src="<?php echo get_template_directory_uri(); ?>/js/CTAHeroList.js"></script>