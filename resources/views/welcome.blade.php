<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Page Title -->
      <title>Marhaba Bkom</title>
      <!-- Meta tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Copyright (c) Viralcorners">
      <meta name="keywords" content="The keywords here" />
      <meta name="description" content="The description here" />
      <!-- favicon -->
      <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon')}}/apple-touch-icon.png">
      <!--
         <link rel="icon" type="image/png" href="assets/favicon/favicon-32x32.png" sizes="32x32">
         <link rel="icon" type="image/png" href="assets/favicon/favicon-16x16.png" sizes="16x16">
         -->  
      <link rel="manifest" href="{{asset('favicon')}}/manifest.json">
      <link rel="mask-icon" href="{{asset('favicon')}}/safari-pinned-tab.svg" color="#fa5b31">
      <meta name="theme-color" content="#078aff">
      <link href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900&amp;subset=arabic" rel="stylesheet">
      <!-- Main Style -->
      <link rel="stylesheet" href="{{asset('css')}}/style.min.ar.css">
      <link rel="stylesheet" type="text/css" href="{{asset('css')}}/hajjstyle.css">
      <link rel="stylesheet" type="text/css" href="{{asset('css')}}/normalize.css">
      <link rel="stylesheet" type="text/css" href="{{asset('css')}}/bootstrap-grid.min.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Script -->
      <script src="{{asset('js')}}/jquery-3.2.1.js"></script>
      <script src="{{asset('js')}}/script.js"></script>
      <!-- End of Script -->
   </head>
   <body class="black-header">
      <!-- Header Strat -->
      <header>
         <div class="header-box">
            <div class="header-top">
               <div class="row no-margin">
                  <div class="col l6">
                     <!-- /Logo/ -->
                     <a class="logo" href="{{Url('/')}}">
                     <img src="{{asset('images')}}/logo.png" alt="GulfRoots" class="logo">
                     </a>
                  </div>
                  <!-- <div class="col l2 user-area is20">
                     <a href="http://beta.gulfroots.com/login">تسجيل الدخول</a>
                     <a href="http://beta.gulfroots.com/register">التسجيل</a>
                  </div> -->
                   @if (Route::has('login'))
                <div class="col 12 user-area is20">
                    @auth
                        <a href="{{ url('/') }}"></a>
                    @else
                        <a href="{{ route('login') }}">تسجيل الدخول</a>
                        <a href="{{ route('register') }}">التسجيل</a>
                    @endauth
                </div>
            @endif
                  <div class="col l4 user-ctrl">
                     <div class="account-box">
                        <div class="account-head">
                           @auth
                           <img src="http://beta.gulfroots.com/front-assets/images/user.jpg" alt="">
                           {{Auth::user()->name}}
                           @else
                           <img src="http://beta.gulfroots.com/front-assets/images/user.jpg" alt="">
                           حسابي
                           @endauth
                        </div>
                        <div class="account-drop">
                           <ul>
                              <li><a href="{{ route('login') }}">الملف الشخصى</a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- <div class="add-ad">
                        <a class="butn blue" style="padding:0 25px" href="http://beta.gulfroots.com/login">
                        <i class="fa fa-plus"></i> &nbsp;
                        اضف اعلان
                        </a>
                     </div> -->
                     <div class="add-ad">
                        <a class="dropdown-button butn orange wtc" href="" data-activates="dropdown1">اللغة</a>
                        <ul id="dropdown1" class="dropdown-content">
                           <li>
                              <a class="bc" href="lang/ar"><img src="http://beta.gulfroots.com/images/ksa.gif" alt=""></a>
                           </li>
                           <li>
                              <a class="bc" href="lang/en"><img src="http://beta.gulfroots.com/images/en.jpg" alt=""></a>
                           </li>
                        </ul>
                        <!-- Dropdown Structure -->
                        <!--  <ul id='dropdown1' class='dropdown-content'> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header End -->
      <!-- Home -->
      <div class="home-screen">
         <div class="screen" style="background-image:url('{{asset('images')}}/home-screen.jpg')">
            <h1 class="no-margin">
               كل ما تريدة واكثر بكثير .... <small>فقط علي مرحبا بكم </small>
            </h1>
         </div>
      </div>
      <div class="home-body">
      <div class="big-container clearfix">
      <!-- filter start -->
      <div class="main-filter">
         <form class="main-filter-form">
            <div class="bot-container">
               <div class="bot-row">
                  <!-- first col -->
                  <div class="bot-col-sm-9">
                     <!-- date row -->
                     <div class="bot-row">
                        <div class="bot-col-md-6">
                           <input placeholder="بداية الإقامة" class="textbox-n date" type="text" onfocus="(this.type='date')"  >
                        </div>
                        <div class="bot-col-md-6">
                           <input placeholder="نهاية الإقامة" class="textbox-n date" type="text" onfocus="(this.type='date')"  >
                        </div>
                     </div>
                     <!-- end date row -->
                     <!-- nomOFPeole row -->
                     <div class="bot-row">
                        <div class="bot-col-md-6">
                           <select id="adults" name="adults" data-vars-select-name="">
                              <option value="0">عدد الكبار</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                           </select>
                        </div>
                        <div class="bot-col-md-6">
                           <select id="kids" name="kids" class="_10p0m0gl" data-vars-select-name="">
                              <option value="0">عدد الأطفال</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                           </select>
                        </div>
                     </div>
                     <!-- end nomOFPeole row -->
                  </div>
                  <!-- end first col -->
                  <!-- second col -->
                  <div class="bot-col-sm-3 bot-d-flex bot-justify-content-center bot-align-items-center">
                     <input class="searchBtn" type="submit" value="إبحث">
                  </div>
                  <!-- end second col -->
               </div>
            </div>
         </form>
      </div>
      <!-- filter end -->
      <!-- home tabs -->
      <div class="home-tabs">
         <div class="row no-margin">
            <div class="home-tab col l3 active" data-tab-target=".new-ads">
               أحدث الاعلانات
            </div>
            <div class="home-tab col l3" data-tab-target=".prev-ads">
               مشاهدات سابقة
            </div>
         </div>
      </div>
      <!-- home tabs screens -->
      <div class="home-tabs-screens">
      <!-- new ads tab -->
      <div class="home-tab-screen new-ads active">
         <div class="row no-margin boxed-ads">
            @foreach($pro as $p)
           <div class="col l3">
               <!-- ad item -->
               <a href="{{Url('post')}}/{{$p->id}}" class="ad-item">
                  <div class="image-box">
                     <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                     <div class="price">{{$p->price}}
                        <span>ر.س</span>
                     </div>
                  </div>
                  <h1 title="غرفة بمواصفات خاصة">{{$p->name}}</h1>
                  <div class="watch-icon active">
                     <i class="fa fa-star"></i>
                  </div>
               </a>
            </div>
            @endforeach
            <div class="clearfix"></div>
            <div class="centerd top-50">
               <a href="#!" class="butn blue">شاهد الجميع</a>
            </div>
         </div>
      </div>
      <!-- prev ads tab -->
      <div class="home-tab-screen prev-ads">
         <div class="row no-margin boxed-ads">
            <div class="col l3">
               <!-- ad item -->
               <a href="#!" class="ad-item">
                  <div class="image-box">
                     <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                     <div class="price">500000
                        <span>ر.س</span>
                     </div>
                  </div>
                  <h1 title="غرفة بمواصفات خاصة">غرفة بمواصفات خاصة</h1>
                  <div class="watch-icon active">
                     <i class="fa fa-star"></i>
                  </div>
               </a>
            </div>
            <div class="col l3">
               <!-- ad item -->
               <a href="#!" class="ad-item">
                  <div class="image-box">
                     <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                     <div class="price">500000
                        <span>ر.س</span>
                     </div>
                  </div>
                  <h1 title="غرفة بمواصفات خاصة">غرفة بمواصفات خاصة</h1>
                  <div class="watch-icon">
                     <i class="fa fa-star"></i>
                  </div>
               </a>
            </div>
            <div class="col l3">
               <!-- ad item -->
               <a href="#!" class="ad-item">
                  <div class="image-box">
                     <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                     <div class="price">500000
                        <span>ر.س</span>
                     </div>
                  </div>
                  <h1 title="غرفة بمواصفات خاصة">غرفة بمواصفات خاصة</h1>
                  <div class="watch-icon">
                     <i class="fa fa-star"></i>
                  </div>
               </a>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
      <!-- watch ads tab -->
      <div class="home-tab-screen watch-ads">
         <div class="row no-margin boxed-ads">
            <div class="col l3">
               <!-- ad item -->
               <a href="#!" class="ad-item">
                  <div class="image-box">
                     <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                     <div class="price">500000
                        <span>ر.س</span>
                     </div>
                  </div>
                  <h1 title="غرفة بمواصفات خاصة">غرفة بمواصفات خاصة</h1>
                  <div class="watch-icon active">
                     <i class="fa fa-star"></i>
                  </div>
               </a>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
      <!-- search ads tab -->
      <div class="home-tab-screen search-ads">
         <div class="row no-margin boxed-ads no-data">
            <h2>لاتوجد عمليات بحث سابقة</h2>
            <h4>ابدأ باضافه عمليات البحث السابقه من خلال اختيار كلمة البحث والضغط علي مفتاح إبحث.</h4>
         </div>
      </div>
      <br><br><br>
      <!-- Fixed Footer Start -->
      <footer>
         <div class="big-container">
            <div class="footer-top">
               تطبيقات مرحبا بكم الخاصة بالهواتف الذكية 
               <a href="#!"><img src="{{asset('images')}}/apple.jpg" alt=""></a>
               <a href="#!"><img src="{{asset('images')}}/google.jpg" alt=""></a>
            </div>
            <div class="footer-map">
               <div class="row no-margin">
                  <div class="col l3">
                     <h3>الدعم والمساعدة</h3>
                     <a href="#!">عن مرحبا بكم</a>
                     <a href="#!">خدمة العملاء</a>
                     <a href="#!">المساعدة</a>
                     <a href="#!">نصائح الحماية والخصوصية</a>
                     <a href="#!">اتصل بنا</a>
                  </div>
                  <div class="col l3">
                     <h3>اتفاقية الاستخدام</h3>
                     <a href="#!">الشروط والاحكام</a>
                     <a href="#!">سياسة الخصوصية</a>
                     <a href="#!">سياسية النشر</a>
                     <a href="#!">سياسة حفظ البيانات</a>
                  </div>
                  <div class="col l3">
                     <h3>الوصول السريع</h3>
                     <a href="#!">استرجاع كلمة المرور</a>
                     <a href="#!">خدمات الشركات</a>
                     <a href="#!">خدمات الافراد</a>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="big-container">
               <div class="row no-margin">
                  <div class="col l6">
                     جميع الحقوق محفوظة لدي مرحبا بكم
                  </div>
                  <div class="col l6 lefted">
                     <div class="footer-social">
                        <a href="#!" target="_blank"><i class="fa fa-youtube-play"></i></a>
                        <a href="#!" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="#!" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#!" target="_blank"><i class="fa fa-google-plus"></i></a>
                        <a href="#!" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#!" target="_blank"><i class="fa fa-facebook"></i></a>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Fixed Footer End -->
      <!-- jQuery plugins -->
      <script defer src="{{asset('js')}}/ui.min.js"></script>
   </body>
</html>