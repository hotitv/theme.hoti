<?/*    Hotï - Venezuela Artistic Material    Copyright (C) 2013 Marcos Colina		Contributors		Marcos Colina <ceo@hoti.tv>		Alexander Salas <a.salas@ieee.org>	    This program is free software: you can redistribute it and/or modify    it under the terms of the GNU General Public License as published by    the Free Software Foundation, either version 3 of the License, or    (at your option) any later version.    This program is distributed in the hope that it will be useful,    but WITHOUT ANY WARRANTY; without even the implied warranty of    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the    GNU General Public License for more details.    You should have received a copy of the GNU General Public License    along with this program.  If not, see <http://www.gnu.org/licenses/>.	*/?><?php get_header(); ?>

	<?php $shortname = "typographic"; ?>
	
	<?php
	global $wp_query;

	$args = array_merge( $wp_query->query, array( 'posts_per_page' => 9 ) );
	query_posts( $args );        
	$x = 0;
	while (have_posts()) : the_post(); ?>                    		
	
		<?php if($x == 0) { ?>
			<div class="home_post_wide">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post-wide'); ?></a>
		<?php } elseif($x == 1) { ?>
			<div class="home_post_tall">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post-tall'); ?></a>
		<?php } elseif($x == 2) { ?>
			<div class="home_post_tall home_post_tall_last">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post-tall'); ?></a>
		<?php } ?>
		
			<div class="home_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		</div>
		
		<?php if($x == 2) { $x = -1; ?>
			<div class="clear"></div>
		<?php } ?>
	
	<?php $x++; ?>
	<?php endwhile; ?>            		
	
	<div class="archive_nav">
		<div class="left"><?php previous_posts_link('&lt;&lt; PREVIOUS'); ?></div>
		<div class="right"><?php next_posts_link('NEXT &gt;&gt;'); ?></div>
		<div class="clear"></div>
	</div><!--//archive_nav-->	
	
	<div class="clear"></div>
	
<?php get_footer(); ?>            	