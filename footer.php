<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
		<footer id="footer">
			<div class="grid">
				<div class="row">
					<div class="c10 s1">
						<p>Copyright © <?php echo date("Y"); ?><span> - </span>Website by <a href="http://www.arvidbrane.se" title="Arvid's Portforlio">Arvid Bräne</a><span> - </span>Images by <a href="http://www.saraingman.com/" title="Sara's Portfolio">Sara Ingman</a><span> - </span><a href="#hero" title="To the top">Beam Me Up, Scotty</a><span> - </span>Version 1.0: Baby Bambi </p>
					</div>
				</div>
			</div>
			
		</footer>

		<?php wp_footer(); ?>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	     <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	    Include all compiled plugins (below), or include individual files as needed
	    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script> -->
	    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
	    </div>
	</body>
</html>