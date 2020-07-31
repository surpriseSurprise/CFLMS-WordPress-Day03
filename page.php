
<?php get_header(); ?>
<div class="container container-fluid px-4 py-4">   
     
<!-- <h1 class="display-3 pl-3">Page</h1> -->

<div class="container ml-4 pl-4">

       <?php if(have_posts()) : ?> <!--  If there are pages available  -->

       <?php while(have_posts()) : the_post(); ?> <!-- if there are pages, iterate the page in the loop
-->
       <h1 class="display-4"><?php the_title(); ?></h1> <!--retrieves page title-->
       <br><hr class="mr-2"><br>     
       
       <?php the_content();?><!--retrieves content-->

       <?php endwhile; ?><!--end the while loop-->

       <?php else :?> <!-- if no page is found then: -->

       <p>No page found</p>
       <?php endif; ?> <!-- end if -->
   </div>
</div>

  <?php get_footer(); ?>