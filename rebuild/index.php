<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<!--[if lt IE 7]> 
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br"></html>
<![endif]-->
<!--[if IE 7]> 
<html class="no-js lt-ie9 lt-ie8" lang="pt-br"></html>
<![endif]-->
<!--[if IE 8]> 
<html class="no-js lt-ie9" lang="pt-br"> </html>
<![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->
<html lang=”pt-br”>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="CPD/UFSM" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<script type="text/javascript" src="http://updateyourbrowser.net/asn.js"> </script>
<![endif]-->

<!-- Importação CSS -->
<link href="<?php echo $this->baseurl ?>/templates/rebuild/assets/css/styles.css" rel="stylesheet" media="screen" />	
<link href="<?php echo $this->baseurl ?>/templates/rebuild/assets/css/overwrite-bootstrap.css" rel="stylesheet" media="screen" />
<link href="<?php echo $this->baseurl ?>/templates/rebuild/assets/css/main.css" rel="stylesheet" media="screen" />
<link href="<?php echo $this->baseurl ?>/templates/rebuild/assets/css/font-awesome.min.css" rel="stylesheet" />
<link href="<?php echo $this->baseurl ?>/templates/rebuild/assets/bootstrap/css/bootstrap.min.css"  rel="stylesheet"/>
<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/rebuild/favicon.ico" />
<!-- ./Importação CSS -->

<!-- Importação CSS Menu Horizontal -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/modules/mod_cpd_menu/assets/css/default.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/modules/mod_cpd_menu/assets/css/component.css" />
<!-- ./Importação CSS Menu Horizontal -->

<!-- Importação Script -->
<script src="<?php echo $this->baseurl ?>/templates/rebuild/assets/js/jquery.min.js"></script>
<!-- Importação Script -->

<jdoc:include type="head" />
</head>
<body>
	<!-- Facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- Fim Facebook -->
	<!--Barras Governo/UFSM Acessibilidade -->
	<div id="barra-brasil"></div>
	<div id="barra-acessibilidade"></div>
	<!-- /.Barras Governo/UFSM -->
	<header class="site-header">
		<div class="container">
			<div class="row">
				<!--Modulo Logo -->
				<div class="col-sm-8 nopad">
					<jdoc:include type="modules" name="logo"  style="xhtml"/>
				</div>
				<!--/.Modulo Logo -->
				<div class="col-sm-4 header-right">
					<!-- Modulo Idioma -->
					<jdoc:include type="modules" name="idioma"  style="xhtml"/>
					<!-- ./Modulo Idioma -->
					<!-- Busca -->
					<div class="search_form hidden-xs">
						<form class="navbar-form search_form" role="search" method="get" action="<?php echo $this->baseurl ?>/index.php/component/search/">
							<input autofocus type="search" id="abusca" name="searchword" class="form-control search_form" placeholder="Buscar no site"/>
							<button class='btn btn-small' id="btn-busca"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- ./Busca -->
					<!-- Modulo Social -->
					<jdoc:include type="modules" name="social"  style="xhtml"/>
					<!-- ./Modulo Social -->
				</div>
			</div>
		</div>
		<!--Modulo Menu -->
		<a name="amenu" id="amenu"></a>
		<jdoc:include type="modules" name="menu" />
		<!--/.Modulo Menu -->
	</header>
	<!-- Modulo Slideshow -->
	<!-- Sem Container -->
	<?php if ($this->countModules('topo')) : ?>
		<div class="col-md-12 nopad">
			<jdoc:include type="modules" name="topo"  style="xhtml"/>
		</div>
	<?php endif; ?>
	<!-- Com Container -->
	<?php if ($this->countModules('topo-container')) : ?>
		<div class="topo-container">
			<div class="container nopad">
				<div class="col-md-12 nopad">
					<jdoc:include type="modules" name="topo-container"  style="xhtml"/>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<!-- /.Modulo Slideshow -->
	<!--/.Modulo Breadcrumb -->
	<?php if ($this->countModules('breadcrumb')) : ?>
		<div class="container nopad" id="breadcrumb">
			<div class="page-title clearfix">
				<div class="row">
					<div class="col-md-12">
						<jdoc:include type="modules" name="breadcrumb"  style="xhtml"/>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<!--/.Modulo Breadcrumb -->
	<div class="container">
		<!-- Conteudo -->
		<?php
		if ($this->countModules('esquerda') && $this->countModules('direita')){
			$e = 2;
			$m = 8;
			$d = 2;
		} else if ($this->countModules('esquerda')) {
			$e = 3;
			$m = 9;
			$d = 0;
		} else if ($this->countModules('direita')) {
			$e = 0;
			$m = 9;
			$d = 3;
		} else {
			$e = 0;
			$m = 12;
			$d = 0;
		}
		?>
		<div class="row">
			<a name="aconteudo" id="aconteudo"></a>
			<div class="col-md-<?=$e;?>">
				<jdoc:include type="modules" name="esquerda"  style="xhtml"/>
			</div>
			<div class="col-md-<?=$m;?>">
				<jdoc:include type="modules" name="centro"  style="xhtml"/>
				<jdoc:include type="component"  style="xhtml"/>
				<jdoc:include type="modules" name="debug" />
			</div>
			<div class="col-md-<?=$d;?>">
				<br>
				<jdoc:include type="modules" name="direita"  style="xhtml"/>
			</div>
		</div>
		<!-- /.Conteudo -->
	</div>
	<!-- /.Site Footer -->
	<footer class="site-footer">
		<a name="arodape" id="arodape"></a>
		<div class="container">
			<div class="row fundo-transparente">
				<div class="col-md-4 borda">
					<div class="footer-widget">
						<h4 class="footer-widget-title">Universidade Federal de Santa Maria</h4>
						<p>Av. Roraima nº 1000
							<br />Cidade Universitária
							<br />Bairro Camobi
							<br />Santa Maria - RS
							<br />CEP: 97105-900
							<br />+55 (55) 3220-8000
						</p>
					</div>
				</div>
				<!-- Modulo Footer 1 -->
				<div class="col-md-4 borda">
					<div class="footer-widget">
						<jdoc:include type="modules" name="footer1"  style="xhtml"/>
					</div>
				</div>
				<!-- /.Modulo Footer 1 -->
				<!-- Modulo Footer 2 -->
				<div class="col-md-4">
					<div class="footer-widget">
						<jdoc:include type="modules" name="footer2"  style="xhtml"/>
					</div>
				</div>
				<!-- /.Modulo Footer 2 -->
			</div>
			<!-- Copyright -->
			<div class="bottom-footer">
				<div class="row fundo-transparente">
					<div class="col-md-12">
						<p class="small-text pull-left">Copyright 2017. 
							<a href="http://www.ufsm.br" target="_blank">UFSM</a>
						</p>
						<p class="small-text pull-right">Desenvolvido por: 
							<a href="http://www.cpd.ufsm.br" target="_blank">CPD</a>
						</p>
					</div>
				</div>
			</div>
			<!-- /.Copyright -->
		</div>
	</footer>
	<!-- /.Site-footer -->
	<!-- Importação Barras Governo/UFSM -->
	<script defer="defer" src="https://barra.brasil.gov.br/barra.js" type="text/javascript"></script>
	<script src='http://site.ufsm.br/arquivos/barraAcessibilidade.js'></script>
	<!-- ./Importação Barras Governo/UFSM -->

	<!-- Importação Scripts -->
	<script src="<?php echo $this->baseurl ?>/templates/rebuild/assets/js/custom.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/rebuild/assets/bootstrap/js/bootstrap.min.js"></script> 
	<script src="<?php echo $this->baseurl ?>/templates/rebuild/assets/js/plugins.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/rebuild/assets/js/contraste.js"></script>
	<script src="<?php echo $this->baseurl ?>/modules/mod_cpd_menu/assets/js/cbpHorizontalMenu.min.js"></script>
	<!-- ./Importação Scripts -->
	<!-- Inicialização do Menu -->
	<script>
		$(function() {
			cbpHorizontalMenu.init();
		});
	</script>
	<!-- ./Inicialização do Menu -->
</body>
</html>
