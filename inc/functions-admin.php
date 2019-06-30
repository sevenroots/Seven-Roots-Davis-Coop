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
    register_setting('davis-coop-general-info-group', 'hours');
    register_setting('davis-coop-general-info-group', 'hours-brief');
    register_setting('davis-coop-general-info-group', 'whats-fresh-img-1');
    add_settings_section('davis-coop-general-info-section', 'General Info', 'partial_davis_coop_general_info_options', 'davis_theme_options' );
    add_settings_field('general-info-whats-fresh-img-1', 'Cover image', 'partial_davis_coop_whats_fresh_img_1', 'davis_theme_options', 'davis-coop-general-info-section');
    add_settings_field('general-info-address', 'Address', 'partial_davis_coop_address', 'davis_theme_options', 'davis-coop-general-info-section' );
    add_settings_field('general-info-phonenumber', 'Phone Number', 'partial_davis_coop_phonenumber', 'davis_theme_options', 'davis-coop-general-info-section' );
    add_settings_field('general-info-hours', 'Hours of Operation', 'partial_davis_coop_hours', 'davis_theme_options', 'davis-coop-general-info-section' );
    add_settings_field('general-info-hours-brief', 'Hours of Operation (Brief)', 'partial_davis_coop_hours_brief', 'davis_theme_options', 'davis-coop-general-info-section' );
}


//html return pages
function page_admin_seven_roots_davis_coop(){
    require_once( get_template_directory() . '/inc/templates/davis-coop-admin.php' );
}

function partial_davis_coop_whats_fresh_img_1(){
    $whats_fresh_img_1 = esc_attr( get_option( 'whats-fresh-img-1' ) );
    echo '<input type="button" value="Upload" id="upload-button" class="button button-secondary" />
    <input id="whats-fresh-img-1" type="hidden" name="whats-fresh-img-1" value="" />
    <p>File name: '. basename($whats_fresh_img_1) .'</p>';
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
function partial_davis_coop_hours(){
    $hours = esc_attr( get_option( 'hours' ) );
    echo '<input type="text" name="hours" value="'.$hours.'" placeholder="Open Daily 8:00 - 8:00" />';
}
function partial_davis_coop_hours_brief(){
    $hours_brief = esc_attr( get_option( 'hours-brief' ) );
    echo '<input type="text" name="hours-brief" value="'.$hours_brief.'" placeholder="Open Daily 8:00 - 8:00" />';
}

function rjc_simple_format($input, $class){
    $text = esc_attr( get_option($input));
    $pattern = '/(.*)\*(.*)\*(.*)/';
    $replacement = '$1<span class="'.$class.'">$2</span>$3';
    print preg_replace($pattern, $replacement, $text);
}