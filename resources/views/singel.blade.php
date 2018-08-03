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
   <body class="white-header">
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
      <!-- normal body -->
      <div class="normal-body">
         <div class="big-container">
            <!-- search data -->
            <div class="row no-margin top-25">
               <div class="col l9">
                  <div class="single-box">
                     <div class="watch-icon">
                        <i class="fa fa-star"></i>
                     </div>
                     <h1>{{$p->name}}</h1>
                     <h3> {{$p->price}} <span>ريال</span></h3>
                     <div class="row no-margin borderd">
                        <div class="col l6">
                           <i class="fa fa-map-marker"></i>
                           {{$p->address}} | 1423 مشاهدة
                        </div>
                        <div class="col l6 lefted">
                           <!-- <a href="#!">
                           <i class="fa fa-plus crcl"></i> اضف اعلان مشابة
                           </a>
                           |  -->
                           <a href="#!" class="modal-open" data-modal-open=".share-now">
                           <i class="fa fa-share crcl"></i> مشاركة
                           </a>
                           | 
                           <a href="#!" class="show-drop">
                           <i class="fa fa-ban"></i> ابلغ عن اعلان مسئ
                           </a>
                           <div class="report-box my-drop">
                              <form>
                                 <label class="checkbox blued">
                                 <input type="checkbox"><span></span> اعلان مكرر
                                 </label>
                                 <label class="checkbox blued">
                                 <input type="checkbox"><span></span> اعلان زائف
                                 </label>
                                 <label class="checkbox blued">
                                 <input type="checkbox"><span></span> تصنيف خاطئ
                                 </label>
                                 <label class="checkbox blued">
                                 <input type="checkbox"><span></span> غير متاحة
                                 </label>
                                 <label class="checkbox blued">
                                 <input type="checkbox"><span></span> المعلن لا يستجيب
                                 </label>
                                 <label class="checkbox blued">
                                 <input type="checkbox"><span></span> اخري
                                 </label>
                                 <input type="submit" value="تبليغ">
                              </form>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad2.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad1.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad2.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad1.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad2.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad1.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad2.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad1.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad2.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad1.jpg)"></div>
                        </div>
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                     </div>
                     <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad2.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad1.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad2.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad1.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad2.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad1.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad2.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad1.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad2.jpg)"></div>
                           <div class="swiper-slide" style="background-image:url({{asset('images')}}/ad1.jpg)"></div>
                        </div>
                     </div>
                  </div>
                  <div class="product-info">
                     <div class="row no-margin">
                        <div class="col l7">
                           <h2>وصف المنتج</h2>
                           <p>{{$p->desc}}</p>
                        </div>
                        <div class="col l7">
                           <div class="product-det">
                              <div>
                                الكعبة تبعد بمسافة
                                كليو متر  عشر دقائق سير على الاقدام 
                                <span><img src="{{asset('images')}}/ch.png" width="20" height="20"></span>
                              </div>
                        </div>
                    </div>
                        <div class="col l5">
                           <div class="product-det">
                              <div>
                                 تاريخ الاعلان
                                 <span>{{$p->created_at}}</span>
                              </div>
                              <div>
                                 الطعام
                                 <span><img src="{{asset('images')}}/ch.png" width="20" height="20"></span>
                              </div>
                              <div>
                                 المواصلات
                                 <span><img src="{{asset('images')}}/ch.png" width="20" height="20"></span>
                              </div>
                              <div>
                                 توصيل الامتعة
                                 <span><img src="{{asset('images')}}/ch.png" width="20" height="20"></span>
                              </div>
                              <div>
                                 اﻷرشاد و المساعدة
                                 <span><img src="{{asset('images')}}/ch.png" width="20" height="20"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="strip-head on-top">اعلانات متشابهه</div>
                  <div class="row no-margin ads-list">
                     <div class="col l4">
                        <!-- ad item -->
                        <a href="#!" class="ad-item">
                           <div class="image-box">
                              <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                              <div class="price boxed-only">500000
                                 <span>ر.س</span>
                              </div>
                           </div>
                           <h1 title="شقق فاخرة بجوار الحرم" class="boxed-only">شقق فاخرة بجوار الحرم</h1>
                           <div class="post-data normal-only">
                              <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                              <div class="price">500000
                                 <span>ر.س</span>
                              </div>
                              <div class="desc">
                                 نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي 
                                 نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي 
                                 نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي 
                              </div>
                           </div>
                           <small class="boxed-only"></small>
                           <div class="info normal-only">
                              
                              <div class="time">منذ 15 دقيقة</div>
                           </div>
                           <div class="watch-icon active">
                              <i class="fa fa-star"></i>
                           </div>
                        </a>
                     </div>
                     <div class="col l4">
                        <!-- ad item -->
                        <a href="#!" class="ad-item">
                           <div class="image-box">
                              <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                              <div class="price boxed-only">500000
                                 <span>ر.س</span>
                              </div>
                           </div>
                           <h1 title="شقق فاخرة بجوار الحرم" class="boxed-only">شقق فاخرة بجوار الحرم</h1>
                           <div class="post-data normal-only">
                              <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                              <div class="price">500000
                                 <span>ر.س</span>
                              </div>
                              <div class="desc">
                                 نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي 
                                 نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي 
                                 نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي 
                              </div>
                           </div>
                           <small class="boxed-only"></small>
                           <div class="info normal-only">
                              
                              <div class="time">منذ 15 دقيقة</div>
                           </div>
                           <div class="watch-icon">
                              <i class="fa fa-star"></i>
                           </div>
                        </a>
                     </div>
                     <div class="col l4">
                        <!-- ad item -->
                        <a href="#!" class="ad-item">
                           <div class="image-box">
                              <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                              <div class="price boxed-only">500000
                                 <span>ر.س</span>
                              </div>
                           </div>
                           <h1 title="شقق فاخرة بجوار الحرم" class="boxed-only">شقق فاخرة بجوار الحرم</h1>
                           <div class="post-data normal-only">
                              <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                              <div class="price">500000
                                 <span>ر.س</span>
                              </div>
                              <div class="desc">
                                 نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي 
                                 نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي 
                                 نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي نص تجريبي 
                              </div>
                           </div>
                           <small class="boxed-only"></small>
                           <div class="info normal-only">
                              
                              <div class="time">منذ 15 دقيقة</div>
                           </div>
                           <div class="watch-icon">
                              <i class="fa fa-star"></i>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="strip-head on-top">
                     <div class="mini-tabs">
                        <div class="tab-button active" data-tab-btn=".m25ran">شوهد مؤخرا</div>
                        <div class="tab-button" data-tab-btn=".tamany">قائمة التمني</div>
                        <div class="tab-button" data-tab-btn=".ma7foz">بحث محفوظ</div>
                     </div>
                  </div>
                  <div class="tabs-body">
                     <div class="mini-tab-box m25ran active swiped">
                        <div class="swiper-container" dir="rtl">
                           <div class="swiper-wrapper">
                              <!-- slide start -->
                              <div class="swiper-slide">
                                 <!-- ad item -->
                                 <a href="#!" class="ad-item">
                                    <div class="image-box">
                                       <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                                    </div>
                                    <div class="post-data">
                                       <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                                       <div class="price">500000
                                          <span>ر.س</span>
                                       </div>
                                       <small class="boxed-only"></small>
                                    </div>
                                    <div class="watch-icon">
                                       <i class="fa fa-star"></i>
                                    </div>
                                 </a>
                                 <!-- ad item -->
                                 <a href="#!" class="ad-item">
                                    <div class="image-box">
                                       <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                                    </div>
                                    <div class="post-data">
                                       <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                                       <div class="price">500000
                                          <span>ر.س</span>
                                       </div>
                                       <small class="boxed-only"></small>
                                    </div>
                                    <div class="watch-icon">
                                       <i class="fa fa-star"></i>
                                    </div>
                                 </a>
                              </div>
                              <!-- slide end -->
                              <!-- slide start -->
                              <div class="swiper-slide">
                                 <!-- ad item -->
                                 <a href="#!" class="ad-item">
                                    <div class="image-box">
                                       <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                                    </div>
                                    <div class="post-data">
                                       <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                                       <div class="price">500000
                                          <span>ر.س</span>
                                       </div>
                                       <small class="boxed-only"></small>
                                    </div>
                                    <div class="watch-icon">
                                       <i class="fa fa-star"></i>
                                    </div>
                                 </a>
                                 <!-- ad item -->
                                 <a href="#!" class="ad-item">
                                    <div class="image-box">
                                       <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                                    </div>
                                    <div class="post-data">
                                       <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                                       <div class="price">500000
                                          <span>ر.س</span>
                                       </div>
                                       <small class="boxed-only"></small>
                                    </div>
                                    <div class="watch-icon">
                                       <i class="fa fa-star"></i>
                                    </div>
                                 </a>
                              </div>
                              <!-- slide end -->
                           </div>
                           <div class="swiper-button-prev"></div>
                           <div class="swiper-button-next"></div>
                        </div>
                     </div>
                     <div class="mini-tab-box tamany">
                        <div class="swiper-container" dir="rtl">
                           <div class="swiper-wrapper">
                              <!-- slide start -->
                              <div class="swiper-slide">
                                 <!-- ad item -->
                                 <a href="#!" class="ad-item">
                                    <div class="image-box">
                                       <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                                    </div>
                                    <div class="post-data">
                                       <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                                       <div class="price">500000
                                          <span>ر.س</span>
                                       </div>
                                       <small class="boxed-only"></small>
                                    </div>
                                    <div class="watch-icon">
                                       <i class="fa fa-star"></i>
                                    </div>
                                 </a>
                                 <!-- ad item -->
                                 <a href="#!" class="ad-item">
                                    <div class="image-box">
                                       <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                                    </div>
                                    <div class="post-data">
                                       <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                                       <div class="price">500000
                                          <span>ر.س</span>
                                       </div>
                                       <small class="boxed-only"></small>
                                    </div>
                                    <div class="watch-icon">
                                       <i class="fa fa-star"></i>
                                    </div>
                                 </a>
                              </div>
                              <!-- slide end -->
                              <!-- slide start -->
                              <div class="swiper-slide">
                                 <!-- ad item -->
                                 <a href="#!" class="ad-item">
                                    <div class="image-box">
                                       <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                                    </div>
                                    <div class="post-data">
                                       <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                                       <div class="price">500000
                                          <span>ر.س</span>
                                       </div>
                                       <small class="boxed-only"></small>
                                    </div>
                                    <div class="watch-icon">
                                       <i class="fa fa-star"></i>
                                    </div>
                                 </a>
                                 <!-- ad item -->
                                 <a href="#!" class="ad-item">
                                    <div class="image-box">
                                       <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                                    </div>
                                    <div class="post-data">
                                       <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                                       <div class="price">500000
                                          <span>ر.س</span>
                                       </div>
                                       <small class="boxed-only"></small>
                                    </div>
                                    <div class="watch-icon">
                                       <i class="fa fa-star"></i>
                                    </div>
                                 </a>
                              </div>
                              <!-- slide end -->
                           </div>
                           <div class="swiper-button-prev"></div>
                           <div class="swiper-button-next"></div>
                        </div>
                     </div>
                     <div class="mini-tab-box ma7foz">
                        <div class="swiper-container" dir="rtl">
                           <div class="swiper-wrapper">
                              <!-- slide start -->
                              <div class="swiper-slide">
                                 <!-- ad item -->
                                 <a href="#!" class="ad-item">
                                    <div class="image-box">
                                       <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                                    </div>
                                    <div class="post-data">
                                       <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                                       <div class="price">500000
                                          <span>ر.س</span>
                                       </div>
                                       <small class="boxed-only"></small>
                                    </div>
                                    <div class="watch-icon">
                                       <i class="fa fa-star"></i>
                                    </div>
                                 </a>
                                 <!-- ad item -->
                                 <a href="#!" class="ad-item">
                                    <div class="image-box">
                                       <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                                    </div>
                                    <div class="post-data">
                                       <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                                       <div class="price">500000
                                          <span>ر.س</span>
                                       </div>
                                       <small class="boxed-only"></small>
                                    </div>
                                    <div class="watch-icon">
                                       <i class="fa fa-star"></i>
                                    </div>
                                 </a>
                              </div>
                              <!-- slide end -->
                              <!-- slide start -->
                              <div class="swiper-slide">
                                 <!-- ad item -->
                                 <a href="#!" class="ad-item">
                                    <div class="image-box">
                                       <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                                    </div>
                                    <div class="post-data">
                                       <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                                       <div class="price">500000
                                          <span>ر.س</span>
                                       </div>
                                       <small class="boxed-only"></small>
                                    </div>
                                    <div class="watch-icon">
                                       <i class="fa fa-star"></i>
                                    </div>
                                 </a>
                                 <!-- ad item -->
                                 <a href="#!" class="ad-item">
                                    <div class="image-box">
                                       <img src="{{asset('images')}}/ad-thumb.jpg" alt="">
                                    </div>
                                    <div class="post-data">
                                       <h1 title="شقق فاخرة بجوار الحرم">شقق فاخرة بجوار الحرم</h1>
                                       <div class="price">500000
                                          <span>ر.س</span>
                                       </div>
                                       <small class="boxed-only"></small>
                                    </div>
                                    <div class="watch-icon">
                                       <i class="fa fa-star"></i>
                                    </div>
                                 </a>
                              </div>
                              <!-- slide end -->
                           </div>
                           <div class="swiper-button-prev"></div>
                           <div class="swiper-button-next"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col l3">
                  <div class="user-side">
                     <div class="user-info-box">
                        <img src="{{asset('images')}}/user-mini.jpg" alt="">
                        <div class="user-data">
                           <a href="#!">اسم المستخدم</a>
                           <span>10/10/2010</span>
                        </div>
                     </div>
                     <div class="send-masseg mt-25 the-btn blue modal-open" data-modal-open=".normal-messege">ارسل رسالة</div>
                     <a href="#!" class="whats mt-15 the-btn gray">تواصل خلال واتس اب</a>
                     <div class="borderd mt-15 show-num">
                        اظهر الرقم
                        <span>
                        +996******
                        </span>
                        <span>
                        +9961854215
                        </span>
                     </div>
                     <div class="borderd">
                        <form>
                           <h3 class="centerd">هل انت مشغول؟
                              <small>اترك بياناتك وسوف نعاود الاتصال بك</small>
                           </h3>
                           <input placeholder="الاسم" type="text">
                           <input placeholder="رقم الجوال" type="text">
                           <textarea placeholder="ملاحظات"></textarea>
                           <input type="submit" value="ارسال">
                        </form>
                     </div>
                     <div class="borderd ebay">
                        <a href="#!" target="_blank">
                        <i class="fa fa-link"></i>
                        رابط مقدم الخدمة</a>
                        <a href="#!" class="map-opener modal-open" data-modal-open=".location">
                        <i class="fa fa-map-marker"></i>
                        موقع مقدم الخدمة علي الخريطة</a>
                        <div class="centerd bolded nc top-25">
                           تفاصيل الحجز
                           <div class="input-ebay mt-15">
                              <form>
                                <label>From</label>
                                 <input type="date" placeholder="from">
                                 <label>To</label>
                                 <input type="date" placeholder="to" name="">
                                 <input type="submit" value="احجز">
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
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
      <!-- global overlay -->
      <div class="global-overlay"></div>
      <div class="my-modal direct-messege">
         <div class="closer"></div>
         <div class="my-modal-body">
            <h1 class="no-margin nb">التحدث المباشر مع : فلان الفلاني</h1>
            <form>
               <div class="massege-box">
                  <ul>
                     <li><span>انت :</span> تجربة</li>
                     <li><span>فلان الفلاني :</span> تجربة</li>
                     <li><span>انت :</span> تجربة</li>
                     <li><span>فلان الفلاني :</span> تجربة</li>
                     <li><span>انت :</span> تجربة</li>
                     <li><span>فلان الفلاني :</span> تجربة</li>
                  </ul>
               </div>
               <div class="send-bar">
                  <input type="text" placeholder="اكتب رسالتك">
                  <button>ارسال</button>
               </div>
            </form>
         </div>
      </div>
      <div class="my-modal normal-messege">
         <div class="closer"></div>
         <div class="my-modal-body">
            <h1 class="no-margin nb">ارسل رسالة الي : فلان الفلاني</h1>
            <form>
               <input type="text" placeholder="عنوان الرساله">
               <textarea placeholder="نص الرساله"></textarea>
               <input type="submit" value="ارسال">
            </form>
         </div>
      </div>
      <div class="my-modal location">
         <div class="closer"></div>
         <div class="my-modal-body">
            <h1 class="no-margin nb">موقع مقدم الخدمة علي الخريطة</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61441.68769695712!2d46.65075882893723!3d24.707064720710544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi+Arabia!5e0!3m2!1sen!2seg!4v1510663336688" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
      </div>
      <div class="my-modal share-now">
         <div class="closer"></div>
         <div class="my-modal-body">
            <h1 class="no-margin nb">شاركها مع اصدقائك</h1>
            <div class="ezShare"
               data-title="GulfRoots"
               data-url="http://gulfroots.com"
               data-tweet="موقع مرحبا بكم"
               data-hash-tags="بيع,شراء,استبدال">
            </div>
            <script type="text/html" id="ezShareTemplate">
                 <ul>
                   <li class="facebook">
                     <a href="#" <i class="fa fa-facebook-square"></i> شاركها علي فيسبوك</a>
                   </li>
                   <li class="twitter">
                     <a href="#" <i class="fa fa-twitter-square"></i> شاركها علي تويتر</a>
                   </li>
                   <li class="google-plus">
                     <a href="#" <i class="fa fa-google-plus-square"></i> شاركها علي جوجل بلس</a>
                   </li>
                 </ul>
            </script>
         </div>
      </div>
      <!-- jQuery plugins -->
      <script defer src="{{asset('js')}}/ui.min.js"></script>
   </body>
</html>