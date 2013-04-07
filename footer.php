<?
/*
    Hotï - Venezuela Artistic Material
    Copyright (C) 2013 Marcos Colina
	
	Contributors
		Marcos Colina <ceo@hoti.tv>
		Alexander Salas <a.salas@ieee.org>
	
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
	
*/
?>
	<?php $shortname = "typographic"; ?>

	<div class="clear"></div>

	<footer id="footer">

		<div class="left">

			<?php if(get_option($shortname.'_twitter_link','') != "") { ?>

				<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" alt="twitter" /></a>

			<?php } ?>

			<?php if(get_option($shortname.'_facebook_link','') != "") { ?>

				<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" alt="facebook" /></a>

			<?php } ?>

			<?php if(get_option($shortname.'_google_plus_link','') != "") { ?>

				<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" alt="google plus" /></a>

			<?php } ?>

			<?php if(get_option($shortname.'_dribbble_link','') != "") { ?>

				<a href="<?php echo get_option($shortname.'_dribbble_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/dribbble-icon.png" alt="dribbble" /></a>

			<?php } ?>

			<?php if(get_option($shortname.'_pinterest_link','') != "") { ?>

				<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" alt="pinterest" /></a>

			<?php } ?>

			<div class="clear"></div>

		</div>

		<div class="right">© 2013 Hotï / Material Artistico Venezolano. <a href="http://www.hoti.tv">Reportar Problemas en Atención al cliente.</a></div>

		<div class="clear"></div>

	</footer><!--//footer-->

 

 </section><!--//main_container-->

 

 <?php wp_footer(); ?>

 </body>

 </html>