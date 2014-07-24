<?php

$THEME->name = 'lsu';

$THEME->parents = array('base');

$THEME->sheets = array(
    'core',     /** Must come first **/
    'pagelayout',
    'course',
    'admin',
    'blocks',
    'calendar',
    'user',
    'message',
    'modules',
    'question',
    'grade',
    'dock',
    'buttons',   /** Sets up inputs and buttons **/
    'css3',      /** Sets up CSS 3 **/
    'browsers',      /** Fixes various browser specific issues **/
    'settings',
    'print'      /** Must come last **/
);

$THEME->parents_exclude_sheets = array(
    'base'=>array(
        'pagelayout'
   ),
);

/* Uncomment this block of code to allow students to dock course blocks **
global $CFG, $COURSE;
$context = context_course::instance($COURSE->id);
$candockit = has_capability('moodle/course:manageactivities', $context);

if ($candockit) {
   $THEME->enable_dock = true;
} else {
   $THEME->enable_dock = false;
}
*/

// Remove the line below to stop students from being able to dock.
$THEME->enable_dock = true;

$THEME->layouts = array(
    // Most pages - if we encounter an unknown or a missing page type, this one is used.
    'base' => array(
        'file' => 'general.php',
        'regions' => array()
    ),
    'standard' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    // Course page
    'course' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'coursecategory' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'incourse' => array(
        'file' => 'general.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    'frontpage' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'admin' => array(
        'file' => 'admin.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('nofooter'=>false, 'nonavbar'=>false, 'noblocks'=>false),
    ),
    'mydashboard' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'mypublic' => array(
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'login' => array(
        'file' => 'general.php',
        'regions' => array()
    ),
    'login' => array(
        'file' => 'general.php',
        'regions' => array()
    ),
    // Pages that appear in pop-up windows - no navigation, no blocks, no header.
    'popup' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'noblocks'=>true),
    ),
    // No blocks and minimal footer - used for legacy frame layouts only!
    'frametop' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter', 'noblocks'=>true),
    ),
    // Embeded pages, like iframe embeded in moodleform
    'embedded' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'noblocks'=>true),
    ),
    // Used during upgrade and install, and for the 'This site is undergoing maintenance' message.
    // This must not have any blocks, and it is good idea if it does not have links to
    // other places - for example there should not be a home link in the footer...
    'maintenance' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'noblocks'=>true),
    ),
    // The pagelayout used for reports
    'report' => array(
        'file' => 'report.php',
        'regions' => array(),
        'options' => array('nofooter'=>false, 'nonavbar'=>false, 'noblocks'=>true),
    ),
    // The pagelayout used for printing
    'print' => array(
        'file' => 'print.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'noblocks'=>true),
    )
);

$THEME->csspostprocess = 'lsu_process_css';

// NOT READY FOR THIS
// $THEME->rendererfactory = 'theme_overridden_renderer_factory';

