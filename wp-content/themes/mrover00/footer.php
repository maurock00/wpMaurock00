<?php 
printf( '<div class="item i-b paged">' );
        wp_pagenavi(); 
printf('</div>
    </section>
    <footer class="container  footer">
    ');
        $args = array(
            'theme_location' => 'social_nav',
            'container' => 'nav',
            'container_class' => 'item nav social-nav' 
        );
        wp_nav_menu( $args );    
    
printf('
    </footer>
    <script src="'.get_bloginfo('template_url').'/js/jquery.min.js"></script>
    <script src="'.get_bloginfo('template_url').'/js/code.js"></script>
');
wp_footer(); 
printf('
</body>
</html>
');  
        
        
        
        
