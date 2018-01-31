<?php

printf('<section class="item w-70 comments-form">');
    comment_form();
    printf('<ol class="item">');
        wp_list_comments();
    printf('</ol>');
printf('</section>');
    
