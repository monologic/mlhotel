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

    <link rel="stylesheet" type="text/css" href="plugins/css/bootstrap-kira.css" />

    <!-- Sliders-->
    <link rel="stylesheet" href="index/css/owl.carousel.css">
    <link rel="stylesheet" href="index/css/owl.theme.css">
    <link rel="stylesheet" href="index/css/owl.transitions.css">
  
</head>
<style>
#owl-demo{
    top:-80px;
}
#owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}


</style>
<body ng-app="homeApp">
    <nav class="navbar navbar-default" style="z-index:100">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Residencial Moquegua
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
        <div ng-controller="bannerController" ng-init="getBanners2();">
            
            <div id="owl-demo" class="owl-carousel">

          </div>

        </div>
            
        <div ng-view></div>

 

     <!-- Llamado a angular-->

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-route.min.js"></script>

    <script src="index/js/wow.min.js"></script>  
   
    <!-- Angular-Bootrstrap UI --> 


     <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="index/js/owl.carousel.js"></script> 

    <!--JS principal -->
    <script src="{{ asset('plugins/js/mainHome.js') }}"></script>

    <!--Controladores conectados a la web -->

    <script src="plugins/js/controllers/bannerController.js"></script>  
    <script src="plugins/js/controllers/habsubtipoController.js"></script>
    
    <script>
    new WOW().init();
    
    </script>
    <script>
      $(document).ready(function() {
 
      $("#owl-demo").owlCarousel({
         items : 1,
         autoPlay: true, 
         slideSpeed : 300,
         paginationSpeed : 400,
         singleItem:true,
         navigation: true, 
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
     
           content += "<img src=imagen/Sliders/" +imagen+ " style='width:100%'>"
        }
        $("#owl-demo").html(content);
      }
     
    });


    </script>
         
    


</body>
</html>
