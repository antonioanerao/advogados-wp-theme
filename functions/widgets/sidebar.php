<?php
/* single sidebar */
$args = array(
    'name' => __('Barra lateral direita (Blog Post)'),
    'id' => 'right-single-blog-sidebar',
    'description' => 'Widgets para seu blog post'
);
register_sidebar($args);

/* blog sidebar */
$args = array(
    'name' => __('Barra lateral direita (Blog)'),
    'id' => 'right-blog-sidebar',
    'description' => 'Widgets para seu blog'
);
register_sidebar($args);