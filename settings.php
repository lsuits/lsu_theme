<?php

/**
 * Settings for the lsu theme
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    // Header background image file setting
    $name = 'theme_lsu/header_background_image';
    $title = get_string('background_image','theme_lsu');
    $description = get_string('background_image_desc', 'theme_lsu');
    $default = $CFG->wwwroot . '/theme/lsu/pix/lsu_bg_logo.png';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $settings->add($setting);

    // Header background color setting
    $name = 'theme_lsu/header_bgcolor';
    $title = get_string('header_bgcolor','theme_lsu');
    $description = get_string('header_bgcolor_desc', 'theme_lsu');
    $default = '#2e1352';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $settings->add($setting);

    // Logo file setting
    $name = 'theme_lsu/header_logo';
    $title = get_string('logo','theme_lsu');
    $description = get_string('logodesc', 'theme_lsu');
    $default = $CFG->wwwroot . '/theme/lsu/pix/lsu_logo.png';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $settings->add($setting);

    // Logo width
    $name = 'theme_lsu/header_logo_width';
    $title = get_string('logo_width','theme_lsu');
    $description = get_string('logowidthdesc', 'theme_lsu');
    $default = 210;
    $setting = new admin_setting_configtext($name, $title, $description, $default . 'px');
    $settings->add($setting);

    // Logo height
    $name = 'theme_lsu/header_logo_height';
    $title = get_string('logo_height','theme_lsu');
    $description = get_string('logoheightdesc', 'theme_lsu');
    $default = 29;
    $setting = new admin_setting_configtext($name, $title, $description, $default . 'px');
    $settings->add($setting);

    // Page Body colour setting
    $name = 'theme_lsu/body_color';
    $title = get_string('body_color','theme_lsu');
    $description = get_string('body_color_desc', 'theme_lsu');
    $default = '#dddddd';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $settings->add($setting);

    // Link colour setting
    $name = 'theme_lsu/linkcolor';
    $title = get_string('linkcolor','theme_lsu');
    $description = get_string('linkcolordesc', 'theme_lsu');
    $default = '#461d7c';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $settings->add($setting);

    // Link Hover colour setting
    $name = 'theme_lsu/hovercolor';
    $title = get_string('hovercolor','theme_lsu');
    $description = get_string('hovercolordesc', 'theme_lsu');
    $default = '#000000';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $settings->add($setting);

    // Block region width
    $name = 'theme_lsu/regionwidth';
    $title = get_string('regionwidth','theme_lsu');
    $description = get_string('regionwidthdesc', 'theme_lsu');
    $default = 220;
    $choices = array(180=>'180px', 190=>'190px', 200=>'200px', 210=>'210px', 220=>'220px', 240=>'240px', 250=>'250px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Current Course Section colour setting
    $name = 'theme_lsu/current_course_section';
    $title = get_string('current_course_section','theme_lsu');
    $description = get_string('current_course_section_desc', 'theme_lsu');
    $default = '#fcf5d7';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $settings->add($setting);

    // Custom CSS file
    $name = 'theme_lsu/customcss';
    $title = get_string('customcss','theme_lsu');
    $description = get_string('customcssdesc', 'theme_lsu');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $settings->add($setting);
}
