<?php get_header(); ?>

   <!-- <h1 class="display-3 pl-3">Blog Posts</h1> -->

   <div class="container">
   <div class="row mt-4">

   <?php if(have_posts()) : ?> <!--  If there are posts available  -->
   <?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop
-->

   <div class="col-sm-12 col-md-6 col-lg-3 pl-2 my-3" >
            <div class="card px-4">
            <?php the_post_thumbnail('medium'); ?>
            <div class="card-body">
                <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                <p> <?php the_author(); ?></p><!--retrieves author of blog entry-->
                <p><?php the_time('F j, Y g:i a'); ?></p><!--retrieves date blog entry was created-->
                <?php the_excerpt(); ?>
            </div>
            </div>
       </div>


<?php endwhile; ?><!--end the while loop-->

<?php else :?> <!-- if no posts are found then: -->

<p>No posts found</p>  <!-- no posts found displayed -->
<?php endif; ?> <!-- end if -->
       
        
    </div>
    </div>
    <hr class="mx-4">
    <footer class="footer footer-expand-lg pt-0 py-3">
        <div class="container float-left ">
        <p class="pl-4">(c) FIT, by Elke M., 2020<br><br></p>
        <p></p>
        </div>
   <?php get_footer(); ?>





