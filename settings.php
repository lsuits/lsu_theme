<?php

/**
 * Settings for the lsu theme
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    // Logo file setting
    $name = 'theme_lsu/logo';
    $title = get_string('logo','theme_lsu');
    $description = get_string('logodesc', 'theme_lsu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $settings->add($setting);

    // Tagline setting
    $name = 'theme_lsu/tagline';
    $title = get_string('tagline','theme_lsu');
    $description = get_string('taglinedesc', 'theme_lsu');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $settings->add($setting);

    // Link colour setting
    $name = 'theme_lsu/linkcolor';
    $title = get_string('linkcolor','theme_lsu');
    $description = get_string('linkcolordesc', 'theme_lsu');
    $default = '#f25f0f';
    $previewconfig = array('selector'=>'.block .content', 'style'=>'linkcolor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // Link Hover colour setting
    $name = 'theme_lsu/hovercolor';
    $title = get_string('hovercolor','theme_lsu');
    $description = get_string('hovercolordesc', 'theme_lsu');
    $default = '#fdd023';
    $previewconfig = array('selector'=>'.block .content', 'style'=>'hovercolor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    // Block region width
    $name = 'theme_lsu/regionwidth';
    $title = get_string('regionwidth','theme_lsu');
    $description = get_string('regionwidthdesc', 'theme_lsu');
    $default = 250;
    $choices = array(180=>'180px', 190=>'190px', 200=>'200px', 210=>'210px', 220=>'220px', 240=>'240px', 250=>'250px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

    // Custom CSS file
    $name = 'theme_lsu/customcss';
    $title = get_string('customcss','theme_lsu');
    $description = get_string('customcssdesc', 'theme_lsu');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
    $settings->add($setting);
}
