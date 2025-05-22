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
            </section>

            <section class="quote">

            </section>

            <section class="features">
                <div class="features__container-sm">
                    <div class="features__headline">
                        <h2>Akila Features</h2>
                        <div class="features__headline--description">
                            <h3>Build a solution that’s truly your own</h3>
                            <p>Akila is a comprehensive digital twin data platform engineered to empower portfolio managers with an unparalleled level of control and insight over their assets. By integrating real-time data, smart building systems.</p>
                        </div>
                    </div>
                    <div class="features__content">
                        <div class="features__items">
                            <div class="features__item">
                                <div class="item__headline">
                                    <h4>Porftolio management</h4>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chev-down.png" alt=">" srcset="">
                                </div>
                                <ul class="item__description">
                                    <li><div class="circle"></div>Single source of truth</li>
                                    <li>Global analytics</li>
                                    <li>Carbon tracking</li>
                                </ul>
                            </div>
                            <div class="features__item">
                                <div class="item__headline">
                                    <h4>Energy management</h4>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chev-down.png" alt=">" srcset="">
                                </div>
                                <ul class="item__description">
                                    <li><div class="circle"></div>Single source of truth</li>
                                    <li>Global analytics</li>
                                    <li>Carbon tracking</li>
                                </ul>
                            </div>
                            <div class="features__item">
                                <div class="item__headline">
                                    <h4>Condition-based mnt</h4>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chev-down.png" alt=">" srcset="">
                                </div>
                                <ul class="item__description">
                                    <li><div class="circle"></div>Single source of truth</li>
                                    <li>Global analytics</li>
                                    <li>Carbon tracking</li>
                                </ul>
                            </div>
                            <div class="features__item">
                                <div class="item__headline">
                                    <h4>API Ecosystem</h4>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chev-down.png" alt=">" srcset="">
                                </div>
                                <ul class="item__description">
                                    <li><div class="circle"></div>Single source of truth</li>
                                    <li>Global analytics</li>
                                    <li>Carbon tracking</li>
                                </ul>
                            </div>
                        </div>
                        <div class="features__image"></div>
                    </div>
                </div>
            </section>

            <section class="ai-edge">

            </section>

        </main>
        </body>


        <script src="<?php echo get_template_directory_uri(); ?>/js/CTAHeroList.js"></script>