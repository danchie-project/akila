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
                        <div id="imageContainer" class="image__container">
                            <img src="" alt="Displayed Image" id="displayedImage" />
                        </div>
                    </div>
                </section>

                <!-- Take Control -->
                <section class="take__control_portofolio">
                    <div class="take__control__text">
                        <h2>Take control of your portfolio</h2>
                        <p>9/10 asset owners do not have the data they need</p>
                    </div>
                    <div class="take__control__buttons">
                        <button class="secondary-button--base">Learn why</button>
                        <button class="primary-button--base">Request a demo</button>
                    </div>
                </section>

                <!-- Calculation -->
                <section class="calculation__container">
                    <div class="calculation__content">
                        <div class="calculation__text">
                            <h2>20-30%</h2>
                            <p>Energy savings</p>
                        </div>
                        <div class="calculation__text">
                            <h2>3 months</h2>
                            <p>To full implementation</p>
                        </div>
                        <div class="calculation__text">
                            <h2>12 months </h2>
                            <p>avg ROI</p>
                        </div>
                    </div>
                </section>

                <!-- Akila Suite -->
                <section class="akila__suite__container">
                    <div class="akila__suite__content">
                        <div class="akila__suite__text">
                            <h3>Akila Suite</h3>
                            <h2>Leading automation with Akila</h2>
                        </div>
                        <p>Akila is a comprehensive digital twin data platform engineered to empower portfolio managers with an unparalleled level of control and insight over their assets. By integrating real-time data, smart building systems.</p>
                    </div>
                    <div class="akila__suite__card__content">
                        <div class="akila__suite__card__list">
                            <div class="akila__suite__card__canvas">
                                <div class="akila__suite__images__card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crop1.png" alt="icon" loading="lazy">
                                </div>
                                <div class="akila__suite__card__text">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital.png" alt="icon" loading="lazy">
                                    <h2>Digitalized</h2>
                                    <p>Take your building to the cloud, with centralized data accessible from anywhere</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                </section>

            </section>
        </main>
        </body>


        <script src="<?php echo get_template_directory_uri(); ?>/js/CTAHeroList.js"></script>