<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<main id="content" <?php post_class( 'site-main' ); ?> role="main">
	<div class="page-content">
	</div>

</main>
<script>
	console.log("så er vi her")
	let retter = []
	const url = "http://charlottefranciska.dk/kea/rosetta/wp-json/wp/v2/retter";
async function getJson (){
	let response = await fetch(url);
	retter = await response.json(); 
		visRetter ();
}

function visRetter (){
	console.log(retter)
}

</script>
	<?php

