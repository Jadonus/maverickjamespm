
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer  bg-gray-800 py-12" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="container mx-auto text-center bg-gray-800 text-gray-400">
		&copy; <?php echo date_i18n( 'Y' );?> - Maverick James Project Management LLC
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
