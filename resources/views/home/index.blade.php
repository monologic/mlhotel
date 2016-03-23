<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link rel="stylesheet" href="index/css/reset.css">
    <link rel="stylesheet" href="index/css/animate.css">
    <link rel="stylesheet" href="index/css/style.css">
    <link rel="stylesheet" href="index/css/habitaciones.css">

    <link rel="stylesheet" type="text/css" href="plugins/css/bootstrap.css" />

    <!-- Sliders-->
    <link rel="stylesheet" href="index/css/owl.carousel.css">
    <link rel="stylesheet" href="index/css/owl.theme.css">
    <link rel="stylesheet" href="index/css/owl.transitions.css">
     <!-- text tarea-->
    <link rel="stylesheet" href="index/css/owl.transitions.css">
    <!-- galery-->
   

  <link rel='stylesheet' href='plugins/galery/css/jquery.fancybox.min.css'/>
  
</head>
<style>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
.pie{

  margin-top: 80px;
  display: block;
  position: relative;
  bottom: 0;
  color: white;
  width: 100%;
  background-color: black;
  min-height:200px; 
}

.font-menu{
  font-family: 'Montserrat', sans-serif;
  font-weight: bold;
}

#owl-demo{
    margin-top:100px;
    display: block;

}
#owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}

.gallery
{
    display: inline-block;
    margin-top: 20px;
}
.icon-redes{
  display: inline-block;
  position: relative;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  margin: 30px 20px;
}
.icon-redes:hover{
  width: 57px;
  height: 57px;
  font-size: 1.7rem; 
  transition: all 0.5s ease;
  position: relative;
}
.icon-redes i{
 position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 30%;
  margin: auto;
  font-size: 1.6rem;
}
.inf-footer{
  font-size: 1.2rem;
}
</style>
<body ng-app="homeApp">
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand " href="#"><img src="{{ asset('imagen/hostal.gif') }}" style="width:150px;margin:auto;margin-top:-15px;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="font-menu"><a href="#/">INICIO</a></li>
        <li class="font-menu"><a href="#/habitaciones">HABITACIONES</a></li>
        <li class="font-menu"><a href="#/galeria">GALERIA</a></li>
        <li class="font-menu"><a href="#/noticias">NOTICIAS</a></li>
        <li class="font-menu"><a href="#/contacto">CONTACTO</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


</div>
            
<div ng-view  style="margin-botton:50px"></div>


<footer class="pie row">

<div class="col-md-4 col-sm-6 col-xs-6">
  <img src="{{ asset('imagen/hostal.gif') }}" style="width:50%;margin:35px 25% auto 25%">
</div>
  
<div class="col-md-4 col-sm-6 col-xs-6">
  <p style="font-family: 'Ubuntu', sans-serif; margin-top:30px;margin-left:20%">Nuestras redes sociales:</p>
  <div class="icon-redes" style="background-color:#446CB3">
    <i class="fa fa-facebook" style="width: 20%;"></i>
  </div>
  <div class="icon-redes" style="background-color:#22A7F0 " >
    <i class="fa fa-twitter" style="width: 25%;"></i>
  </div>  
  <div class="icon-redes" style="background-color:#F22613" >
    <i class="fa fa-youtube-play" style="width: 30%;"></i>
  </div>

</div>
  
<div class="col-md-4 col-sm-12 col-xs-12">
  <p style="font-family: 'Ubuntu', sans-serif; margin-top:30px;margin-left:20%">Informacion:</p>
  <p class="inf-footer">Calle Cuzco Nº 454 / Moquegua - Perú</p>
  <p class="inf-footer">E-mail: reservas@residencialmoquegua.com</p>
  <p class="inf-footer">Telf.: 46-2316</p>
  <p class="inf-footer">Cel. Movistar 953970565</p>
  <p class="inf-footer"> Rpm #953970565.</p>
</div>
  
    
</footer>   
     <!-- Llamado a angular-->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-route.min.js"></script>

    <script src="index/js/wow.min.js"></script>  

   
    <!-- Angular-Bootrstrap UI --> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>

     <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="index/js/owl.carousel.js"></script> 
     

    <!--JS principal -->
    <script src="{{ asset('plugins/js/mainHome.js') }}"></script>

    <!--Controladores conectados a la web -->

    <script src="plugins/js/controllers/bannerController.js"></script>  
    <script src="plugins/js/controllers/habtipoController.js"></script>
    <script src="plugins/js/controllers/galeryController.js"></script>
    <script src="plugins/js/controllers/noticiaController.js"></script>
    <script src="plugins/js/directivas/textHtml.js"></script>
  
    <link rel='stylesheet' href='plugins/galery/css/jquery.fancybox.min.css'/>
   <script src="plugins/galery/js/jquery.fancybox.min.js"></script>


   <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
   <script>
    $(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   </script> 

    
    <script>
    new WOW().init();
    
    </script>
</body>
</html>
