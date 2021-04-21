<?php get_header(); ?>
<section class="single__cat">
  <div class="single__cat__inner inner">
    <!-- breadcrumb -->
    <nav>
      <ol class="breadcrumbs">
        <li class="breadcrumbs__item"><a href="index.html" class="breadcrumbs__link">ホーム</a></li>
        <li class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">猫種一覧</a></li>
        <li class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">アメリカンショートヘア一覧</a></li>
        <li class="breadcrumbs__item">猫ちゃん詳細</li>
      </ol>
    </nav>
    <!-- /breadcrumb -->
    <div class="single__cat__wrap">
      <div class="single__cat__img">
        <div class="single__cat--mainImg your-class">
          <?php
            $catCountUp = 0;
            foreach (SCF::get('猫ちゃんのサムネイル画像') as $field_name => $field_value) :

            $carousel_thumbnail = wp_get_attachment_image_src($field_value['cat_img'], 'large');
            $carousel_thumbnail = esc_url($carousel_thumbnail[0]);
            if (!$carousel_thumbnail) {
              $carousel_thumbnail = 'https://placehold.jp/584x390.png';
            }
            if ($catCountUp < 4) {
          ?>
            <img src="<?php echo $carousel_thumbnail; ?>" alt="<?php echo the_title(); ?>">
          <?php } $catCountUp++; endforeach; ?>
        </div>
        <div class="slider-nav">
          <?php
            $arrayCountUp = 0;
            foreach (SCF::get('猫ちゃんのサムネイル画像') as $field_name => $field_value) :

            $carousel_thumbnail = wp_get_attachment_image_src($field_value['cat_img'], 'large');
            $carousel_thumbnail = esc_url($carousel_thumbnail[0]);
            if (!$carousel_thumbnail) {
              $carousel_thumbnail = 'https://placehold.jp/584x390.png';
            }
            if ($arrayCountUp < 4) {
          ?>
            <img class="single__cat--subImgb" src="<?php echo $carousel_thumbnail; ?>" alt="<?php echo the_title(); ?>">
          <?php } $arrayCountUp++; endforeach; ?>
        </div>
      </div>
      <div class="single__cat__body">
        <h2><a href="#" class="single__cat__title"><?php echo the_title(); ?></a></h2>
        <dl class="single__cat__content">
          <dt>生年月日</dt>
          <dd><?php echo get_field('cat_birthday'); ?></dd>
          <dt>性別</dt>
          <dd>
            <?php if (get_field('cat_sex') === 'men') {
              echo "オス";
            } else {
              echo "メス";
            } ?>
          </dd>
          <dt>生体価格</dt>
          <dd><span class="cat__price"><?php echo get_field('cat_price'); ?></span>円（税抜）</dd>
          <dt>血統書</dt>
          <dd>
            <?php if (get_field('cat_pedigree') === 'on') {
              echo "あり";
            } else {
              echo "なし";
            } ?>
          </dd>
        </dl>
        <div class="single__cat__footer hover">
          <a href="">アメリカンショートヘア一覧を見る<i class="fas fa-angle-right"></i></a>
        </div>
      </div>
    </div><!-- /single__cat -->
    <div class="about__cat">
      <h3 class="about__cat__title">コメント</h3>
      <div class="about__cat__text">
        <?php echo get_field('cat_text'); ?>
      </div>
    </div>
    <?php
				$post_object = get_field('cat_shop');
				$image = get_post_meta($post_object, 'shop_img', true);
				$size = 'full';
			?>
    <div class="about__store">
      <a href="<?php echo get_permalink($post_object); ?>" class="about__store__img hover">
        <?php echo wp_get_attachment_image($image, $size); ?>
      </a>
      <div class="about__store__body">
        <div class="about__store__head">
          <a href="#" class="store__list__title hover"><?php echo get_the_title($post_object); ?></a>
        </div>
        <dl class="about__store__content">
          <dt>住所</dt>
          <dd><?php echo get_post_meta($post_object, 'shop_address', true); ?></dd>
          <dt>TEL</dt>
          <dd><?php echo get_post_meta($post_object, 'shop_tel', true); ?></dd>
          <dt>営業時間</dt>
          <dd><?php echo get_post_meta($post_object, 'shop_hours', true); ?></dd>
        </dl>
        <div class="about__store__footer">
          <a href="<?php echo get_permalink($post_object); ?>" class="util__link about__store_btn hover">お取扱い店舗を見る</a>
        </div>
      </div>
    </div><!-- /.about__store -->
    <div class="anotherPet__wrap">
      <div class="anotherPet__inner">
        <h3 class="catList__title">ほかにもこんな猫種が注目されています！</h3>
        <ul class="anotherPet__list">
          <li class="anotherPet__item hover">
            <a href="anotherPet__itemLink">
              <div class="anotherPet__catImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/01.png" alt="">
              </div>
              <p class="anotherPet__catName">スコティッシュ<br>フォールド</p>
            </a>
          </li>
          <li class="anotherPet__item hover">
            <a href="anotherPet__itemLink">
              <div class="anotherPet__catImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/03.png" alt="">
              </div>
              <p class="anotherPet__catName">メインクイーン</p>
            </a>
          </li>
          <li class="anotherPet__item hover">
            <a href="anotherPet__itemLink">
              <div class="anotherPet__catImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/04.png" alt="">
              </div>
              <p class="anotherPet__catName">エキゾチック<br>ショートヘア</p>
            </a>
          </li>
          <li class="anotherPet__item hover">
            <a href="anotherPet__itemLink">
              <div class="anotherPet__catImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/typeList/4columns/05.png" alt="">
              </div>
              <p class="anotherPet__catName">ラグドール</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /.anotherPet__wrap -->
  </div>
</section>
<?php get_footer(); ?>
<!-- slick -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script>
  $(".your-class").slick({
      slidesToShow: 1,
      arrows: false,
      fade: true,
      asNavFor: ".slider-nav",
    });
    $(".slider-nav").slick({
      slidesToShow: 4,
      asNavFor: ".your-class",
      centerMode: true,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 384,
          settings: {
            swipe: true,
            arrows: false,
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
      ],
    });
</script>
</body>
</html>