<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from quomodosoft.com/html/ParaPromo/ParaPromo/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Dec 2020 20:42:10 GMT -->
<head>
<meta charset="utf-8">
<meta name="author" content="Ashekur Rahman">
<meta name="description" content="">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ParaPromo | وسادة التدليك والمساج لتخفيف شد العضلات والاسترخاء</title>

<link rel="apple-touch-icon" href={{ asset('assets/images/pavicon.png')}}>
<link rel="shortcut icon" type="image/ico" href={{ asset('assets/images/pavicon.png')}}>

<link rel="stylesheet" href={{asset ("assets/css/styyleorder.css")}}>
<link rel="stylesheet" href={{asset ("assets/css/normalize.css")}}>
<link rel="stylesheet" href={{asset ("assets/css/bootstrap-min.css")}}>
<link rel="stylesheet" href={{asset ("assets/css/owl-carousel-min.css")}}>
<link rel="stylesheet" href={{asset ("assets/css/lity-min.css")}}>
<link rel="stylesheet" href={{asset ("assets/css/font-awesome-min.css")}}>
<link rel="stylesheet" href={{asset ("assets/css/helper.css")}}>
<link rel="stylesheet" href={{asset ("assets/css/theme.css")}}>

<link rel="stylesheet" href={{asset ("assets/style.css")}}>
<link rel="stylesheet" href={{asset ("assets/css/responsive.css")}}>

<script src={{asset ("assets/js/vendor/modernizr-2-8-3-min.js")}} type="c91a161dbedbd19a7e693b1a-text/javascript"></script>
<!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '395180988373308');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=395180988373308&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
<body data-spy="scroll" data-target=".mainmenu-area">

<div class="preloader">
<svg viewBox="-2000 -1000 4000 2000">
<path id="inf" d="M354-354A500 500 0 1 1 354 354L-354-354A500 500 0 1 0-354 354z"></path>
<use xlink:href="#inf" stroke-dasharray="1570 5143" stroke-dashoffset="6713px"></use>
</svg>
</div>

<div class="mainmenu-area transparent v2" data-spy="" data-offset-top="197">
<div class="container">
<div class="row">
<div class="col-xs-12 row-flex">
<div class="site-brand">
<a href="/" class="logo">ParaPromo</a>
</div>
<button class="burger">
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span>
</button>
<!-- <div class="mainmenu">
<ul class="nav">
<li><a href="#home-area">Home</a></li>
<li><a href="#about-area">About</a></li>
<li><a href="#service-area">Service</a></li>
<li><a href="#gallery-area">Gallery</a></li>
<li><a href="#testimonial-area">Testimonial</a></li>
<li><a href="#price-area">Price</a></li>
<li><a href="#contact-area">Contact</a></li>
</ul>
</div> -->
</div>
</div>
</div>
</div>


<header class="header-area v2 angle-1" id="home-area">
<div class="container">

    <div class="subscribe-area v2">
        <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="text-box text-center">
        <div class="box-icon v2">
        <i class="fa fa-address-card" aria-hidden="true"></i>
        </div>
        <h2 class="title" title="Never miss any update">إملأ معلوماتك
        </h2>
        <div class="space-60"></div>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
        <form  novalidate="true" method="POST"
        action="{{ route('order.store')}}">
        @csrf
        <div class="subscribe-form">
        <input type="text" class="form-input" id="mc-email" name="name" value="{{ old('name') }}" placeholder="المرجو إدخال الإسم الكامل" required>
        @if($errors->has('name'))
        <div class="text-danger">{{ $errors->first('name') }}</div>
    @endif
        <input type="email" class="form-input" id="mc-email" name="number" value="{{old('number') }}"  placeholder="رقم الهاتف" required>
        @if($errors->has('number'))
        <div class="text-danger">{{ $errors->first('number') }}</div>
    @endif
        <input type="email" class="form-input" id="mc-email" name="address" value="{{old('address') }}"  placeholder="العنوان" required>
        @if($errors->has('address'))
        <div class="text-danger">{{ $errors->first('address') }}</div>
    @endif
        <input type="email" class="form-input" id="mc-email" name="city" value="{{old('city') }}"  placeholder="المدينة" required>
        @if($errors->has('city'))
        <div class="text-danger">{{ $errors->first('city') }}</div>
    @endif

    <input type="number" class="form-input" id="mc-email" name="Quantity" value="{{old('Quantity') }}"  placeholder="الكمية" >




        <button class="bttn-5 submit" type="submit">تأكيد الطلبية</button>
        <div class="info">عزيزي الزائر نشكركم على زيارتكم و وضعكم التقة في منتوجاتنا ،نخبرك بأن بشرائك من موقعنا فانت موافق على <a class="siyasa" href="/privacy">سياسة الخصوصية و شروط الاستخدام </a>، دمت في رعاية الله وحفضه .</div>
        </div>
        <label class="mt10" for="mc-email"></label>
        </form>
        {{-- @if($errors->any())
         <div>
             <ul>
                 @foreach($errors->all() as $error)
                     <li class="text-danger">{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
         @endif --}}
        </div>
        </div>
         </div>


</div>
<!-- <div class="topshapewrap">
<div class="topshape"></div>
</div> -->
</header>

<footer class="footer-area v2 section-bg angle-2">
<div class="container">
<div class="row">
<div class="col-xs-12">



</div>
</div>
</div>
<div class="footer-bottom">
<div class="container">


</div>
</div>
<div class="copyright-area">
<div class="container">
<div class="row">
<div class="col-xs-12 text-center">
<span class="copyright">&copy; 2020 ParaPromo. All Rights Reserved</span>
</div>
</div>
</div>
</div>
<div class="productShape1">
<div class="productShape1inner">
</div>
</div>
</footer>


<script src=" {{asset ("assets/js/vendor/jquery-1-12-4-min.js")}}" type="c91a161dbedbd19a7e693b1a-text/javascript"></script>

<script src=" {{asset ("assets/js/vendor/bootstrap-min.js")}}" type="c91a161dbedbd19a7e693b1a-text/javascript"></script>
<script src=" {{asset ("assets/js/owl-carousel-min.js")}}" type="c91a161dbedbd19a7e693b1a-text/javascript"></script>
<script src=" {{asset ("assets/js/ajaxchimp.js")}}" type="c91a161dbedbd19a7e693b1a-text/javascript"></script>
<script src=" {{asset ("assets/js/lity-min.js")}}" type="c91a161dbedbd19a7e693b1a-text/javascript"></script>
<script src=" {{asset ("assets/js/click-effect.js")}}" type="c91a161dbedbd19a7e693b1a-text/javascript"></script>
<script src=" {{asset ("assets/js/mouse-effect.js")}}" type="c91a161dbedbd19a7e693b1a-text/javascript"></script>
<script src=" {{asset ("assets/js/scrollUp-min.js")}}" type="c91a161dbedbd19a7e693b1a-text/javascript"></script>
<script src=" {{asset ("assets/js/wow-min.js")}}" type="c91a161dbedbd19a7e693b1a-text/javascript"></script>

<script src=" {{asset ("assets/js/main.js")}}" type="c91a161dbedbd19a7e693b1a-text/javascript"></script>
<script src="{{asset ("ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js ")}}" data-cf-settings="c91a161dbedbd19a7e693b1a-|49" defer=""></script>
</body>

<!-- Mirrored from quomodosoft.com/html/ParaPromo/ParaPromo/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Dec 2020 20:42:25 GMT -->
</html>
