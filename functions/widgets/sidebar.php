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

/* footer1 sidebar */
$args = array(
    'name' => __('Rodapé 1'),
    'id' => 'rodape-widget-1',
    'description' => 'Widgets para seu rodapé'
);
register_sidebar($args);

/* footer2 sidebar */
$args = array(
    'name' => __('Rodapé 2'),
    'id' => 'rodape-widget-2',
    'description' => 'Widgets para seu rodapé'
);
register_sidebar($args);

/* footer3 sidebar */
$args = array(
    'name' => __('Rodapé 3'),
    'id' => 'rodape-widget-3',
    'description' => 'Widgets para seu rodapé'
);
register_sidebar($args);