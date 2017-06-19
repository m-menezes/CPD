function loadCSS(url) {
  var base_url = window.location.origin;
  var pathparts = location.pathname.split('/');

  if($("#contraste").length ==1){
    $("#contraste").remove();
    $('body').removeClass('contraste');

    // IMAGEM UFSM NORMAL
    if(base_url == "http://w3.ufsm.br" || base_url == "http://coral.ufsm.br"){
      $(".brasaoUFSM").attr('src', base_url+'/'+pathparts[1]+'/modules/mod_ufsm_logo/images/brasao-cores.png');
    }
    else{
      $(".brasaoUFSM").attr('src', '/modules/mod_ufsm_logo/images/brasao-cores.png');
    }
  }
  else{
    // IMAGEM UFSM CONTRASTE
    if(base_url == "http://w3.ufsm.br" || base_url == "http://coral.ufsm.br"){
      $(".brasaoUFSM").attr('src', base_url+'/'+pathparts[1]+'/modules/mod_ufsm_logo/images/brasao-linhas.png');
    }
    else{
      $(".brasaoUFSM").attr('src', '/modules/mod_ufsm_logo/images/brasao-linhas.png');
    }

    var lnk = document.createElement('link');
    lnk.setAttribute('type', "text/css" );
    lnk.setAttribute('rel', "stylesheet" );
    lnk.setAttribute('id', "contraste" );
    lnk.setAttribute('href', url );       
    $('body').addClass('contraste');
    document.getElementsByTagName("head").item(0).appendChild(lnk);
  }
}