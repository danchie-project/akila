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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
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


</body>

</html>