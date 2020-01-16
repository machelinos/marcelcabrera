        </main>
        
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <?php 
                        if(is_active_sidebar('footer_1')):
                            dynamic_sidebar('footer_1');
                        endif;
                    ?>
                    </div>
                    <!-- .col-md-4 -->

                    <div class="col-md-4">
                    <?php 
                        if(is_active_sidebar('footer_2')):
                            dynamic_sidebar('footer_2');
                        endif;
                    ?>
                    </div>
                    <!-- .col-md-4 -->

                    <div class="col-md-4">
                    <?php 
                        if(is_active_sidebar('footer_3')):
                            dynamic_sidebar('footer_3');
                        endif;
                    ?>
                    </div>
                    <!-- .col-md-4 -->


                </div>
                <!-- .row -->

                <div>
                    <p class="text-center"><?php _e('Todos los derechos reservados &copy;', 'wpboilerplate'); bloginfo('name'); echo ' '.date('Y'); ?></p>
                </div>
            
            </div>
            <!-- .container -->
             
        </footer>
        <!-- .footer -->

        <?php wp_footer(); ?>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async></script>
    </body>
</html>
