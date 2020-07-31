<?php get_header(); ?>
   
<!-- <h1 class="display-3 pl-3">Blog Post</h1> -->
<div class="container container-fluid px-4 py-4">
    <div class="row mt-4 ml-4">

<?php if(have_posts()) : ?> <!--  If there are posts available  -->

<?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop
-->
        <div class="col md-2">

            <h1 class="display-4"><?php the_title(); ?></h1>    <!--retrieves blog title-->

            <p><?php the_time('F j, Y g:i a'); ?></p><!--retrieves date blog entry was created-->

            <p>By <b><?php the_author(); ?></b></p><!--retrieves author of blog entry-->
            
            <!-- <//?php if(has_post_thumbnail()) : ?>
            <//?php the_post_thumbnail(); ?>
            <//?php endif; ?> -->
            <br><hr><br>
            <?php the_content(); ?><!--retrieves content-->
            <br><hr><br>
            <?php comments_template(); ?><!--gets comments-->
            <?php endwhile; ?><!--end the while loop-->

            <?php else :?> <!-- if no posts are found then: -->

            <p>No posts found</p>

            <?php endif; ?> <!-- end if -->
       </div>
       <div class="p-3">
       <?php if(is_active_sidebar('sidebar')):
        dynamic_sidebar('sidebar');
        endif; ?>
        </div>


  

   </div>
    </div>


 <?php get_footer(); ?>