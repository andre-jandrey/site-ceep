<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>CEEP - Cascavel</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.gif" rel="icon">
  <link href="img/ceep-touch-icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--====================================
        Barra superior telefone e email
  ========================================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> 
        <a href="mailto:admin@ceepcascavel.com.br">admin@ceepcascavel.com.br</a>
        <i class="fa fa-phone"></i> +55 (45) 3226-2369
      </div>
      <div class="social-links float-right">
        <a href="https://twitter.com/Ceep_Cvel" class="twitter">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="https://www.facebook.com/ceepcascavel" class="facebook">
          <i class="fa fa-facebook"></i>
        </a>
        <!-- <a href="#" class="instagram"><i class="fa fa-instagram"></i></a> -->
        <a href="https://plus.google.com/115902271682364911708/" class="google-plus">
          <i class="fa fa-google-plus"></i>
        </a>
        <a href="https://www.youtube.com/results?search_query=ceep+cascavel" class="linkedin">
          <i class="fa fa-youtube-play"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#body" class="scrollto">CEEP<span>Cascavel</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <img src="{{ assets('img/logo.jpg') }}" class="logo" alt="" title="" />
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">In??cio</a></li>
          <!-- <li class="menu-has-children"><a href="#">Cursos</a>
            <ul>
              <li><a href="#"><span class="administracao"></span></a></li>
              <li><a href="#"><span class="edificacoes"></span></a></li>
              <li><a href="#"><span class="eletromecanica"></span></a></li>
              <li><a href="#"><span class="eletronica"></span></a></li>
              <li><a href="#"><span class="enfermagem"></span></a></li>
              <li><a href="#"><span class="informatica"></span></a></li>
              <li><a href="#"><span class="meio_ambiente"></span></a></li>
              <li><a href="#"><span class="seguranca_trabalho"></span></a></li>
            </ul>
 -->
            <!-- <ul>
              <li><a href="#">Administra????o</a></li>
              <li><a href="#">Edifica????es</a></li>
              <li><a href="#">Eletromec??nica</a></li>
              <li><a href="#">Eletr??nica</a></li>
              <li><a href="#">Enfermagem</a></li>
              <li><a href="#">Especializa????o em Enfermagem</a></li>
              <li><a href="#">Inform??tica</a></li>
              <li><a href="#">Meio Ambiente</a></li>
              <li><a href="#">Seguran??a do trabalho</a></li>
            </ul> 
          </li>-->
          <li><a href="#about">Not??cias</a></li>
          <li><a href="#team">Links ??teis</a></li>
          <li><a href="#secretaria">Secretaria</a></li>
          <li><a href="#contato">Contato</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">??rea restrita</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->



  <!--Modal box-->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-center form-title">Login</h3>
         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Por favor informe seus dados para acessar a ??rea restrita</p>
            <div class="form-group">
              <form name="" id="loginForm">
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="modal-footer">
                <div class="row">
                  <div class="col-xs-12">
                    <button type="button" class="btn btn-green btn-flat">Entrar</button>
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
  <!--/ Modal box-->

    <section id="cursos">
        <div class="container">
            <ul class="row ml-0">
            <a class="col-lg col-md-3 col-sm-3 col-3" href="#"><li class="administracao"><span ></span></li></a>
            <a class="col-lg col-md-3 col-sm-3 col-3" href="#"><li class="edificacoes"><span ></span></li></a>
            <a class="col-lg col-md-3 col-sm-3 col-3" href="#"><li class="eletromecanica"><span ></span></li></a>
            <a class="col-lg col-md-3 col-sm-3 col-3" href="#"><li class="eletronica"><span ></span></li></a>
            <a class="col-lg col-md-3 col-sm-3 col-3" href="#"><li class="enfermagem"><span ></span></li></a>
            <a class="col-lg col-md-3 col-sm-3 col-3" href="#"><li class="informatica"><span ></span></li></a>
            <a class="col-lg col-md-3 col-sm-3 col-3" href="#"><li class="meio_ambiente"><span ></span></li></a>
            <a class="col-lg col-md-3 col-sm-3 col-3" href="#"><li class="seguranca_trabalho"><span ></span></li></a>
        </ul>
    </section>

  <main id="main">


    <!--==========================
      Cursos Section
    ============================-->
    <section id="cursos" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Cursos</h2>
            </div>
            <div class="testimonial-item">
                <img src="img/cursos/informatica_colorida.png" class="testimonial-img" alt="">
                <h2>Inform??tica</h2>
                <div class="testimonial-item">
                    <h3>Objetivo</h3>
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Organizar experi??ncias pedag??gicas que levem ?? forma????o de sujeitos cr??ticos e conscientes, capazes de intervir de maneira respons??vel na sociedade em que vivem; Oferecer um processo formativo que assegure a integra????o entre a forma????o geral e a de car??ter profissional de forma a permitir tanto a continuidade nos estudos como a inser????o no mundo do trabalho; Articular conhecimentos cient??ficos e tecnol??gicos das ??reas naturais e sociais estabelecendo uma abordagem integrada das experi??ncias educativas; Oferecer um conjunto de experi??ncias te??rico-pr??ticas na ??rea de inform??tica com a finalidade de consolidar o ???saber fazer???. Formar para o exerc??cio da cidadania, com entendimento da realidade social, econ??mica, pol??tica e cultural do mundo do trabalho, para a atua????o de forma ??tica como sujeito hist??rico; Proporcionar a forma????o de um profissional capaz de identificar os elementos b??sicos da inform??tica, os sistemas operacionais, as diferentes linguagens de programa????o e os elementos de qualidade de softwares, multim??dia, conhecimento t??cnico para aperfei??oar e desenvolver a automa????o das tarefas relacionadas ao cotidiano da vida profissional; Preparar profissional de n??vel t??cnico com capacidade par criar e manter projetos de softwares simples; Fornecer ao educando a compet??ncia para preparar o ambiente computacional para instala????o/opera????o de sistemas; Formar profissional com compet??ncia para especificar sistemas computacionais; Destacar em todo o processo educativo a import??ncia da preserva????o dos recursos e do equil??brio ambiental.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                    <h3>Perfil</h3>
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        O T??cnico em Inform??tica, domina conte??dos e processos b??sicos relevantes do conhecimento cient??fico, tecnol??gico, cultural e das diferentes modalidades de linguagem necess??rias para a autonomia intelectual e moral. O T??cnico em Inform??tica estar?? apto para desenvolver programas de computador, seguindo as especifica????es e paradigmas da l??gica de programa????o e das linguagens de programa????o. Utiliza ambientes de desenvolvimentos de sistemas, sistemas operacionais e banco de dados. Realiza testes de software, mantendo registro que possibilitem an??lises e refinamento dos resultados. Executa manuten????o de programas de computadores implantados.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                    <!-- <h3>Matriz curricular</h3>
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Em breve...
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p> -->
                    <br>
                    <br>
                    <br>
                    <br>
                </div>

            </div>
        </div>
    </section><!-- #cursos -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Copyright ?? 2018  <strong>CEEP - Pedro Boaretto Neto</strong>. Todos os direitos reservados
      </div>
      <div class="credits">
        <a href="https://westsoftware.com.br/"><img src="img/links/westsoftware.png" alt="westsoftware.com.br" width="150"></a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-xWexz1U57F9FvJsWM5CaP78JuV1fkV8"></script>-->
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
