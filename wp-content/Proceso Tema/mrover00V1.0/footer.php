        <?php
            printf( '<div class="item i-b paged">' );
                wp_pagenavi(); 
            printf('</div>');
        ?>
    </section>
    <footer class="container  footer">
        <?php
            $args = array(
                'theme_location' => 'social_nav',
                'container' => 'nav',
                'container_class' => 'item nav social-nav' 
            );
            wp_nav_menu( $args );
        ?>
    </footer>
    <script src="<?php bloginfo('template_url')?>/js/jquery.min.js"></script>
    <script>
        $(document).ready( function (){
            var $btn = $('#mobile-nav'),
                $nav = $('#main-nav'),
                $search = $('#search'),
                $nav_icon = $('#mobile-nav').find('.fa') 

            $btn.click(function (){
                $nav.slideToggle()
                $search.slideToggle()
                
                if($nav_icon.hasClass('fa-bars')) {
                    $nav_icon.removeClass('fa-bars').addClass('fa-times')
                }
                else {
                    $nav_icon.removeClass('fa-times').addClass('fa-bars')
                }
                    
            })
        })
    </script>
    <?php wp_footer()?>
</body>
</html>