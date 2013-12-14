<?php

require_once 'wordpress/wp-load.php';

class PostController
{

    function __construct () {

    }

    function get_posts () {
        $posts = get_posts(array('order' => 'ASC'));

        foreach ($posts as $post) {

            $post->images = array();

            $image_id_string = get_post_meta($post->ID, '_easy_image_gallery', true);
            if (!$image_id_string) {
                continue;
            }
            $image_id_array = explode(',', $image_id_string);
            foreach ($image_id_array as $image_id) {
                array_push($post->images, new Image($image_id));
            }

        }

        return $posts;
    }

}

class Image
{

    public $thumbnail;

    public $full;
    
    function __construct ($image_id) {
        $thumbnail = wp_get_attachment_image_src($image_id, 'thumbnail');
        $full = wp_get_attachment_image_src($image_id, 'full');
        $this->thumbnail = $thumbnail[0];
        $this->full = $full[0];
    }
}

?>