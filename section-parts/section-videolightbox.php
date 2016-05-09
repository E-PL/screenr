<?php

$video_url =  get_theme_mod( 'videolightbox_video' );
if ( $video_url ) {

    $title =  get_theme_mod( 'videolightbox_title' );
    if ( ! screenr_is_selective_refresh() ) {
        $parallax_url = get_theme_mod( 'videolightbox_parallax_img' );
        $parallax_url =  apply_filters( 'video_parallax_bg', $parallax_url );
        if ( $parallax_url ) {
        ?>
        <div class="parallax-id parallax-window" data-over-scroll-fix="true" data-z-index="1" data-speed="0.3" data-image-src="<?php echo esc_url( $parallax_url ); ?>" data-parallax="scroll" data-position="center" data-bleed="0">
        <?php } ?>
        <section id="<?php echo esc_attr( get_theme_mod( 'videolightbox_id', 'video' ) ); ?>" class="section-videolightbox section-padding section-padding-larger section-inverse onepage-section">
    <?php } ?>

            <div class="container">

                <?php if ( $title ){ ?>
                <h2 class="videolightbox__heading"><?php echo esc_html( $title ) ?></h2>
                <?php } ?>
                <div class="videolightbox__icon">
                    <a href="<?php echo esc_url( $video_url ); ?>" class="popup-video">
                        <span class="video_icon"><i class="fa fa-play"></i></span>
                    </a>
                </div>
            </div>

    <?php if ( ! screenr_is_selective_refresh() ) { ?>
        </section>
        <?php
        if ( $parallax_url ) { ?>
            </div>
            <?php
        }
    }
} ?>
