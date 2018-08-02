<!DOCTYPE html>
<html class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <meta name="description" content="OneUI - Admin Dashboard Template & UI Framework created by pixelcave and published on Themeforest">
          <meta name="author" content="pixelcave">
          <meta name="robots" content="noindex, nofollow">

        <title>Digi-System</title>

        <!-- fav icon -->
        <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
        <script src="{{asset('CustomerBoard')}}/css/sweetalert.min.js"></script>
        <link rel="shortcut icon" href="{{asset('CustomerBoard')}}/img/favicons/favicon.png">

        <!-- Web fonts -->
        <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700"> -->

        <!-- Pages CSS -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css"> -->
        <link rel="stylesheet" href="{{asset('CustomerBoard')}}/css/bootstrap-select.min.css">

        <link rel="stylesheet" href="{{asset('CustomerBoard')}}/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="{{asset('CustomerBoard')}}/js/plugins/slick/slick-theme.min.css">
        <link rel="stylesheet" href="{{asset('CustomerBoard')}}/js/plugins/datatables/jquery.dataTables.min.css">
        <link rel="stylesheet" href="{{asset('CustomerBoard/css')}}/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="{{asset('CustomerBoard')}}/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="{{asset('CustomerBoard')}}/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
      


        <link rel="stylesheet" href="{{asset('CustomerBoard')}}/js/plugins/dropzonejs/dropzone.min.css">
        <link rel="stylesheet" href="{{asset('CustomerBoard')}}/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">

        <!-- OneUI CSS framework -->
        <link rel="stylesheet" id="css-main" href="{{asset('CustomerBoard')}}/css/oneui.css">
        <link rel="stylesheet" href="{{asset('CustomerBoard')}}/js/plugins/magnific-popup/magnific-popup.min.css">
        <!-- Page JS Plugins CSS -->
        
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="{{asset('CustomerBoard')}}/css/themes/flat.min.css"> -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> -->
<link rel="stylesheet" href="{{asset('CustomerBoard')}}/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('CustomerBoard')}}/js/plugins/select2/select2-bootstrap.css">
        <link rel="stylesheet" href="{{asset('CustomerBoard')}}/js/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="{{asset('CustomerBoard')}}/js/plugins/select2/select2.css">
              <style>
         /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
         #map {
         height: 100%;
         }
         /* Optional: Makes the sample page fill the window. */
         html, body {
         height: 100%;
         margin: 0;
         padding: 0;
         }
         #description {
         font-family: Roboto;
         font-size: 15px;
         font-weight: 300;
         }
         #infowindow-content .title {
         font-weight: bold;
         }
         #infowindow-content {
         display: none;
         }
         #map #infowindow-content {
         display: inline;
         }
         .pac-card {
         margin: 10px 10px 0 0;
         border-radius: 2px 0 0 2px;
         box-sizing: border-box;
         -moz-box-sizing: border-box;
         outline: none;
         box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
         background-color: #fff;
         font-family: Roboto;
         }
         #pac-container {
         padding-bottom: 12px;
         margin-right: 12px;
         }
         .pac-controls {
         display: inline-block;
         padding: 5px 11px;
         }
         .pac-controls label {
         font-family: Roboto;
         font-size: 13px;
         font-weight: 300;
         }
         #pac-input {
         background-color: #fff;
         font-family: Roboto;
         font-size: 15px;
         font-weight: 300;
         margin-left: 12px;
         padding: 0 11px 0 13px;
         text-overflow: ellipsis;
         width: 400px;
         }
         #pac-input:focus {
         border-color: #4d90fe;
         }
         #title {
         color: #fff;
         background-color: #4d90fe;
         font-size: 25px;
         font-weight: 500;
         padding: 6px 12px;
         }
         .pac-card{
         position: static !important;
         }
       #preview img {
    display: inline !important;
    vertical-align: initial;
   width: 44%;
    margin-bottom: 20px;
    margin-left: 17px;
        transition: transform .2s;

}
  #preview img:hover {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.2); 
}
#preview{
    height: 229px;
    overflow-y: auto;
    margin-bottom: 20px;
}
.aDDButtn{
    margin-top: 10px
}
         </style>

    </head>
    <body onload="initialize()">

        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
