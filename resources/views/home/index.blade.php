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
</style>
<body ng-app="homeApp">
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header navbar-left">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Habitaciones</a></li>
        <li><a href="#/galeria">Galeria</a></li>
        <li><a href="#">Servicios</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contactos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div ng-controller="bannerController" ng-init="getBanners2();">
            
<div id="owl-demo" class="owl-carousel">

</div>

</div>
            
<div ng-view></div>


<footer class="pie">
    
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
  
    <link rel='stylesheet' href='plugins/galery/css/jquery.fancybox.min.css'/>
   <script src="plugins/galery/js/jquery.fancybox.min.js"></script>

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


    <script>
      $(document).ready(function() {
 
      $("#owl-demo").owlCarousel({

         items : 1,
         autoPlay: true, 
         slideSpeed : 300,
         paginationSpeed : 900,
         singleItem:true,
         navigation: false, 
         responsive: true,
         responsiveRefreshRate : 200,
         responsiveBaseWidth: window,
         singleItem : true,
         transitionStyle : "fade",

        


        jsonPath : '/admin/getBanners2',
        jsonSuccess : customDataSuccess

      });
     
      function customDataSuccess(data){
        var content = "";
        for(var i in data["items"]){
           
         var imagen = data["items"][i].imagen;
     
           content += "<img src=imagen/Sliders/" +imagen+ " style='width:100%;  max-height: 650px;'>"
        }
        $("#owl-demo").html(content);
      }
     
    });


    </script>
</body>
</html>
