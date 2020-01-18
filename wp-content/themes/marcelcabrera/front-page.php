<?php 
    get_header(); 
    if(have_posts()): while(have_posts()): the_post();
?>
    <div id="hero" class="hero section">
        <div class="container">
            <div class="entry rte">
                <?php the_content(); ?>
            </div>
            <!-- .entry.rte -->

            <div class="profile-img">
                <?php the_post_thumbnail('medium'); ?>
            </div>
            <!-- .profile-img -->

        </div>
        <!-- .container -->
    </div>
    <!-- .hero -->
<?php
    endwhile; endif;
    get_footer(); 
?>