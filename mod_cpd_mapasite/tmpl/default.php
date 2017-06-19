<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_mapasite
 * @copyright   Copyright (C) 2017. All rights reserved.
 */


defined('_JEXEC') or die; ?>
<ul class="listnone">
	<?php 
	foreach ($items as $key => $item) {
		if($item->language == "*"){
			$item->language = "pt-BR";
		}
		/*LINGUAGEM*/
		if($item->language == $lang->gettag()){
			if($item->params->get('menu_show', 1) == 1){
				echo '<li>';
				for($i = 1; $i < $item->level; $i++){
				}
				if($item->level > 1){
					for($i = 1; $i < $item->level; $i++){
					echo '<span class="padding_map"></span>';
						
					}
				}
				echo '<i class="fa  fa-minus padding_right" aria-hidden="true"></i>';
				// echo '<i class="fa fa-caret-right padding_right" aria-hidden="true"></i>';
				echo '<a href="index.php/'.$item->route.'">';		
				echo $item->title."</a><br>";
				echo '</li>';
			};
		}
	}
	?>
</ul>
<style type="text/css">
	.padding_map{
		padding-left:20px;
	}
	.padding_right{
		font-size: 12px;
		padding-right: 10px;
	}
</style>