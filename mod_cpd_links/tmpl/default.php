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
			/*RECEBER DADOS*/
			$background = $params->get('right_mega'.$i);
			$ativo = $params->get('newLink'.$i);
			$texto = $params->get('linkText'.$i);
			$url = $params->get('linkURL'.$i);
			$icone = $params->get('linkIcon'.$i);
			$imagem = $params->get('linkImage'.$i);
			$alt = $params->get('linkAltImage'.$i);
			/*SE POSSUI BACKGROUND*/
			if ($background==1) {
				$class = "right_mega";
			}
			/*SE NÃO POSSUI BACKGROUND*/
			else{
				$class = "right_link";
			}
			/*SE ESTÁ ATIVO*/
			if ($ativo==1) {
				echo "<li class=".$class.">";
				if(isset($icone)){
					echo '<i class="fa '.$icone.'"></i>';
				}
				/*LINK ATIVO*/
				if(isset($url)){
					echo '<a href="'.$url.'">';
				}
				if(!isset($icone)){
					echo '<span style="display:block">';	
				}
				else{
					echo '<span>';
				}
				/*TEXTO*/
				if (isset($texto)) {
					echo $texto;
				}
				echo '</span>';
				if (isset($imagem)) {
					if(!isset($alt)){
						$alt .= $texto;
					}
					echo '<img src="'.$imagem.'" alt="'.$alt.'" style="max-width:100%">';
				}

				/*TAG LINK ATIVO*/
				if(isset($url)){
					echo '</a>';
				}
				echo "</li>";
			}
		}
		?>
	</ul>
</div>
<style type="text/css">
	/*LINKS DIREITA UFSM*/
	.right_list{
		padding:0px;
		margin: 0px 0px 8px 0px;
	}
	.right_mega > a:hover{
		color:white;
	}
	.right_list > li > a,
	.right_list > li > span{
		text-transform: uppercase;
		position: relative;
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
		padding: 3px 5px 5px 6px;
	}
	.right_link i{
		padding-right: 5px; 
		padding-left: 15px;
		padding-bottom: 5px;
		padding-top: 3px;
	}
	.right_mega a,
	.right_mega i,
	.right_mega span{
		color:white;
	}
	.right_mega span{
		padding: 3px 5px 3px 6px;
	}
	.right_link > a,
	.right_link > span{
		top:-2px;
	}

	/*FIM LINKS DIREITA UFSM*/
</style>