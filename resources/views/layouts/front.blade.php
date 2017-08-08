<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Seosight - Shop</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css') }}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!--Styles for RTL-->

    {{--<!--<link rel="stylesheet" type="text/css" href="{{ asset('app/css/rtl.css') }}">-->--}}

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

    <style>

        .nav-added > li > a:hover {

            color: #4cc2c0;
        }

        .heading-title {

            text-align: center;
        }

        .heading-line{

            text-align: center;

        }

    </style>

</head>


<body class=" ">

<header class="header" id="site-header">

    <div class="container">

        <div class="header-content-wrapper">


            <a href="#" class="navbar-brand" style="font-size: 26px; margin-left:40px;">E-Commerce Store</a>

            <ul class="nav-added">

                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('cart') }}">Cart</a></li>
                <li><a href="{{ route('cart.checkout.index') }}">Checkout</a></li>
                <li><a href="{{ url('logout') }}">Sign out</a></li>

            </ul>

            <ul class="nav-add">

                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">{{ Cart::content()->count() }}</span>
                    </a>

                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart align-center">{{ Cart::total() }}</h4>
                            <br>
                            <a href="{{ route('cart') }}">

                                <div class="btn btn-small btn--dark">
                                    <span class="text">view cart</span>
                                </div>

                            </a>
                        </div>
                    </div>

                </li>
            </ul>
        </div>

    </div>

</header>


<div class="content-wrapper">

    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">Love E-Commerce Store</h4>
                    <p class="heading-text">Buy T-shirt, books, pants etc.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->

    @yield('page')

</div>

<!-- Footer -->


<footer class="footer" id="site-footer">
    <div class="container">
        <div class="row">
            <div class="info">
                <div class="col-lg-12">
                    <div class="heading text-center">
                        <h3 class="heading-title" >E-Commerce Store</h3>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                        <p class="heading-text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="contacts">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="contacts-item">
                        <div class="icon js-animate-icon">
                            <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="  M45.1,44.2C42.9,42,39.6,40,37,42.6c-1.8,1.8-2.6,3.9-2.6,3.9s-4.3,2.3-11.7-5.2s-5.2-11.7-5.2-11.7s2.1-0.8,3.9-2.6  c2.6-2.6,0.6-5.9-1.7-8.1c-2.7-2.7-6.2-4.9-8.2-2.9c-3.7,3.7-4.4,8.4-4.4,8.4S9,35.5,18.7,45.3s20.9,11.6,20.9,11.6s4.7-0.7,8.4-4.4  C50,50.4,47.8,46.9,45.1,44.2z" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M18.4,12.2C22.2,9.5,26.9,8,32,8c13.3,0,24,10.8,24,24c0,4-1.3,9-4.4,12.2" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M27.3,55.6c-9.8-1.9-17.5-9.8-19.1-19.7" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M30,21c0,0,4.4,0,5.2,0c1.2,0,1.8,0.2,1.8,1.1s0,0.7,0,1.3c0,0.6,0,1.4-1.6,2.5c-2.3,1.6-5.6,3.8-5.6,5.1c0,1.6,0.7,2,1.8,2  s5.3,0,5.3,0" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M40,21c0,0,0,2.8,0,3.8S39.9,27,41.5,27c1.6,0,4.5,0,4.5,0v-6.1V33" fill="none" stroke="#fcb03b" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></svg>
                        </div>
                        <div class="content">
                            <a href="#" class="title">+8801929210872</a>
                            <p class="sub-title">Mon-Fri 9am-6pm</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="contacts-item">
                        <div class="icon js-animate-icon">
                            <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" points="  54,17 32,36 10,17 " stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="10.9" x2="26" y1="48" y2="36"/><path d="  M32.7,49H13c-2.2,0-4-1.8-4-4V19c0-2.2,1.8-4,4-4h38c2.2,0,4,1.8,4,4v15.5" fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><circle cx="44.9" cy="43.1" fill="none" r="10.1" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><path d="  M44,41.4c0,0-1.3,3.4-0.9,5.1c0.4,1.7,2.6,2.1,3.7,1.1" fill="none" stroke="#f15b26" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><g><circle cx="45.4" cy="38.3" fill="#DCE9EE" r="0.9"/><path d="M45.4,37.3c-0.5,0-0.9,0.4-0.9,0.9c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9C46.4,37.8,46,37.3,45.4,37.3   L45.4,37.3z" fill="#f15b26"/></g></svg>
                        </div>
                        <div class="content">
                            <a href="#" class="title">mifaisal19@gmail.com</a>
                            <p class="sub-title">online support</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="contacts-item">
                        <div class="icon js-animate-icon">
                            <svg enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><polygon fill="none" points="  38.7,36.4 56,32 38.7,27.6 42,22 36.4,25.3 32,8 27.6,25.3 22,22 25.3,27.6 8,32 25.3,36.4 22,42 27.6,38.7 32,56 36.4,38.7 42,42   " stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></polygon><circle cx="32" cy="32" fill="none" r="4" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle><path d="  M26.1,53.2c-7.9-2.2-13.9-8.6-15.6-16.7" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path><path d="  M53.5,36.9c-1.8,8.1-8.2,14.6-16.3,16.5" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path><path d="  M36.9,10.5c8.2,1.9,14.7,8.3,16.6,16.6" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path><path d="  M10.5,27.1c1.9-8.2,8.3-14.6,16.4-16.5" fill="none" stroke="#3cb878" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path></svg>
                        </div>
                        <div class="content">
                            <a href="#" class="title">Keranigang, Dhaka</a>
                            <p class="sub-title">Bangladesh</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</footer>



{{--<footer class="footer">--}}
    {{--<div class="sub-footer">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</footer>--}}



<script src="{{ asset('app/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('app/js/crum-mega-menu.js') }}"></script>
<script src="{{ asset('app/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('app/js/theme-plugins.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>
<script src="{{ asset('app/js/form-actions.js') }}"></script>

<script src="{{ asset('app/js/velocity.min.js') }}"></script>
<script src="{{ asset('app/js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('app/js/animation.velocity.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script>

    @if(Session::has('success'))

        toastr.success("{{ Session::get('success') }}")

    @endif

</script>

<!-- ...end JS Script -->


</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>