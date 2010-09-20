<div class="post-container">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( ! get_post_meta($post->ID, 'd2code.core.no-meta', true) or ( is_search() || is_archive() )) { ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'ddknives' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

    <?php if ( ! get_post_meta($post->ID, 'd2code.core.no-author', true) ) { ?>
    <div class="entry-meta">
    <?php ddknives_posted_on(); ?>
    </div><!-- .entry-meta -->
    <?php } ?>
    <?php } ?>
    
    <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
        <div class="entry-summary">
        <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else: ?>
        <div class="entry-content <?php if ( get_post_meta($post->ID, 'd2code.core.no-meta', true) ) : ?>entry-content-no-meta<?php endif;?>">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ddknives' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'ddknives' ), 'after' => '</div>' ) ); ?>
        </div>
    <?php endif; ?>
    
    <?php if ( is_single() ) : ?>
    <div id="entry-author-info">
        <div id="author-avatar">
            <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'ddknives_author_bio_avatar_size', 60 ) ); ?>
        </div><!-- #author-avatar -->
        <div id="author-description">
            <h2><?php printf( esc_attr__( 'About %s', 'ddknives' ), get_the_author() ); ?></h2>
            <?php the_author_meta( 'description' ); ?>
            <div id="author-link">
                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                    <?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'ddknives' ), get_the_author() ); ?>
                </a>
            </div><!-- #author-link -->
        </div><!-- #author-description -->
    </div><!-- #entry-author-info -->
    <?php endif; ?>
    
    <div class="entry-utility">
        <?php if ( count( get_the_category() ) ) : ?>
            <span class="cat-links">
                <?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'ddknives' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
            </span>
            <span class="meta-sep">|</span>
        <?php endif; ?>
        <?php
        $tags_list = get_the_tag_list( '', ', ' );
        if ( $tags_list ):
        ?>
            <span class="tag-links">
                <?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'ddknives' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
            </span>
            <span class="meta-sep">|</span>
        <?php endif; ?>
        <?php if ( comments_open() ) : ?>
        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'ddknives' ), __( '1 Comment', 'ddknives' ), __( '% Comments', 'ddknives' ) ); ?></span>
        <?php edit_post_link( __( 'Edit', 'ddknives' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
        <?php else: ?>
        <?php edit_post_link( __( 'Edit', 'ddknives' ), '<span class="edit-link">', '</span>' ); ?>
        <?php endif; ?>
    </div><!-- .entry-utility -->
        
</div>
</div>