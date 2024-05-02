@extends('layouts.app')
@section('content') 

<div class="boxed_wrapper">


<!-- Page Title -->
<section class="page-title style-two p_relative centred">
    <div class="pattern-layer">
        <div class="shape-1 p_absolute l_120 t_60 rotate-me" style="background-image: url(assets/images/shape/shape-176.png);"></div>
        <div class="shape-2 p_absolute t_120 r_170 float-bob-y" style="background-image: url(assets/images/shape/shape-56.png);"></div>
    </div>
    <div class="auto-container">
        <div class="content-box">
            <!-- <h1 class="d_block fs_60 lh_70 fw_bold mb_10">Artboard Studio</h1>
            <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="index.html">Home</a></li>
                <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20">Project</li>
                <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">Project Details 2</li> -->
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->


<!-- project-details -->
<section class="project-details p_relative pb_110">
    <div class="auto-container">
        <div class="project-info p_relative d_block mb_70">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 text-column">
                    <div class="text p_relative d_block mr_40">
                        <h3 class="d_block fs_30 lh_40 fw_sbold mb_15">О проекте «Akadem kitap»</h3>
                        <p class="font_family_poppins mb_25 color_black fs_18">«Книга несет человечеству знания и просвещенность. Книга хранит в себе тайны бытия рода человеческого. Книга – самый терпеливый учитель. Для человека мыслящего нет ничего дороже книги!» Эти слова принадлежат Елбасы Н.А. Назарбаеву.</p>

                        <p class="font_family_poppins mb_25 color_black fs_18">Книги являются источниками знаний о духовной и нравственной жизни. Их роль в образовании, воспитании, интеллектуальном развитии молодежи очень велика. Через обращение к книге, чтению человек приобщается к духовным ценностям, развивается, расширяет свой кругозор. Чтение высокохудожественной литературы способствует формированию гармоничной личности – личности активной, творческой, сочетающей в себе духовное богатство, моральную чистоту, физическое совершенство. </p>
                        <p class="font_family_poppins mb_25 color_black fs_18"> Жизнь предъявляет повышенные требования к человечеству, и задача каждого учебного заведения – подготовить молодых специалистов, которые будут востребованы в дальнейшей жизни, указать им правильные ориентиры. По инициативе академика Г. Мутанова в 2010 году начался выпуск книг серии «Өнегелі өмір» о жизни и творчестве известных государственных и общественных деятелей, ученых. В 2011 году вышла в свет первая книга этой серии – о докторе юридических наук, профессоре, академике Национальной академии Республики Казахстан Салыке Зиманове. </p>
                        <p class="font_family_poppins mb_25 color_black fs_18">Над каждым выпуском работает группа специалистов, осуществляющих сбор и подготовку материала к печати. В рамках данной серии издано 216 книг.</p>
                    </div>
                </div>

                <h4 class="d_block fs_30 lh_40 fw_sbold mt_50">Специальный выпуск</h4>

                <!-- <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                    <div class="info p_relative d_block pl_100 pt_20 pb_20 mt_15">
                        <ul class="info-list clearfix">
                            <li class="p_relative d_block fs_18 font_family_inter mb_12"><span class="d_iblock fw_medium color_black">Client:</span>Robertson</li>
                            <li class="p_relative d_block fs_18 font_family_inter mb_12"><span class="d_iblock fw_medium color_black">Date:</span>November, 2021</li>
                            <li class="p_relative d_block fs_18 font_family_inter mb_12"><span class="d_iblock fw_medium color_black">Client:</span><a href="project-details.html">Business</a>, <a href="project-details.html">Invest</a></li>
                            <li class="social-links p_relative d_block fs_18 font_family_inter"><span class="d_iblock fw_medium color_black">Social:</span><a href="project-details.html"><i class="fab fa-facebook-f"></i></a><a href="project-details.html"><i class="fab fa-twitter"></i></a><a href="project-details.html"><i class="fab fa-pinterest-p"></i></a><a href="project-details.html"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
        <div data-animation-box class="image-box p_relative d_block mb_110">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="assets/images/project/pr71.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/project/pr71.jpg" alt=""></a></figure>
                </div>
                <p class="font_family_poppins mb_25 color_black fs_18">Спецвыпуск  серии книг «Онегели омир» посвящен академику Канышу Имантаевичу Сатпаеву –  выдающемуся ученому-геологу и организатору науки, крупнейшему мыслителю и естествоиспытателю,  общественному и государственному деятелю. </p> 
                <p class="font_family_poppins mb_25 color_black fs_18">Каныш Имантаевич Сатпаев – доктор геолого-минералогических наук (1942), профессор (1950), первый директор Института геологии казахского филиала Академии наук СССР (1941-1964), заместитель председателя этого филиала (1942-1946), академик Академии наук СССР (1946), организатор и первый президент АН КазССР (1946), лауреат Государственной (1942) и Ленинской (1958) премий. </p>              
             
            </div>
        </div>
        <div data-animation-box class="image-box p_relative d_block mb_110">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="assets/images/project/pr72.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/project/pr72.jpg" alt=""></a></figure>
                </div>
                <p class="font_family_poppins mb_25 color_black fs_18">Мұхтар Омарханұлы Әуезовке арналады. «Сіз әлі «Абайды» оқыған жоқпысыз? Онда сіз мүлдем ештеңе оқымағаныңыз. Бұл – таңғажайып, бұл – керемет!» деп неміс жазушысы Альфред Курелла тамсанып таңдай қаққан, әлемнің тоқсан тіліне аударылған туындының авторын білмейтін, сірә, қазақ баласы жоқ болар. Өйткені Әуезов десе, «Абай жолы», «Абай жолы» десе ХІХ ғасырдағы көшпелі қазақ халқының өмір құбылысы еске түседі. «Өнегелі өмір» сериясының арнаулы шығарылымы осы туындыға тіл бітірген, қазақ халқының ұлы жазушысы, қоғам қайраткері, ғұлама ғалым, ұлағаты мол ұстаз, Қазақстан Ғылым академиясының академигі, филология ғылымдарының докторы, профессор. </p>              
            </div>
        </div>
        <div data-animation-box class="image-box p_relative d_block mb_110">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block b_radius_10" data-animation="overlay-animation"><a href="assets/images/project/pr73.jpg" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/project/pr73.jpg" alt=""></a></figure>
                </div>
                <p class="font_family_poppins mb_25 color_black fs_18">Ерім ел,  қайдан тусын». «Елім» деп өткен осындай ерлердің бірі, белгілі мемлекет және қоғам қайраткері, Социалистік Еңбек Ері, Д. Қонаевпен бірге үкімет басындағы мәртебелі қызметте болып, елдің экономикасын, халықтың әл-ауқатын көтеруге бар қажыр-қайратын жұмсаған Бәйкен Әшімовтің 100 жылдығына орай «Өнегелі өмір» сериясының арнаулы шығарылымы жарық көрді.   </p>   
                <p class="font_family_poppins mb_25 color_black fs_18">Қазақ елінің бірнеше облысына басшылық жасап, Қазақ КСР Министрлер Кеңесінің және Жоғарғы Кеңес Төралқасының төрағасы қызметтерін атқарған Бәйкен Әшімовтің «мектебі – өмір, ұстазы – халық» болды.</p>              
           
            </div>
        </div>
        <div class="nav-btn clearfix">
            <div class="single-btn prev-btn pull-left">
                <a href="{{ route('project-details6') }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black"><i class="far fa-long-arrow-left"></i>Предыдущий проект</a>
            </div>
            <div class="single-btn next-btn pull-right">
                <a href="{{ route('project-details8') }}" class="p_relative d_iblock fs_15 fw_sbold font_family_inter color_black">Следующий проект<i class="far fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- project-details end -->


<!-- footer-three -->
<footer class="footer-three p_relative service-page">
    <div class="pattern-layer">
        <div class="pattern-1 p_absolute l_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-62.png);"></div>
        <div class="pattern-2 p_absolute r_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-63.png);"></div>
    </div>
    <div class="auto-container">
        <div class="footer-widget-section">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <figure class="footer-logo p_relative d_block mb_35"><a href="index-3.html"><img src="assets/images/logo-20.png" alt=""></a></figure>
                        <div class="text">
                            <p>Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incididunt labore dolore magna aliqua enim ad minim.</p>
                        </div>
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
<!-- footer-three end -->


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
<script src="assets/js/isotope.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<!-- main-js -->
<script src="assets/js/script.js"></script>


@endsection
