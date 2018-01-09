<?php 
  if (!isset($_SESSION)) {
    session_start();
  }
  include 'conectal.php';
?>



<!DOCTYPE html>
<html lang="pt-br"

<!--================================================
  Autor: Raimundo Neto & Francisco Gerlison
================================================================================-->

<head>
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <link rel="shortcut icon" href="images/login-logo-01.png">
  <title>Gymnasium | Sistema de Gerenciamento para Academias</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->

  <!-- CORE CSS-->
  
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS  
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection"> 

  <!-- CSS  Serviços-->
    <link href="min/plugin.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >

   <!-- Compiled and minified CSS -
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

   <!-- //////// Meu CSS /////-->
 <link rel="stylesheet" type="text/css" href="css/myStyle.css"> 

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  <body>

<div class="navbar-fixed" >
    <nav>
      <div class="nav-wrapper" >
        <a href="index.php" class="brand-logo">Gymnasium</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Menu Inicial</a></li>
      </ul>
      </div>
    </nav>
  </div>

  

  <!--///////////// Start - Formulario de Cadastro de aluno /////////////////-->
  <div class="container">
    <div class="section">
    <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">Cadastro de Aluno</h4>
                <div class="row">
                  <form class="col s12" method="POST" action="processa.php">
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="first_name" type="text" name="nome" required>
                        <label for="first_name">Nome</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="last_name" type="text" name="endereco" required>
                        <label for="last_name">Endereço</label>
                      </div>
                    </div>
                    <div class="row">   
                      <div class="input-field col s6">
                        <input id="Telefone" type="text" name="telefone" required>
                        <label for="last_name">Telefone</label>
                      </div>
                      <div class="input-field col s6">
                      <input type="text" name="valorMensalidade" required onkeypress="return(MascaraMoeda(this,'.',',',event))">
                        <label for="last_name">Valor da Mensalidade R$</label>
                      </div>
                    </div>
                    <div class="row">
                    <div class="input-field col s4">
                        <input  id="CPF" type="text"  name="cpf" >
                        <label >CPF</label>
                      </div>
                      <div class="input-field col s4">
                        <input id="email5" type="email" name="email">
                        <label for="email">E-mail</label>
                      </div>
                       <div class="input-field col s4">
                          <input placeholder="01/01/2017" id="date-demo2" type="text" name="dataNasci" required>
                          <label for="date_demo2">Data de Nascimento</label>
                        </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <select name="tipoTreino" required>
                          <option value="" disabled selected>Clique para selecionar</option>
                          <option multiple value="Funcional">Funcional</option>
                          <option value="Hipertrofia Muscular">Hipertrofia Muscular</option>
                          <option value="Resistência Muscular">Resistência Muscular</option>
                          <option value="Jiu-Jitsu">Jiu-Jitsu</option>
                          <option value="Muay Thay">Muay Thay</option>
                          <option value="Zumba">Zumba</option>
                        </select>
                        <label>Tipo de Treino</label>
                      </div>  

                      <div class="input-field col s6">
                          <input placeholder="01/01/2017" id="date-demo1" type="text" name="dataIngre" required>
                          <label for="date_demo1">Data de Ingresso</label>
                        </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="message5" class="materialize-textarea" length="120" name="observacoes"></textarea>
                        <label for="message">Observações</label>
                      </div>
                      <div class="row">
                      <div class="input-field col s12 l10">
                          <button id="botaoForm" class="btn red waves-effect waves-light right" type="reset" name="action">Limpar Campos
                          </button>
                      </div>
                      <div class="input-field col  s12 l2">
                          <button  class="btn green waves-effect waves-light right" type="submit" name="action">Cadastrar
                          </button>
                      </div>
                        
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      
    </div>
  </div>

<!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a title="Opções" class="btn-floating btn-large">
                  <i class="mdi-navigation-menu"></i>
                </a>
                <ul>
                  
                  <!--/////////////////////Botão Sair///////////////////////////// -->
                  <li><a title="Sair" href="sair.php" class="btn-floating red">
                  <i class="large mdi-action-exit-to-app"></i></a></li>
                  
                  <!--//////////////////////Botão Ajuda////////////////////////// -->
                  <li><a title="Ajuda" href="ajuda.php" class="btn-floating yellow darken-1">
                  <i class="large mdi-communication-live-help"></i></a></li>

                  <!--//////////////////////Botão Perfil////////////////////////// -->
                  <li><a title="Perfil" href="perfil.php" class="btn-floating grey darken-1">
                  <i class="large mdi-device-now-widgets"></i></a></li>

                </ul>
            </div>
            <!-- Floating Action Button -->

<!--//////////////////////// Footer ////////////////////////////////// 
<footer id="contact" class="page-footer default_color scrollspy">
        <div class="footer-copyright default_color">
          <div class="container" id="txt">
          <div class="col s12 m12 l12">
            © 2017 Copyright<a class="white-text" href="http://raimundoneto.github.io" target="_blanck"> Raimundo Néto</a>. Criado com<a class="white-text" href="http://materializecss.com/" target="_blanck"> MaterializeCSS</a>
          </div>
        </div>
        </div>
       </div>
      </footer>-->




      <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

    <script type="text/javascript" src="js/plugins/formatter/jquery.formatter.min.js"></script>   
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

    <script type="text/javascript">
        // Basic
         $('#date-demo1').formatter({
          'pattern': '{{99}}/{{99}}/{{9999}}',
        });
        $('#date-demo2').formatter({
          'pattern': '{{99}}/{{99}}/{{9999}}',
        });
        $('#Telefone').formatter({
          'pattern': '({{99}}) {{9}}.{{9999}}-{{9999}}',
        })
        $('#CPF').formatter({
          'pattern': '{{999}}.{{999}}.{{999}}-{{99}}',
        });

    //Mascara para moeda
    function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var sep = 0;
    var key = '';
    var i = j = 0;
    var len = len2 = 0;
    var strCheck = '0123456789';
    var aux = aux2 = '';
    var whichCode = (window.Event) ? e.which : e.keyCode;
    if (whichCode == 13) return true;
    key = String.fromCharCode(whichCode); // Valor para o código da Chave
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida
    len = objTextBox.value.length;
    for(i = 0; i < len; i++)
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
    aux = '';
    for(; i < len; i++)
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
    aux += key;
    len = aux.length;
    if (len == 0) objTextBox.value = '';
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
    if (len > 2) {
        aux2 = '';
        for (j = 0, i = len - 3; i >= 0; i--) {
            if (j == 3) {
                aux2 += SeparadorMilesimo;
                j = 0;
            }
            aux2 += aux.charAt(i);
            j++;
        }
        objTextBox.value = '';
        len2 = aux2.length;
        for (i = len2 - 1; i >= 0; i--)
        objTextBox.value += aux2.charAt(i);
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
    }
    return false;
}
</script>
</body>
</head>
</html>
        
    </script>
  </body>
  </html>