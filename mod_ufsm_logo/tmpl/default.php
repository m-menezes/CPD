<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_ufsm_logo
 * @copyright   Copyright (C) 2017. All rights reserved.
 */


defined('_JEXEC') or die; ?>
<!-- LOGO -->
<div class="left-header">
	<div class="col-sm-4 col-md-2 ufsmLogo">
		<a href="http://site.ufsm.br/">
			<img class="brasaoUFSM" src="modules/mod_ufsm_logo/images/brasao-cores.png" alt="Brasão UFSM">
		</a>
	</div>
	<!-- FIM LOGO -->
	<!-- TEXTO -->
	<div class="col-sm-8 col-md-10 ufsmTexto">
		<a href="<?php echo JUri::base(); ?>">
			<h1 class="nomePrincipal">
				<?php echo $nomePrincipal; ?>
			</h1>
			<!-- MOSTRAR NOME SECUNDARIO -->
			<?php if ($showSecundario == 1) :?>
				<h4 class="nomeSecundario">
					<?php echo $nomeSecundario; ?>
				</h4>
			<?php endif; ?>
			<!-- MOSTRAR NOME SECUNDARIO -->
		</a>
	</div>
	<!-- FIM TEXTO -->
</div>
<style>
	<?php echo '
	.ufsmTexto{
		padding-top: '.$paddingTop.'px
	}
	.ufsmTexto a{
		color: '.$color_text.';
	}
	'?>
	.left-header{
		width: 100%;
		padding: 8px;
		display: inline-block;
	}
	.ufsmLogo{
		padding-left:0px;
		
	}
	.ufsmTexto{
		margin-top: 5px;
	}
	.ufsmTexto a{
		text-transform: uppercase;
	}
	.nomePrincipal{
		margin-top: 10px;
		margin-bottom: 10px;
		font-weight: bold;
	}
	@media (min-width: 768px){
		.ufsmLogo{
			border-right: 1px solid;
			border-color: #000000;
		}
		.brasaoUFSM{
			width: 90%;
		}
	}
	@media (max-width: 768px){
		.left-header{
			text-align: center;
		}
		.brasaoUFSM{
			width: 40%;
		}
	}
	@media screen and (min-width: 768px ) and (max-width: 992px){
		.nomeSecundario{
			font-size: 1.8vw !important;
		}
	}
</style>