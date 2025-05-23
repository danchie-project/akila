<?php
/*
Template Name: About
*/
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css">
<?php get_header() ?>

<section>
    <div class="about__container">
        <div class="about__text">
            <!-- <h1><?php echo ($language === 'zh') ? '关于我们' : 'About Us'; ?></h1> -->
            <!-- <p><?php echo ($language === 'zh') ? 'Akila 是一个社交双平台，集中和可视化您建筑的所有数据，从一个地点到整个投资组合。' : 'Akila is a social twin platform that centralizes and visualizes all data from your buildings, from one site to an entire portfolio.'; ?></p> -->
        </div>
        <!-- <div class="about__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="About Us" loading="lazy">
        </div> -->
    </div>
</section>

<!-- Hero -->
<section>
    <div class="about__hero">
        <div class="about__container">
            <div class="about-hero__text">
                <p>We believe</p>
                <p>Buildings should think</p>
                <p>Akila empowers organizations with data, enabling them to take action. Our clients leverage Akila to optimize property portfolios from one site to dozens, for energy, environment, maintenance, and carbon management.</p>
            </div>
            <div class="about-hero__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/about-hero.png" alt="About Hero Image" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Data driven -->
<section>
    <div class="about__data-driven">
        <div class="about__container-sm">
            <div class="about-data-driven__text">
                <p>We turn buildings into data-driven decision engines</p>
            </div>
</section>

<!-- Calculation -->
<section class="calculation__container-sm">
    <div class="calculation__content">
        <div class="about__calculation ">
            <h2>2021</h2>
            <p>Year founded</p>
        </div>
        <div class="about__calculation">
            <h2>6</h2>
            <p>Global offices</p>
        </div>
        <div class="about__calculation">
            <h2>12M SQM</h2>
            <p>Digitalized</p>
        </div>
    </div>
</section>

<!-- Quote -->
<section class="about-quote">
    <div class="quote__container-sm">
        <div class="about-quote__content">
            <div class="about-quote__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote.png" alt="quote" loading="lazy">
            </div>
            <h2>We forge the future of intelligent and sustainable infrastructure by bringing buildings to life and achieving actionable cognition: buildings with agentic networks that listen, respond and self-optimize.</h2>
        </div>
        <div class="quote__author">
            <h3>Akila</h3>
            <p>Akila Chief of staff</p>
        </div>
    </div>
</section>


<!-- Akila Platform -->
<section>
    <div class="akila-platform__container">
        <div class="akila-platform__contents">
            <div class="akila-platform__bg"></div>
            <div class="akila-platform__wrapper">
                <div class="akila-platform__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/akila-platform.png" alt="Akila Platform" loading="lazy">
                </div>
                <div class="akila-platform__text">
                    <h2>Akila Platform</h2>
                    <p class="akila-platform__sub-title">Our platform democratizes data & unlocks value to all users</p>
                    <div class="akila-platform__lists">
                        <div class="akila-platform__check">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/marker.png" alt="Akila Platform Check" loading="lazy">
                            <p>Single source of truth for complex data</p>
                        </div>
                        <div class="akila-platform__check">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/marker.png" alt="Akila Platform Check 2" loading="lazy">
                            <p>Global analytics & actionable insight</p>
                        </div>
                        <div class="akila-platform__check">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/marker.png" alt="Akila Platform Check 3" loading="lazy">
                            <p>Growing base of agentic optimizations</p>
                        </div>
                        <div class="akila-platform__check">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-page/marker.png" alt="Akila Platform Check 4" loading="lazy">
                            <p>Adaptive Ul per role</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>


<!-- Where We Are -->
<section>
    .<div class="where-we-are__container-sm">
        <p class="where-we-are__title">Where we are</p>
        <div class="where-we-are__text">
            <p>A platform & team built to scale</p>
            <p>Akila operates across key cities around the world to stay close to our partners, clients, and the markets we serve. Wherever you are, Akila is ready to support your digital transformation journey.</p>
        </div>

</section>

<?php get_footer(); ?>