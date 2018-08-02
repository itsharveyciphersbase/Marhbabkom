@php
$company = auth()->user()->company()->first();
@endphp

<div class="row ">

  <div class="content bg-image overflow-hidden " style="background-image: url('{{asset('CustomerBoard')}}/img/{{$company->coverphoto}}'); padding:100px;">

  </div>
</div>

  <div class="block">


      <div class="col-xs-3 bg-gray col-sm-1 noPadding" style="Text-align:center;">
        <div class=" border ">
          <img src="{{asset('CustomerBoard')}}/img/{{$company->logo}}" class="img-responsive" style="">
        </div>
      </div>
      <div class="col-sm-11 border-b">
        <h1 class="h4  animated zoomIn push-10 push-10-t">{{$company->name}} <i class="fa fa-check-circle"></i></h1>
      </div>
      <div class=" col-sm-11 border-b push-20-t">
          <div class=" col-sm-5 ">
            <h1 class="h5  animated zoomIn">Address </h1>
            <h1 class="h6 animated zoomIn push-10-t">{{$company->address}}</h1>
          </div>
          <div class=" col-sm-3 ">
            <h1 class="h5  animated zoomIn">Opening Hours </h1>
            <h1 class="h6 animated zoomIn push-10-t">{{$company->open_from}} : {{$company->open_to}}</h1>

          </div>
          <div class=" col-sm-3 ">
            <h1 class="h5  animated zoomIn">Links </h1>
            <ul class="nav nav-pills ">
              <li class="">
                  <a href="{{$company->facebook}}" target="_blank" data-toggle="tooltip" title="facebook"><i class="fa fa-facebook-f"></i></a>
              </li>
              <li class="">
                  <a href="{{$company->twitter}}" target="_blank" data-toggle="tooltip" title="twitter"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="">
                  <a href="{{$company->instagram}}" target="_blank" data-toggle="tooltip" title="instagram"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="">
                  <a href="{{$company->googleplus}}" target="_blank" data-toggle="tooltip" title="google +"><i class="fa fa-google-plus"></i></a>
              </li>
              <li class="">
                  <a href="{{$company->location}}" target="_blank" data-toggle="tooltip" title="Map"><i class="glyphicon glyphicon-map-marker"></i></a>
              </li>
            </ul>
          </div>
      </div>
      <div class="">
        <!-- Profile Menu -->
          <ul class="nav nav-pills ">
            <li>
                <a href="{{Url('company')}}">Company</a>
            </li>
            <li>
              <a href="{{Url('project')}}">Projects</a>
            </li>
            <li>
              <a href="{{Url('branch')}}">Branches</a>
            </li>
            <!-- <li>
                <a href="{{Url('gallary')}}">Gallary</a>
            </li> -->

            <li class="pull-right">
                <a href="{{url('users')}}"  title="Settings"><i class="si si-settings"></i></a>
            </li>

          </ul>

      </div>


  </div>