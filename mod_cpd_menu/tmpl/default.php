 <?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_menu
 *
 * @copyright   Copyright (C) 2017. All rights reserved.
 */


defined('_JEXEC') or die;

?>
<nav class="navbar navbar-default">
	<div class="container nopad">
		<!-- Showhide Mobile -->
		<div class="navbar-header">
			<span class="title">MENU</span>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#cbp-hrmenu" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<!-- Desktop -->
		<div id="cbp-hrmenu" class="cbp-hrmenu collapse navbar-collapse nopad">
			<ul class="inside_menu">
				<?php foreach ($list as $i => &$item){
					$class = '';

					//Menu active
					if (in_array($item->id, $path)){
						$class .= 'active';
					}
					if ($item->shallower){
						$class .= 'last-li';
					}
					// Main menu recebe apenas a class para que se for active receba essa class
					if($item->level == 1){
						echo '<li class="'.$class.'">';						
					}
					//Sub-Menu recebe coluna submenu nivel 1
					elseif ($item->level == 2){
						echo '<li class="'.$class.' col-md-'.$coluna_submenu1.'">';
					}
					//Sub-Menu recebe coluna submenu nivel 2
					elseif ($item->level == 3){
						echo '<li class="col-md-'.$coluna_submenu2.'">';
					}
					//Sub-Menu recebe coluna submenu nivel 3+
					else{
						echo '<li>';
					}
					//Se tem filho e main menu
					if($item->deeper && $item->level==1){
						echo '<a href="'.$item->flink.'">';
						if ($item->menu_image){
							echo '<img src="' . $item->menu_image . '" alt="' . $item->id . '"></img>';
						}
						echo $item->title;
						echo '<a class="hidden-lg iconMenu" href="#"><i class="fa fa-chevron-down" aria-hidden="true" style="float:right;"></i></a></a>';
					//<i class="fa fa-plus" aria-hidden="true"></i>
					}
					//Se tem filho e é Submenu
					else if($item->deeper && $item->level==2){
						echo '<a href="'.$item->flink.'">';
						if ($item->menu_image){
							echo '<img src="' . $item->menu_image . '" alt="' . $item->id . '"></img>';
						}
						echo $item->title;
						echo '</a>';
					}
					//Se tem filho e é sub submenu
					elseif($item->level > 2 ){
						echo '<a href="'.$item->flink.'">';
						echo '<span class="fa fa-caret-right" style="padding-right:3px;"></span>';
						if ($item->menu_image){
							echo '<img src="' . $item->menu_image . '" alt="' . $item->id . '"></img>';
						}
						echo $item->title;
						echo '</a>';
					}
					//Sem filho apenas o href
					else{
						echo '<a href="'.$item->flink.'">';
						if ($item->menu_image){
							echo '<img src="' . $item->menu_image . '" alt="' . $item->id . '"></img>';
						}
						echo $item->title;
						echo '</a>';
					}
					//Se tem filho e é main-menu
					if($item->deeper && $item->level == 1){
						echo '<div class="cbp-hrsub">';
						echo '<div class="cbp-hrsub-inner">'; 
						echo '<ul>';
					}
					//Se tem filho e nao é main-menu
					elseif($item->deeper && $item->level > 1){
						if ($item->deeper){
							echo '<ul>';
						}
					}
					// The next item is shallower.
					elseif ($item->shallower){
						echo '</li >';
						echo str_repeat('</ul></li>', $item->level_diff);
					}
					// The next item is on the same level.
					else{
						echo '</li>';
					}
				}
				?>
			</ul>
		</div>
	</div>
</nav>
<?php echo '<style>';
if($back_barra_menu==1){
	echo 	'
	@media (min-width: 768px){
		.navbar-default{
			background-color:'.$back_color_menu.';
		}	
	}';
}
else{
	echo '
	@media (min-width: 768px){
		.navbar-default{
			background-color:transparent ;
		}
	}';
}
echo 'ul.inside_menu {
	background:'.$back_color_menu.';
}';
echo '
.cbp-hropen ,
.cbp-hropen a,
.cbp-hrmenu > ul > li.active a,
.cbp-hrmenu > ul > li a:focus,
.cbp-hrmenu > ul > li a:hover{
	background:'.$hover_color_menu.';
	color:'.$fonte_hover_menu.';
}';
echo '.inside_menu a {
	color:'.$fonte_color_menu.';
}';

if($back_sub_menu==1){
	echo '.cbp-hrsub{
		background:'.$back_color_submenu.';
		border-bottom: 1px solid;
	}';
}
else {
	echo '.cbp-hrsub-inner {
		background:'.$back_color_submenu.';
		border-left: 1px solid;
		border-bottom: 1px solid;
		border-right: 1px solid;
	}';
}
echo '.cbp-hropen a{
	color:'.$fonte_hover_menu.';
}';
echo '.cbp-hrsub-inner > ul > li > ul > li > a,
.cbp-hrsub-inner > ul > li > a{
	color:'.$fonte_color_submenu.' ;
	background:transparent ;
}';
echo '
.cbp-hrsub-inner > ul > li > ul > li > a:hover,
.cbp-hrsub-inner > ul > li > ul > li > a:focus,
.cbp-hrsub-inner > ul > li > a:focus,
.cbp-hrsub-inner > ul > li > a:hover{
	color:'.$fonte_hover_submenu.' ;
}';
echo '#cbp-hrmenu a {
	letter-spacing:1px;
}';
echo 'span.title{
	color:'.$back_color_menu.'
}';
echo '.site-footer,
.textVisual p,
.right_mega,
	  #btn-busca {
background-color: '.$back_color_menu.';

}';
echo'</style>';
?>
<script>
	$(document).ready(function (){
		$('.inside_menu > li > a').focus(function(){            
			$(this).parent().addClass('cbp-hropen');
		});            
		$('.last-li').each(function(){                
			$(this).find('a').blur(function (){
				$('.inside_menu > li').removeClass('cbp-hropen');        
			});
		});
	}); 
</script>