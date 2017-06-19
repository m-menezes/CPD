(function() {
	var base_url = window.location.host;
	var pathparts = location.pathname.split('/');
	// CORAL e CORALX
	if(base_url == "w3.ufsm.br" || base_url == "coral.ufsm.br"){
		var acessi_url = '/'+pathparts[1]+'/index.php/acessibilidade';
		var mapa_url = '/'+pathparts[1]+'/index.php/mapa-do-site';
		var css_url = '/'+pathparts[1]+'/templates/rebuild/assets/css/altocontraste.css';
	}

	// W4
	else{
		var acessi_url = '/index.php/acessibilidade';
		var mapa_url = '/index.php/mapa-do-site';
		var css_url = '/templates/rebuild/assets/css/altocontraste.css';
	}
	base_url = window.location.origin;
	var e = '<div class="container barra-container nopad"><div class="col-sm-7 col-md-7 hidden-xs nopad"><ul class="list-left"><li class="list-item"><a accesskey="1" href="#aconteudo" id="link-conteudo" onclick="$(" #aconteudo").focus();"="">Ir para o conteúdo<span>1</span></a></li><li class="list-item"><a accesskey="2" href="#amenu" id="link-navegacao" onclick="$(" #amenu").focus();"="">Ir para o menu<span>2</span></a></li><li class="list-item"><a accesskey="3" href="#abusca" id="link-buscar" onclick="$(" #busca").focus();"="">Ir para a busca<span>3</span></a></li><li class="list-item"><a accesskey="4" href="#arodape" id="link-rodape" onclick="$(" #arodape").focus();"="">Ir para o rodapé<span>4</span></a></li></ul></div><div class="col-sm-5 col-md-5 nopad"><ul class="list-right"><li class="list-item list-link"><a href="'+base_url+acessi_url+'">Acessibilidade</a></li><li class="list-item list-link"><a href="'+base_url+mapa_url+'">Mapa do Site</a></li><li class="list-item"><a accesskey="5" href="#acontraste" id="link-contraste">Alto contraste</a></li><li class="list-item"><a id="fontSmall" href="#">A-</a></li><li class="list-item"><a id="fontDefault" href="#">A</a></li><li class="list-item"><a id="fontLarge" href="#">A+</a></li></ul></div></div>',
	t, n, r, i, s, o, u;
	n = document.getElementById("barra-acessibilidade"), r = document.getElementsByTagName("head")[0], t = document.getElementsByTagName("body")[0], o = document.createElement("link"), i = document.createAttribute("href"), s = document.createAttribute("id"), s.nodeValue = "barra-acessibilidade", n.setAttributeNode(s), n.innerHTML = e, window._barraufsm = {
		insere_css: function(e) {
			var t, n, i;
			return n = document.createElement("style"), i = document.createAttribute("type"), i.nodeValue = "text/css", t = document.createAttribute("media"), t.nodeValue = "all", n.setAttributeNode(i), n.setAttributeNode(t), n.styleSheet ? n.styleSheet.cssText = e : n.appendChild(document.createTextNode(e)), r.appendChild(n)
		}
	};
	$("#link-contraste").click(function(){
		loadCSS(base_url+css_url);
	});
	var r, a, f, l;
	r = document.getElementsByTagName("head")[0], a = document.createElement("script"), l = document.createAttribute("type"), l.nodeValue = "text/javascript", f = document.createAttribute("src"), f.nodeValue = "", a.setAttributeNode(l), a.setAttributeNode(f), r.appendChild(a)
})(), window._barraufsm.insere_css('@font-face{ font-family:"ZapfHumnstBTRoman";font-style:normal;font-weight:700;src:local("ZapfHumnstBTRoman"),local("ZapfHumnstBTRoman"),url("http://site.ufsm.br/arquivos/static/font/zhum601n-webfont.woff") format("woff");}.list-item {display: inline-block;padding:5px;}#barra-acessibilidade {font-size: 11px;padding-top:3px;}.list-left, .list-right {margin: 0px;padding: 0px;}.list-right {text-align: right;}.list-item span {font-weight: 700;background-color: #005285;color: white;padding: 1px 2px;margin-left: 5px;}.list-link{text-decoration: underline;}@media (max-width: 992px){.barra-container {width: 100%}}@media (max-width:768px){.list-right{text-align:center !important;}}');


