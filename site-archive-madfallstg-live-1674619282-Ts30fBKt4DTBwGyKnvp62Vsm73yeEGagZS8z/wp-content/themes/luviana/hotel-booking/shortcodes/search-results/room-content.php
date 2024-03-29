<?php
/**
 *
 * Avaialable variables
 * - DateTime $checkInDate
 * - DateTime $checkOutDate
 * - int $adults
 * - int $children
 * - bool $isShowGallery
 * - bool $isShowImage
 * - bool $isShowTitle
 * - bool $isShowExcerpt
 * - bool $isShowDetails
 * - bool $isShowPrice
 * - bool $isShowViewButton
 * - bool $isShowBookButton
 *
 * @version 2.0.0
 */
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

if ( post_password_required() ) {
	$isShowGallery = $isShowImage = $isShowDetails = $isShowPrice = $isShowViewButton = $isShowBookButton = false;
}

do_action( 'mphb_sc_search_results_before_room' );

$wrapperClass = apply_filters( 'mphb_sc_search_results_room_type_class', join( ' ', mphb_tmpl_get_filtered_post_class( 'mphb-room-type' ) ) );
?>
<div class="<?php echo esc_attr( $wrapperClass ); ?>">

	<?php do_action( 'mphb_sc_search_results_room_top' ); ?>

    <?php
    if ( $isShowTitle ) :
        ?>
        <div class="room-title-wrapper">
        <?php
        /**
         * @hooked \MPHB\Views\LoopRoomTypeView::renderTitle - 10
         */
        do_action( 'mphb_sc_search_results_render_title' );
        ?>
        </div>
        <?php
    endif;

    if ( $isShowExcerpt ) {
        ?>
        <div class="room-excerpt">
            <?php
            /**
             * @hooked \MPHB\Views\LoopRoomTypeView::renderExcerpt - 10
             */
            do_action( 'mphb_sc_search_results_render_excerpt' );
            ?>
        </div>
        <?php
    }
    ?>

    <div class="room-content-wrapper">
        <?php
        if($isShowDetails || ($isShowGallery && mphb_tmpl_has_room_type_gallery()) || ($isShowImage && has_post_thumbnail())):
        ?>
            <div class="room-description-wrapper">
            <?php
                if ( $isShowGallery && mphb_tmpl_has_room_type_gallery() ) {
                    ?>
                    <div class="room-images-wrapper">
                    <?php
                    /**
                     * @hooked \MPHB\Views\LoopRoomTypeView::renderGallery - 10
                     */
                    do_action( 'mphb_sc_search_results_render_gallery' );
                    ?>
                    </div>
                    <?php
                } else if ( $isShowImage && has_post_thumbnail() ) {
                    ?>
                    <div class="room-images-wrapper">
                    <?php
                    /**
                     * @hooked \MPHB\Views\LoopRoomTypeView::renderFeaturedImage - 10
                     */
                    do_action( 'mphb_sc_search_results_render_image' );
                    ?>
                    </div>
                    <?php
                }
                if($isShowDetails):
                ?>
                <div class="room-details">
                    <?php
                    if ( $isShowDetails ) {
                        /**
                         * @hooked \MPHB\Views\LoopRoomTypeView::renderAttributes - 10
                         */
                        do_action( 'mphb_sc_search_results_render_details' );
                    }
                    ?>
                </div>
                <?php
                endif;
            ?>
            </div>
        <?php
        endif;

        if($isShowPrice || $isShowViewButton || $isShowBookButton):
        ?>
            <div class="room-booking-details">
                <?php

                    if ( $isShowPrice ) {
                        /**
                         * @hooked \MPHB\Views\LoopRoomTypeView::renderPriceForDates - 10
                         */
                        do_action( 'mphb_sc_search_results_render_price', $checkInDate, $checkOutDate );
                    }

                    if ( $isShowViewButton ) {
                        /**
                         * @hooked \MPHB\Views\LoopRoomTypeView::renderViewDetailsButton - 10
                         */
                        do_action( 'mphb_sc_search_results_render_view_button' );
                    }

                    if ( $isShowBookButton ) {
                        /**
                         * @hooked \MPHB\Views\LoopRoomTypeView::renderBookButton - 10
                         */
                        do_action( 'mphb_sc_search_results_render_book_button' );
                    }
                ?>
            </div>
        <?php
        endif;
        ?>
    </div>

	<?php do_action( 'mphb_sc_search_results_room_bottom' ); ?>

</div>
<?php
do_action( 'mphb_sc_search_results_after_room' );
