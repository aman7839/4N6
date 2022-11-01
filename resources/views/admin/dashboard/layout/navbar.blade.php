<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>4n6</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    
    <link rel="icon" type="png" href="{{asset('images/fanatic_logo.svg')}}">
    <link rel="shortcut icon" type="png" href="{{asset('4n6/images/mariano_fav.png')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('4n6/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="{{asset('4n6/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('4n6/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/toast.css')}}">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
   <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> 
   <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item {{ request()->is('admin/index') ? 'active' : ''}}">
                        <a href="{{url('admin/index')}}"><i class="menu-icon fa fa-home"></i>Home </a>
                    </li>
                    <li class="nav-item {{ request()->is('admin/users') ? 'active' : ''}}">
                        <a href="{{url('admin/users')}}"><i class="menu-icon fa fa-user"></i>Users </a>
                    </li>
                    <li class="nav-item {{ request()->is('admin/documents') ? 'active' : ''}}">
                        <a href="{{url('admin/documents')}}"><i class="menu-icon fa fa-trophy"></i>Add Documents </a>
                    </li>
                    <li class="nav-item {{ request()->is('admin/awards') ? 'active' : ''}}">
                        <a href="{{url('admin/awards')}}"><i class="menu-icon fa fa-star"></i>Awards</a>
                    </li>
                    <!-- <li class="menu-title">UI elements</li>/.menu-title -->
                   
                    {{-- <li>
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Payments </a>
                    </li>
                    <li class="menu-title">Help</li><!-- /.menu-title -->
                    <li>
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>View tutorial </a>
                    </li>
                    <li>
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Android guide </a>
                    </li> --}}
                   


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->