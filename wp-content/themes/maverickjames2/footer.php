
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-zinc-300 dark:bg-zinc-900 py-12" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="container mx-auto text-center bg-zinc-300 dark:bg-zinc-900 text-zinc-900 dark:text-zinc-500">
		&copy; <?php echo date_i18n( 'Y' );?> - Maverick James Project Management LLC
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
