<?php
class Top_Nav_Menu_Walker extends Walker_Nav_Menu {

var $number = 1;

function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    $class_names = $value = '';

    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;
    $classes[] = 'nav-item';

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

    $output .= $indent . '<li' . $id . $value . $class_names .'>';

    // add span with number here
    /*if ( $depth == 0 ) { // remove if statement if depth check is not required
        $output .= sprintf( '<span>%02s.</span>', $this->number++ );
    }*/

    $atts = array();
    $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
    $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
    $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
    $atts['href']   = ! empty( $item->url )        ? $item->url        : '';
    $atts['class']  = "nav-link px-xl-4 link-light";

    $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

    $attributes = '';
    foreach ( $atts as $attr => $value ) {
        if ( ! empty( $value ) ) {
            $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
            $attributes .= ' ' . $attr . '="' . $value . '"';
        }
    }

    $menu_item_icon = get_post_meta( $item->ID, '_menu_item_icon', true );


    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= !empty($menu_item_icon) ? '<i class="'. $menu_item_icon . ' me-1"></i> ' : "";
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}

}