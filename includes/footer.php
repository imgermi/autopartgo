
	</main>

	<footer>
		<div class="container">

			<article class="sitemap">
				<p>Sitemap</p>
				<nav class="footer-nav">
					<ul>
						<li><a href="<?=url('home')?>" class=" <?= SECCION == 'home' ? 'active' : '' ?> "><?= __('nav 0'); ?></a></li>
						<li><a href="<?=url('cotizar')?>" class=" <?= SECCION == 'cotizar' ? 'active' : '' ?> "><?= __('nav 1'); ?></a></li>
						<li><a href="<?=url('nosotros')?>" class=" <?= SECCION == 'nosotros' ? 'active' : '' ?> "><?= __('nav 2'); ?></a></li>
						<li><a href="<?=url('contacto')?>" class=" <?= SECCION == 'contacto' ? 'active' : '' ?> "><?= __('nav 3'); ?></a></li>
						<li><a href="<?=url('medios-de-pago')?>" class=" <?= SECCION == 'medios-de-pago' ? 'active' : '' ?> "><?= __('nav 4'); ?></a></li>
						<li><a href="<?=url('terminos-y-condiciones')?>" class=" <?= SECCION == 'terminos-y-condiciones' ? 'active' : '' ?> "><?= __('nav 5'); ?></a></li>
					</ul>
				</nav>
			</article>

			<article>
				<p><?= __('footer 0'); ?></p>
				<nav class="social">
					<ul>
						<li><a href="" class="fb" target="_blank">Facebook</a></li>
						<li><a href="" class="insta" target="_blank">Instagram</a></li>
						<!-- <li><a href="" class="tw">Twitter</a></li> -->
					</ul>
				</nav>
			</article>

			<article>
				<p><?= __('footer 1'); ?></p>
				<ul class="contact">
					<li><a href="tel:5613048119">(561) 304-8119</a></li>
					<li><a href="https://www.google.com.ar/maps/place/8428+NW+66th+St,+Miami,+FL+33166,+USA/@25.8329732,-80.3363095,16.49z/data=!4m5!3m4!1s0x88d9bbc65108c9b5:0x2566c8867fd8a24b!8m2!3d25.8334341!4d-80.334734" target="_blank">48428 NW 66TH St, Miami, FL 33166-2629</a></li>
				</ul>
			</article>

			<div class="copyright">
				<span><?=date('Y')?> - AutoPartGo</span>
				<a href="https://weland.com.ar" target="_blank">Website by Weland</a>
			</div>

		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha384-rY/jv8mMhqDabXSo+UCggqKtdmBfd3qC2/KvyTDNQ6PcUJXaxK1tMepoQda4g5vB" crossorigin="anonymous"></script>
	<!-- <script src="js/bootstrap/bootstrap.min.js"></script> -->

	<?php
		Plugins::cargar();
		$main_js = $minified->merge(BASE_PATH.'js/main.min.js', 'js', array('js/main.js'));
		echo '<script src="'.str_replace(BASE_PATH, '', $main_js).'?v='.filemtime($main_js) .'"></script>'. PHP_EOL;
	?>

</body>

</html>