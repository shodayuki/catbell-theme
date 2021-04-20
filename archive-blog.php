<?php get_header(); ?>
<!-- main -->
<main class="main cntInner inner">
	<!-- パンくずリスト -->
	<nav>
		<ol class="breadcrumbs">
			<li class="breadcrumbs__item"><a href="index.html" class="breadcrumbs__link">ホーム</a></li>
			<li class="breadcrumbs__item">ブログ一覧</li>
		</ol>
	</nav>
	<!-- /パンくずリスト -->
	<!-- top -->
	<?php if (have_posts()) : ?>
	<a href="<?php the_permalink(); ?>">
		<div class="top__img">
			<img src="<?php echo get_field('blog_img'); ?>" alt="<?php echo the_title(); ?>">
		</div>
		<div class="top__content">
			<h2 class="top__ttl"><?php echo the_title(); ?></h2>
			<div class="top__txt"><?php echo the_content(); ?></div>
			<div class="top__tagItems">
				<?php the_tags('<div class="tag top__tag">','</div><div class="tag top__tag">','</div>'); ?>
			</div>
			<span class="date top__date"><?php echo the_time('Y.m.d'); ?></span>
		</div>
	</a>
	<?php endif; ?>
	<!-- /top -->
	<!-- content -->
	<section class="content">
		<div class="archive">
			<div class="archive__wrap">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php if (!is_first()) : ?>
				<div class="archive__card">
					<a href="<?php the_permalink(); ?>" class="archive__cardLink">
						<div class="archive__cardWrap">
							<div class="archive__img">
								<img src="<?php echo get_field('blog_img'); ?>" alt="<?php echo the_title(); ?>">
							</div>
							<div class="archive__content">
								<span class="date"><?php echo the_time('Y.m.d'); ?></span>
								<div class="archive__ttl"><?php echo the_title(); ?></div>
								<div class="archive__txt"><?php echo the_content(); ?></div>
							</div>
						</div>
					</a>
					<div class="archive__tagItems">
						<?php the_tags('<div class="tag top__tag">','</div><div class="tag top__tag">','</div>'); ?>
					</div>
				</div>
				<?php endif; ?>
				<?php endwhile; endif; ?>
			</div>
			<div class="pager">
				<ul class="pager__items">
					<li class="pager__item is-active"><a href="#" class="pager__link">1</a></li>
					<li class="pager__item"><a href="#" class="pager__link">2</a></li>
					<li class="pager__item"><a href="#" class="pager__link">3</a></li>
					<li class="pager__item"><a href="#" class="pager__link">4</a></li>
					<li class="pager__item"><a href="#" class="pager__link">5</a></li>
				</ul>
			</div>
		</div>
		<div class="side">
			<div class="pickup">
				<h3 class="pickup__topTtl">ピックアップ</h3>
				<a href="#" class="pickup__card">
					<div class="pickup__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/01.jpg" alt="ねこ">
					</div>
					<div class="pickup__ttl">ねこの日★祝！レア種も仲間入り、ふれあいコーナーで癒されて♪</div>
					<span class="date pickup__date">2022.02.22</span>
				</a>
				<a href="#" class="pickup__card">
					<div class="pickup__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/02.jpg" alt="ねこ">
					</div>
					<div class="pickup__ttl">【新宿店】ポイント2倍Day！この機会をお見逃しなく！</div>
					<span class="date pickup__date">2022.02.22</span>
				</a>
				<a href="#" class="pickup__card">
					<div class="pickup__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/03.jpg" alt="ねこ">
					</div>
					<div class="pickup__ttl">新年SEAL！療法食10%OFF</div>
					<span class="date pickup__date">2022.01.04</span>
				</a>
			</div>
			<div class="keyword">
				<h3 class="keyword__topTtl">キーワード</h3>
				<ul class="keyword__tagItems">
					<li class="keyword__tagItem"><a href="#" class="tag keyword__tag">#ヘルスケア</a></li>
					<li class="keyword__tagItem"><a href="#" class="tag keyword__tag">#新入りさん</a></li>
					<li class="keyword__tagItem"><a href="#" class="tag keyword__tag">#里親募集</a></li>
					<li class="keyword__tagItem"><a href="#" class="tag keyword__tag">#キャンペーン</a></li>
					<li class="keyword__tagItem"><a href="#" class="tag keyword__tag">#プレゼント</a></li>
					<li class="keyword__tagItem"><a href="#" class="tag keyword__tag">#ポイントDay</a></li>
					<li class="keyword__tagItem"><a href="#" class="tag keyword__tag">#ごはん</a></li>
					<li class="keyword__tagItem"><a href="#" class="tag keyword__tag">#おやつ</a></li>
				</ul>
			</div>
		</div>
	</section>
<!-- /content -->
</main>
<!-- /main -->
<!-- footer -->
<?php get_footer(); ?>
<!-- /footer -->
</body>
</html>