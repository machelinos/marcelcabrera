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

    <div class="section-large bg-base presenting text-center">
        <div class="container">
            <div class="entry rte">
                <?php the_field('tt_block'); ?>
            </div>
            <!-- .entry rte -->
        
        </div>
        <!-- .container -->
    </div>
    <!-- .presenting -->

    <?php if(have_rows('skills')): ?>
    <div class="section-large skills">
        <div class="container">
            <div class="row">
                <?php while(have_rows('skills')): the_row(); ?>
                <div class="col-md-4">
                    <div class="skill-content text-center">
                        <?php the_sub_field('skill_editor'); ?>
                    </div>
                    <!-- .skill-content -->
                </div>
                <?php endwhile; ?>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->

    </div>
    <!-- .skills -->
    <?php endif; ?>

<?php
    endwhile; endif;
    get_footer(); 
?>