<?php

// Register and load the widget
function coop_load_widget() {
    register_widget( 'posts_recentes_widget' );
}
add_action( 'widgets_init', 'coop_load_widget' );

// Creating the widget
class posts_recentes_widget extends WP_Widget {

    function __construct() {
        parent::__construct(

// Base ID of your widget
            'posts_recentes_widget',

// Widget name will appear in UI
            __('[Advogados] Listar Posts Recentes', 'posts_recentes_widget_domain'),

// Widget description
            array( 'description' => __( 'Listar posts recentes do blog', 'posts_recentes_widget_domain' ), )
        );
    }

// Creating widget front-end

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

// before and after widget arguments are defined by themes


// This is where you run the code and display the output
        if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }

        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );

        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
        if ( ! $number ) {
            $number = 5;
        }
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

        /**
         * Filters the arguments for the Recent Posts widget.
         *
         * @since 3.4.0
         * @since 4.9.0 Added the `$instance` parameter.
         *
         * @see WP_Query::get_posts()
         *
         * @param array $args     An array of arguments used to retrieve the recent posts.
         * @param array $instance Array of settings for the current widget.
         */
        $r = new WP_Query( apply_filters( 'widget_posts_args', array(
            'posts_per_page'      => $number,
            'no_found_rows'       => true,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true,
        ), $instance ) );

        if ( ! $r->have_posts() ) {
            return;
        }
        ?>

        <div class="block">
        <h3><?php echo $title; ?></h3>
        <div class="block-inner">

        <ul>
            <?php foreach ( $r->posts as $recent_post ) : ?>
                <?php
                $post_title = get_the_title( $recent_post->ID );
                $title      = ( ! empty( $post_title ) ) ? $post_title : __( '(no title)' );
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_post->ID ), 'slide-home' );

                ?>

                <div class="media border-bottom">
                    <a class="media-left" href="<?php the_permalink( $recent_post->ID ); ?>">
                        <img src="<?php echo $image[0]; ?>" alt="Image" class="img-responsive">
                    </a>
                    <div class="media-body">
                        <h3 class="media-heading"><a href="<?php the_permalink( $recent_post->ID ); ?>"><?php echo $title ; ?></a></h3>
                    </div>
                </div>

            <?php endforeach; ?>

        </ul>
        </div>
        </div>
        <?php
        echo $args['after_widget'];
    }



    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field( $new_instance['title'] );
        $instance['number'] = (int) $new_instance['number'];
        $instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;
        return $instance;
    }

    /**
     * Outputs the settings form for the Recent Posts widget.
     *
     * @since 2.8.0
     *
     * @param array $instance Current settings.
     */
    public function form( $instance ) {
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
        ?>
        <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

        <p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
            <input class="tiny-text" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="number" step="1" min="1" value="<?php echo $number; ?>" size="3" /></p>
        <?php
    }
}
