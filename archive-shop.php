<?php get_header(); ?>
<section class="shoplist inner page-shopList">
  <?php get_template_part('_inc/breadcrumbs'); ?>
  <h2 class="shoplist__title">お店を探す</h2>
  <ul class="shoplist__items">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <li class="shoplist__item">
      <a href="<?php echo the_permalink(); ?>">
        <img src="<?php echo get_field('shop_img'); ?>" alt="<?php echo the_title(); ?>">
        <h3 class="shoplist__item__title"><?php echo the_title(); ?></h3>
        <dl>
          <dt>住所</dt>
          <dd><?php echo get_field('shop_address'); ?></dd>
          <dt>TEL</dt>
          <dd><?php echo get_field('shop_tel'); ?></dd>
          <dt>営業時間</dt>
          <dd><?php echo get_field('shop_hours'); ?></dd>
        </dl>
      </a>
    </li>
    <?php endwhile; endif; ?>
  </ul>
  <?php get_template_part('_inc/pager'); ?>
</section>
<?php get_footer(); ?>
</body>
</html>