  <link rel="stylesheet" type="text/css" href="{{ asset('css\owl.carousel.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css\app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css\owl.theme.default.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<html>
  <header>
  <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("navbar-header");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

</script>
        <div class="container-fluid">
            <div class="row" >
                <div class="col-lg-12"id="row">

                    <div class="navbar-header" id="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="https://tamkine.org/fr/" class="navbar-brand">TAMKINE.ORG</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="#">Home</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">About One</a></li>
                                    <li><a href="#">About Two</a></li>
                                    <li><a href="#">About Three</a></li>
                                    <li><a href="#">About Four</a></li>
                                    <li><a href="#">About Five</a></li>
                                    <li><a href="#">About Six</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Welcome</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <form action="" class="navbar-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Sign Up</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </header>
    <body>
    <div class="slideshow-container">
      <div class="mySlides fade">
        
        <img src="https://tamkine.org/wp-content/uploads/2020/10/IMG_8966.jpg" style="width:100%">
        
      </div>
      <div class="mySlides fade">
        
        <img src="https://www.unicef.org/philippines/sites/unicef.org.philippines/files/styles/hero_desktop/public/UNIPH2019008.jpg?itok=CnZKe5zQ" style="width:100%">
        
      
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script>
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
    </script>
    
 <div class="container">
 <div class="row">
   <h3><p style="text-align:center"><b>PRÉSENTATION</b></p></h3>
   <p>&nbsp;</p><p>&nbsp;</p>
  <img src="https://tamkine.org/wp-content/uploads/2020/10/abdelilah-kadili.jpg" alt="Pineapple" style="width:400px;height:235px;margin-right:50px;">
  <div ><h4><p> La Fondation Tamkine est une Organisation Non Gouvernementale à But Non Lucratif. Créée le : 29/10/2015

Le Comité Exécutif de la Fondation Tamkine pour l’Excellence et la Créativité est composé de professeurs universitaires, de spécialistes du secteur de la recherche et de la formation scientifiques, de cadres supérieures de l’administration publique, d’anciens responsables de l’éducation nationale, de militants consacrés à l’amélioration de la qualité de l’éducation, de dirigeants d’entreprises publiques et privées, de spécialistes des Technologies de l’Information et de la Communication,
 toutes et tous justifiant d’une grande expérience et d’une expertise avérée dans le domaine.</p></h4></div>

   <p>&nbsp;</p><p>&nbsp;</p>
   <p></p>
 </div>
<div><h3><p style="text-align:center"><b>NOS ACTUALITÉS</b></p></h3></div>
<script href="{{ asset('js\owl.carousel.js') }}"></script>
<div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})</script>
    </div>
    </body>
    <p>&nbsp;</p><p>&nbsp;</p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<footer>
<div class="">
   <div class="article">
     <div class="left box">
       <div class="upper">
         <div class="topic">About us</div>
         <p>"PakaInfo was founded in January 2018 with the aim of sharing a place for General Information languages articles.</p>
       </div>
       <div class="lower">
         <div class="topic">Contact us</div>
         <div class="phone">
           <a href="#"><i class="fas fa-phone-volume"></i>+007 9898 015*</a>
         </div>
         <div class="email">
           <a href="#"><i class="fas fa-envelope"></i>yourgmaailname@gmail.com</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic">Our Services</div>
       <div><a href="#">Software source aPI, Development</a></div>
       <div><a href="#">Software dev Source code, Reasearch</a></div>
       <div><a href="#">Software User Interface Source code</a></div>
       <div><a href="#">Laravel Development, Source code</a></div>
       <div><a href="#">Mobile Application Source code</a></div>
       <div><a href="#">Blogging & Earning</a></div>
     </div>
     <div class="right box">
       <div class="topic">Subscribe us</div>
       <form action="#">
         <input type="text" placeholder="Enter Your email address">
         <input type="submit" name="" value="Send">
         <div class="media-icons">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-youtube"></i></a>
           <a href="#"><i class="fab fa-linkedin-in"></i></a>
         </div>
       </form>
     </div>
   </div>
   <div class="bottom">
     <p>Copyright © 2022 <a href="#">Pakainfo</a> All rights reserved</p>
   </div>
 </footer>
 </div>
    </div>
</html>