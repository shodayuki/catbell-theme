<?php get_header(); ?>
<section class="page-shopDetail">
  <div class="mainvisual">
    <div class="mainvisual__img inner">
      <nav>
        <ol class="breadcrumbs">
          <li class="breadcrumbs__item"><a href="index.html" class="breadcrumbs__link">ホーム</a></li>
          <li class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">お店を探す</a></li>
          <li class="breadcrumbs__item">ショップ詳細</li>
        </ol>
      </nav>
      <!-- breadcrumb__inner inner -->
      <img src="<?php echo get_field('shop_img'); ?>" alt="<?php echo the_title(); ?>">
    </div>
  </div>
  <section class="access">
    <div class="inner">
      <h2 class="section__title"><?php echo the_title(); ?>の基本情報</h2>
      <div class="access__inner">
        <div class="access__text">
          <dl>
            <dt>住所</dt>
            <dd><?php echo get_field('shop_address'); ?></dd>
            <dt>TEL</dt>
            <dd><?php echo get_field('shop_tel'); ?></dd>
            <dt>営業時間</dt>
            <dd><?php echo get_field('shop_hours'); ?></dd>
            <dt>アクセス</dt>
            <dd><?php echo get_field('shop_access'); ?></dd>
          </dl>
        </div>
        <div class="access__map">
          <?php echo get_field('shop_map'); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="catlist">
    <div class="inner">
      <h2 class="section__title"><?php echo the_title(); ?>の新入りの猫ちゃん</h2>
      <ul class="catlist__items">
        <?php
          $taxonomy = 'hand_shop_type';
          $term_slug = $post->post_name;

          $args = array(
            'tax_query' => array(
              array(
                'taxonomy' => $taxonomy,
                'field' => 'slug',
                'terms' => $term_slug,
              ),
            ),
            'post_type' => 'cat',
            'order' => 'ASC',
            'posts_per_page' => 3,
          );
          $my_query = new WP_Query($args);

          if ($my_query->have_posts()) :
          while ($my_query->have_posts()) : $my_query->the_post();
        ?>
        <li class="catlist__item">
          <a href="<?php echo the_permalink(); ?>">
            <?php foreach (SCF::get('猫ちゃんのサムネイル画像') as $field_name => $field_value) : ?>
            <?php
              $carousel_thumbnail = wp_get_attachment_image_src($field_value['cat_img'], 'large');
              $carousel_thumbnail = esc_url($carousel_thumbnail[0]);
              if (!$carousel_thumbnail) {
                $carousel_thumbnail = 'https://placehold.jp/584x390.png';
              }
            ?>
            <img src="<?php echo $carousel_thumbnail; ?>" alt="<?php echo the_title(); ?>">
            <?php break; endforeach; ?>
            <h3 class="catlist__item__title"><?php echo the_title(); ?></h3>
            <dl>
              <dt>性別</dt>
              <dd>
                <?php if (get_field('cat_sex') === 'men') {
                  echo "オス";
                } else {
                  echo "メス";
                } ?>
              </dd>
              <dt>生体価格</dt>
              <dd><span class="cat__price"><?php echo get_field('cat_price'); ?></span>(税抜)</dd>
            </dl>
          </a>
        </li>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </ul>
      <div class="btn">
        <a href="<?php echo get_term_link($term_slug, $taxonomy); ?>" class="btn__item">この店舗の猫ちゃんを見る</a>
      </div>
    </div>
  </section>
  <section class="concept">
    <div class="inner">
      <h2 class="section__title">店長よりごあいさつ</h2>
      <div class="concept__inner">
        <div class="concept__left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopDetail/greeting.jpg" alt="">
        </div>
        <div class="concept__right">
          <h3 class="concept__subtitle"><?php echo get_field('shop_manager_title'); ?></h3>
          <p class="concept__text"><?php echo get_field('shop_manager_text'); ?></p>
        </div>
      </div>
    </div>
  </section>
  <section class="blog">
    <div class="inner">
      <h2 class="section__title"><?php echo the_title(); ?>の最新ブログ</h2>
      <ul class="blog__items">
        <li class="blog__item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopDetail/00.jpg" alt="ブログ記事写真">
            <div class="blog__item__text">
              <p class="date">2022.02.24</p>
              <h3 class="blog__subtitle">猫にまつわるヒーリング効果とは！？プレゼントキャンペーンも実施中♪猫にまつわるヒーリング効果とは！？プレゼントキャンペーンも実施中♪猫にまつわるヒーリング効果とは！？プレゼントキャンペーンも実施中♪猫にまつわるヒーリング効果とは！</h3>
              <p class="blog__text">人とコミュニケーションをとること、物理的に触れたり、間接的に感じたりすることが、今や遠隔で完結できるようになった。もともと「繋がり」という形を持たない結びつきではあるが、あらゆる物事と実際に接点を持つ場面がが減っている中、生身の身体が受け取る感覚はこれからどんなふうに変わっていくのだろうか。人とコミュニケーションをとること、物理的に触れたり、間接的に感じたりすることが、今や遠隔で完結できるようになった。もともと「繋がり」という形を持たない結びつきではあるが、あらゆる物事と実際に接点を持つ場面がが減っている中、生身の身体が受け取る感覚はこれからどんなふうに変わっていくのだろうか</p>
              <a class="blog__item__link" href="#">#ヘルスケア</a>
              <a class="blog__item__link" href="#">#プレゼント</a>
              <a class="blog__item__link" href="#">#キャンペーン</a>
            </div><!-- blog__item__text -->
          </a>
        </li><!-- blog__item -->
        <li class="blog__item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopDetail/01.jpg" alt="ブログ記事写真">
            <div class="blog__item__text">
              <p class="date">2022.02.24</p>
              <h3 class="blog__subtitle">ねこの日★祝！レア種も仲間入り、ふれあいコーナーで癒されて♪ねこの日★祝！レア種も仲間入り、ふれあいコーナーで癒されて♪ねこの日★祝！レア種も仲間入り、ふれあいコーナーで癒されて♪ねこの日★祝！レア種も仲間入り、ふれあいコーナーで癒されて♪</h3>
              <p class="blog__text">人とコミュニケーションをとること、物理的に触れたり、間接的に感じたりすることが、今や遠隔で完結できるようになった。もともと「繋がり」という形を持たない結びつきではあるが、あらゆる物事と実際に接点を持つ場面がが減っている中、生身の身体が受け取る感覚はこれからどんなふうに変わっていくのだろうか。人とコミュニケーションをとること、物理的に触れたり、間接的に感じたりすることが、今や遠隔で完結できるようになった。もともと「繋がり」という形を持たない結びつきではあるが、あらゆる物事と実際に接点を持つ場面がが減っている中、生身の身体が受け取る感覚はこれからどんなふうに変わっていくのだろうか</p>
              <a class="blog__item__link" href="#">#ヘルスケア</a>
              <a class="blog__item__link" href="#">#キャンペーン</a>
            </div><!-- blog__item__text -->
          </a>
        </li><!-- blog__item -->
        <li class="blog__item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopDetail/02.jpg" alt="ブログ記事写真">
            <div class="blog__item__text">
              <p class="date">2022.02.24</p>
              <h3 class="blog__subtitle">【新宿店】ポイント2倍Day！この機会をお見逃しなく！ポイント2倍Day！この機会をお見逃しなく！ポイント2倍Day！この機会をお見逃しなく！</h3>
              <p class="blog__text">人とコミュニケーションをとること、物理的に触れたり、間接的に感じたりすることが、今や遠隔で完結できるようになった。もともと「繋がり」という形を持たない結びつきではあるが、あらゆる物事と実際に接点を持つ場面がが減っている中、生身の身体が受け取る感覚はこれからどんなふうに変わっていくのだろうか。人とコミュニケーションをとること、物理的に触れたり、間接的に感じたりすることが、今や遠隔で完結できるようになった。もともと「繋がり」という形を持たない結びつきではあるが、あらゆる物事と実際に接点を持つ場面がが減っている中、生身の身体が受け取る感覚はこれからどんなふうに変わっていくのだろうか</p>
              <a class="blog__item__link" href="#">#ポイントDay</a>
              <a class="blog__item__link" href="#">#ヘルスケア</a>
            </div><!-- blog__item__text -->
          </a>
        </li><!-- blog__item -->
      </ul><!-- blog__items-->
      <div class="btn">
        <a href="#" class="btn__item">この店舗のブログを見る</a>
      </div><!-- btn__item -->
    </div><!-- inner -->
  </section><!-- blog -->
</section>
<?php get_footer(); ?>
</body>
</html>