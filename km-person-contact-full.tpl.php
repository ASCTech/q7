<?php dsm($variables); ?>
<div class="km-person-full-contact">
  
  <!-- Name -->
  <p class="km-person-name"></p>
  <span class="km-first-name"><?php print $first_name ?></span> 
  <span class="km-last-name"><?php print $last_name ?></span> 
  </p>

  <!-- Appointments -->
	<p class="km-appointment">
	<?php print join('<br />', $appointments); ?> 
	</p>
  
  <!-- Address -->
  <p class="km-address">
	<?php if ($address1):?><span class="km-address1"><?php print $address1 ?></span><br /><?php endif;?>
	<?php if ($address2):?><span class="km-address2"><?php print $address2 ?></span><br /><?php endif;?>
	<?php if ($city):?><span class="km-city"><?php print $city ?></span>, <?php endif;?>
	<?php if ($state):?><span class="km-state"><?php print $state ?></span> <?php endif;?>
	<?php if ($postal):?><span class="km-postal"><?php print $postal ?></span> <?php endif;?>
	<?php if ($city || $state || $postal):?><br /><?php endif;?>
	</p>

  <!-- Phone & Fax -->
  <p class="km-phone-fax">
	<?php if ($phone): ?><span class="km-phone"><?php print $phone ?></span><br /><?php endif;?>
	<?php if ($fax): ?><span class="km-fax"><?php print $fax ?></span> (Fax)<br /><?php endif;?>
	</p>

  <!-- Email & Web -->
  <p class="km-email-url">
	<?php if ($email): ?><span class="km-email"><?php print $email; ?></span><br /><?php endif; ?>
	<?php if ($url): ?><span class="km-url"><?php print $url; ?></span><br /><?php endif; ?>
	</p>

</div>
