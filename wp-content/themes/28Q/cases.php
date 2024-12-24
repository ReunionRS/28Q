<?php
/*
Template Name: cases
*/
?>

<?php get_header();?>

<section class="cases-page">
    <div class="container">
        <h2>Наши кейсы</h2>
        <div class="cases-categories">
            <button class="cases-category-btn active" data-category="all">Все</button>
			<?php 
				$categories = get_categories();
				foreach($categories as $category) {?>
					<button class="cases-category-btn" data-category="<?php echo $category->slug?>"><?php echo $category->name?></button>
				<?
				}
			?>
        </div>
        <div class="our-cases-grid">
		<?php
			global $post;
			$case = get_posts([
				'numberposts' => -1,
			]);
			
			if($case){
				foreach($case as $post){
					setup_postdata($post);
					$cats = get_the_category();
					$cat_name = $cats[0]->slug;
					?>
						<div class="cases-item" data-category="<?php echo $cat_name;?>" data-video="<?php bloginfo('template_url');?>/assets/video/video.mp4" data-poster="<?php the_post_thumbnail_url();?>">
							<div class="cases-item-preview" style="background-image: url('<?php the_post_thumbnail_url();?>')"></div>
							<div class="cases-item-overlay">
								<h3><?php the_title();?></h3>
								<p><?php the_content();?></p>
								<button class="cases-open-modal-btn">Посмотреть видео</button>
							</div>
						</div>
					<?php
				}
			}else{
				?>
					<p>Здесь пока ничего нет</p>
				<?php
			}
			wp_reset_postdata();
		?>
        </div>
    </div>
</section>
<div class="cases-modal" id="videoModal">
    <div class="cases-modal-content">
        <span class="cases-close-modal-btn">&times;</span>
        <video src="" controls autoplay class="cases-modal-video"></video>
    </div>
</div>

<?php get_footer();?>