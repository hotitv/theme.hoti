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

  function typo_slider() {

  

        my_slider_counter = 0;

        curr_slide = 0;

        nav_slider_counter = 0;

        

        //$(".slide_nav_cont ul").empty();

        $('#slideshow .slide_box').each(function() {

            $(this).addClass('slide_' + my_slider_counter);

            my_slider_counter++;

           /*

             if(my_slider_counter == 1)

               $('.slide_nav_cont ul').append('<li class="current"></li>');

             else

              $('.slide_nav_cont ul').append('<li></li>');*/

        });

        /*

        $('.slide_nav_cont ul li').each(function() {

            $(this).attr('alt',nav_slider_counter);

            nav_slider_counter++;

        });                */

        

        function home_switch_slide() {

  

            if(curr_slide >= my_slider_counter)

                curr_slide = 0;

            else if(curr_slide < 0)

                curr_slide = (my_slider_counter-1);

                

            //alert(curr_slide);

            

            $('.slide_' + curr_slide).fadeIn(400);



            //$('.slide_nav_cont ul li').removeClass('current');

            //$('.slide_nav_cont ul li[alt="' + curr_slide + '"]').addClass('current');

            

                

        }

        

        function hide_curr_slide() {

               $('.slide_' + curr_slide).stop();

               $('.slide_' + curr_slide).fadeOut(900);

        }

        

        function next_slide_slider(jump_to_slide) {



            hide_curr_slide(); 

            

            if(jump_to_slide == null)

                curr_slide++;     

            else 

                curr_slide = jump_to_slide;

            

            t_slide=setTimeout(home_switch_slide,50); 

            //home_switch_image();

        }

        

        function prev_slide_slider(jump_to_slide) {



            hide_curr_slide();

            

            

//            curr_slide--;        



            if(jump_to_slide == null)

                curr_slide--;     

            else 

                curr_slide = jump_to_slide;



            //home_switch_image();

            t_slide=setTimeout(home_switch_slide,50);

        }        

        

        $('.slide_prev').click(function() {

          

            prev_slide_slider();

            clearInterval(intervalID_slide);

            //clearInterval(t_slide);

            intervalID_slide = setInterval(next_slide_slider, 8000);

        });

        

        $('.slide_next').click(function() {

            

            next_slide_slider();

            clearInterval(intervalID_slide);

            intervalID_slide = setInterval(next_slide_slider, 8000);

        });                

/*        

        $('.slide_nav_cont ul li').click(function() {

            

            clearInterval(intervalID_slide);

            next_slide_slider($(this).attr('alt'));

            

            //clearInterval(t_testi);

            intervalID_slide = setInterval(next_slide_slider, 8000);            

        

        });        */

        

        //setInterval(next_slide_image, 5000);

        intervalID_slide = setInterval(next_slide_slider, 8000);  

  

  

  }  



$(document).ready(function() {

	typo_slider();

	

        $('#menu_container li').hover(

            function () {

                $('ul:first', this).css('display','block');

     

            }, 

            function () {

                $('ul:first', this).css('display','none');         

            }

        );               	

	    

	$('.home_post_wide, .home_post_tall, .home_post_box').hover(

		function() {

			$(this).find('a').css('text-decoration','underline');

		},

		function() {

			$(this).find('a').css('text-decoration','none');

		}

	);

});