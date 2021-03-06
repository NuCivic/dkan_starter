<?php

/**
 * @file
 * Custom theme implementation for Choropleth Visualization Entity Bundle.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) entity label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-{ENTITY_TYPE}
 *   - {ENTITY_TYPE}-{BUNDLE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content">
    <table class="table table-responsive">
      <tr>
        <th><?php print t('Field'); ?></th>
        <th><?php print t('Value'); ?></th>
      </tr>
      <?php foreach($content as $key => $data):?>
      <?php if ($key!='title'):?>
      <tr>
        <td><?php print $content[$key]['#title'];?></td>
        <td><?php print render($content[$key])?></td>
      </tr>
      <?php endif;?>
      <?php endforeach;?>
    </table>
  </div>
  <div id="visualization" class="recline-data-explorer">
    <div class='data-view-sidebar'></div>
    <div class='data-view-container'></div>
  </div>
</div>
