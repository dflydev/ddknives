<?php

if ( ! class_exists('DdKnivesTheme') ) {
    require_once('lib/DdKnivesTheme.php');
    DdKnivesTheme::SINGLETON(__FILE__);
    function ddknives_theme() {
        return DdKnivesTheme::SINGLETON(__FILE__, 'ddknives');
    }
}

// Get the theme object.
$ddknives = ddknives_theme();

if ( ! function_exists( 'ddknives_posted_on' ) ) :
function ddknives_posted_on() { return ddknives_theme()->postedOn(); }
endif;

if ( ! function_exists( 'ddknives_comment' ) ) :
function ddknives_comment($comment, $args, $depth) { return ddknives_theme()->comment($comment, $args, $depth); }
endif;


/*




function ddknives_body_class_filter($classes, $class = null) {
    
    switch(get_option('ddknives_layout_sidebar_location')) {
        case 'right':
            $classes[] = ' sidebar-right ';
            break;
        case 'left':
            $classes[] = ' sidebar-left ';
            break;
        case 'none':
            $classes[] = ' sidebar-none ';
            break;
    }
    
    $classes[] = $class;
    
    return $classes;
    
}

add_filter('body_class', 'ddknives_body_class_filter');

if ( ! function_exists( 'ddknives_posted_on' ) ) :
function ddknives_posted_on() {
    printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'ddknives' ),
        'meta-prep meta-prep-author',
        sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
            get_permalink(),
            esc_attr( get_the_time() ),
            get_the_date()
        ),
        sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
            get_author_posts_url( get_the_author_meta( 'ID' ) ),
            sprintf( esc_attr__( 'View all posts by %s', 'ddknives' ), get_the_author() ),
            get_the_author()
        )
    );
}
endif;

if ( ! function_exists( 'ddknives_comment' ) ) :
function ddknives_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
                case '' :
        ?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                <div id="comment-<?php comment_ID(); ?>">
                <div class="comment-author vcard">
                        <?php echo get_avatar( $comment, 40 ); ?>
                        <?php printf( __( '%s <span class="says">says:</span>', 'ddknives' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
                </div><!-- .comment-author .vcard -->
                <?php if ( $comment->comment_approved == '0' ) : ?>
                        <em><?php _e( 'Your comment is awaiting moderation.', 'ddknives' ); ?></em>
                        <br />
                <?php endif; ?>

                <div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                        <?php
                                // translators: 1: date, 2: time
                                printf( __( '%1$s at %2$s', 'ddknives' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'ddknives' ), ' ' );
                        ?>
                </div><!-- .comment-meta .commentmetadata -->

                <div class="comment-body"><?php comment_text(); ?></div>

                <div class="reply">
                        <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                </div><!-- .reply -->
        </div><!-- #comment-##  -->

        <?php
                        break;
                case 'pingback'  :
                case 'trackback' :
        ?>
        <li class="post pingback">
                <p><?php _e( 'Pingback:', 'ddknives' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'ddknives'), ' ' ); ?></p>
        <?php
                        break;
        endswitch;
}
endif;

*/

?>