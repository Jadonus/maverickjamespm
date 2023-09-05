<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

	<?php wp_head(); ?>
</head>

<body class="text-zinc-300 bg-gray-800" <?php body_class( ' ' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col ">

	<?php do_action( 'tailpress_header' ); ?>
<div class="bg-video">


<div class="bg-video relative">
   <video class="bg-video__content absolute inset-0 w-full h-full object-cover" autoplay muted loop>
      <source src="/wp-content/themes/maverickjames2/videos/city.webm" >
      <!-- Add additional source elements for other video formats if needed -->
   </video>
   <div class="header-container relative z-10 bg-black bg-opacity-40 text-zinc-300">

	<header>
		<div class="h-screen">
<nav class="bg-black w-full  top-0 fixed bg-opacity-30 backdrop-filter backdrop-blur-lg">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center">
            <img src="https://maverickjamespm.com/wp-content/uploads/2023/01/Maverick-James-horizontal-1-2-300x300.png" class="h-8 mr-3" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Maverick James PM</span>
        </a>
        <div class="flex items-center">
            <a href="tel:5541251234" class="mr-6 text-sm  text-gray-500 dark:text-white hover:underline">(555) 412-1234</a>
            <a href="#quote" class="text-sm  text-white dark:text-white hover:underline">Get A Quote</a>
        </div>
    </div>
</nav>
      <h1 class="flex  justify-center h-screen items-center text-center antialiased text-5xl lg:text-8xl">Maverick James Project Management</h1>
   </div>
</div>
</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>
			</div>
			<h1 class="text-4xl text-center m-12 lg:text-6xl xl:text-6xl">We are Maverick James, <br>Your trusted partner in Project Management</h1>
      <div class="bg-gray-600 m-9 p-6 rounded-lg mt-5 ">
		<h1 class=" text-2xl lg:text-3xl xl:text-3xl ">At Maverick James, we're not just about bricks and mortar; we're about building dreams and relationships.</h1><p class="text-lg">With a passion for construction and a commitment to excellence, we've been managing projects in our local community for years.</p>
		<hr class="m-6">
		<h1 class="text-4xl text-center m-12 lg:text-6xl xl:text-6xl">Our services</h1>
<p class="text-center text-2xl"><i class="ph ph-hammer bg-gray-500 text-gray-800 rounded-full p-1 mb-3 "></i> <br>Construction </p>
   
<p class="text-center text-2xl m-3"><i class="ph ph-question bg-gray-500 text-gray-800 rounded-full p-1 mb-3 "></i><br> Maybe More construction? </p>
<p class="text-center text-2xl m-3"><i class="ph ph-nut bg-gray-500 text-gray-800 rounded-full p-1 mb-3"></i><br> For sure construction </p>
</div>	<div id="content" class="site-content flex-grow">

	<h1 class="text-6xl mt-96 mb-12 text-center" id="quote">Get a quote</h1>
<div class="flex justify-center">

<div class="wpcf7 no-js" id="wpcf7-f10-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="/#wpcf7-f10-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="10" />
<input type="hidden" name="_wpcf7_version" value="5.8" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f10-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<p><label> Your name<br />
<span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text bg-gray-500 rounded mb-6 wpcf7-validates-as-required" autocomplete="name" aria-required="true" aria-invalid="false" value="" type="text" name="your-name" /></span> </label>
</p>
<p><label> Your email<br />
<span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-email rounded mb-6 bg-gray-500 wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete="email" aria-required="true" aria-invalid="false" value="" type="email" name="your-email" /></span> </label>
</p>
<p><label> Subject<br />
<span class="wpcf7-form-control-wrap " data-name="your-subject"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required rounded mb-6 bg-gray-500" aria-required="true" aria-invalid="false" value="" type="text" name="your-subject" /></span> </label>
</p>
<p><label> Your message<br />
<span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea rounded bg-gray-500 p-6" aria-invalid="false" name="your-message"></textarea></span> </label>
</p>
<p><input class="wpcf7-form-control wpcf7-submit has-spinner bg-red-500 rounded-lg p-6" type="submit" value="Submit" />
</p><div class="wpcf7-response-output" aria-hidden="true"></div>
</form>
</div>
			</div>
</div>
		<?php if ( is_front_page() ) { ?>
			<!-- Start introduction -->

			 	<?php } ?>

		<?php //do_action( 'tailpress_content_start' ); ?>

		<main>
<style>
.bg-video {
   position: relative;
   height: 100vh;
   width: 100%;
   overflow: hidden;
}

.bg-video__content {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   object-fit: cover;
}

.header-container {
   position: relative;
   z-index: 1; /* Your content should appear on top of the video */
   /* Add any other styling for your content container */
}
body {
font-family: 'Darker Grotesque', sans-serif;
}
</style>