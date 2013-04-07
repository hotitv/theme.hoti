<?php
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
<?php get_header(); ?>



	<?php $shortname = "hoti"; ?>

	

	<?php if(get_option($shortname.'_disable_slideshow','') != "Yes") { ?>

	

		<section id="slideshow_cont">

			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slide-prev.png" alt="prev" class="slide_prev" />

			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slide-next.png" alt="next" class="slide_next" />

			<div id="slideshow">

			

				<?php

				$slider_arr = array();

				$x = 0;



				$args = array(

					 'post_type' => 'post',

					 'meta_key' => 'ex_show_in_slideshow',

					 'meta_value' => 'Yes',

					 'posts_per_page' => 10

					 );

				query_posts($args);

				while (have_posts()) : the_post(); ?>                        

				

					<?php if($x == 0) { ?>

					<div class="slide_box first_slide_box">

					<?php } else { ?>

					<div class="slide_box">

					<?php } ?>

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slide-image'); ?></a>

						<div class="slide_box_text"><?php the_title(); ?></div>

					</div><!--//slide_box-->

				

				<?php array_push($slider_arr,get_the_ID()); ?>

				<?php $x++; ?>

				<?php endwhile; ?>

				<?php wp_reset_query(); ?>                                    							



			</div><!--//slideshow-->

		</section><!--//slideshow_cont-->

	

	<?php } ?>

	

	

	<?php

	$category_ID = get_category_id('blog');



	$args = array(

		 'post_type' => 'post',

		 'posts_per_page' => 7,

		 'post__not_in' => $slider_arr,

		 //'cat' => '-' . $category_ID,

		 //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)

	 );

	query_posts($args);

	$x = 0;

	while (have_posts()) : the_post(); ?>                        			

	

		<?php if($x == 0) { ?>

			<div class="home_post_box">

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post-box'); ?></a>

		<?php } elseif($x == 1) { ?>

			<div class="home_post_box">

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post-box'); ?></a>

		<?php } elseif($x == 2) { ?>

			<div class="home_post_box">

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post-box'); ?></a>

		<?php } else { ?>

			<div class="home_post_box <?php if($x == 1) { echo 'home_post_box_last'; } ?>">

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post-box'); ?></a>

		<?php } ?>

		

			<div class="home_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

		</div>

		

		<?php if($x == 2) { ?>

			<div class="clear"></div>

		<?php } ?>

	

	<?php $x++; ?>

	<?php endwhile; ?>        				

	

	<div class="clear"></div>

	

<?php get_footer(); ?>            	