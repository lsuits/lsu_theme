<?php

$THEME->name = 'lsu';

$THEME->parents = array('base');

$THEME->sheets = array(
    'core',     /** Must come first**/
    'pagelayout',
    'admin',
    'blocks',
    'calendar',
    'course',
    'user',
    'dock',
    'grade',
    'message',
    'modules',
    'question',
    'css3',      /** Sets up CSS 3 + browser specific styles **/
    'settings'
);

$THEME->parents_exclude_sheets = array(
                'base'=>array(
                        'pagelayout',
                ),
);

$THEME->enable_dock = true;

/*
//////////////////////////////////////////////////////////
//              To be used in the gradebook             //
//          to add things like quick edit links         //
//////////////////////////////////////////////////////////

$THEME->layouts = array(
    'gradebook' => array(
        'file' => 'lsugradebook.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
);
*/

$THEME->csspostprocess = 'lsu_process_css';
