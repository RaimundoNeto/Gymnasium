<?php 
  if (!isset($_SESSION)) {
    session_start();
  }

  if (!isset($_SESSION['usuarioLogado'])) {
    header("Location: login.php");
  }
  include 'conectal.php';

  $consulta = "SELECT titulo, data, detalhes FROM tb_cadLembrete";
  $con = $liga->query($consulta) or die($liga->error);

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

</head>

  <body>


  <div class="navbar-fixed" >
    <nav>
      <div class="nav-wrapper" >
        <a href="index.php" class="brand-logo">Gymnasium</a>
      </div>
    </nav>
  </div>

  <div class="section scrollspy" id="work">
    <div class="container">
        <h4 class="header text_b">Serviços </h4>
        <div class="row">




               
             
             <!--///////////////////////// Menu de Ações ////////////////////////////////////// -->

            <div class="col s12 m4 l4">
                <div class="card" >
                    <div class="card-image waves-effect waves-block waves-light">
                        
                    </div>
                    <div class="card-content" >
                      <span class="card-title activator grey-text text-darken-4" ><a href="cadAluno.php">Cadastrar Alunos</a></span>
                    </div>
               </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4"><a href="listarAluno.php">Listar Alunos</a></span>
                    </div>
               </div>
            </div>
               <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4"><a href="cadLembretes.php">Cadastrar Lembretes</a></span>
                    </div>
               </div>
            </div>


         

            <!--//////////////////////////// Segunda Linha do Menu//////////////////////////////-->
               <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4"><a href="cadProfessor.php">Cadastrar Professores</a></span>
                    </div>
               </div>
            </div>

            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4"><a href="listarProfessor.php">Listar Professores</a></span>
                    </div>
               </div>
            </div>
         
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4"><a href="cad_cliente.php">Setor Financeiro</a></span>
                    </div>
               </div>
            </div>

            <!--//////////////////////////// Menu de Ações - Lembretes ////////////////////////////////////// -->

        <div class="col s12" >
                  <ul id="task-card" class="collection with-header">
                    <li class="collection-header cyan">
                      <h4 class="task-card-title"><a href="listaLembrete.php" class="white-text"> Lembretes</a></h4>
                    </li>

                    <li >
                      
                      <?php while ($dado = $con->fetch_array()) {?>
                    <thead>
                      <tr>
                      <th>
                      <a class="btn-floating waves-effect waves-light red"><i class="mdi-action-delete"></i>Excluir</a>
                        <h6>Local: <?php echo $dado['titulo']; ?>.  Data: <?php echo $dado['data']; ?>. Detalhes: <?php echo $dado['detalhes']; ?>.</h6></th>
                      <p></p>
                      </tr>
                    </thead>

                      <?php }?>
                    </li>
                 
                  </ul>
                </div>

        
            

            <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a title="Opções" class="btn-floating btn-large">
                  <i class="mdi-navigation-menu"></i>
                </a>
                <ul>
                  
                  <!--/////////////////////Botão Sair///////////////////////////// -->
                  <li><a title="Sair" href="logout.php" class="btn-floating red">
                  <i class="large mdi-action-exit-to-app"></i></a></li>
                  
                  <!--//////////////////////Botão Ajuda////////////////////////// -->
                  <li><a title="Ajuda" href="css-helpers.html" class="btn-floating yellow darken-1">
                  <i class="large mdi-communication-live-help"></i></a></li>

                  <!--//////////////////////Botão Perfil////////////////////////// -->
                  <li><a title="Perfil" href="app-widget.html" class="btn-floating green darken-1">
                  <i class="large mdi-device-now-widgets"></i></a></li>

                </ul>
            </div>
            <!-- Floating Action Button -->
     </div>
    </div>
  </div>
        

      
      <!--<footer id="contact" class="page-footer default_color scrollspy">
        <div class="footer-copyright default_color">
          <div class="container" id="txt">
          <span><a class="white-text" href="http://raimundoneto.github.io" target="_blanck">© 2017 Copyright Raimundo Néto.</a> Criado com<a class="white-text" href="http://materializecss.com/" target="_blanck"> MaterializeCSS</a>
          </span>
          </div>
        </div>
        
      </footer>-->
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

 </body>
   
</html>