 
 <link rel="stylesheet" type="text/css" href="{{ asset('css\app.css') }}">
  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
      <link rel="stylesheet" href="style.css">
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  
 <!--  <p>le menu</p> -->
 <header>
    
    <nav class="navbar">
              <div class="container">
  
                  <!-- Navbar Header [collects both toggle button and navbar brand] -->
                  <div class="navbar-header">
                      <!-- Toggle Button [handles opening navbar menu on mobile screens]-->
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#exampleNavComponents" aria-expanded"false">
                          <i class="glyphicon glyphicon-align-center"></i>
                      </button>
  
                      <!-- Navbar Brand -->
                      <a class="logoimage" href="#">
        <img src="https://tamkine.org/wp-content/uploads/2021/02/cropped-logo.png" alt="..." height="40">
      </a>
                      <a href="https://tamkine.org/fr/" class="navbar-brand">
                          Tamkine.org
                      </a>
                  </div>
  
  
                  <!-- Navbar Collapse [collect navbar components such as navbar links and forms ] -->
                  <div class="collapse navbar-collapse" id="exampleNavComponents">
                
                      <!-- Navbar Button -->
                      <button type="button" class="btn navbar-btn navbar-right">Sign in</button>
                      <!-- Navbar Form -->
                      <form action="#" class="navbar-form navbar-right">
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Rechercher"><button type="button" class="btn btn-primary">
      <i class="fas fa-search"></i>
    </button>
                          </div>
                          
                      </form>
       <!-- Navbar Links -->
       <ul class="nav navbar-nav navbar-left">
         
                          <li><a href="#">
                                  Accueil</a></li>
                                  
                          <li><a href="#">Mes cours </a></li>
                          <li><a href="#">Mes formations</a></li>
                          <li><a href="#">Emploie</a></li>
                          <li><a href="body">À propos</a></li>
                          <li><a href="footer">Contactez-nous</a></li>
                          
                      </ul>
  
                      
                  </div>
              </div>
  
          </nav><!-- /.============= Navbar =============-->
  <script>$(document).ready(function() {
    // Calculating the distance from the top of the page to the initial position of the navbar, and store it in a variable
    var navbarOffest = $(".navbar").offset().top;
  
    $(window).on("scroll", function() {
      var navbarHeight = $(".navbar").outerHeight();
  
      if ($(window).scrollTop() >= navbarOffest) {
        $(".navbar").addClass("navbar-fixed-top");
        $("body").css("padding-top", navbarHeight + "px");
      } else {
        $(".navbar").removeClass("navbar-fixed-top");
        $("body").css("padding-top", "0");
      }
    });
  });</script>
      
      </header>
      <!--  <p>big slide</p> -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      
      <!-- Indicators -->
      <ol class="carousel-indicators">
        
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="https://www.unicef.org/philippines/sites/unicef.org.philippines/files/styles/hero_desktop/public/UNIPH2019008.jpg?itok=CnZKe5zQ" alt="Los Angeles" style="width:100%;">
        </div>
  
        <div class="item">
          <img src="https://pixy.org/src/480/4800346.jpg" alt="Chicago" style="width:100%;">
        </div>
      
        <div class="item">
          <img src="https://photos.bringfido.com/photo/2013/04/28/Benson_Park_021.JPG" alt="New york" style="width:100%;">
        </div>
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>