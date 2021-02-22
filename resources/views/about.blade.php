@extends("layout.master")

@section('content')
    <!-- start hero -->
    <div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%"
        style="background-image: url({{ asset('img/intro_img/header_about_us.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="__title"><span>Tentang</span> Trisula Joyo</h1>

                    <p>
                        Kami besar karena kepercayaan pelanggan dan kami memiliki visi untuk
                        kembangkan produk kami hingga ekspor ke luar negeri
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <!-- start main -->
    <main role="main">
        <!-- Common styles
        ================================================== -->
        <link rel="stylesheet" href="{{ asset('css/style.min.css') }}" type="text/css">

        <!-- Load lazyLoad scripts
        ================================================== -->
        <script>
            (function(w, d) {
                var m = d.getElementsByTagName('main')[0],
                    s = d.createElement("script"),
                    v = !("IntersectionObserver" in w) ? "8.17.0" : "10.19.0",
                    o = {
                        elements_selector: ".lazy",
                        data_src: 'src',
                        data_srcset: 'srcset',
                        threshold: 500,
                        callback_enter: function(element) {

                        },
                        callback_load: function(element) {
                            element.removeAttribute('data-src')

                            oTimeout = setTimeout(function() {
                                clearTimeout(oTimeout);

                                AOS.refresh();
                            }, 1000);
                        },
                        callback_set: function(element) {

                        },
                        callback_error: function(element) {
                            element.src =
                                "https://placeholdit.imgix.net/~text?txtsize=21&txt=Image%20not%20load&w=200&h=200";
                        }
                    };
                s.type = 'text/javascript';
                s.async =
                    true; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.
                s.src = "https://cdn.jsdelivr.net/npm/vanilla-lazyload@" + v + "/dist/lazyload.min.js";
                m.appendChild(s);
                // m.insertBefore(s, m.firstChild);
                w.lazyLoadOptions = o;
            }(window, document));

        </script>

        <!-- start section -->
        <section class="section section--no-pb section--custom-01">
            <div class="container">
                <div class="section-heading">
                    <h2 class="__title">Lebih Dekat <span>Dengan Kami</span></h2>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-8">
                        <p>
                            We believe in helping brands create through strategy, <a href="#">story-telling, digital
                                products</a>, and integrated
                            experiences on web, mobile, and in the world. And you're here, friends,
                            because you also believe.
                        </p>

                        <p>
                            Our team has a passion for making things with real value. This has led
                            us to assemble a multi-talented group that can do just about anything:
                            from building sets to photographing food, crafting websites to
                            developing apps, beautiful design to adventure cinematography.
                            Designers, engineers, creatives, makers, developers, artists, unite.
                            Let’s do something real-special together.
                        </p>

                        <p>
                            Our team has a passion for making things with real value. This has led
                            us to assemble a multi-talented group that can do just about anything:
                            from building sets to photographing food, crafting websites.
                        </p>

                        <p>
                            Our team has a passion for making things with real value. This has led
                            us to assemble a multi-talented group that can do just about anything:
                            from building sets to photographing food, crafting websites to
                            developing apps, beautiful design to adventure cinematography.crafting
                            websites to developing apps, beautiful design to adventure
                            cinematography.
                        </p>

                        <p>
                            <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#">Hubungi Kami</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section">
            <div class="container">
                <!-- start counters -->
                <div class="counter">
                    <div class="__inner">
                        <div class="row justify-content-sm-center">
                            <!-- start item -->
                            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
                                <div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="150">
                                    <div class="d-table">
                                        <div class="d-table-cell align-middle">
                                            <i class="__ico">
                                                <img class="img-fluid  lazy" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/ico/unit_terjual_icons.png') }}" alt="demo" />
                                            </i>
                                        </div>

                                        <div class="d-table-cell align-middle">
                                            <p class="__count js-count" data-from="0" data-to="19500">19 500</p>

                                            <p class="__title">Unit Terjual</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
                                <div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="300">
                                    <div class="d-table">
                                        <div class="d-table-cell align-middle">
                                            <i class="__ico">
                                                <img class="img-fluid  lazy" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/ico/kambing_tersedia_icons.png') }}"
                                                    alt="demo" />
                                            </i>
                                        </div>

                                        <div class="d-table-cell align-middle">
                                            <p class="__count js-count" data-from="0" data-to="2720">2 720</p>

                                            <p class="__title">Jumlah Kambing Tersedia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
                                <div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="450">
                                    <div class="d-table">
                                        <div class="d-table-cell align-middle">
                                            <i class="__ico">
                                                <img class="img-fluid  lazy" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/ico/luas_peternakan_icons.png') }}"
                                                    alt="demo" />
                                            </i>
                                        </div>

                                        <div class="d-table-cell align-middle">
                                            <p class="__count js-count" data-from="0" data-to="10000">10 000</p>

                                            <p class="__title">Luas Peternakan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-3">
                                <div class="__item" data-aos="zoom-in" data-aos-duration="350" data-aos-delay="600">
                                    <div class="d-table">
                                        <div class="d-table-cell align-middle">
                                            <i class="__ico">
                                                <img class="img-fluid  lazy" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/ico/jumlah_peternak_icons.png') }}"
                                                    alt="demo" />
                                            </i>
                                        </div>

                                        <div class="d-table-cell align-middle">
                                            <p class="__count js-count" data-from="0" data-to="128">128</p>

                                            <p class="__title">Jumlah Peternakan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
                <!-- end counters -->
            </div>
        </section>
        <!-- end section -->
    @endsection
