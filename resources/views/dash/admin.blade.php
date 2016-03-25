<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <meta name="description" content="Blueprint: A basic template for a responsive multi-level menu" />
    <meta name="keywords" content="blueprint, template, html, css, menu, responsive, mobile-friendly" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="favicon.ico">

    <script src="plugins/angular/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->

    <!-- Optional theme -->
    
    <link rel="stylesheet" type="text/css" href="plugins/css/bootstrap.css" />
    <!-- Latest compiled and minified JavaScript -->
    <script src="plugins/js/bootstrap.min.js"></script>
    <!-- food icons -->
    <link rel="stylesheet" type="text/css" href="plugins/multilevel/css/organicfoodicons.css" />
    <link rel="stylesheet" type="text/css" href="plugins/css/kira.css" />
    <!-- demo styles -->
     <link rel="stylesheet" href="plugins/Trumbowyg/ui/trumbowyg.min.css">
    <link rel="stylesheet" type="text/css" href="plugins/multilevel/css/demo.css" />
    <!-- menu styles -->
    <link rel="stylesheet" type="text/css" href="plugins/multilevel/css/component.css" />
    <script src="plugins/multilevel/js/modernizr-custom.js"></script>
</head>

<body ng-app="tutorialWebApp">
    <!-- Main container -->
    <div class="container">
        <!-- Blueprint header -->
        
        <button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
        <nav id="ml-menu" class="menu">
            <div class="dummy-logo">
                <div class="dummy-icon foodicon foodicon--coconut"></div>
                <h2 class="dummy-heading">Fooganic</h2>
            </div>
            <button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
            <div class="menu__wrap">
                <ul data-menu="main" class="menu__level">
                    <li class="menu__item"><a class="menu__link"  href="#">Reservas</a></li>  
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-2" href="#">Registrar</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-3" href="#">Habitaciones</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-4" href="#">Clientes</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-5" href="#">Servicios</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-6" href="#">Usuarios</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-7" href="#">Empleado</a></li>

                     @if (Auth::user()->usuariotipo->nombre=="Root")

                        <li class="menu__item"><a class="menu__link" data-submenu="submenu-8" href="#">Adminstrador</a></li>

                    @endif
                </ul>
                <!-- Submenu 1 -->
                <ul data-menu="submenu-1" class="menu__level">
                    <li class="menu__item"><a class="menu__link" href="#">Ver Empleados</a></li>
                    <li class="menu__item"><a class="menu__link" href="#/Empleados/crear">Crear Empleado</a></li>
                    <li role="separador" class="menu__item"><a class="menu__separador" href="#"></a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Ver Cargos</a></li>
                    <li class="menu__item"><a class="menu__link" href="#/Cargos/crear">Crear Cargo</a></li>
                </ul>
                <!-- Submenu 2 -->
                <ul data-menu="submenu-2" class="menu__level">
                    <li class="menu__item"><a class="menu__link" href="#">Citrus Fruits</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Berries</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-2-1" href="#">Special Selection</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Tropical Fruits</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Melons</a></li>
                </ul>
                <!-- Submenu 2-1 -->
                <ul data-menu="submenu-2-1" class="menu__level">
                    <li class="menu__item"><a class="menu__link" href="#">Exotic Mixes</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Wild Pick</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Vitamin Boosters</a></li>
                </ul>
                <!-- Submenu 3 -->
                <ul data-menu="submenu-3" class="menu__level">
                    <li class="menu__item"><a class="menu__link" href="#">Buckwheat</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Millet</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Quinoa</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Wild Rice</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Durum Wheat</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-3-1" href="#">Promo Packs</a></li>
                </ul>
                <!-- Submenu 3-1 -->
                <ul data-menu="submenu-3-1" class="menu__level">
                    <li class="menu__item"><a class="menu__link" href="#">Starter Kit</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">The Essential 8</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Bolivian Secrets</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Flour Packs</a></li>
                </ul>
                <!-- Submenu 4 -->
                <ul data-menu="submenu-4" class="menu__level">
                    <li class="menu__item"><a class="menu__link" href="#">Grain Mylks</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Seed Mylks</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Nut Mylks</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Nutri Drinks</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-4-1" href="#">Selection</a></li>
                </ul>
                <!-- Submenu 4-1 -->
                <ul data-menu="submenu-4-1" class="menu__level">
                    <li class="menu__item"><a class="menu__link" href="#">Nut Mylk Packs</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Amino Acid Heaven</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Allergy Free</a></li>
                </ul>

                <ul data-menu="submenu-6" class="menu__level">
                    <li class="menu__item"><a class="menu__link" href="#">Ver Usuarios</a></li>
                    <li class="menu__item"><a class="menu__link" href="#/Usuarios/crear">Crear Usuarios</a></li>
                    <li role="separador" class="menu__item"><a class="menu__separador" href="#"></a></li>
                    <li class="menu__item"><a class="menu__link" href="#/Usuarios/crearTipo">Agregar tipo usuario</a></li>
                </ul>

                 <ul data-menu="submenu-7" class="menu__level">
                    <li class="menu__item"><a class="menu__link" href="#">Ver Empleados</a></li>
                    <li class="menu__item"><a class="menu__link" href="#/Empleados/crear">Crear Empleado</a></li>
                    <li role="separador" class="menu__item"><a class="menu__separador" href="#"></a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Ver Cargos</a></li>
                    <li class="menu__item"><a class="menu__link" href="#/Cargos/crear">Crear Cargo</a></li>
                </ul>

                <ul data-menu="submenu-8" class="menu__level">
                    <li class="menu__item"><a class="menu__link" href="#/BandejaEntrada">Bandeja de Entrada</a></li>
                    <li class="menu__item"><a class="menu__link" href="#/LisBanner">Banners</a></li>
                    <li class="menu__item"><a class="menu__link" href="#/LisHab">Tipos de Habitaciones</a></li>
                    <li class="menu__item"><a class="menu__link" href="#/LisGaleria">Galeria de Fotos</a></li>
                    <li class="menu__item"><a class="menu__link" href="#/LisNoticias">Noticias</a></li>
                    <li role="separador" class="menu__item"><a class="menu__separador" href="#"></a></li>
                    <li class="menu__item"><a class="menu__link" href="#/Hoteles">Hotel</a></li>
                    <li class="menu__item"><a class="menu__link" href="#/Cargos/crear">Crear Cargos</a></li>
                    <li class="menu__item"><a class="menu__link" href="#/Empleados">Empleados y Usuarios</a></li>
                </ul>
            </div>
        </nav>
        <!-- sub menu de cabezera --> 
        <div class="fix">
           <nav class="submenu">

                    <ul class="navbar-right">
                    <li  style="margin-top:10px; color:#446CB3; font-size: 2rem; left:0;padding-right:50px">
                        @if (Auth::user()->usuariotipo->nombre=="Root")
                            Administrador del Sistema
                        @else
                            {{ Auth::user()->empleado->hotel->nombre }}
                        @endif
                    </li>
                    <li><a href="#" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span></a></li>
                   <li class="dropdown">
                            <a href="" class="dropdown-toggle li" data-toggle="dropdown" role="button" aria-expanded="false">
                                @if (Auth::user()->usuariotipo->nombre=="Root")
                                    Admin <span class="caret"></span>
                                @else
                                    {{ Auth::user()->empleado->nombres . " " . Auth::user()->empleado->apellidos }} <span class="caret"></span>
                                @endif
                            
                            
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                  </ul>
                
                <!-- /.dropdown-messages -->
        </nav> 
        </div>
        
        <div class="content">

            <div ng-view></div>

        </div>
    </div>

    <script src="plugins/angular/angular.min.js"></script>
    <script src="plugins/angular/angular-route.min.js"></script>


        <!-- Our Website Javascripts -->

    <script src="{{ asset('plugins/js/main.js') }}"></script>
    <!-- /view -->
    <script src="plugins/multilevel/js/classie.js"></script>
    <script src="plugins/multilevel/js/dummydata.js"></script>
    <script src="plugins/multilevel/js/main.js"></script>

    <script src="plugins/Trumbowyg/trumbowyg.min.js"></script> 

    <!-- Controladrores de Angular -->

    <script src="plugins/js/controllers/cargoController.js"></script>  
    <script src="plugins/js/controllers/empleadoController.js"></script>  
    <script src="plugins/js/controllers/usuariotipoController.js"></script> 
    <script src="plugins/js/controllers/usuarioController.js"></script> 
    <script src="plugins/js/controllers/hotelController.js"></script> 
    <script src="plugins/js/controllers/bannerController.js"></script> 
    <script src="plugins/js/controllers/habtipoController.js"></script>
    <script src="plugins/js/controllers/personalController.js"></script>
    <script src="plugins/js/controllers/galeryController.js"></script>
    <script src="plugins/js/controllers/noticiaController.js"></script>
    <script src="plugins/js/controllers/contactoController.js"></script>
    <script src="plugins/js/controllers/habtipogalController.js"></script>
    

    <script>
    (function() {
        var menuEl = document.getElementById('ml-menu'),
            mlmenu = new MLMenu(menuEl, {
                // breadcrumbsCtrl : true, // show breadcrumbs
                // initialBreadcrumb : 'all', // initial breadcrumb text
                backCtrl : false, // show back button
                // itemsDelayInterval : 60, // delay between each menu item sliding animation
                //onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
            });

        // mobile menu toggle
        var openMenuCtrl = document.querySelector('.action--open'),
            closeMenuCtrl = document.querySelector('.action--close');

        openMenuCtrl.addEventListener('click', openMenu);
        closeMenuCtrl.addEventListener('click', closeMenu);

        function openMenu() {
            classie.add(menuEl, 'menu--open');
        }

        function closeMenu() {
            classie.remove(menuEl, 'menu--open');
        }

        
        
    })();
    </script>

</body>

</html>
