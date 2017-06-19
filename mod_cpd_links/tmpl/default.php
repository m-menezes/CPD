<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_links
 * @copyright   Copyright (C) 2017. All rights reserved.
 */


defined('_JEXEC') or die; ?>
<div class="col-md-12 nopad">
	<ul class="listnone right_list">
		<?php 
		// Loop pelos links ativos
		for ($i=1; $i < 9; $i++) {
			$link = $params->get('newLink'.$i);
			$urllink = $params->get('linkURL'.$i);
			if ($i == 1){
				$link = 1;
			}
			if($link == 1){
				$mega_link = $params->get('right_mega'.$i);
				if($mega_link == 1)
					$class = "right_mega";
				else
					$class="right_link";
				echo '<li class="'.$class.'">';
				echo '<i class="fa '.$params->get('linkIcon'.$i).'"></i>';
				if(isset($urllink)){
					echo '<a href="'.$urllink.'">';
					echo $params->get('linkNome'.$i);
					echo '</a>';
				}
				else{
					echo '<span>'.$params->get('linkNome'.$i).'</span>';
				}
				echo '</li>';
			}
		}
		?>
	</ul>
</div>
<style type="text/css">
	/*LINKS DIREITA UFSM*/
	.right_list{
		padding:0px;
		margin: 0px;
	}
	.right_mega > a:hover{
		color:white;
	}
	.right_list > li > a,
	.right_list > li > span{
		text-transform: uppercase;
		position: relative;
		top: -2px;
	}
	.right_list > li > i{
		font-size: 20px;
	}
	.right_mega:not(:first-child){
		margin-top: 8px;
	}
	.right_mega:last-child{
		margin-bottom: 0px;
	}
	.right_mega{
		margin-bottom: 8px;
	}
	.right_mega i {
		padding: 3px 5px 2px 6px;
	}
	.right_link i{
		padding-right: 5px; 
		padding-left: 15px;
	}
	.right_mega a,
	.right_mega i,
	.right_mega span{
		color:white;
	}
	/*FIM LINKS DIREITA UFSM*/
</style>