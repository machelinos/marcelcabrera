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
                                <p>
                                    <a href="<?php the_sub_field('proyecto_enlace'); ?>" class="btn" target="_blank">Ver sitio web</a>
                                    <?php if(get_sub_field('proyecto_github')): ?>
                                        <a href="<?php echo esc_url(the_sub_field('proyecto_github')); ?>" class="btn" target="_blank">Ver Github</a>
                                        
                                    <?php endif; ?>
                                </p>
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

    <?php if(have_rows('clients')): ?>
    <div class="section-large clients text-center">
        <div class="container">
            <div class="entry rte">
                <h2>Privilegiado de haber colaborado con excelentes empresas</h2>
            </div>
            <!-- .entry -->

            <div class="row">
                <?php while(have_rows('clients')): the_row();
                    $client_logo = get_sub_field('client_img');
                ?>
                <div class="col-sm-6 col-md-3 client">
                    <img src="<?php echo $client_logo['sizes']['client']; ?>" alt="<?php echo $client_logo['alt']; ?>">
                </div>
                <?php endwhile; ?>                
            </div>
            <!-- .row -->

        </div>
        <!-- .container -->

    </div>
    <!-- .clients -->
    <?php endif; ?>


    <?php if(have_rows('startup_projects')): ?>
    <section class="section-large startup-projects projects text-center bg-base">
        <div class="container">
            <div class="entry rte">
                <h2>Mis Proyectos Personales</h2>
                <p>Grandes retos me apasionan y crear mis propios proyectos digitales es uno de ellos, ya sea colaborando en el desarrollo o en todo el proceso desde la planeación hasta el mantenimiento diario.</p>
            </div>
            <!-- .entry -->

            <div class="row">
                <?php $counter=1; while(have_rows('startup_projects')): the_row(); ?>
                <article class="col-md-4 <?php if($counter!=2): ?> col-md-offset-1<?php else: ?> col-md-offset-2<?php endif; ?> startup-project">
                    <div class="startup-project-wrapper">
                        
                        <?php the_sub_field('startup_project_descripcion'); ?>

                        <p>
                        <?php if(get_sub_field('startup_project_enlace')): ?>
                        <a href="<?php the_sub_field('startup_project_enlace'); ?>" class="btn" target="_blank">Ver sitio web</a>
                        <?php else: ?>
                        <span class="relaunch"><?php the_sub_field('startup_project_relaunch'); ?></span>
                        <?php endif; ?>
                        </p>

                    </div>
                    <!-- .project-wrapper -->
                
                </article>
                <!-- .project -->
                <?php $counter++; endwhile; ?>
            </div>
            <!-- .row -->

        </div>
        <!-- .container -->
    
    </section>
    <!-- .projects -->
    <?php endif; ?>

    <?php if(get_field('tt_block_02')): ?>
    <div class="section-large contact text-center">
        <div class="container">
            <div class="entry rte">
                <?php the_field('tt_block_02'); ?>

                <p><a href="mailto:marcel@marcelcabrera.com.mx" class="btn" target="_blank">Platícame de tu proyecto</a></p>
            </div>
            <!-- .entry -->
        </div>
        <!-- .container -->

    </div>
    <!-- .contact -->
    <?php endif; ?>




<?php
    endwhile; endif;
    get_footer(); 
?>