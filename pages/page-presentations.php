<?php
/*
	Template name: Presentations
*/
?>

<?php get_header(); ?>

<div class="container">

	<div class="col-sm-12">
		<h1>Presentations</h1>
	</div>

	<div class="col-sm-12">
		<h2>Innovation</h2>
		<?php $track = 'innovation'; ?>
		<?php include(locate_template( 'partials/_presentation-loop.php' ) ); ?>
	</div>

	<div class="col-sm-12">
		<h2>Evidence of Impact</h2>
		<?php $track = 'impact'; ?>
		<?php include(locate_template( 'partials/_presentation-loop.php' ) ); ?>
	</div>

	<div class="col-sm-12">
		<h2>Strategy</h2>
		<?php $track = 'strategy'; ?>
		<?php include(locate_template( 'partials/_presentation-loop.php' ) ); ?>
	</div>


	<div class="col-sm-12">
		<h2>Implementation</h2>
		<?php $track = 'implementation'; ?>
		<?php include(locate_template( 'partials/_presentation-loop.php' ) ); ?>
	</div>
</div>

<?php get_footer(); ?>