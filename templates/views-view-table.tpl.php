<?php
/**
 *  * @file views-view-table.tpl.php
 *   * Template to display a view as a table.
 *    *
 *     * - $title : The title of this group of rows.  May be empty.
 *      * - $header: An array of header labels keyed by field id.
 *       * - $header_classes: An array of header classhes the index in $rows.
 *        * - $rows: An array of row items. Each row is an array of content.
 *         *   $rows are keyed by row number, fields within rows are keyed by field ID.
 *          * - $field_classes: An array of classes to apply to each field, indexed by
 *           *   field id, then row number. This matches the index in $rows.
 *            * @ingroup views_templates
 *             */
?>
 
<?php drupal_add_js('misc/form.js'); ?>
<?php drupal_add_js('misc/collapse.js'); ?>
 
<fieldset class="collapsible collapsed">
    <legend><span class="fieldset-legend"><?php if (!empty($title)) : ?><?php print $title; ?><?php endif; ?></span></legend>
    <div class="fieldset-wrapper">
     
    <table <?php if ($classes) { print 'class="'. $classes . '" ';  } ?><?php print $attributes; ?>>
  <thead>
    <tr>
      <?php foreach ($header as $field => $label): ?>
        <th <?php if ($header_classes[$field]) { print 'class="'. $header_classes[$field] . '" ';  } ?>>
          <?php print $label; ?>
        </th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rows as $row_count => $row): ?>
      <tr class="<?php print implode(' ', $row_classes[$row_count]); ?>">
        <?php foreach ($row as $field => $content): ?>
          <td <?php if ($field_classes[$field][$row_count]) { print 'class="'. $field_classes[$field][$row_count] . '" ';  } ?><?php print drupal_attributes($field_attributes[$field][$row_count]); ?>>
            <?php print $content; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
 
</div>

</fieldset>
