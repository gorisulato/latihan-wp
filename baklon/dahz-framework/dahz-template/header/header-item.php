<?php
/**
 * The Header column template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baklon
 */
?>
<div <?php dahz_framework_set_attributes(
	array(
		'data-section'          => $section,
		'data-builder-type'     => $builder_type,
		'data-item-id'          => $item_id,
		'data-item-is-lazyload' => $is_lazyload,
		'class'                 => array( 'de-header__item uk-flex uk-flex-middle ' . apply_filters( 'dahz_framework_header_item_class', '' ) )
	),
	"header_section_{$id_section}_row_column_item",
	array(
		'id_section' => $id_section,
		'id_row'     => $id_row,
		'id_column'  => $id_column,
		'item_id'    => $item_id
	)
); ?>>
	<?php echo apply_filters( 'dahz_framework_builder_header_item', $item_content ); ?>
</div>