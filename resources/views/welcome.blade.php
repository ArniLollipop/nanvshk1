<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>Caaae</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->

        <!-- Styles -->
        <!-- <style> -->
            <!-- /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}} -->
        <!-- </style> -->


<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon-2.ico" type="image/x-icon">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/global.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

    </head>
    <body class="antialiased">
       
    <div class="boxed_wrapper">


<!-- mouse-pointer -->
<div class="mouse-pointer style-two" id="mouse-pointer">
    <div class="icon"><i class="far fa-angle-left"></i><i class="far fa-angle-right"></i></div>
</div>
<!-- mouse-pointer end -->


<!-- preloader -->
<div class="loader-wrap">
    <div class="preloader">
        <div class="preloader-close">x</div>
        <div id="handle-preloader" class="handle-preloader home-2">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                </div>
            </div>  
        </div>
    </div>
</div>
<!-- preloader end -->


<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="popup-inner">
        <div class="upper-box clearfix">
            <figure class="logo-box pull-left"><a href="index.html"><img src="assets/images/logo-3.png" alt=""></a></figure>
            <div class="close-search pull-right"><span class="icon-179"></span></div>
        </div>
        <div class="overlay-layer"></div>
        <div class="auto-container">
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                            <button type="submit"><i class="icon-1"></i></button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group info-sidebar">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget"><i class="icon-179"></i></a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">
                            <a href="/"><img src="../assets/images/logo-3new.png" alt="" /></a>
                        </div>
                        <div class="text-box">
                            <h4>О нас</h4>
                            <p>Коротко о CAAAE </p>
                        </div>
                        <div class="info-inner">
                            <h4>Наш адрес</h4>
                            <ul class="info clearfix">
                                <li><i class="icon-180"></i>629 12th St, Modesto, CA 95354 United States</li>
                                <li><i class="icon-181"></i><a href="mailto:atrixmain@gmail.com">atrixmain@gmail.com</a></li>
                                <li><i class="icon-182"></i><a href="tel:123045615523">+1 (230)-456-155-23</a></li>
                            </ul>
                        </div>
                        <div class="social-inner">
                            <h4>Следуйте за нами в соцсетях</h4>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END sidebar widget item -->


<!-- main header -->
<header class="main-header">
            <!-- header-top-one -->
            <div class="header-top-one p_relative d_block">
                <div class="auto-container">
                    <div class="top-inner clearfix p_relative">
                        <div class="shape p_absolute t_0" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                        <div class="top-left pull-left">
                            <ul class="social-links clearfix">
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="index.html" class="p_relative d_iblock fs_16"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="index.html" class="p_relative d_iblock fs_16"><i class="fab fa-twitter"></i></a></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="index.html" class="p_relative d_iblock fs_16"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="p_relative d_iblock fs_16 float_left lh_55"><a href="index.html" class="p_relative d_iblock fs_16"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                        <div class="top-right pull-right">
                            <ul class="info clearfix">
                                <li class="search-box-outer search-toggler p_relative d_iblock float_left mr_60 lh_55">
                                    <i class="icon-1"></i>
                                </li>
                                <li class="p_relative d_iblock float_left mr_60 lh_55 pl_25 fs_16">
                                    <i class="icon-2"></i>
                                    <p>Call: <a href="tel:123045615523">+1 (230)- 456-155-23</a></p>
                                </li>
                                <li class="p_relative d_iblock float_left lh_55 pl_25 fs_16">
                                    <i class="icon-3"></i>
                                    <p>Email: <a href="mailto:sample@example.com">sample@example.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><img src="assets/images/logo-3new.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix home-menu">
                                        <li class="current dropdown"><a href="index.html">О нас</a>
                                            <!-- <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 column">
                                                        <ul>
                                                            <li><h6>Home Pages</h6></li>
                                                            <li><a href="index.html">Corporate Business</a></li>
                                                            <li><a href="index-2.html">Consulting</a></li>
                                                            <li><a href="index-3.html">Finance</a></li>
                                                            <li><a href="index-4.html">Insurance</a></li>
                                                            <li><a href="index-5.html">Law Firm</a></li>
                                                            <li><a href="index-6.html">Visa Consulting</a></li>
                                                            <li><a href="index-7.html">Auto Repair</a></li>
                                                            <li><a href="index-8.html">Psychologist</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 column">
                                                        <ul>
                                                            <li><h6>Home Pages</h6></li>
                                                            <li><a href="index-9.html">Logistic Service</a></li>
                                                            <li><a href="index-10.html">Architecture</a></li>
                                                            <li><a href="index-11.html">Construction</a></li>
                                                            <li><a href="index-12.html">Digital Agency</a></li>
                                                            <li><a href="index-13.html">Data Hosting</a></li>
                                                            <li><a href="index-14.html">App Landing</a></li>
                                                            <li><a href="index-15.html">Startup Business</a></li>
                                                            <li><a href="index-16.html">Electricity Services</a></li>
                                                        </ul>
                                                    </div> 
                                                    <div class="col-lg-4 column">
                                                        <ul>
                                                            <li><h6>Home Pages</h6></li>
                                                            <li><a href="index-17.html">Electric Shop</a></li>
                                                            <li><a href="index-18.html">Computer Shop</a></li>
                                                        </ul>
                                                    </div>                                        
                                                </div>                                            
                                            </div> -->
                                        </li>
                                        <li class="dropdown"><a href="index.html">Проекты</a>
                                            <!-- <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>About Pages</h6></li>
                                                            <li><a href="about.html">About Classic</a></li>
                                                            <li><a href="about-2.html">About Creative</a></li>
                                                            <li><a href="about-3.html">About Modern</a></li>
                                                            <li><a href="about-4.html">About Simple</a></li>
                                                            <li><a href="about-5.html">About Minimal</a></li>
                                                            <li><h6>Testimonial Pages</h6></li>
                                                            <li><a href="testimonial-1.html">Testimonial Page 1</a></li>
                                                            <li><a href="testimonial-2.html">Testimonial Page 2</a></li>
                                                            <li><a href="testimonial-3.html">Testimonial Page 3</a></li>
                                                            <li><a href="testimonial-4.html">Testimonial Page 4</a></li>
                                                            <li><a href="testimonial-5.html">Testimonial Page 5</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Academ Kitap</h6></li>
                                                            <li><a href="service.html">Service Style 1</a></li>
                                                            <li><a href="service-2.html">Service Style 2</a></li>
                                                            <li><a href="service-3.html">Service Style 3</a></li>
                                                            <li><a href="service-4.html">Service Style 4</a></li>
                                                            <li><a href="service-5.html">Service Style 5</a></li>
                                                            <li><a href="service-details.html">Service Details 1</a></li>
                                                            <li><a href="service-details-2.html">Service Details 2</a></li>
                                                            <li><a href="service-details-3.html">Service Details 3</a></li>
                                                            <li><h6>Other Pages</h6></li>
                                                            <li><a href="career.html">Career</a></li>
                                                            <li><a href="process.html">Our Process</a></li>
                                                            <li><a href="faq.html">FAQ 1</a></li>
                                                            <li><a href="faq-2.html">FAQ 2</a></li>
                                                            <li><a href="faq-3.html">FAQ 3</a></li>
                                                        </ul>
                                                    </div> 
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Univer</h6></li>
                                                            <li><a href="team.html">Team Page 1</a></li>
                                                            <li><a href="team-2.html">Team Page 2</a></li>
                                                            <li><a href="team-3.html">Team Page 3</a></li>
                                                            <li><a href="team-4.html">Team Page 4</a></li>
                                                            <li><a href="team-5.html">Team Page 5</a></li>
                                                            <li><a href="team-6.html">Team Page 6</a></li>
                                                            <li><a href="team-7.html">Team Page 7</a></li>
                                                            <li><a href="team-details.html">Team Details 1</a></li>
                                                            <li><a href="team-details-2.html">Team Details 2</a></li>
                                                            <li><a href="team-details-3.html">Team Details 3</a></li>
                                                            <li><h6>Utilities</h6></li>
                                                            <li><a href="login.html">Log in</a></li>
                                                            <li><a href="registration.html">Registration</a></li>
                                                            <li><a href="error.html">404 Error</a></li>
                                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                                        </ul>
                                                    </div>   
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Контакты</h6></li>
                                                            <li><a href="pricing.html">Pricing Table 1</a></li>
                                                            <li><a href="pricing-2.html">Pricing Table 2</a></li>
                                                            <li><a href="pricing-3.html">Pricing Table 3</a></li>
                                                            <li><a href="pricing-4.html">Pricing Table 4</a></li>
                                                            <li><a href="pricing-5.html">Pricing Table 5</a></li>
                                                            <li><h6>Contact Pages</h6></li>
                                                            <li><a href="contact.html">Contact Page 1</a></li>
                                                            <li><a href="contact-2.html">Contact Page 2</a></li>
                                                            <li><a href="contact-3.html">Contact Page 3</a></li>
                                                            <li><a href="contact-4.html">Contact Page 4</a></li>
                                                            <li><a href="contact-5.html">Contact Page 5</a></li>
                                                        </ul>
                                                    </div>                                     
                                                </div>                                            
                                            </div> -->
                                        </li>
                                        <li class="dropdown"><a href="index.html">Univer</a>
                                            <!-- <ul>
                                                <li><a href="project.html">Project Style 1</a></li>
                                                <li><a href="project-2.html">Project Style 2</a></li>
                                                <li><a href="project-3.html">Project Style 3</a></li>
                                                <li><a href="project-4.html">Project Style 4</a></li>
                                                <li><a href="project-5.html">Project Style 5</a></li>
                                                <li><a href="project-6.html">Project Style 6</a></li>
                                                <li class="dropdown"><a href="index.html">Project Details</a>
                                                    <ul>
                                                        <li><a href="project-details.html">Project Details 1</a></li>
                                                        <li><a href="project-details-2.html">Project Details 2</a></li>
                                                        <li><a href="project-details-3.html">Project Details 3</a></li>
                                                        <li><a href="project-details-4.html">Project Details 4</a></li>
                                                        <li><a href="project-details-5.html">Project Details 5</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li> 
                                        <li class="dropdown"><a href="index.html">Academ Kitap</a>
                                            <!-- <ul>
                                                <li><a href="shop.html">Shop 1</a></li>
                                                <li><a href="shop-2.html">Shop 2</a></li>
                                                <li><a href="shop-details.html">shop Details 1</a></li>
                                                <li><a href="shop-details-2.html">shop Details 2</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="dropdown"><a href="about-1.html">Новости</a>
                                            <!-- <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Elements</h6></li>
                                                            <li><a href="feature-element-1.html">Feature Column 01</a></li>
                                                            <li><a href="feature-element-2.html">Feature Column 02</a></li>
                                                            <li><a href="feature-element-3.html">Feature Column 03</a></li>
                                                            <li><a href="feature-element-4.html">Feature Column 04</a></li>
                                                            <li><a href="feature-element-5.html">Feature Column 05</a></li>
                                                            <li><a href="feature-element-6.html">Feature Column 06</a></li>
                                                            <li><a href="feature-element-7.html">Feature Column 07</a></li>
                                                            <li><a href="feature-element-8.html">Feature Column 08</a></li>
                                                            <li><a href="feature-element-9.html">Feature Slider 01</a></li>
                                                            <li><a href="feature-element-10.html">Feature Slider 02</a></li>
                                                            <li><a href="feature-element-11.html">Feature Slider 03</a></li>
                                                            <li><a href="feature-element-12.html">Feature Slider 04</a></li>
                                                            <li><a href="feature-element-13.html">Feature Slider 05</a></li>
                                                            <li><a href="feature-element-14.html">Feature Slider 06</a></li>
                                                            <li><a href="feature-element-15.html">Feature Slider 07</a></li>
                                                            <li><a href="feature-element-16.html">Feature Slider 08</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Elements</h6></li>
                                                            <li><a href="service-element-1.html">Service Column 01</a></li>
                                                            <li><a href="service-element-2.html">Service Column 02</a></li>
                                                            <li><a href="service-element-3.html">Service Column 03</a></li>
                                                            <li><a href="service-element-4.html">Service Column 04</a></li>
                                                            <li><a href="service-element-5.html">Service Column 05</a></li>
                                                            <li><a href="service-element-6.html">Service Column 06</a></li>
                                                            <li><a href="service-element-7.html">Service Column 07</a></li>
                                                            <li><a href="service-element-8.html">Service Column 08</a></li>
                                                            <li><a href="service-element-9.html">Service Slider 01</a></li>
                                                            <li><a href="service-element-10.html">Service Slider 02</a></li>
                                                            <li><a href="service-element-11.html">Service Slider 03</a></li>
                                                            <li><a href="service-element-12.html">Service Slider 04</a></li>
                                                            <li><a href="service-element-13.html">Service Slider 05</a></li>
                                                            <li><a href="service-element-14.html">Service Slider 06</a></li>
                                                            <li><a href="service-element-15.html">Service Slider 07</a></li>
                                                            <li><a href="service-element-16.html">Service Slider 08</a></li>
                                                        </ul>
                                                    </div> 
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Elements</h6></li>
                                                            <li><a href="team-element-1.html">Team Column 01</a></li>
                                                            <li><a href="team-element-2.html">Team Column 02</a></li>
                                                            <li><a href="team-element-3.html">Team Column 03</a></li>
                                                            <li><a href="team-element-4.html">Team Column 04</a></li>
                                                            <li><a href="team-element-5.html">Team Slider 01</a></li>
                                                            <li><a href="team-element-6.html">Team Slider 02</a></li>
                                                            <li><a href="team-element-7.html">Team Slider 03</a></li>
                                                            <li><a href="team-element-8.html">Team Slider 04</a></li>
                                                            <li><a href="working-element-9.html">Working Column 01</a></li>
                                                            <li><a href="working-element-10.html">Working Column 02</a></li>
                                                            <li><a href="working-element-11.html">Working Column 03</a></li>
                                                            <li><a href="working-element-12.html">Working Column 04</a></li>
                                                            <li><a href="working-element-13.html">Working Slider 01</a></li>
                                                            <li><a href="working-element-14.html">Working Slider 02</a></li>
                                                            <li><a href="working-element-15.html">Working Slider 03</a></li>
                                                            <li><a href="working-element-16.html">Working Slider 04</a></li>
                                                        </ul>
                                                    </div> 
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Elements</h6></li>
                                                            <li><a href="news-element-1.html">News Column 01</a></li>
                                                            <li><a href="news-element-2.html">News Column 02</a></li>
                                                            <li><a href="news-element-3.html">News Slider 01</a></li>
                                                            <li><a href="news-element-4.html">News Slider 02</a></li>
                                                            <li><a href="funfact-element-1.html">Funfact Column 01</a></li>
                                                            <li><a href="funfact-element-2.html">Funfact Column 02</a></li>
                                                            <li><a href="funfact-element-3.html">Funfact Slider 01</a></li>
                                                            <li><a href="funfact-element-4.html">Funfact Slider 02</a></li>
                                                            <li><a href="pricing-element-1.html">Pricing Column 01</a></li>
                                                            <li><a href="pricing-element-2.html">Pricing Column 02</a></li>
                                                            <li><a href="pricing-element-3.html">Pricing Slider 01</a></li>
                                                            <li><a href="pricing-element-4.html">Pricing Slider 02</a></li>
                                                            <li><a href="progress-element-1.html">Progress Circle</a></li>
                                                            <li><a href="progress-element-2.html">Progress Bar</a></li>
                                                        </ul>
                                                    </div>                                       
                                                </div>                                            
                                            </div> -->
                                        </li>
                                        <li class="dropdown"><a href="index.html">Контакты</a>
                                            <!-- <ul>
                                                <li><a href="blog.html">Blog Standard 1</a></li>
                                                <li><a href="blog-2.html">Blog Standard 2</a></li>
                                                <li><a href="blog-3.html">Blog Grid 1</a></li>
                                                <li><a href="blog-4.html">Blog Grid 2</a></li>
                                                <li><a href="blog-5.html">Blog Masonry</a></li>
                                                <li><a href="blog-6.html">Blog List</a></li>
                                                <li class="dropdown"><a href="index.html">Blog Details</a>
                                                    <ul>
                                                        <li><a href="blog-details.html">Blog Details 1</a></li>
                                                        <li><a href="blog-details-2.html">Blog Details 2</a></li>
                                                        <li><a href="blog-details-3.html">Blog Details 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>   
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- <div class="btn-box">
                            <a href="index.html" class="theme-btn theme-btn-one">Get A Quote<i class="icon-4"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn theme-btn-one">Get A Quote<i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    
    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="assets/images/mobile-logo.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->


<!-- banner-section -->
<section class="slider-two centred p_relative">
    <div class="shape-layer">
        <div class="shape-1 hero-shape-two p_absolute l_0" style="background-image: url(assets/images/shape/shape-34.png);"></div>
        <div class="shape-2 hero-shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-35.png);"></div>
    </div>
    <div class="pattern-layer p_absolute l_0 b_0 z_2" style="background-image: url(assets/images/shape/shape-33.png);"></div>
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
        <div class="slide-item p_relative">
            <div class="image-layer p_absolute" style="background-image:url(assets/images/banner/banner-4.jpg)"></div>
            <div class="auto-container">
                <div class="content-box p_relative d_block z_5">
                    <h2 class="p_relative d_iblock fw_bold fs_80 lh_90 mb_15"><span class="slider-text-anim">Тут какой-то</span><br /><span class="slider-text-anim">Текст.</span></h2>
                    <p class="d_block fs_18 mb_45">И короткое описание <br />к этому тексту.</p>
                    <div class="btn-box clearfix">
                        <a href="index-2.html" class="theme-btn theme-btn-two"><span data-text="Get Started">Перейти</span></a>
                    </div>
                </div> 
            </div>
        </div>
        <div class="slide-item p_relative">
            <div class="image-layer p_absolute" style="background-image:url(assets/images/banner/banner-5.jpg)"></div>
            <div class="auto-container">
                <div class="content-box p_relative d_block z_5">
                    <h2 class="p_relative d_iblock fw_bold fs_80 lh_90 mb_15"><span class="slider-text-anim">Тут какой-то</span><br /><span class="slider-text-anim">Текст.</span></h2>
                    <p class="d_block fs_18 mb_45">И короткое описание <br />к этому тексту.</p>
                    <div class="btn-box clearfix">
                        <a href="index-2.html" class="theme-btn theme-btn-two"><span data-text="Get Started">Перейти</span></a>
                    </div>
                </div> 
            </div>
        </div>
        <div class="slide-item p_relative">
            <div class="image-layer p_absolute" style="background-image:url(assets/images/banner/banner-6.jpg)"></div>
            <div class="auto-container">
                <div class="content-box p_relative d_block z_5">
                    <h2 class="p_relative d_iblock fw_bold fs_80 lh_90 mb_15"><span class="slider-text-anim">Тут какой-то</span><br /><span class="slider-text-anim">Текст.</span></h2>
                    <p class="d_block fs_18 mb_45">И короткое описание <br />к этому тексту.</p>
                    <div class="btn-box clearfix">
                        <a href="index-2.html" class="theme-btn theme-btn-two"><span data-text="Get Started">Перейти</span></a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->


<!-- feature-two -->
<section class="feature-two p_relative">
    <div class="auto-container">
        <div class="inner-container p_relative d_block b_radius_5 b_shadow_6 pt_50 pr_80 pb_50 pl_80">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block pl_100 pr_50 pt_11 pb_9">
                            <div class="icon-box p_absolute l_0 t_0 w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1">
                                <div class="icon p_relative d_iblock g_color_2"><i class="icon-6"></i></div>
                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-12.png" alt=""></div>
                            </div>
                            <h4 class="d_block fs_20 lh_30 mb_0">Текст</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block pl_100 pr_50 pt_11 pb_9">
                            <div class="icon-box p_absolute l_0 t_0 w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1">
                                <div class="icon p_relative d_iblock g_color_2"><i class="icon-7"></i></div>
                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-13.png" alt=""></div>
                            </div>
                            <h4 class="d_block fs_20 lh_30 mb_0">Текст</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block pl_100 pr_50 pt_11 pb_9">
                            <div class="icon-box p_absolute l_0 t_0 w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1">
                                <div class="icon p_relative d_iblock g_color_2"><i class="icon-8"></i></div>
                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-14.png" alt=""></div>
                            </div>
                            <h4 class="d_block fs_20 lh_30 mb_0">Текст</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-two end -->


<!-- about-two -->
<section class="about-two p_relative sec-pad">
    <div class="shape parallax-scene parallax-scene-1">
        <div data-depth="0.40" class="shape-1 p_absolute"></div>
        <div data-depth="0.50" class="shape-2 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-36.png);"></div>
        <div data-depth="0.30" class="shape-3 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-36.png);"></div>
        <div data-depth="0.40" class="shape-4 p_absolute"></div>
    </div>
    <div class="auto-container">
        <div class="upper-box p_relative d_block mb_100">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                    <div class="sec-title-two p_relative d_block mr_150">
                        <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17">О нас</span>
                        <h2 class="d_block fs_40 fw_bold font_family_oxygen mb_25">Заголовок</h2>
                        <p class="fs_18 font_family_oxygen mb_0">Amet consectur adipiscing elit sed eiusmod  tempor incididunt labore dolore.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-column p_relative d_block mt_60">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 text">
                            <p class="fs_16 font_family_oxygen mb_25">Lorem ipsum dolor sit amet consect etur adipisicing elit sed do eiusmod tempor incididunt labore et dolore magna aliqua.</p>
                            <p class="fs_16 font_family_oxygen">Quis nostrud exertation lamco lab oris aliquip comodo.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 text">
                            <p class="fs_16 font_family_oxygen mb_25">Tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation.</p>
                            <p class="fs_16 font_family_oxygen">Laboris aliquip ex commodo conse quat duis aute irure dolor in reprehen derit in voluptate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-inner p_relative d_block pt_200 pb_200 b_radius_5 centred wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="background-image: url(assets/images/background/video-bg-2.jpg);">
            <div class="video-btn">
                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn p_relative d_iblock w_100 h_100 lh_100 text-center b_radius_50 fs_30" data-caption=""><i class="icon-10"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- about-two end -->


<!-- clients-one -->
<section class="clients-one p_relative pb_140">
    <div class="auto-container">
        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a></figure>
            </div>
            <div class="clients-logo-box">
                <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a></figure>
                <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a></figure>
            </div>
        </div>
    </div>
</section>
<!-- clients-one end -->


<!-- service-two -->
<section class="service-two p_relative sec-pad centred">
    <div class="pattern-layer">
        <div class="pattern-1 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-39.png);"></div>
        <div class="pattern-2 p_absolute r_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-40.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title-two p_relative d_block mb_50">
            <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17">УСЛУГИ</span><br />
            <h2 class="d_block fs_40 fw_bold font_family_oxygen mb_35">Great Business Solutions <br />System</h2><br />
            <p class="fs_18 font_family_oxygen mb_0">Amet consectur adipiscing elit sed eiusmod ex tempor incididunt <br />labore dolore magna aliquaenim ad minim veniam.</p>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-two wow slideInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block pl_40 pt_70 pr_30 pb_45 b_radius_10 tran_5">
                        <div class="icon-box p_relative d_iblock mb_40">
                            <div class="icon p_relative d_iblock fs_45 g_color_2 tran_5 z_1"><i class="icon-11"></i></div>
                            <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-15.png" alt=""></div>
                            <div class="icon-shape hero-shape-four p_absolute tran_5"></div>
                            <div class="overlay-icon p_absolute tran_5" style="background-image: url(assets/images/shape/shape-38.png);"></div>
                        </div>
                        <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_16 font_family_oxygen"><a href="service-details.html">Strategic Consulting <br />Services</a></h4>
                        <p class="p_relative d_block mb_14 font_family_oxygen">Lorem ipsum dolor sit elit consectur sed eiusmod tempor labore aliquat.</p>
                        <div class="link">
                            <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold font_family_oxygen">Learn more<i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-two wow slideInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block pl_40 pt_70 pr_30 pb_45 b_radius_10 tran_5">
                        <div class="icon-box p_relative d_iblock mb_40">
                            <div class="icon p_relative d_iblock fs_45 g_color_2 tran_5 z_1"><i class="icon-12"></i></div>
                            <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-16.png" alt=""></div>
                            <div class="icon-shape hero-shape-four p_absolute tran_5"></div>
                            <div class="overlay-icon p_absolute tran_5" style="background-image: url(assets/images/shape/shape-38.png);"></div>
                        </div>
                        <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_16 font_family_oxygen"><a href="service-details.html">Best Financial <br />Advice</a></h4>
                        <p class="p_relative d_block mb_14 font_family_oxygen">Lorem ipsum dolor sit elit consectur sed eiusmod tempor labore aliquat.</p>
                        <div class="link">
                            <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold font_family_oxygen">Learn more<i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-two wow slideInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block pl_40 pt_70 pr_30 pb_45 b_radius_10 tran_5">
                        <div class="icon-box p_relative d_iblock mb_40">
                            <div class="icon p_relative d_iblock fs_45 g_color_2 tran_5 z_1"><i class="icon-13"></i></div>
                            <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-17.png" alt=""></div>
                            <div class="icon-shape hero-shape-four p_absolute tran_5"></div>
                            <div class="overlay-icon p_absolute tran_5" style="background-image: url(assets/images/shape/shape-38.png);"></div>
                        </div>
                        <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_16 font_family_oxygen"><a href="service-details.html">Investment <br />& Management</a></h4>
                        <p class="p_relative d_block mb_14 font_family_oxygen">Lorem ipsum dolor sit elit consectur sed eiusmod tempor labore aliquat.</p>
                        <div class="link">
                            <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold font_family_oxygen">Learn more<i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-two end -->


<!-- chooseus-two -->
<section class="chooseus-two p_relative">
    <div class="outer-container clearfix">
        <div class="bg-layer p_absolute l_0 t_0" style="background-image: url(assets/images/background/chooseus-bg.jpg);"></div>
        <div class="content-inner p_relative d_block pt_150 pr_100 pb_150 pl_100">
            <div class="pattern-layer">
                <div class="pattern-1 p_absolute t_0 r_0" style="background-image: url(assets/images/shape/shape-41.png);"></div>
                <div class="pattern-2 p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-42.png);"></div>
            </div>
            <div class="content-box p_relative d_block pl_15 pr_15">
                <div class="sec-title-two p_relative d_block mb_30 light">
                    <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17">Выберайте САААЕ</span>
                    <h2 class="d_block fs_40 fw_bold font_family_oxygen mb_20">Причиные почему нужно<br /> выбрать нас</h2><br />
                    <p class="fs_18 font_family_oxygen mb_0">Fruit is their fill meat, hath abundantly place meat don't stars so & which<br /> signs third second after seasons under.</p>
                </div>
                <div class="inner-box">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                            <div class="single-item p_relative d_block pl_80 mb_19">
                                <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50">
                                    <div class="icon p_relative d_iblock g_color_2"><i class="icon-15"></i></div>
                                    <div class="icon-img hidden-icon d_iblock"><img src="assets/images/icons/hid-icon-18.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_6 font_family_oxygen">Innovative Business</h4>
                                <p class="mb_0 fs_16 font_family_oxygen">Lorem ipsum dolor sit elit consectur sed tempor..</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                            <div class="single-item p_relative d_block pl_80 mb_19">
                                <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50">
                                    <div class="icon p_relative d_iblock g_color_2"><i class="icon-15"></i></div>
                                    <div class="icon-img hidden-icon d_iblock"><img src="assets/images/icons/hid-icon-18.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_6 font_family_oxygen">Audiance Analysis</h4>
                                <p class="mb_0 fs_16 font_family_oxygen">Lorem ipsum dolor sit elit consectur sed tempor..</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                            <div class="single-item p_relative d_block pl_80">
                                <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50">
                                    <div class="icon p_relative d_iblock g_color_2"><i class="icon-15"></i></div>
                                    <div class="icon-img hidden-icon d_iblock"><img src="assets/images/icons/hid-icon-18.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_6 font_family_oxygen">Expert Marketing</h4>
                                <p class="mb_0 fs_16 font_family_oxygen">Lorem ipsum dolor sit elit consectur sed tempor..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- chooseus-two end -->


<!-- team-one -->
<section class="team-one p_relative sec-pad">
    <div class="auto-container">
        <div class="sec-title-two p_relative d_block mb_50 centred">
            <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17">Наша команда</span><br />
            <h2 class="d_block fs_40 fw_bold font_family_oxygen mb_35">Great Business Solutions <br />System</h2><br />
            <p class="fs_18 font_family_oxygen mb_0">Amet consectur adipiscing elit sed eiusmod ex tempor incididunt <br />labore dolore magna aliquaenim ad minim veniam.</p>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block b_radius_5 b_shadow_6">
                        <div class="image-box p_relative d_block">
                            <div class="overlay-pattern-1 p_absolute r_0" style="background-image: url(assets/images/shape/shape-43.png);"></div>
                            <div class="overlay-pattern-2 p_absolute l_0" style="background-image: url(assets/images/shape/shape-44.png);"></div>
                            <figure class="image p_relative d_block"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                            <ul class="social-links">
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content p_relative d_block pt_20 pr_30 pb_25 pl_30">
                            <h4 class="p_relative d_iblock fs_20 lh_30 font_family_oxygen fw_bold pl_30"><a href="team-details.html">Roger Jones</a></h4>
                            <span class="designation fs_16 p_relative d_block">Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block b_radius_5 b_shadow_6">
                        <div class="image-box p_relative d_block">
                            <div class="overlay-pattern-1 p_absolute r_0" style="background-image: url(assets/images/shape/shape-43.png);"></div>
                            <div class="overlay-pattern-2 p_absolute l_0" style="background-image: url(assets/images/shape/shape-44.png);"></div>
                            <figure class="image p_relative d_block"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                            <ul class="social-links">
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content p_relative d_block pt_20 pr_30 pb_25 pl_30">
                            <h4 class="p_relative d_iblock fs_20 lh_30 font_family_oxygen fw_bold pl_30"><a href="team-details.html">Ann Dowson</a></h4>
                            <span class="designation fs_16 p_relative d_block">Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block b_radius_5 b_shadow_6">
                        <div class="image-box p_relative d_block">
                            <div class="overlay-pattern-1 p_absolute r_0" style="background-image: url(assets/images/shape/shape-43.png);"></div>
                            <div class="overlay-pattern-2 p_absolute l_0" style="background-image: url(assets/images/shape/shape-44.png);"></div>
                            <figure class="image p_relative d_block"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                            <ul class="social-links">
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content p_relative d_block pt_20 pr_30 pb_25 pl_30">
                            <h4 class="p_relative d_iblock fs_20 lh_30 font_family_oxygen fw_bold pl_30"><a href="team-details.html">Nicolas Lawson</a></h4>
                            <span class="designation fs_16 p_relative d_block">Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block b_radius_5 b_shadow_6">
                        <div class="image-box p_relative d_block">
                            <div class="overlay-pattern-1 p_absolute r_0" style="background-image: url(assets/images/shape/shape-43.png);"></div>
                            <div class="overlay-pattern-2 p_absolute l_0" style="background-image: url(assets/images/shape/shape-44.png);"></div>
                            <figure class="image p_relative d_block"><img src="assets/images/team/team-4.jpg" alt=""></figure>
                            <ul class="social-links">
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <div class="lower-content p_relative d_block pt_20 pr_30 pb_25 pl_30">
                            <h4 class="p_relative d_iblock fs_20 lh_30 font_family_oxygen fw_bold pl_30"><a href="team-details.html">Erik Genie</a></h4>
                            <span class="designation fs_16 p_relative d_block">Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-one end -->


<!-- graph-one -->
<section class="graph-one p_relative">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                <div class="sec-title-two p_relative d_block mb_50 mr_70">
                    <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17">Экспертность</span><br />
                    <h2 class="d_block fs_40 fw_bold font_family_oxygen mb_35">Build Better Business Software a Lot faster and Easier with Atrix.</h2><br />
                    <p class="fs_18 font_family_oxygen mb_0">Fruit is their fill meat, hath abundantly place meat don't stars. so and which signs third second after seasons under.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box p_relative d_block pl_30 wow slideInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="shape parallax-scene parallax-scene-2">
                        <div data-depth="0.50" class="shape-1 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-45.png);"></div>
                        <div data-depth="0.30" class="shape-2 p_absolute w_65 h_65" style="background-image: url(assets/images/shape/shape-46.png);"></div>
                    </div>
                    <figure class="image p_relative d_block"><a href="assets/images/resource/graph-1.png" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/resource/graph-1.png" alt=""></a></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- graph-one end -->



<!-- funfact-two -->
<section class="funfact-two pt_140 text-center p_relative">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block">
                        <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color_2 fw_bold mb_19">
                            <span class="count-text" data-speed="2500" data-stop="90">0</span>
                        </div>
                        <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">Successful projects</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="counter-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block">
                        <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color_2 fw_bold mb_19">
                            <span class="count-text" data-speed="2500" data-stop="2.6">0</span><span>M</span>
                        </div>
                        <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">Satisfied Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="counter-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block">
                        <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color_2 fw_bold mb_19">
                            <span class="count-text" data-speed="2500" data-stop="35">0</span>
                        </div>
                        <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">Experienced Staff</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                <div class="counter-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block">
                        <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color_2 fw_bold mb_19">
                            <span class="count-text" data-speed="2500" data-stop="10">0</span>
                        </div>
                        <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">Awards Win</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- funfact-two end -->


<!-- project-one -->
<section class="project-one p_relative sec-pad">
    <div class="auto-container">
        <div class="upper-box p_relative d_block mb_50">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                    <div class="sec-title-two p_relative d_block mr_100">
                        <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17">Проекты</span><br />
                        <h2 class="d_block fs_40 fw_bold font_family_oxygen">The Best Solutions for Best Business</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-column">
                    <div class="text p_relative d_block mr_80 mt_60">
                        <p class="fs_18 font_family_oxygen">Amet consectur adipiscing elit sed eiusmod ex tempor incididunt labore dolore.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="inner-content p_relative d_block">
            <div class="four-item-carousel owl-carousel owl-theme owl-dots-none nav-style-two">
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><img src="assets/images/project/project-1.jpg" alt=""></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="project-details.html">Artboard Studio</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="project-details.html" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><img src="assets/images/project/project-2.jpg" alt=""></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="project-details.html">Artboard Studio</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="project-details.html" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><img src="assets/images/project/project-3.jpg" alt=""></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="project-details.html">Artboard Studio</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="project-details.html" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box p_relative d_block b_radius_5">
                        <figure class="image-box"><img src="assets/images/project/project-4.jpg" alt=""></figure>
                        <div class="content-box p_absolute l_0 d_block pl_30 pr_30 pb_30">
                            <div class="shape p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-47.png);"></div>
                            <h4 class="d_block fs_20 lh_30 font_family_oxygen"><a href="project-details.html">Artboard Studio</a></h4>
                            <div class="link p_absolute b_20 r_30"><a href="project-details.html" class="p_relative d_iblock w_50 h_50 lh_50 text-center b_radius_50 fs_14"><i class="icon-4"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project-one end -->


<!-- testimonial-two -->
<section class="testimonial-two p_relative sec-pad">
    <div class="pattern-layer">
        <div class="pattern-1 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-39.png);"></div>
        <div class="pattern-2 p_absolute r_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-40.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title-two p_relative d_block mb_50 centred">
            <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17">Отзывы</span>
            <h2 class="d_block fs_40 fw_bold font_family_oxygen mb_35">Trusted by More Than 3k Clients <br />Around The World</h2>
            <p class="fs_18 font_family_oxygen mb_0">Amet consectur adipiscing elit sed eiusmod ex tempor incididunt <br />labore dolore magna aliquaenim ad minim veniam.</p>

        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Kevin Spacey</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit dicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix unde omnis iste natus error sit voluptatem accusantium doloreque laudantum.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Nicolas Lawson</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor quis incididunt enim.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Keanu Reeves</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Kevin Spacey</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit dicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix unde omnis iste natus error sit voluptatem accusantium doloreque laudantum.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Nicolas Lawson</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor quis incididunt enim.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Keanu Reeves</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Kevin Spacey</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit dicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix unde omnis iste natus error sit voluptatem accusantium doloreque laudantum.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Nicolas Lawson</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box p_relative d_block">
                    <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                        <ul class="rating clearfix p_relative d_block mb_15">
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor quis incididunt enim.</p>
                    </div>
                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                        <h4 class="d_block fs_20 lh_30 mb_2">Keanu Reeves</h4>
                        <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-one -->


<!-- cta-two -->
<section class="cta-two p_relative pt_130 pb_140 centred">
    <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/cta-bg.jpg);"></div>
    <div class="pattern-layer">
        <div class="pattern-1 p_absolute l_0 t_0" style="background-image: url(assets/images/shape/shape-48.png);"></div>
        <div class="pattern-2 p_absolute r_0 b_0" style="background-image: url(assets/images/shape/shape-49.png);"></div>
    </div>
    <div class="auto-container">
        <div class="inner-box p_relative z_1">
            <h2 class="d_block fs_40 fw_bold mb_20">Need Help Finding The Best Solution To Operate Your Business?</h2>
            <p class="fs_17 mb_35">We help our clients succeed by creating brand identities, digital <br />experiences, and print materials that communicate clearly.</p>
            <a href="index-2.html" class="theme-btn theme-btn-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><span data-text="Get Started">Get Started</span></a>
        </div>
    </div>
</section>
<!-- cta-two end -->


<!-- news-two -->
<section class="news-two p_relative sec-pad">
    <div class="auto-container">
        <div class="upper-box p_relative d_block z_1 pb_50">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                    <div class="sec-title-two p_relative d_block">
                        <span class="p_relative d_iblock font_family_oxygen fs_15 lh_40 pl_30 pr_30 mb_17">Новости/Статьи</span><br />
                        <h2 class="d_block fs_40 fw_bold font_family_oxygen">Latest Articles</h2><br />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                    <div class="text p_relative d_block pl_100">
                        <p class="fs_18">Our design services starts and ends with a best-in-class experience strategy that builds brands.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block b_radius_10 b_shadow_6">
                        <div class="image-box p_relative d_block">
                            <figure class="image p_relative d_block"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                            <div class="post-date-two p_absolute l_30 t_30 w_60 b_radius_5 centred pt_10 pb_10"><h4 class="fs_20 font_family_oxygen fw_bold lh_20">20 <span class="d_block">Oct</span></h4></div>
                        </div>
                        <div class="lower-content p_relative d_block pt_30 pr_30 pb_40 pl_40">
                            <ul class="post-info clearfix p_relative d_block mb_5">
                                <li class="p_relative d_iblock float_left mr_30 fs_16"><a href="blog-details.html">Ashley Bronks</a></li>
                                <li class="p_relative d_iblock float_left fs_16">10 mins Read</li>
                            </ul>
                            <h4 class="d_block fs_20 lh_30 mb_15"><a href="blog-details.html">Unsatiable Entreaties May Collecting Power.</a></h4>
                            <p class="d_block mb_20">Lorem ipsum dolor sit amet consectur adipisicing sed.</p>
                            <div class="btn-box">
                                <a href="blog-details.html" class="theme-btn theme-btn-two"><span data-text="Learn More">Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow slideInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block b_radius_10 b_shadow_6">
                        <div class="image-box p_relative d_block">
                            <figure class="image p_relative d_block"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                            <div class="post-date-two p_absolute l_30 t_30 w_60 b_radius_5 centred pt_10 pb_10"><h4 class="fs_20 font_family_oxygen fw_bold lh_20">15 <span class="d_block">Oct</span></h4></div>
                        </div>
                        <div class="lower-content p_relative d_block pt_30 pr_30 pb_40 pl_40">
                            <ul class="post-info clearfix p_relative d_block mb_5">
                                <li class="p_relative d_iblock float_left mr_30 fs_16"><a href="blog-details.html">Ashley Bronks</a></li>
                                <li class="p_relative d_iblock float_left fs_16">10 mins Read</li>
                            </ul>
                            <h4 class="d_block fs_20 lh_30 mb_15"><a href="blog-details.html">Need Help Finding The Best Solution.</a></h4>
                            <p class="d_block mb_20">Lorem ipsum dolor sit amet consectur adipisicing sed.</p>
                            <div class="btn-box">
                                <a href="blog-details.html" class="theme-btn theme-btn-two"><span data-text="Learn More">Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box p_relative d_block b_radius_10 b_shadow_6">
                        <div class="image-box p_relative d_block">
                            <figure class="image p_relative d_block"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                            <div class="post-date-two p_absolute l_30 t_30 w_60 b_radius_5 centred pt_10 pb_10"><h4 class="fs_20 font_family_oxygen fw_bold lh_20">13 <span class="d_block">Oct</span></h4></div>
                        </div>
                        <div class="lower-content p_relative d_block pt_30 pr_30 pb_40 pl_40">
                            <ul class="post-info clearfix p_relative d_block mb_5">
                                <li class="p_relative d_iblock float_left mr_30 fs_16"><a href="blog-details.html">Ashley Bronks</a></li>
                                <li class="p_relative d_iblock float_left fs_16">10 mins Read</li>
                            </ul>
                            <h4 class="d_block fs_20 lh_30 mb_15"><a href="blog-details.html">Make Your Dream Come True & Great Number</a></h4>
                            <p class="d_block mb_20">Lorem ipsum dolor sit amet consectur adipisicing sed.</p>
                            <div class="btn-box">
                                <a href="blog-details.html" class="theme-btn theme-btn-two"><span data-text="Learn More">Learn More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- news-two end -->


<!-- subscribe-one -->
<section class="subscribe-one p_relative">
    <div>
        <svg class="waves" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(247,247,247,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(247,247,247,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(247,247,247,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#f7f7f7" />
            </g>
        </svg>
    </div>
    <div class="auto-container">
        <div class="inner-container p_relative d_block pl_100 pt_60 pr_100 pb_60 b_radius_5">
            <div class="pattern-layer">
                <div class="pattern-1 p_absolute l_0 b_0" style="background-image: url(assets/images/shape/shape-50.png);"></div>
                <div class="pattern-2 p_absolute t_0 r_0" style="background-image: url(assets/images/shape/shape-51.png);"></div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                    <div class="text p_relative d_block mr_30">
                        <h2 class="d_block fs_30 lh_40 fw_bold font_family_oxygen">Join Us & Increase Your Business.</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div class="form-inner p_relative d_block mt_18">
                        <form action="contact.html" method="post" class="subscribe-form default-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your email address" required="">
                                <button type="submit" class="theme-btn">Subscribe<span>Subscribe</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe-one -->


<!-- footer-two -->
<footer class="footer-two">
    <div class="auto-container">
        <div class="footer-top-two clearfix">
            <figure class="footer-logo pull-left">
                <a href="index.html"><img src="assets/images/footer-logo-2.png" alt=""></a>
            </figure>
            <ul class="footer-menu mt_12 pull-right clearfix">
                <li><a href="index-2.html">Management</a></li>
                <li><a href="index-2.html">Company</a></li>
                <li><a href="index-2.html">Career</a></li>
                <li><a href="index-2.html">Location</a></li>
                <li><a href="index-2.html">Contact</a></li>
            </ul>
        </div>
        <div class="footer-widget-section">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="widget-title">
                            <h4>About</h4>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incididunt labore dolore magna aliqua enim ad minim.</p>
                        </div>
                        <ul class="footer-social-two clearfix">
                            <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index-2.html"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml_80 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="widget-title">
                            <h4>Links</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="index.html">About</a></li>
                                <li><a href="index.html">Services</a></li>
                                <li><a href="index.html">Job</a></li>
                                <li><a href="index.html">opportunities</a></li>
                                <li><a href="index.html">Location</a></li>
                                <li><a href="index.html">Article</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="widget-title">
                            <h4>Services</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="index.html">About</a></li>
                                <li><a href="index.html">Services</a></li>
                                <li><a href="index.html">Job</a></li>
                                <li><a href="index.html">opportunities</a></li>
                                <li><a href="index.html">Location</a></li>
                                <li><a href="index.html">Article</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="widget-title">
                            <h4>Contacts</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li>Flat 20, Reynolds Neck, North Helenaville, FV77 8WS</li>
                                <li><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                <li><a href="mailto:sample@example.com">sample@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="bottom-inner clearfix">
                <div class="copyright pull-left">
                    <p><a href="index.html">ATRIX</a> &copy; 2021 All Right Reserved</p>
                </div>
                <ul class="footer-nav clearfix pull-right">
                    <li><a href="index.html">Terms of Service</a></li>
                    <li><a href="index.html">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- footer-two end -->


<!--Scroll to top-->
<div class="scroll-to-top">
    <div>
        <div class="scroll-top-inner">
            <div class="scroll-bar">
                <div class="bar-inner"></div>
            </div>
            <div class="scroll-bar-text g_color_2">Go To Top</div>
        </div>
    </div>
</div>
<!-- Scroll to top end -->

</div>


<!-- jequery plugins -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/validation.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/circle-progress.js"></script>
<script src="assets/js/jquery.countTo.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<!-- main-js -->
<script src="assets/js/script.js"></script>
    </body>
</html>
