<?php
/**
 * Title: Omdömen
 * Slug: alggardentak/reviews
 * Categories: alggardentak-sections
 * Description: Google-betyget stort, tre omdömen bredvid. Texterna är platshållare och byts mot företagets riktiga omdömen.
 */
$reviews = (array) al_lead( 'omdomen_lista', array() );
?>
<!-- wp:group {"align":"full","className":"al-sec-reviews","backgroundColor":"sand","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull al-sec-reviews has-sand-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%"><!-- wp:group {"className":"al-rating","layout":{"type":"default"}} -->
<div class="wp-block-group al-rating"><!-- wp:paragraph {"className":"al-rating-num"} -->
<p class="al-rating-num"><?php echo esc_html( al_lead( 'betyg' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"al-stars al-stars-lg"} -->
<p class="al-stars al-stars-lg"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"ink-soft"} -->
<p class="has-ink-soft-color has-text-color"><?php echo esc_html( al_lead( 'omdomen' ) ); ?> omdömen på Google</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="<?php echo esc_url( al_lead( 'google_url', '#' ) ); ?>" rel="nofollow">Läs alla omdömen på Google →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:70%"><?php
foreach ( $reviews as $r ) :
	?><!-- wp:group {"className":"al-review","layout":{"type":"default"}} -->
<div class="wp-block-group al-review"><!-- wp:paragraph {"className":"al-stars"} -->
<p class="al-stars"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $r[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"al-review-by","fontSize":"small","textColor":"ink-soft"} -->
<p class="al-review-by has-ink-soft-color has-text-color"><strong><?php echo esc_html( $r[1] ); ?></strong> · <?php echo esc_html( $r[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
