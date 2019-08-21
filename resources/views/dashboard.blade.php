<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EM | Empployee Management</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
    page. However, you can choose any other skin. Make sure you
    apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- Main Header -->
      @include('layouts.header')
      <!-- Sidebar -->
      @include('layouts.sidebar')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- <section class="content-header">
          <h1>
          Dashboard
          </h1>
          <ol class="breadcrumb">
            li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li
            <li class="active">Dashboard</li>
          </ol>
        </section> -->
        <!-- Main content -->
        <section class="content">
          <form method="post" action="/flightSearch">
            {{ csrf_field() }} 
            <div class="col-md-6">
              <div class="row">
                <label><center><h2>Flight</h2></center></label>
              </div>
              <div class="row">
                <input type="radio" name="type" value="dom"><b>Domestic</b>
                <input type="radio" name="type" value="int"><b>International</b>
              </div>
              <div class="row">
                <input type="radio" name="ftype" value="oneway"><b>One Way</b>
                <input type="radio" name="ftype" value="round"><b>Round</b>
                <input type="radio" name="ftype" value="multi"><b>Multi-City</b>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <label>Leaving From </label>
                    <select name="leaving">
                      <option value="Dhaka">Dhaka</option>
                      <option value="Chittagong">Chittagong</option>
                      <option value="Sylhet">Sylhet</option>
                    </select>
                  </div>
                  <div class="row">
                    <label>Departure </label>
                    <input type="date" name="departure">
                  </div>
                  <div class="row">
                    <label>Return </label>
                    <input type="date" name="return">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <label>Going To </label>
                    <select name="going">
                      <option value="Dhaka">Dhaka</option>
                      <option value="Chittagong">Chittagong</option>
                      <option value="Sylhet">Sylhet</option>
                    </select>
                  </div>
                  <div class="row">
                    <label>Depart Time </label>
                    <select name="dtime">
                      <option value="anytime">Anytime</option>
                    </select>
                  </div>
                  <div class="row">
                    <label>Depart Time </label>
                    <select name="rdtime">
                      <option value="anytime">Anytime</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <input type="submit" name="search" value="Search Flight">
              </div>
            </div>
          </form>
          <form method="post" action="/hotelSearch">
            <div class="col-md-6">
              <div class="row">
                <label><center><h2>Hotels</h2></center></label>
              </div>
              <div class="row">
                <label>City</label>
                <select name="hcity">
                  <option value="dhaka">Dhaka</option>
                  <option value="ctg">Chittagong</option>
                  <option value="sylhet">Sylhet</option>
                </select>
              </div>
              <div class="row">
                <label>Check-In </label>
                <input type="date" name="check-in">
              </div>
              <div class="row">
                <label>Check-Out </label>
                <input type="date" name="check-out">
              </div>
              <div class="row">
                <label>Rooms </label>
                <input type="number" name="room">
              </div>
              <div class="row">
                <input type="submit" name="search" value="Search Hotels">
              </div>
            </div>
          </form>
          <!-- Your Page Content Here -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <!-- Footer -->
      @include('layouts.footer')
      <!-- ./wrapper -->
      <!-- REQUIRED JS SCRIPTS -->
      <!-- jQuery 2.1.3 -->
      <script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
      <!-- Bootstrap 3.3.2 JS -->
      <script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
      <!-- AdminLTE App -->
      <script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>
      <!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
    </body>
  </html>