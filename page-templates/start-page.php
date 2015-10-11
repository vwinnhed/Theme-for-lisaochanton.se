<?php
/**
 * Template Name: Startsida
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>








<!-- HERO -->
<?php $header_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
<section id="hero" class="general_container" style="background-image: url('<?php echo $header_image[0] ?>')">

	<div class="grid">
		<div class="row top_bar">
			<div class="c3 logo"><a href="<?php get_site_url(); ?>" class="logo_link"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_light.png" alt="To the Top" id="logo_hero"></a></div>
			<a href="#open_menu" id="menu_toggle2">&#9776;</a>
			<?php include 'menu.php'; //MENU?>
		</div>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div id="description" class="c12 end">
					<h2>
						<?php the_title(); ?>
					</h2>
					<h1>
						<?php the_content(); ?>
					</h1>
					<a href="#intro" class="button">Berätta mer!</a>
				</div>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div>
</section>











<!-- INTRO -->
<section id="intro" class="general_container">

	<!-- CLOUDS -->
	<?php include 'clouds.php'; ?>

	<div class="grid">
		<div class="row">
			<?php query_posts($query_string . '&category_name=intro&posts_per_page=2'); $last=false;?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="c6 text_container <?php if ($last=true) { echo "end";} ?>">
					<h3><?php the_title(); ?></h3>
					<?php $last = true; the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
		<?php if( is_category() ) : ?>
		<?php global $cat; ?>

		<div id="intro_quote" class="row">
			<div class="c10 s1">
				<blockquote>
					<span>"</span>
						<?php echo category_description( $cat ); ?>
					<span>"</span>
				</blockquote>
			</div>
		</div>
	
	<?php endif; ?>
	</div>
	

</section>











<!-- PHOTOS -->
<section id="photos" class="general_container">
	<div class="grid">
		<div class="row">

			<!-- LEFT -->
			<div class="c6">
				<?php query_posts($query_string . '&category_name=photo-left&posts_per_page=3'); $first=true;?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );?>
					<?php $image_full = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );?>
					<?php if ($first): ?>
						<div class="blue_bg"><a href="<?php echo $image_full[0]; ?>" rel="lightbox" title="<?php the_title(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"></a></div>
						<?php $first = false; ?>
						<div class="row small_row">
					<?php else: ?>
						<div class="c6_2"><div class="blue_bg"><a href="<?php echo $image_full[0]; ?>" rel="lightbox" title="<?php the_title(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"></a></div></div>
					<?php endif; ?>

					
				<?php endwhile; endif; ?>
				</div>
			</div>

			<!-- RIGHT -->
			<div class="c6 end">
				<div class="row small_row">
					<?php query_posts($query_string . '&category_name=photo-right&posts_per_page=3'); $nr=0;?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );?>
						<?php $image_full = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );?>
						<?php if ($nr < 2): ?>
							<div class="c6_2"><div class="blue_bg"><a href="<?php echo $image_full[0]; ?>" rel="lightbox" title="<?php the_title(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"></a></div></div>
							<?php $nr++; ?>
						<?php else: ?>
				</div>
							<div class="blue_bg"><a href="<?php echo $image_full[0]; ?>" rel="lightbox" title="<?php the_title(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"></a></div>
						<?php endif; ?>
					<?php endwhile; endif; ?>

			</div>
		</div>
		
	</div>
</section>








<!-- INVITE -->
<section id="invite" class="general_container">
	<div class="grid">
		<div class="row">
			<div id="invite_card" class="c10 s1">

				<!-- NÄR -->
				<?php query_posts($query_string . '&category_name=nar&posts_per_page=1');?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
					
				<?php endwhile; endif; ?>

				
				<!-- VAR -->
				<?php query_posts($query_string . '&category_name=var&posts_per_page=1');?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
					
				<?php endwhile; endif; ?>
				
				<!-- MAP -->
				<?php include 'map.php'; ?>


				<!-- HUR -->
				<?php query_posts($query_string . '&category_name=hur&posts_per_page=1');?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
					
				<?php endwhile; endif; ?>


				<!-- MISC -->
				<?php query_posts($query_string . '&category_name=misc-invite&posts_per_page=5');?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
					
				<?php endwhile; endif; ?>
				
			</div>
		</div>
	</div>
</section>










<!-- RSVP -->
<section id="rsvp" class="general_container">
	<div id="wave_container">
		
	</div>
	<div class="grid">
		<div class="row">
			<div id="rsvp_form" class="c10 s1">
				<div id="rsvp_info" class="row">
					<div class="c12 end">
						<?php query_posts($query_string . '&category_name=before-rsvp&posts_per_page=1'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<h4><?php the_title(); ?></h4>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
				</div>
				<!-- CONTACT FORM -->
				<?php get_sidebar(); ?>
			</div>
			<div id="rsvp_form_now_what" class="c10 s1">

				<?php query_posts($query_string . '&category_name=after-rsvp&posts_per_page=1');?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>
					
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>