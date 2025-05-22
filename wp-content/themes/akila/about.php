<?php get_header(); ?>

<section>
    <div class="about__container">
        <div class="about__text">
            <h1><?php echo ($language === 'zh') ? '关于我们' : 'About Us'; ?></h1>
            <p><?php echo ($language === 'zh') ? 'Akila 是一个社交双平台，集中和可视化您建筑的所有数据，从一个地点到整个投资组合。' : 'Akila is a social twin platform that centralizes and visualizes all data from your buildings, from one site to an entire portfolio.'; ?></p>
        </div>
        <div class="about__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="About Us" loading="lazy">
        </div>
    </div>
</section>

<?php get_footer(); ?>