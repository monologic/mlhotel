<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blueprint: Multi-Level Menu</title>
    <meta name="description" content="Blueprint: A basic template for a responsive multi-level menu" />
    <meta name="keywords" content="blueprint, template, html, css, menu, responsive, mobile-friendly" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="favicon.ico">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- food icons -->
    <link rel="stylesheet" type="text/css" href="plugins/multilevel/css/organicfoodicons.css" />
    <!-- demo styles -->

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
                    <li class="menu__item"><a class="menu__link" href="dashboard.html">Panel de Control</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-1" href="#">Empleado</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-2" href="#">Reservas</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-3" href="#">Habitaciones</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-4" href="#">Clientes</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-5" href="#">Servicios</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-6" href="#">Usuarios</a></li>
                </ul>
                <!-- Submenu 1 -->
                <ul data-menu="submenu-1" class="menu__level">
                    <li class="menu__item"><a class="menu__link" href="#">Ver Empleados</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Crear Empleado</a></li>
                    <li role="separator" class="divider"></li>
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
            </div>
        </nav>
    
        <div class="content">

            <div ng-view></div>

        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-route.min.js"></script>


        <!-- Our Website Javascripts -->
    <script src="{{ asset('plugins/js/main.js') }}"></script>
    <!-- /view -->
    <script src="plugins/multilevel/js/classie.js"></script>
    <script src="plugins/multilevel/js/dummydata.js"></script>
    <script src="plugins/multilevel/js/main.js"></script>

    <!-- Controladrores de Angular -->

    <script src="plugins/js/controllers/cargoController.js"></script>    


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
