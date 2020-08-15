<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portafolio Hotfix1 feature 1.1</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('tem/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('tem/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{asset('tem/css/freelancer.min.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Inicio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menú
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portafolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
      @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">{{Auth::user()->user_name}}</a>
                    @else
                        <a href="{{ url('/login') }}">Iniciar</a>
                        
                        <a href="{{ route('regiserUserCompany.create') }}">Registar Empresas</a>
                    @endif
                </div>
      @endif
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-fluid" src="{{asset('tem/img/profile.png')}}" alt="">
        <div class="intro-text">
          <span class="name">Diego Alape </span>
          <hr class="star-light">
          <span class="skills">Desarrollador Web - Desarrollador Escritorio -Diseñador Gráfico</span>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Portafolio</h2>
        <hr class="star-primary">
        <div class="row">

           @foreach($publications as $publication)
          <div class="col-sm-4 portfolio-item" >
            <a class="portfolio-link" href="#portfolioModal{{$publication->id}}" data-toggle="modal">
              <div class="caption" >
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-responsive" src="{{asset('tem/img/portfolio/'. $publication->image)}}" alt="" width="100%" height="320px">
            </a>
          </div>


          

          @endforeach
        </div>
      </div>
      
    </section>
    {!! $publications-> render() !!}
    <!-- About Section -->
    <section class="success" id="about">
      <div class="container">
        <h2 class="text-center">Acerca De</h2>
        <hr class="star-light">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p>Diego Fernando Alape Bermudez es un estudiante de ADSI(Análisis y desarrollo de sistemas de infrmación) el cual cuenta con experiencia de un año en lenguajes de programación tales como JAVA, PHP, ASP.NET, C++ y muchos otros</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p>Ha trabajado en proyectos para la comunidad más querida por los colombianos el SENA, tambien para pequeños locales como lo es LA EXTREMA, pero sé acoplarme a cualquier metodología, Aquí encontrarán reseñas de libros y muchas cosas de interes, Contactame!.</p>
          </div>
          
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center">Contactame Me</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Nombre</label>
                  <input class="form-control" id="name" name="name" type="text" placeholder="Nombre" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Correo electrónico</label>
                  <input class="form-control" id="email" name="email" type="email" placeholder="Correo electrónico" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Número Telefónico</label>
                  <input class="form-control" id="phone" name="phone" type="tel" placeholder="Número Telefónico" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Mensaje</label>
                  <textarea class="form-control" id="message" name="message" rows="5" placeholder="Mensaje" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Ubicación</h3>
              <p>Aldemar Rojas plazas
                <br>Aldemar Rojas plazas, 1</p>
            </div>
            <div class="footer-col col-md-4">
              <h3>En las redes</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://www.facebook.com/diego.alape.16">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://plus.google.com/u/0/106459367744511016715">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="https://twitter.com/diegoestrada_o?lang=es">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>About Freelancer</h3>
              <p>Freelance is a free to use, open source Bootstrap theme created by
                <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Diego Alape 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->
    @foreach($publications as $publication)
<div class="portfolio-modal modal fade" id="portfolioModal{{$publication->id}}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>{{$publication->title}}</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="{{asset('tem/img/portfolio/' . $publication->image)}}" alt="">
                  <p>{!!$publication->description!!}</p>
                  <ul class="list-inline item-details">
                    <li>Empresa:
                      <strong>
                        <a href="http://startbootstrap.com">{{$publication->company->name}}</a>
                      </strong>
                    </li>
                    <li>Fecha:
                      <strong>
                        <a href="http://startbootstrap.com">{{$publication->date}}</a>
                      </strong>
                    </li>
                    <li>Tags:
                      <strong>
                        
                        <a href="http://startbootstrap.com">
                          @foreach($publication->tags as $i)
                          {{$i->name}},
                          @endforeach
                        </a>
                        
                      </strong>
                    </li>
                    <li>Autor:
                      <strong>
                        {{$publication->user->name}} {{$publication->user->last_name}}
                        
                      </strong>
                    </li>
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endforeach
    


  
    

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('tem/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('tem/vendor/popper/popper.min.js')}}"></script>
    <script src="{{asset('tem/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('tem/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{asset('tem/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('tem/js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('tem/js/freelancer.min.js')}}"></script>

  </body>

</html>
