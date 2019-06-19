<?php
/**
 *
 * @package Seven-Roots-Davis-Coop
 */

function seven_roots_davis_coop_add_admin_page(){
    //Generate page
    add_menu_page( 'Theme Options', 'Theme', 'manage_options', 'davis_theme_options', 'page_admin_seven_roots_davis_coop', 'dashicons-admin-customizer' ,110 );

    //Generate Sub pages
    add_submenu_page( 'davis_theme_options', 'Theme Options', 'Theme Options', 'manage_options', 'davis_theme_options', 'page_admin_seven_roots_davis_coop' );

    //Activate Custom Settings
    add_action('admin_init', 'seven_roots_davis_coop_general_info');

}
add_action( 'admin_menu', 'seven_roots_davis_coop_add_admin_page' );

function seven_roots_davis_coop_general_info(){
    register_setting('davis-coop-general-info-group', 'address');
    register_setting('davis-coop-general-info-group', 'phonenumber');
    add_settings_section('davis-coop-general-info-section', 'General Info', 'partial_davis_coop_general_info_options', 'davis_theme_options' );
    add_settings_field('general-info-address', 'Address', 'partial_davis_coop_address', 'davis_theme_options', 'davis-coop-general-info-section' );
    add_settings_field('general-info-phonenumber', 'Phone Number', 'partial_davis_coop_phonenumber', 'davis_theme_options', 'davis-coop-general-info-section' );
}


//html return pages
function page_admin_seven_roots_davis_coop(){
    require_once( get_template_directory() . '/inc/templates/davis-coop-admin.php' );
}

function partial_davis_coop_general_info_options(){
    echo 'Change General Information';
}
function partial_davis_coop_address(){
    $address = esc_attr( get_option( 'address' ) );
    echo '<input type="text" name="address" value="'.$address.'" placeholder="1234 Street City, State Zip" />';
}
function partial_davis_coop_phonenumber(){
    $phonenumber = esc_attr( get_option( 'phonenumber' ) );
    echo '<input type="text" name="phonenumber" value="'.$phonenumber.'" placeholder="(123) 456-7890" />';
}
