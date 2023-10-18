<footer>
	<div class="footer_nav">
		<?php get_template_part('includes/pagelist'); ?>
	</div>
	<div class="footer-box">
		<a href="/">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo-50x50-transparent-bg.png" alt="渋谷の相席ラウンジならW THE LOUNGE(ダブルザラウンジ)">
		</a>
		<p><a href="/">W THE LOUNGE</a></p>
	</div>
</footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		show_cs_info();

		function show_cs_info() {
			$.ajax({
				type: "get",
				url: "https://aiseki-w.conohawing.com/aiseki/parts/get_cs_info.php",
				dataType: "json"
			}).then(function(result) {
				$("#wl_m_cnt").html("" + result[0].m_cnt);
				$("#wl_w_cnt").html("" + result[0].w_cnt);

			}, function() {
				console.log('エラー');
			});
		}
	});
</script>

<?php wp_footer(); ?>