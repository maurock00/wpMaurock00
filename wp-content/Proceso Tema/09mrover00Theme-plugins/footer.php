        <?php
            printf( '<div class="item i-b w-70 paged">' );
                wp_pagenavi(); 
            printf('</div>');
        ?>
    </section>
    <footer class="container  footer">
        <?php
            $args = array(
                'theme_location' => 'social_nav',
                'container' => 'nav',
                'container_class' => 'item nav' 
            );
            wp_nav_menu( $args );
            dynamic_sidebar('widget 3');
        ?>
    </footer>
    <?php wp_footer()?>
</body>
</html>