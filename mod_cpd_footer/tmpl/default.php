<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_footer
 * @copyright   Copyright (C) 2017. All rights reserved.
 */


defined('_JEXEC') or die; ?>
<div class="footer-widget">
	<h4 class="footer-widget-title">
		<?php 
		if (isset($footerTitle)) {
			echo $footerTitle; 
		}?>
	</h4>
	<p>
		<!-- Loop dentre as 10 linhas -->
		<?php for ($i=1; $i < 11; $i++) { 
			// Concatenação com o contador do for pois a variavel
			// possuim o numero da linha
			$link = $params->get('footerLine_'.$i);
			// Se possui algum conteudo da echo
			if (isset($link)) {
				echo $link;
				echo '<br>';
			}
		}?>
	</p>
</div>