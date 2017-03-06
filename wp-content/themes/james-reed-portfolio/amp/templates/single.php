<!doctype html>
<html amp>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<?php do_action('amp_post_template_head', $this); ?>
	<style amp-custom>
		<?php $this->load_parts( array( 'style' ) ); ?>
		<?php do_action( 'amp_post_template_css', $this ); ?>
		body {padding-bottom: 10px;font-family: "Helvetica Neue", Arial, sans-serif;}
		.signup-module {display: none;}
		.data-capture {display: none;}
		.data-capture-backup {display: block;}
		nav.amp-wp-title-bar a {color: #005aa0;}
		.amp-header {height: 40px;padding-top: 10px;background-color:#005aa0;}
		.amp-wp-content {padding-top: 0;}
		.amp-wp-title {margin: 10px 0;font-size: 32px;}
		footer, .amp-menu-bar {background: #364859;color: #fff;text-align: center;
			padding: 10px;font-size: 12px;text-transform: uppercase;}
		.amp-lovemondays-logo {	margin: 0 auto;	padding: 10px;}
		.amp-menu-bar {margin: 0;padding: 0;	background: #00487f;text-transform: capitalize;text-align: left;font-size: 14px;}
		.amp-legal a, .amp-menu-bar a {text-decoration: none;color: #ffffff;display: inline-block;padding: 10px 30px 10px 0px;}
		.amp-legal p, .amp-menu-bar p {padding: 10px 0;}
		.amp-content{max-width: 1200px;margin: 0 auto;padding: 0 16px;}
	</style>
	<!-- AMP Analytics -->
	<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
</head>
<body>
<amp-analytics config="https://www.googletagmanager.com/amp.json?id=GTM-57BJRHN&gtm.url=SOURCE_URL" data-credentials="include"></amp-analytics>
<!-- custom header and nav bar -->
<div class="amp-header">
	<div class="amp-content">
		<amp-img src="https://www.reed.co.uk/career-advice/wp-content/themes/reed-career-advice/img/reedLogo_amp.png" alt="Reed" width="110" height="30"></amp-img>
	</div>
</div>
<div class="amp-menu-bar">
	<div class="amp-content">
		<a href="https://www.reed.co.uk/career-advice/" class="">Career Advice</a>
		<a href="http://www.reed.co.uk/" class="">Jobs</a>
		<a href="https://www.reed.co.uk/courses/" class="">Courses</a>
	</div>
</div>
<!-- Content -->
<div class="amp-content">
	<h1 class="amp-wp-title">
		<?php echo wp_kses_data($this->get('post_title')); ?>
	</h1>
	<?php isa_amp_featured_img('large'); ?>
	<ul class="amp-wp-meta">
		<?php $this->load_parts(apply_filters('amp_post_template_meta_parts', array('meta-author', 'meta-time'/*, 'meta-taxonomy' */))); ?>
	</ul>
	<?php echo $this->get('post_amp_content'); // amphtml content; no kses ?>
</div>
<!-- Legal Links -->
<footer>
	<div class="amp-lovemondays-logo">
		<amp-img src="https://www.reed.co.uk/career-advice/wp-content/themes/reed-career-advice/img/love-mondays.png" alt="Love Mondays" width="189" height="33"></amp-img>
	</div>
	<div class="amp-legal">
		<a href="http://www.reed.co.uk/yoursecurity" title="Security" class="amp-footer">Security</a>
		<a href="http://www.reed.co.uk/privacy" title="Privacy" class="amp-footer">Privacy</a>
		<a href="http://www.reed.co.uk/clearcookies" title="Cookies" class="amp-footer">Cookies</a>
		<a href="http://www.reed.co.uk/terms" title="Terms & Conditions" class="amp-footer">Terms &amp;
			Conditions</a><br>
		<p>Copyright &copy; reed.co.uk <span id="amp-footer-year"><?php echo date("Y"); ?></span></p>
	</div>
</footer>
<?php do_action('amp_post_template_footer', $this); ?>
</body>
</html>
