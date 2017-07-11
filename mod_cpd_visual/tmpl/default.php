<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_visual
 * @copyright   Copyright (C) 2017. All rights reserved.
 */


defined('_JEXEC') or die; ?>
<div class="col-md-12 nopad tituloIdentidade">
	<div class="textVisual">
		<i class="fa fa-paint-brush" aria-hidden="true" style="float:left;"></i>
		<p class="visualTexto">
			Identidade Visual
		</p>
	</div>
	<img src="<?php echo $logoURL ?>" alt="<?php echo $altImg ?>">
</div>
<style type="text/css">
	.tituloIdentidade img{
		max-width: 100%;
		margin-bottom:20px;
	}
	.tituloIdentidade{
		<?php echo '
		margin-top:'.$margin_top.';
		'?>
	}
	.textVisual p{
		text-transform: uppercase;
		color:white;
		padding: 3px;
	}
	.textVisual i{
		color:white;
		padding: 5px;
	}
	.visualTexto{
		color:white;
	}
</style>