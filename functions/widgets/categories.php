<?php

// Register and load the widget
function wpb_load_widget() {
    register_widget( 'categories_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );

// Creating the widget
class categories_widget extends WP_Widget {

    function __construct() {
        parent::__construct(

// Base ID of your widget
            'categories_widget',

// Widget name will appear in UI
            __('[Advogados] Listar Categorias', 'categories_widget_domain'),

// Widget description
            array( 'description' => __( 'Listar todas as categorias do blog', 'categories_widget_domain' ), )
        );
    }

// Creating widget front-end

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

// before and after widget arguments are defined by themes


// This is where you run the code and display the output
echo '<div class="block">';
echo '<h3>Categorias</h3>';
echo '<div class="block-inner"><ul class="list-unstyled sideNav">';
$args=array(
    'orderby' => 'name',
    'order' => 'ASC'
);

$categories=get_categories($args);
foreach($categories as $category)
    echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Ver postagens em %s" ), $category->name ) . '" ' . '>' . $category->name. '<span class="label label-primary pull-right animation">'. $category->count . '</span></a></li>';
echo '</div>';
echo '</div>';
}



// Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'Categorias', 'categories_widget_domain' );
        }
// Widget admin form
        ?>
        <p>
            <label>Categorias</label>
            <input disabled class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="Categorias" />
        </p>
        <?php
    }

// Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
} // Class categories_widget ends here