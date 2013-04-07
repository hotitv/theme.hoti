<?php/*    Hotï - Venezuela Artistic Material    Copyright (C) 2013 Marcos Colina		Contributors		Marcos Colina <ceo@hoti.tv>		Alexander Salas <a.salas@ieee.org>	    This program is free software: you can redistribute it and/or modify    it under the terms of the GNU General Public License as published by    the Free Software Foundation, either version 3 of the License, or    (at your option) any later version.    This program is distributed in the hope that it will be useful,    but WITHOUT ANY WARRANTY; without even the implied warranty of    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the    GNU General Public License for more details.    You should have received a copy of the GNU General Public License    along with this program.  If not, see <http://www.gnu.org/licenses/>.*/?><?php get_header(); ?>

	<?php $shortname = "typographic"; ?>
	
	<section id="single_cont">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>          
	
			<h1 class="single_title"><?php the_title(); ?></h1>
			<div class="single_inside_content">
			
			<?php the_content(); ?>
			
			</div><!--//single_inside_content-->
			<br /><br />
			
			<?php //comments_template(); ?>
		
		<?php endwhile; else: ?>

			<h3>Sorry, no posts matched your criteria.</h3>

		<?php endif; ?>                    		
		
	</section><!--//single_cont-->
	
	<div class="clear"></div>
	
<?php get_footer(); ?>            	