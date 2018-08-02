
<!-- Header -->
<header id="header-navbar" class="content-mini content-mini-full">
    <!-- Header Navigation Right -->
    <ul class="nav-header pull-right">
      <li>
            <div class="btn-group">
                <button class="btn btn-default  dropdown-toggle" data-toggle="dropdown" type="button"><i class="si si-bell"></i></button>
                <ul class="dropdown-menu dropdown-menu-right ">
                    <li class="dropdown-header">Offers</li>
                    <li class="divider"></li>

                    <li class=" noPadding ">
                    <a href="#!">
                        <img src="{{asset('CustomerBoard')}}/img/logo.png" class="img-responsive col-sm-2 col-lg-1 " style="width:70px;">
                        <h5>notifecation</h5>
                        <p>Lorem ipsum dolor sit amet,  <small>SeeMore</small></p>
                        <small>Yesterday at 2:45pm</small>
                    </a>
                  </li>
                  <li class="dropdown-header">Strategy</li>
                    <li class=" noPadding ">
                    <a href="#!" class="">
                        <img src="{{asset('CustomerBoard')}}/img/logo.png" class="img-responsive col-sm-2 col-lg-1 " style="width:70px;">
                        <h5>notifecation</h5>
                        <p>Lorem ipsum dolor sit amet,  <small>SeeMore</small></p>
                        <small>Yesterday at 2:45pm</small>
                    </a>
                  </li>
                  <li class="dropdown-header">Meeting</li>
                    <li class=" noPadding ">
                    <a href="#!" class="">
                        <img src="{{asset('CustomerBoard')}}/img/logo.png" class="img-responsive col-sm-2 col-lg-1 " style="width:70px;">
                        <h5>notifecation</h5>
                        <p>Lorem ipsum dolor sit amet,  <small>SeeMore</small></p>
                        <small>Yesterday at 2:45pm</small>
                    </a>
                  </li>
                </ul>
            </div>
        </li>
      <li>
            <div class="btn-group">
                <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                    <img src="{{asset('CustomerBoard')}}/img/avatars/avatar10.jpg" alt="Avatar">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <!-- <li class="dropdown-header">Customer #: 80913004</li>
                    <li class="divider"></li>


                    <li>
                        <a tabindex="-1" href="dashboard/index.php">
                            <i class="si si-briefcase pull-right"></i>
                            Pro Bussiness
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="projects.php">
                            <i class="si si-book-open pull-right"></i>
                            <span class="badge badge-success pull-right">3</span>
                            My Plans
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="branches.php">
                            <i class="si si-map pull-right"></i>
                            <span class="badge badge-success pull-right">2</span> Branches
                        </a>
                    </li>
                    <li class="divider"></li>

                    <li class="dropdown-header">Managment</li>
                    <li>
                        <a tabindex="-1" href="profile.php">
                            <i class="si si-user pull-right"></i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="billing.php">
                            <i class="fa fa-money pull-right"></i>
                            <span class="badge badge-success pull-right">1</span>Billing
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="settings.php">
                            <i class="si si-settings pull-right"></i>Settings
                        </a>
                    </li>
                    <li>
                        <a tabindex="-1" href="lock.php">
                            <i class="si si-lock pull-right"></i>Lock Account
                        </a>
                    </li> -->
                    <li>
                      <a tabindex="-1" class="dropdown-item" href="{{Url('/')}}">
                        <i class="si si-user pull-right"></i>Home
                      </a>
                    </li>
                    <li>
                          <a tabindex="-1" class="dropdown-item" href="{{url('profile/logout')}}">
                              <i class="si si-logout pull-right"></i>Log out
                          </a>
                      </li>
                </ul>
            </div>
        </li>


    </ul>
    <!-- END Header Navigation Right -->

    <!-- Header Navigation Left -->
    <ul class="nav-header pull-left">
        <li class="hidden-md hidden-lg">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                <i class="fa fa-navicon"></i>
            </button>
        </li>
        <li class="hidden-xs hidden-sm">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                <i class="fa fa-ellipsis-v"></i>
            </button>
        </li>
        <li class="visible-xs">
            <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
            <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                <i class="fa fa-search"></i>
            </button>
        </li>
        <li class="js-header-search header-search">
            <form class="form-horizontal" action="base_pages_search.html" method="post">
                <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                    <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
                    <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                </div>
            </form>
        </li>
    </ul>
    <!-- END Header Navigation Left -->
</header>
<div class="popup" data-popup="connection">
  <div class="popup-inner">
  <p><a data-popup-close="popup-1" href="#">Close</a></p>
  <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
  </div>
  </div>
<!-- END Header -->
