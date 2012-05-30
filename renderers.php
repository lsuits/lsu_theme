<?php
class theme_lsu_core_renderer extends core_renderer {
  /**
   * Prints a nice side block with an optional header.
   *
   * The content is described
   * by a {@link block_contents} object.
   *
   * <div id="inst{$instanceid}" class="block_{$blockname} block">
   *      <div class="header"></div>
   *      <div class="content">
   *          ...CONTENT...
   *          <div class="footer">
   *          </div>
   *      </div>
   *      <div class="annotation">
   *      </div>
   * </div>
   *
   * @param block_contents $bc HTML for the content
   * @param string $region the region the block is appearing in.
   * @return string the HTML to be output.
   */
  function block(block_contents $bc, $region) {
    $bc = clone($bc); // Avoid messing up the object passed in.
    if (empty($bc->blockinstanceid) || !strip_tags($bc->title)) {
        $bc->collapsible = block_contents::NOT_HIDEABLE;
    }
    if ($bc->collapsible == block_contents::HIDDEN) {
        $bc->add_class('hidden');
    }
    if (!empty($bc->controls)) {
        $bc->add_class('block_with_controls');
    }

    $classes = $bc->attributes['class'];
    $classes = array_map('trim', explode(' ', $classes));
    if (
//          ((in_array('pagelayout_admin', $bodyclasses, true)) && 
          ((in_array('block_settings', $classes, true)) || (in_array('block_navigation', $classes, true)))) 
  //        )
          {
      $bc->add_class('dock_on_load');
    }

    $skiptitle = strip_tags($bc->title);
    if (empty($skiptitle)) {
      $output = '';
      $skipdest = '';
    } else {
      $output = html_writer::tag('a', get_string('skipa', 'access', $skiptitle), array('href' => '#sb-' . $bc->skipid, 'class' => 'skip-block'));
      $skipdest = html_writer::tag('span', '', array('id' => 'sb-' . $bc->skipid, 'class' => 'skip-block-to'));
    }
    $output .= html_writer::start_tag('div', $bc->attributes);
    $output .= $this->block_header($bc);
    $output .= $this->block_content($bc);
    $output .= html_writer::end_tag('div');
    $output .= $this->block_annotation($bc);
    $output .= $skipdest;
    $this->init_block_hider_js($bc);
    return $output;
  }
}
