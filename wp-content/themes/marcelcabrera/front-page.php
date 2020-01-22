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

    <?php if(have_rows('proyectos')): ?>
    <section class="section projects text-center">
        <div class="container">
            <div class="entry rte">
                <h2>Mis Proyectos Recientes</h2>
                <p>Estos son algunos de mis proyectos de diseño y desarrollo web recientes. ¿Te interesa ver más? <a href="mailto:marcel@marcelcabrera.com.mx">Envíame un correo.</a></p>
            </div>
            <!-- .entry -->

            <div class="row">
                <?php while(have_rows('proyectos')): the_row();
                    $img_proyecto= get_sub_field('proyecto_imagen');
                ?>
                <article class="col-md-4 project">
                    <div class="project-wrapper">
                        <img src="<?php echo $img_proyecto['url'] ?>" alt="<?php echo $img_proyecto['alt']; ?>">
                        
                        <div class="project-content">
                            <div class="content-wrapper">
                                <h3><?php the_sub_field('proyecto_descripcion'); ?></h3>
                                <p><a href="<?php the_sub_field('proyecto_enlace'); ?>" class="btn" target="_blank">Ver sitio web</a></p>
                            </div>
                            <!-- .content-wrapper -->

                        </div>
                        <!-- .project-content -->
                    </div>
                    <!-- .project-wrapper -->
                
                </article>
                <!-- .project -->
                <?php endwhile; ?>
            </div>
            <!-- .row -->

        </div>
        <!-- .container -->
    
    </section>
    <!-- .projects -->
    <?php endif; ?>

<?php
    endwhile; endif;
    get_footer(); 
?>