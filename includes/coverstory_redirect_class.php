<?php

class Coverstory_Redirect
{

    public function redirect()
    {
        global $wp;

        //LATEST
        $post = get_home_url();
        if( $wp->request == 'latest' ) {
            $posts = wp_get_recent_posts([
                'numberposts' => 1,
                'post_status' => 'publish'
            ]);
            if (!empty($posts)) {
                $post = get_permalink($posts[0]["ID"]);
                wp_redirect($post);
                exit;
            }
        }
        else if($wp->request == 'random'){
            $posts = get_posts('post_type=post&orderby=rand&numberposts=1');
            if (!empty($posts)) {
                $post = get_permalink($posts[0]);
                wp_redirect($post);
                exit;
            }
        }

        
        
    }

    public function register()
    {
        add_action('template_redirect', [$this, 'redirect']);
    }
}
