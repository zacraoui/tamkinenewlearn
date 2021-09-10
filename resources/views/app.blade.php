
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
<html>
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
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Contactez-nous</a></li>
                        
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
<!--  <p>présentation</p> -->
<body>
 <div class="container">
 <div class="row">
   <h3><p style="text-align:center"><b>PRÉSENTATION</b></p></h3>
   <p>&nbsp;</p><p>&nbsp;</p>
  <img src="https://tamkine.org/wp-content/uploads/2020/10/abdelilah-kadili.jpg" alt="Pineapple" style="width:400px;height:235px;margin-right:50px;">
  <div ><h4><p> La Fondation Tamkine est une Organisation Non Gouvernementale à But Non Lucratif. Créée le : 29/10/2015

Le Comité Exécutif de la Fondation Tamkine pour l’Excellence et la Créativité est composé de professeurs universitaires, de spécialistes du secteur de la recherche et de la formation scientifiques, de cadres supérieures de l’administration publique, d’anciens responsables de l’éducation nationale, de militants consacrés à l’amélioration de la qualité de l’éducation, de dirigeants d’entreprises publiques et privées, de spécialistes des Technologies de l’Information et de la Communication,
 toutes et tous justifiant d’une grande expérience et d’une expertise avérée dans le domaine.</p></h4></div>

   <p>&nbsp;</p>
   <p></p>
 </div>
 <!--  <p>NOS NOUVEAUTÉS</p> -->
 <div>
 <div><h3><p style="text-align:center"><b>NOS NOUVEAUTÉS</b></p></h3></div>
<p>&nbsp;</p>
    <div class="slider owl-carousel">
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Briana Tozour</div>
          <div class="sub-title">Graphic Designer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Pricilla Preez</div>
          <div class="sub-title">Web Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Pricilla Preez</div>
          <div class="sub-title">Web Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Pricilla Preez</div>
          <div class="sub-title">Web Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Eliana Maia</div>
          <div class="sub-title">App Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>
</div>
 <!--  <p>NOS ACTUALITÉS</p> -->
 <div><h3><p style="text-align:center"><b>NOS ACTUALITÉS</b></p></h3></div>
<p>&nbsp;</p>
    <div class="slider owl-carousel">
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Briana Tozour</div>
          <div class="sub-title">Graphic Designer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Pricilla Preez</div>
          <div class="sub-title">Web Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Pricilla Preez</div>
          <div class="sub-title">Web Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Pricilla Preez</div>
          <div class="sub-title">Web Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Eliana Maia</div>
          <div class="sub-title">App Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>
    <!--  <p>NOS PROGRAMMES</p> -->
    <div><h3><p style="text-align:center"><b>NOS PROGRAMMES</b></p></h3></div>
<p>&nbsp;</p>
    <div class="slider owl-carousel">
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Briana Tozour</div>
          <div class="sub-title">Graphic Designer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Pricilla Preez</div>
          <div class="sub-title">Web Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Pricilla Preez</div>
          <div class="sub-title">Web Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Pricilla Preez</div>
          <div class="sub-title">Web Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Eliana Maia</div>
          <div class="sub-title">App Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>

<!--  <p> NOS PLATEFORMES</p> -->
<div><h3><p style="text-align:center"><b>NOS PLATEFORMES</b></p></h3></div>
<p>&nbsp;</p>
    <div class="slider owl-carousel">
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Briana Tozour</div>
          <div class="sub-title">Graphic Designer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Pricilla Preez</div>
          <div class="sub-title">Web Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Pricilla Preez</div>
          <div class="sub-title">Web Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Pricilla Preez</div>
          <div class="sub-title">Web Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img"><img src="https://th.bing.com/th/id/R.6bb12396b6b6ace47bba3c63596ce252?rik=%2f3tJfPOtsNhK3g&pid=ImgRaw&r=0" alt=""></div>
        <div class="content">
          <div class="title">Eliana Maia</div>
          <div class="sub-title">App Developer</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>

</div>
<!--  <p> NOS PLATEFORMES</p> -->

</body>
<!--  <p>footer</p> -->
<footer>

    <div id="waterdrop"></div>
    <footer>
      <div class="footer-top">
        <div class="pt-exebar">

        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 footer-col-3">
              <div class="widget footer_widget">
                <h5 class="footer-title">Address</h5>
                <div class="gem-contacts">
                  <div class="gem-contacts-item gem-contacts-address">Corporate Office :<br> Doon House, B-275(A), First floor
                    Sector-57, Shushant Lok 3
                    Near Hong Kong Bazzar, Gurugram Pin 122001, Haryana.
                  </div>
                  <div class="gem-contacts-item gem-contacts-phone"><i class="fa fa-phone" aria-hidden="true"></i> Phone: <a href="">+91-9122588799</a></div>

                  <div class="gem-contacts-item gem-contacts-address mt-2">Reg. Office :<br> Doon House, D2/3,
                    4th Floor, Chandra Tower, IDBI Bank Building
                    Dimna Road, Mango, Jamshedpur-831012, Jharkhand.</div>
                  <div class="gem-contacts-item gem-contacts-phone"><i class="fa fa-phone" aria-hidden="true"></i> Phone: <a>+91 9122588799</a></div>

                </div>
              </div>

            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="widget footer_widget">
                    <h5 class="footer-title">Recent News</h5>
                    <ul class="posts  styled">
                      <li class="clearfix gem-pp-posts">
                        <div class="gem-pp-posts-text">
                          <div class="gem-pp-posts-item">
                            <a href="#">Want to start Your Own Play School.
                            </a>
                          </div>
                          <div class="gem-pp-posts-date">Call +91-9122588799</div>
                        </div>
                      </li>
                      <li class="clearfix gem-pp-posts">
                        <div class="gem-pp-posts-text">
                          <div class="gem-pp-posts-item">
                            <a href="#">Now we are in Faridabad,Now we are in DaudNagar.
                            </a>
                          </div>
                          <div class="gem-pp-posts-date">Call +91-9122588799, +91-9122588799</div>
                        </div>
                      </li>
                      <li class="clearfix gem-pp-posts">
                        <div class="gem-pp-posts-text">
                          <div class="gem-pp-posts-item">
                            <a href="">Now we are in Ranchi, Admission open
                            </a>
                          </div>
                          <div class="gem-pp-posts-date">Call +91-9122588799, +91-9122588799</div>
                        </div>
                      </li>

                    </ul>
                  </div>
                </div>
                <div class="col-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="widget">
                    <h5 class="footer-title">Email Us</h5>
                    <div class="textwidget">
                      <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">

                        <form method="post" class="wpcf7-form" novalidate="novalidate">

                          <div class="contact-form-footer">
                            <p><span class="wpcf7-form-control-wrap your-first-name"><input type="text" name="your-first-name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Your name"></span></p>
                            <p><span class="wpcf7-form-control-wrap your-email_1"><input type="email" name="your-email_1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Your email"></span></p>
                            <p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your message"></textarea></span></p>
                            <div><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
              <div class="widget widget_gallery gallery-grid-4">
                <h5 class="footer-title">Our Gallery</h5>
                <ul class="magnific-image">

                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                  <li><a class="magnific-anchor"><img src="https://images.unsplash.com/photo-1477239439998-839196943351?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">

            <div class="col-md-3">
              <div class="footer-site-info">2020 © <a href="https://www.youtube.com/watch?v=pdr4IzBpacI&t=34s" target="_blank">Top HTML & CSS Program </a></div>
            </div>

            <div class="col-md-6">
              <nav id="footer-navigation" class="site-navigation footer-navigation centered-box" role="navigation">
                <ul id="footer-menu" class="nav-menu styled clearfix inline-inside">
                  <li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26"><a href="#">Support</a></li>
                  <li id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27"><a href="#">Contact Us</a></li>
                  <li id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28"><a href="#">Disclaimer</a></li>
                  <li id="menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29"><a href="#">Add more</a></li>
                </ul>
              </nav>
            </div>

            <div class="col-md-3">
              <div id="footer-socials">
                <div class="socials inline-inside socials-colored">

                  <a href="#" target="_blank" title="Facebook" class="socials-item">
                    <i class="fab fa-facebook-f facebook"></i>
                  </a>
                  <a href="#" target="_blank" title="Twitter" class="socials-item">
                    <i class="fab fa-twitter twitter"></i>

                  </a>
                  <a href="#" target="_blank" title="Instagram" class="socials-item">
                    <i class="fab fa-instagram instagram"></i>
                  </a>
                  <a href="#" target="_blank" title="YouTube" class="socials-item">
                    <i class="fab fa-youtube youtube"></i>
                  </a>
                  <a href="#" target="_blank" title="Telegram" class="socials-item">
                    <i class="fab fa-telegram telegram"></i>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </footer>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>

 <script> jQuery('#waterdrop').raindrops({color:'#1c1f2f', canvasHeight:150, density: 0.1, frequency: 20});
</script>

    



 
   

