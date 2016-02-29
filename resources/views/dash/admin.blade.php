<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>

        <!-- Meta-Information -->
        <title>Administrador</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

        <!-- Our Website CSS Styles -->
        <!-- MetisMenu CSS -->
        <link rel="stylesheet" href="{{ asset('plugins/css/plugins/metisMenu/metisMenu.min.css') }}">

        <!-- Timeline CSS -->
        <link rel="stylesheet" href="{{ asset('plugins/css/plugins/timeline.css') }}">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('plugins/css/sb-admin-2.css') }}">

        <!-- Morris Charts CSS -->
        <link rel="stylesheet" href="{{ asset('plugins/css/plugins/morris.css') }}">

    </head>
    <body ng-app="tutorialWebApp">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Our Website Content Goes Here -->
        <div id="wrapper">

            <div ng-include='"templates/navigation.html"'></div>
            

                <div ng-view></div>


        </div>
        <!-- /#wrapper -->

        <!-- Vendor: Javascripts -->
<!--
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
-->
        <script src="{{ asset('plugins/js/jquery-1.11.0.js') }}"></script>
        <script src="{{ asset('plugins/js/bootstrap.min.js') }}"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>

        <!-- Vendor: Angular, followed by our custom Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-route.min.js"></script>

        <!-- Our Website Javascripts -->
        <script src="{{ asset('plugins/js/main.js') }}"></script>

    </body>
</html>
