<?php
/*
Template Name: contacts
*/
?>

<?php get_header();?>

<section class="contact-form">
    <div class="container-form">
		<div class="form-wrapper">
			<?php echo do_shortcode('[contact-form-7 id="1645d97" title="Контактная форма 1"]');?>
		</div>
        <div class="map-container">
            <iframe src="https://yandex.ru/map-widget/v1/?from=api-maps&indoorLevel=1&ll=53.202845%2C56.847520&mode=routes&origin=jsapi_2_1_79&rtext=~56.847662%2C53.202895&rtt=mt&ruri=~&z=19.98" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
        </div>
    </div>
</section>

<?php get_footer();?>