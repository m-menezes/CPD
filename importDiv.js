<script type="text/javascript">
    $(function(){
       $.ajax({
          url: 'http://site.ufsm.br/', // página da requisição externa
          type: 'GET',
          // parâmetro "html" vem com o conteúdo da página completo
          success: function(html) {

           // Pegamos somente <li> da página externa
            var $lis = $(html).find('#agenda');
            var $bus = $(html).find('#onibus');

           // Mandamos para o elemento de id "cabecalho" da nossa página
            $("#agenda1").html($lis);
            $("#bus").html($bus);
        }
      }); 
    });
    </script>
