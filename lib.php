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
