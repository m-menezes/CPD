<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_social
 * @copyright   Copyright (C) 2017. All rights reserved.
 */


defined('_JEXEC') or die; ?>
<div class="social">
	<ul>
		<?php if ($facebook==1): ?>
			<li>
				<?php echo '<a href="'.$facebook_url.'"><i class="fa fa-facebook-square" style="font-size:'.$icon_px.';"></i></a>';?>
			</li>
		<?php endif ?>
		<?php if ($twitter==1): ?>
			<li>
				<?php echo '<a href="'.$twitter_url.'"><i class="fa fa-twitter" style="font-size:'.$icon_px.';"></i></a>';?>
			</li>
		<?php endif ?>
		<?php if ($gmail==1): ?>
			<li>
				<?php echo '<a href="'.$gmail_url.'"><i class="fa fa-envelope" style="font-size:'.$icon_px.';"></i></a>';?>
			</li>
		<?php endif ?>
		<?php if ($instagram==1): ?>
			<li>
				<?php echo '<a href="'.$instagram_url.'"><i class="fa fa-instagram" style="font-size:'.$icon_px.';"></i></a>';?>
			</li>	

		<?php endif ?>
		<?php if ($googleplus==1): ?>
			<li>
				<?php echo '<a href="'.$googleplus_url.'"><i class="fa fa-google-plus" style="font-size:'.$icon_px.';"></i></a>';?>
			</li>

		<?php endif ?>
		<?php if ($linkedin==1): ?>
			<li>
				<?php echo '<a href="'.$linkedin_url.'"><i class="fa fa-linkedin" style="font-size:'.$icon_px.';"></i></a>';?>
			</li>

		<?php endif ?>
		<?php if ($youtube==1): ?>
			<li>
				<?php echo '<a href="'.$youtube_url.'"><i class="fa fa-youtube" style="font-size:'.$icon_px.';"></i></a>';?>
			</li>
		<?php endif ?>
	</ul>
</div>
<style>
	.social > ul{
		list-style-type:none;
		margin-top: 5px;
	}
	.social > ul > li{
		margin:5px;
		display: inline;
	}
	.social > ul > li > a{
		<?php echo 'color:'.$color.';';?>
	}
</style>