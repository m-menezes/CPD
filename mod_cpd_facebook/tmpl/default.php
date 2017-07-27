<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_facebook
 * @copyright   Copyright (C) 2017. All rights reserved.
 */


defined('_JEXEC') or die; ?>
<div class="col-md-12 nopad">
	<div class="textVisual">
		<i class="fa fa-facebook-official" aria-hidden="true" style="float:left;"></i>
		<p class="visualTexto">
			Facebook
		</p>
	</div>
	<div class="col-md-12 nopad iframeFacebook" >
		<div class="fb-page" data-href="<?php echo $facebookURL ?>" data-tabs="<?php echo $publicacoes ?>" data-width="<?php echo $dataWidth ?>" data-height="<?php echo $dataHeight ?>" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
			<blockquote cite="<?php echo $facebookURL ?>" class="fb-xfbml-parse-ignore">
				<a href="https://www.facebook.com/facebook">Facebook</a>
			</blockquote>
		</div>
	</div>
</div>
<style type="text/css">
	.textVisual p{
		text-transform: uppercase;
		color:white;
		padding: 3px;
		margin: 0px;
	}
	.textVisual i{
		color:white;
		padding: 5px;
	}
	.visualTexto{
		color:white;
	}
	.iframeFacebook{
		margin-bottom: 10px;
	}
</style>