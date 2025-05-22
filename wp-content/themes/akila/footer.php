<?php wp_footer(); ?>

<style>
    .footer {
        background-image: var(--bg-gradient);
        padding: 5rem;
    }

    .footer__top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: var(--white);
        border-radius: 15px;
        margin: 0 auto;
    }

    .footer__top img {
        width: 100%;
        object-fit: cover;
        background-repeat: no-repeat;
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
    }

    .footer__top__content {
        padding: 0 0 0 5rem;
        width: 50%;
    }


    .footer__heading h2 {
        font-size: var(--text-3xl);
        font-weight: var(--font-bold);
        margin-bottom: 2rem;
        color: var(--dark);
        width: 80%;
    }

    .footer__heading p {
        font-size: var(--text-base);
        color: var(--dark);
        margin-bottom: 2rem;
        line-height: 2rem;
    }

    .footer__cta {
        display: flex;
        border: 1px solid var(--dark);
        margin-bottom: 40px;
        border-radius: 10px;
    }

    .footer__cta input {
        padding: 1rem;
        border: none;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        width: 50%;
    }

    .footer__cta input::placeholder {
        color: var(--dark);
        font-size: var(--text-base);
        font-weight: var(--font-semibold);
    }

    .footer__cta button {
        cursor: pointer;
        font-size: var(--text-md);
        font-weight: var(--font-semibold);
        width: 50%;
    }

    .footer__main {
        display: flex;
        justify-content: space-between;
        margin: 0 auto;
        padding: 0 20px;
    }

    .line {
        width: 100%;
        height: 2px;
        background-color: var(--dark);
        border-radius: 10px;
        margin: 5rem 0;
    }

    .footer__logo-section {
        width: 30%;
    }

    .footer__social {
        display: flex;
        align-items: center;
        justify-self: start;
        flex-direction: column;
        margin-top: 2rem;
    }

    .footer__social a {
        margin-right: 15px;
        color: #333;
        text-decoration: none;
    }

    .footer__social span {
        font-size: var(--text-md);
        font-weight: var(--font-semibold);
        color: var(--dark);
        margin-bottom: 10px;
    }

    .footer__social-icons {
        display: flex;
        flex-direction: row-reverse;
        gap: 1rem;
    }

    .footer__columns {
        display: flex;
        width: 70%;
        justify-content: space-between;
        margin-bottom: 2rem;
    }

    .footer__column h3 {
        font-size: var(--text-lg);
        font-weight: var(--font-semibold);
        margin-bottom: 15px;
        color: var(--dark);
    }

    .footer__column ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer__column li {
        margin-bottom: 10px;
    }

    .footer__column a {
        font-size: var(--text-base);
        font-weight: var(--font-reguler);
        color: var(--dark);
        text-decoration: none;
    }

    .footer__bottom {
        margin: 30px auto 0;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 20px;
    }

    .footer__copyright {
        color: var(--dark);
        font-size: var(--text-base);
        font-weight: var(--font-semibold);
    }

    .footer__legal {
        display: flex;
        gap: 20px;
    }

    .footer__legal a {
        color: var(--dark);
        font-size: var(--text-base);
        font-weight: var(--font-semibold);
        text-decoration: none;

    }
</style>

<section class="footer">
    <div class="footer-container">
        <div class="footer__top">
            <div class="footer__top__content">
                <div class="footer__heading">
                    <h2>Stay ahead with Akila</h2>
                    <p>Akila is a digital twin and platform that combines and visualizes all data from your builders. From one site up to an entire global property portfolio.</p>
                </div>
                <div class="footer__cta">
                    <input type="email" placeholder="Enter your email">
                    <button class="primary-button--base">Request a demo</button>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer.png" alt="quote" loading="lazy">
        </div>
        <div class="line"></div>
        <div class="footer__main">
            <div class="footer__logo-section">
                <div class="footer__logo">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                    if (has_custom_logo()) {
                        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="logo__image">';
                    } else {
                        echo '<h3>' . get_bloginfo('name') . '</h3>';
                    }
                    ?>
                </div>
                <div class="footer__social">
                    <span>Follow us</span>
                    <div class="footer__social-icons">
                        <a href="https://www.linkedin.com/company/akila-io/" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkin.png" alt="LinkedIn" loading="lazy">
                        </a>
                        <a href="https://www.youtube.com/@akilaio" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Youtube.png" alt="YouTube" loading="lazy">
                        </a>
                    </div>

                </div>
            </div>

            <div class="footer__columns">
                <div class="footer__column">
                    <h3>Product</h3>
                    <ul>
                        <li><a href="#">Platform</a></li>
                        <li><a href="#">Energy</a></li>
                        <li><a href="#">Maintenance</a></li>
                        <li><a href="#">Carbon</a></li>
                        <li><a href="#">10 Engine</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <h3>Customers</h3>
                    <ul>
                        <li><a href="#">Customer stories</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <h3>Resources</h3>
                    <ul>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="footer__copyright">©Copyright 2025</div>
            <div class="footer__legal">
                <a href="<?php echo esc_url(site_url('/privacy-policy')); ?>">Privacy Policy</a>
                <a href="<?php echo esc_url(site_url('/terms-of-use')); ?>">Term of use</a>
            </div>
        </div>
    </div>

</section>

        <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/swiper/swiper-bundle.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>

</html>