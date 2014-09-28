<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

?>
<div class="bannierephoto">
	<div class="cadre" style=" transform:rotate(<?php echo $polaroid_angle; ?>deg); -ms-transform:rotate(<?php echo $polaroid_angle; ?>deg); -moz-transform:rotate(<?php echo $polaroid_angle; ?>deg); -webkit-transform:rotate(<?php echo $polaroid_angle; ?>deg); -o-transform:rotate(<?php echo $polaroid_angle; ?>deg);">
		<a class="polaroidlink" href="<?php echo $polaroid_link; ?>">
		<div class="photo">
			<span class="shadow"><img class="polaroidimg" src="<?php echo $polaroid_img; ?>" alt="<?php echo $polaroid_img_alt; ?>"></span>
			<span class="polaroidtext"><?php echo $polaroid_text; ?></span>
		</div>
		</a>
	</div>
</div>