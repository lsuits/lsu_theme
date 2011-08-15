<?php

/**
 * Makes our changes to the CSS
 *
 * @param string $css
 * @param theme_config $theme
 * @return string
 */
function lsu_process_css($css, $theme) {

    // Set the link color
    if (!empty($theme->settings->linkcolor)) {
        $linkcolor = $theme->settings->linkcolor;
    } else {
        $linkcolor = null;
    }
    $css = lsu_set_linkcolor($css, $linkcolor);

    // Set the hover color
    if (!empty($theme->settings->hovercolor)) {
        $hovercolor = $theme->settings->hovercolor;
    } else {
        $hovercolor = null;
    }
    $css = lsu_set_hovercolor($css, $hovercolor);

    // Set the header background color
    if (!empty($theme->settings->header_bgcolor)) {
        $header_bgcolor = $theme->settings->header_bgcolor;
    } else {
        $header_bgcolor = null;
    }
    $css = lsu_set_header_bgcolor($css, $header_bgcolor);

    // Set the header background image
    if (!empty($theme->settings->header_background_image)) {
        $header_background_image = $theme->settings->header_background_image;
    } else {
        $header_background_image = null;
    }
    $css = lsu_set_header_background_image($css, $header_background_image);

    // Set the region width
    if (!empty($theme->settings->regionwidth)) {
        $regionwidth = $theme->settings->regionwidth;
    } else {
        $regionwidth = null;
    }
    $css = lsu_set_regionwidth($css, $regionwidth);

    // Set the custom CSS
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = lsu_set_customcss($css, $customcss);

    // Return the CSS
    return $css;
}

/**
 * Sets the link color variable in CSS
 *
 * @param string $css
 * @param mixed $linkcolor
 * @return string
 */
function lsu_set_linkcolor($css, $linkcolor) {
    $tag = '[[setting:linkcolor]]';
    $replacement = $linkcolor;
    if (is_null($replacement)) {
        $replacement = '#461d7c';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the link hover color variable in CSS
 *
 * @param string $css
 * @param mixed $hovercolor
 * @return string
 */
function lsu_set_hovercolor($css, $hovercolor) {
    $tag = '[[setting:hovercolor]]';
    $replacement = $hovercolor;
    if (is_null($replacement)) {
        $replacement = '#fdd023';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the header background color variable in CSS
 *
 * @param string $css
 * @param mixed $header_bgcolor
 * @return string
 */
function lsu_set_header_bgcolor($css, $header_bgcolor) {
    $tag = '[[setting:header_bgcolor]]';
    $replacement = $header_bgcolor;
    if (is_null($replacement)) {
        $replacement = '#2e1352';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the header background image variable in CSS
 *
 * @param string $css
 * @param mixed $header_background_image
 * @return string
 */
function lsu_set_header_background_image($css, $header_background_image) {
    $tag = '[[setting:header_background_image]]';
    $replacement = $header_background_image;
    if (is_null($replacement)) {
        $replacement = 'lsu/pix/lsu_bg_logo.png';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the region width variable in CSS
 *
 * @param string $css
 * @param mixed $regionwidth
 * @return string
 */
 
function lsu_set_regionwidth($css, $regionwidth) {
    $tag = '[[setting:regionwidth]]';
    $doubletag = '[[setting:regionwidthdouble]]';
    $replacement = $regionwidth;
    if (is_null($replacement)) {
        $replacement = 250;
    }
    $css = str_replace($tag, $replacement.'px', $css);
    $css = str_replace($doubletag, ($replacement*2).'px', $css);
    return $css;
}

/**
 * Sets the custom css variable in CSS
 *
 * @param string $css
 * @param mixed $customcss
 * @return string
 */
function lsu_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
