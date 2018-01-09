<?php
  if (!isset($_SESSION)) {
    session_start();
  }
  include("conectal.php");

  $consulta = "SELECT nome, telefone, tipoTreino, dataIngre, valorMensalidade FROM tb_cadAluno";
  $con = $liga->query($consulta) or die($liga->error);



  //Deletar sql
  $sql = "DELETE FROM tb_cadAluno WHERE id=$id";

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
<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!--jsgrid css-->
  <link href="js/plugins/jsgrid/css/jsgrid.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/jsgrid/css/jsgrid-theme.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

  <body>


     <div class="navbar-fixed" >
    <nav>
      <div class="nav-wrapper" >
        <a href="index.php" class="brand-logo">Gymnasium</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Menu Inicial</a></li>
      </div>
    </nav>
  </div>



<!--///////////////////////// Tabela Listar Alunos ////////////////////////////////// -->
<div class="divider"></div>
            <div id="responsive-table">
              <h4 class="header">Lista de Alunos</h4>
              <div class="row">
                <div class="col s12">
                <div class="card" >
                    <div class="card-image waves-effect waves-block waves-light">
                  <table class="responsive-table" >
                  <thead>
                    <tr>
                        <th>Opções</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Tipo de Treino</th>
                        <th>Valor da Mensalidade (R$)</th>
                        <th>Data de Pagamento</th>
                        <th>Status do Pagamento</th>
                    </tr>
                    
                  </thead>
                  
                    <tbody><?php while ($dado = $con->fetch_array()) {?>

                    
                      <tr>
                      <td>
                       <p>
                        <a title="Editar" class="btn-floating waves-effect waves-light cyan-dark-2"><i class="mdi-editor-border-color"></i>
                        </a>                        
                        <a title="Excluir" class="btn-floating waves-effect waves-light red"><i class="mdi-action-delete"></i>
                        </a>
                       </p>
                     </td>  
                      <td><?php echo $dado["nome"]; ?></td>
                      <td><?php echo $dado["telefone"]; ?></td>
                      <td><?php echo $dado["tipoTreino"]; ?></td>
                      <td><?php echo $dado["valorMensalidade"];?></td>
                      <td><?php echo $dado["dataIngre"]; ?></td>

                      <!--<td><?php //echo $dado["nome"]; ?></td>-->
                    </tr>
                   
                   <?php }?>
                  </tbody>
                </table>
                </div>
                </div>
                </div>
              </div>
            </div>


            <!-- ////////////// em caso de merda/////////
                    <tbody><?php while ($dado = $con->fetch_array()) {?>

                    
                      <tr>
                      <td><?php //echo $dado["nome"]; ?></td>
                      <td><?php //echo $dado["telefone"]; ?></td>
                      <td><?php //echo $dado["tipoTreino"]; ?></td>
                      <td><?php //echo $dado["dataIngre"]; ?></td>
                      <td><?php //echo $dado["nome"]; ?></td>
                    </tr>
                   
                   <?php }?>-->


          </div>

          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a class="btn-floating btn-large">
                  <i class="mdi-action-stars"></i>
                </a>
                <ul>
                  <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                  <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                  <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                  <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul>
            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->
<!-- ================================================ Footer ================================================ -->


  <!--<footer id="contact" class="page-footer default_color scrollspy">
        <div class="footer-copyright default_color">
          <div class="container" id="txt">
          <span><a class="white-text" href="http://raimundoneto.github.io" target="_blanck">© 2017 Copyright Raimundo Néto.</a> Criado com<a class="white-text" href="http://materializecss.com/" target="_blanck"> MaterializeCSS</a>
          </span>
          </div>
        </div>-->
        
      </footer>
<!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--angularjs-->
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--prism -->
    <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--jsgrid-->
    <script type="text/javascript" src="js/plugins/jsgrid/js/db.js"></script> <!--data-->
    <script type="text/javascript" src="js/plugins/jsgrid/js/jsgrid.min.js"></script>
    <script type="text/javascript" src="js/plugins/jsgrid/js/jsgrid-script.js"></script>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

     <!--editabletable-->
    <script type="text/javascript" src="js/plugins/editable-table/mindmup-editabletable.js"></script>   
    <script type="text/javascript" src="js/plugins/editable-table/numeric-input-example.js"></script>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
        $('#textAreaEditor').editableTableWidget({editor: $('<textarea>')});
        window.prettyPrint && prettyPrint();
    </script>

 </body>
   
</html>