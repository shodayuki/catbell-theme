<?php get_header(); ?>
<section class="findPet">
	<div class="findPet__inner inner">
		<!-- breadcrumb -->
		<nav>
			<ol class="breadcrumbs">
				<li class="breadcrumbs__item"><a href="index.html" class="breadcrumbs__link">ホーム</a></li>
				<li class="breadcrumbs__item">猫種一覧</li>
			</ol>
		</nav>
		<!-- /breadcrumb -->
		<div class="findPet__head">
			<h2 class="util__title">ペットを探す</h2>
			<p class="util__subTitle">Find a pet</p>
		</div>
		<div class="findPet__wrap">
			<ul class="findPet__list">

				<?php
					$taxonomy_name = 'cat_type';
					$taxonomys = get_terms($taxonomy_name);

					if (!is_wp_error($taxonomys) && count($taxonomys)) :
					foreach($taxonomys as $taxonomy) :

					$term_id = esc_html($taxonomy->term_id);
					$term_idsp = "cat_type_".$term_id; // タクソノミーの名前_ + term_id
					$photo = get_field('cat_type_img', $term_idsp);
				?>

				<li class="findPet__item">
					<a href="#" class="findPet__itemLink">
						<div class="findPet__catImg">
							<img src="<?php echo $photo ?>" alt="<?php echo esc_html($taxonomy->name); ?>">
						</div>
						<p class="findPet__catName"><?php echo esc_html($taxonomy->name); ?></p>
					</a>
				</li>

				<?php endforeach; endif; ?>
			</ul>
		</div>
		<div class="findPet__more">
			<a href="<?php echo get_post_type_archive_link('cat'); ?>" class="util__link">すべての猫一覧を見る</a>
		</div>
	</div>
</section>
<!-- /.findPet -->
<?php get_footer(); ?>
</body>
</html>