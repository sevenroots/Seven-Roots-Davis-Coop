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
    add_action('admin_init', 'seven_roots_davis_coop_front_page_options');

}
add_action( 'admin_menu', 'seven_roots_davis_coop_add_admin_page' );

function seven_roots_davis_coop_general_info(){
    register_setting('davis-coop-general-info-group', 'address');
    register_setting('davis-coop-general-info-group', 'phonenumber');
    register_setting('davis-coop-general-info-group', 'hours');
    register_setting('davis-coop-general-info-group', 'hours-brief');
    add_settings_section('davis-coop-general-info-section', 'General Info', 'partial_davis_coop_general_info_options', 'davis_theme_options' );
    add_settings_field('general-info-address', 'Address', 'partial_davis_coop_address', 'davis_theme_options', 'davis-coop-general-info-section' );
    add_settings_field('general-info-phonenumber', 'Phone Number', 'partial_davis_coop_phonenumber', 'davis_theme_options', 'davis-coop-general-info-section' );
    add_settings_field('general-info-hours', 'Hours of Operation', 'partial_davis_coop_hours', 'davis_theme_options', 'davis-coop-general-info-section' );
    add_settings_field('general-info-hours-brief', 'Hours of Operation (Brief)', 'partial_davis_coop_hours_brief', 'davis_theme_options', 'davis-coop-general-info-section' );
}

function seven_roots_davis_coop_front_page_options(){
    register_setting('davis-coop-general-info-group', 'whats-fresh-img-1');
    register_setting('davis-coop-general-info-group', 'whats-fresh-img-2');
    register_setting('davis-coop-general-info-group', 'whats-fresh-img-3');
    register_setting('davis-coop-general-info-group', 'whats-fresh-txt-1');
    register_setting('davis-coop-general-info-group', 'whats-fresh-txt-2');
    register_setting('davis-coop-general-info-group', 'whats-fresh-txt-3');
    add_settings_section('davis-coop-front-page-section', 'Front Page Options', 'partial_davis_coop_front_page_options', 'davis_theme_options' );
    add_settings_field('general-info-whats-fresh-img-1', 'Image 1', 'partial_davis_coop_whats_fresh_img_1', 'davis_theme_options', 'davis-coop-front-page-section');
    add_settings_field('general-info-whats-fresh-img-2', 'Image 2', 'partial_davis_coop_whats_fresh_img_2', 'davis_theme_options', 'davis-coop-front-page-section');
    add_settings_field('general-info-whats-fresh-img-3', 'Image 3', 'partial_davis_coop_whats_fresh_img_3', 'davis_theme_options', 'davis-coop-front-page-section');
    add_settings_field('general-info-whats-fresh-txt-1', 'Txt 1', 'partial_davis_coop_whats_fresh_txt_1', 'davis_theme_options', 'davis-coop-front-page-section');
    add_settings_field('general-info-whats-fresh-txt-2', 'Txt 2', 'partial_davis_coop_whats_fresh_txt_2', 'davis_theme_options', 'davis-coop-front-page-section');
    add_settings_field('general-info-whats-fresh-txt-3', 'Txt 3', 'partial_davis_coop_whats_fresh_txt_3', 'davis_theme_options', 'davis-coop-front-page-section');
}


//html return pages
function page_admin_seven_roots_davis_coop(){
    require_once( get_template_directory() . '/inc/templates/davis-coop-admin.php' );
}

function partial_davis_coop_whats_fresh_img_1(){
    $option_name = 'whats-fresh-img-1';
    require( get_template_directory() . '/inc/templates/admin-templates/whats-fresh-img.php');
}

function partial_davis_coop_whats_fresh_img_2(){
    $option_name = 'whats-fresh-img-2';
    include( get_template_directory() . '/inc/templates/admin-templates/whats-fresh-img.php');
}

function partial_davis_coop_whats_fresh_img_3(){
    $option_name = 'whats-fresh-img-3';
    include( get_template_directory() . '/inc/templates/admin-templates/whats-fresh-img.php');
}

function partial_davis_coop_whats_fresh_txt_1(){
    $whats_fresh_txt_1 = esc_attr( get_option( 'whats-fresh-txt-1' ) );
    echo '<input type="text" name="whats-fresh-txt-1" value="'.$whats_fresh_txt_1.'" placeholder="text" />';
}

function partial_davis_coop_whats_fresh_txt_2(){
    $whats_fresh_txt_2 = esc_attr( get_option( 'whats-fresh-txt-2' ) );
    echo '<input type="text" name="whats-fresh-txt-2" value="'.$whats_fresh_txt_2.'" placeholder="text" />';
}

function partial_davis_coop_whats_fresh_txt_3(){
    $whats_fresh_txt_3 = esc_attr( get_option( 'whats-fresh-txt-3' ) );
    echo '<input type="text" name="whats-fresh-txt-3" value="'.$whats_fresh_txt_3.'" placeholder="text" />';
}

function partial_davis_coop_front_page_options(){
    echo 'Alter the look of the front page';
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


/* Used in option fields to allow client to emphasize parts of text */
function rjc_simple_format($input, $class){
    $text = esc_attr( get_option($input));
    $pattern = '/(.*)\*(.*)\*(.*)/';
    $replacement = '$1<span class="'.$class.'">$2</span>$3';
    print preg_replace($pattern, $replacement, $text);
}