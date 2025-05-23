<?php
$language = pll_current_language();
$htmlLang = $language === 'zh' ? 'lang="cn"' : 'lang="en"';
?>

<!DOCTYPE html>
<html <?php echo $htmlLang; ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/swiper/swiper-bundle.min.css"> -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php wp_head(); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const langLinks = document.querySelectorAll('.language-link');
            const currentLang = new URLSearchParams(window.location.search).get('lang');

            langLinks.forEach(link => {
                if (link.getAttribute('data-lang') === currentLang) {
                    link.classList.add('active');
                }
            });
        });

        function toggleDropdown(event, dropdownId) {
            event.preventDefault(); // Prevent default link behavior
            const dropdown = document.getElementById(dropdownId);
            const arrow = event.currentTarget.querySelector('.arrow');

            // Toggle dropdown visibility
            dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';

            // Rotate arrow
            if (dropdown.style.display === 'block') {
                arrow.innerHTML = '&#9650;'; // Up arrow
            } else {
                arrow.innerHTML = '&#9660;'; // Down arrow
            }
        }
    </script>
</head>

<body <?php body_class(); ?>>

    <header id="header">
        <div class="header__container">
            <div class="logo__branding">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                    if (has_custom_logo()) {
                        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="logo__image">';
                    } else {
                        if (is_front_page() && is_home()) :
                    ?>
                            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                        <?php
                        else :
                        ?>
                            <p class="site-title"><?php bloginfo('name'); ?></p>
                    <?php
                        endif;
                    }
                    ?>
                </a>
            </div>

            <!-- <nav id="site-navigation" class="nav__menu">
                <ul>
                    <li>
                        <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event, 'product-dropdown')">
                            <?php echo ($language === 'zh') ? '产品' : 'Product'; ?>
                            <span class="arrow">&#9660;</span>
                        </a>
                        <ul id="product-dropdown" class="dropdown">
                            <li><a href="<?php echo esc_url(site_url('/product/item1')); ?>"><?php echo ($language === 'zh') ? '产品1' : 'Product 1'; ?></a></li>
                            <li><a href="<?php echo esc_url(site_url('/product/item2')); ?>"><?php echo ($language === 'zh') ? '产品2' : 'Product 2'; ?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event, 'customers-dropdown')">
                            <?php echo ($language === 'zh') ? '解决方案' : 'Customers'; ?>
                            <span class="arrow">&#9660;</span>
                        </a>
                        <ul id="customers-dropdown" class="dropdown">
                            <li><a href="<?php echo esc_url(site_url('/customers/solution1')); ?>"><?php echo ($language === 'zh') ? '解决方案1' : 'Solution 1'; ?></a></li>
                            <li><a href="<?php echo esc_url(site_url('/customers/solution2')); ?>"><?php echo ($language === 'zh') ? '解决方案2' : 'Solution 2'; ?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>">
                            <?php echo ($language === 'zh') ? '资源' : 'About'; ?>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event, 'company-dropdown')">
                            <?php echo ($language === 'zh') ? '公司' : 'Company'; ?>
                            <span class="arrow">&#9660;</span>
                        </a>
                        <ul id="company-dropdown" class="dropdown">
                            <li><a href="<?php echo esc_url(site_url('/company/about')); ?>"><?php echo ($language === 'zh') ? '关于我们' : 'About Us'; ?></a></li>
                            <li><a href="<?php echo esc_url(site_url('/company/team')); ?>"><?php echo ($language === 'zh') ? '团队' : 'Team'; ?></a></li>
                        </ul>
                    </li>
                </ul>
            </nav> -->
            <!-- <div class="header__buttons">
                <button class="header__dark-button--base">Request a demo</button>
            </div> -->

            <!-- <div class="language__switcher">
                <ul class="language__list">
                    <?php
                    $languages = pll_the_languages(array('raw' => true));
                    foreach ($languages as $lang) {
                        $url = remove_query_arg(array('lang'), $lang['url']);
                        echo '<li class="language__item">';
                        echo '<a href="' . esc_url($url) . '" class="language__link' . ($lang['current_lang'] ? ' active' : '') . '" data-lang="' . esc_attr($lang['slug']) . '">';

                        // Display "en" for English and "cn" for Chinese
                        echo ($lang['slug'] === 'en') ? 'EN' : 'CN';
                        echo '</a>';
                        echo '</li>';
                        if ($lang !== end($languages)) {
                            echo '<span class="language__separator"> | </span>';
                        }
                    }
                    ?>
                </ul>
            </div> -->
        </div>
    </header>