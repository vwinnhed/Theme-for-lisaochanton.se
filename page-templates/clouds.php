<div id="cloud_container">
		<div class="cloud_ball left check_ball"></div>
		<div class="cloud_ball right"></div>
		<?php 

		$last_ball_position = -200;
		for ($i=0; $i < 25; $i++) { 

			$ball_size = rand(100, 300);
			$ball_offset_y = ($ball_size/2) + 20*rand(-1, 1);
			$ball_offset_x = $last_ball_position - ($ball_size/2);// + 5*rand(-1, 1);//rand(0.8, 1.2);
			$last_ball_position += $ball_size/2;

			$ball_move_offset_x = rand(0, 0.1);
			$ball_move_offset_y = rand(0, 1);
			$ball_move_time = rand(10, 15);

		
		
		/*<style scoped>
			@-webkit-keyframes cloud_ball_animation_<?= $i ?> {
				0% { 
					margin: 0%;
				}  50% { 
					margin-left: -<?= $ball_move_offset_x?>%; 
					margin-top: -<?= $ball_move_offset_y?>%;
				}  100% { 
					margin: 0%;
				} 
			}

			@keyframes cloud_ball_animation_<?= $i ?> {
				0% { 
					margin-left: 0%; 
					margin-top: 0%;
				}  50% { 
					margin-left: -<?= $ball_move_offset_x?>%; 
					margin-top: -<?= $ball_move_offset_y?>%;
				}  100% { 
					margin-left: 0%; 
					margin-top: 0%;
				}
			}
		</style>*/?>

		<div class="cloud_ball" style="height:<?=$ball_size ?>px; width:<?= $ball_size ?>px; top:-<?=$ball_offset_y ?>px; left:<?=$ball_offset_x?>px; /** -webkit-animation-name: cloud_ball_animation_<?= $i ?>; -webkit-animation-duration: <?= $ball_move_time ?>s; animation-name: cloud_ball_animation_<?= $i ?>; animation-duration: <?= $ball_move_time ?>s;*/"></div>

		

		 <?php } ?>
		<script type="text/javascript">
			if ($("body").width() <= 768){
				$( ".cloud_ball" ).each(function() {
					$(this).css({'margin-left': '-' + ($(this).css('left').replace('px', '')/2.3) + 'px'});
				});
			}

			(function ($) {
			    if ($('html').is('.ie6, .ie7, .ie8')) {
			        $("#cloud_container").css({'display': 'none !important;'});
			    }
			}(jQuery));
		</script>
	</div>