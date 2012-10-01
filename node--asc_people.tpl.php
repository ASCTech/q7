<?php dsm($node); ?>
<div id="bio_block">

<div class="field field-type-nodereference field-field-ascpeople-appointmen">
  <div class="field-items">
      <div class="field-item">
      <?php 
        foreach ($node->field_people_terms_1[$node->language] as $delta => $term) {
          print $term['taxonomy_term']->name . ',';
        }
      ?> 
      </div>
  </div>
</div>

<div class="field field-type-text field-field-ascpeople-position">
  <div class="field-items">
      <div class="field-item"><?php print $node->field_ascpeople_position[0]['view'] ?></div>
  </div>
</div>


</div>

<?php 
if(count($node->field_ascpeople_expertise) && $node->field_ascpeople_expertise[0]['safe']){
  print '<div class="field field-type-text field-field-ascpeople-expertise">  <div class="field-label">Areas of Expertise</div>  <ul class="field-items">  ';
  foreach($node->field_ascpeople_expertise as $expertise){
    print '<li class="field-item">'.$expertise['safe'].'</li>  ';
  }
  print '</ul>  </div>';
}
?>

<?php
if(count($node->field_ascpeople_education) && $node->field_ascpeople_education[0]['safe']){
  print '<div class="field field-type-text field-field-ascpeople-education">  <div class="field-label">Education</div>  <ul class="field-items">  ';
  foreach($node->field_ascpeople_education as $education){
    print '<li class="field-item">'.$education['safe'].'</li>  ';
  }
  print '</ul>  </div>';
}
?>
