<?php
/*
Template Name: general
*/
?>

<?php get_header();?>

<section class="general">
    <div class="video-background">
        <video src="<?php bloginfo('template_url');?>/assets/video/video.mp4" autoplay loop muted playsinline></video>
        <div class="video-overlay"></div>
    </div>
    <div class="hero-content">
        <h1>28Q - Videostudio</h1>
        <p>Контент для вашего успеха</p>
    </div>
</section>
<section class="why-us-alt">
    <div class="container">
        <h2>Почему выбирают именно нас</h2>
        <div class="why-us-alt-grid">
            <div class="why-us-alt-item">
                <div class="why-us-alt-icon">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <div class="why-us-alt-text">
                    <h3>Полный цикл</h3>
                    <p>Контент-продакшн полного цикла от идеи до публикации.</p>
                </div>
            </div>
            <div class="why-us-alt-item">
                <div class="why-us-alt-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="why-us-alt-text">
                    <h3>Команда экспертов</h3>
                    <p>Команда профессионалов с опытом в разных сферах.</p>
                </div>
            </div>
            <div class="why-us-alt-item">
                <div class="why-us-alt-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="why-us-alt-text">
                    <h3>Индивидуальный подход</h3>
                    <p>Разработка уникальных решений под каждый проект.</p>
                </div>
            </div>
            <div class="why-us-alt-item">
                <div class="why-us-alt-icon">
                    <i class="fas fa-cubes"></i>
                </div>
                <div class="why-us-alt-text">
                    <h3>Мультиформатность</h3>
                    <p>Работаем со всеми видами контента.</p>
                </div>
            </div>
            <div class="why-us-alt-item">
                <div class="why-us-alt-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="why-us-alt-text">
                    <h3>Аналитика и оптимизация</h3>
                    <p>Мониторинг и анализ для максимальной эффективности.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-types">
    <div class="container">
        <h1>Типы контента</h1>
        <div class="content-grid">
            <div class="content-item">
                <i class="fas fa-font fa-3x"></i>
                <h3>Текстовый контент</h3>
            </div>
            <div class="content-item">
                <i class="fas fa-paint-brush fa-3x"></i>
                <h3>Графический контент</h3>
            </div>
            <div class="content-item">
                <i class="fas fa-video fa-3x"></i>
                <h3>Видео контент</h3>
            </div>
            <div class="content-item">
                <i class="fas fa-headphones-alt fa-3x"></i>
                <h3>Аудио контент</h3>
            </div>
            <div class="content-item">
                <i class="fas fa-hand-pointer fa-3x"></i>
                <h3>Интерактивный контент</h3>
            </div>
            <div class="content-item">
                <i class="fas fa-graduation-cap fa-3x"></i>
                <h3>Образовательный контент</h3>
            </div>
        </div>
        <div class="button-container">
            <a href="services" class="view-more-button">Посмотреть подробнее</a>
        </div>
    </div>
</section>
<section class="our-cases">
    <div class="container">
        <h2>Примеры наших работ</h2>
        <div class="cases-grid">
		<?php
			global $post;
			$case = get_posts([
				'numberposts' => 6,
			]);
			
			if($case){
				foreach($case as $post){
					setup_postdata($post);
					?>
						<div class="case-item">
							<div class="case-item-preview" style="background-image: url('<?php the_post_thumbnail_url();?>')"></div>
							<div class="case-item-overlay">
								<h3><?php the_title();?></h3>
								<p><?php the_content();?></p>
								<a href="#" class="case-item-link" data-video="https://www.youtube.com/embed/your-video-id1">Посмотреть видео</a>
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
        <div class="cases-button-container">
            <a href="cases" class="cases-button">Посмотреть больше</a>
        </div>
        <div class="button-container">
            <a href="contacts" class="view-more-button">Заинтересовали? Тогда свяжитесь с нами!</a>
        </div>
        <div id="videoModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe id="videoFrame" width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>