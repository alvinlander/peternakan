@extends("layout.master")

@section('content')
    <!-- start hero -->
    <div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 30%"
        style="background-image: url({{ asset('img/intro_img/header_gallery.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="__title"><span>Trisula Joyo</span> Galeri</h1>

                    <p>
                        Kami pastikan anda tidak melewatkan setiap sudut dari apa yang telah kami
                        kerjakan
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
        <section class="section">
            <div class="container">

                <div class="gallery gallery--style-1">
                    <div class="__inner">
                        <div class="row  js-isotope" data-isotope-options='{
              "itemSelector": ".js-isotope__item",
              "transitionDuration": "0.8s",
              "percentPosition": "true",
              "masonry": { "columnWidth": ".js-isotope__sizer" }
             }'>

                            <div class="col-12 col-sm-6 col-lg-4  js-isotope__sizer"></div>

                            <!-- start item -->
                            <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-1">
                                <div class="__item">
                                    <figure class="__image">
                                        <img class="lazy" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/gallery_img/1.jpg') }}" alt="demo" />

                                        <div class="__content">
                                            <h5 class="__content__title">Strawberry</h5>
                                        </div>

                                        <a class="__link" data-fancybox="gallery" href="{{ asset('img/gallery_img/1.jpg') }}"></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-2">
                                <div class="__item">
                                    <figure class="__image">
                                        <img class="lazy" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/gallery_img/2.jpg') }}" alt="demo" />

                                        <div class="__content">
                                            <h5 class="__content__title">cabbage</h5>
                                        </div>

                                        <a class="__link" data-fancybox="gallery" href="{{ asset('img/gallery_img/2.jpg') }}"></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-3">
                                <div class="__item">
                                    <figure class="__image">
                                        <img class="lazy" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/gallery_img/3.jpg') }}" alt="demo" />

                                        <div class="__content">
                                            <h5 class="__content__title">Chili pepper</h5>
                                        </div>

                                        <a class="__link" data-fancybox="gallery" href="{{ asset('img/gallery_img/3.jpg') }}"></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-4">
                                <div class="__item">
                                    <figure class="__image">
                                        <img class="lazy" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/gallery_img/4.jpg') }}" alt="demo" />

                                        <div class="__content">
                                            <h5 class="__content__title">basil</h5>
                                        </div>

                                        <a class="__link" data-fancybox="gallery" href="{{ asset('img/gallery_img/4.jpg') }}"></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-5">
                                <div class="__item">
                                    <figure class="__image">
                                        <img class="lazy" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/gallery_img/5.jpg') }}" alt="demo" />

                                        <div class="__content">
                                            <h5 class="__content__title">corn</h5>
                                        </div>

                                        <a class="__link" data-fancybox="gallery" href="{{ asset('img/gallery_img/5.jpg') }}"></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-1">
                                <div class="__item">
                                    <figure class="__image">
                                        <img class="lazy" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/gallery_img/6.jpg') }}" alt="demo" />

                                        <div class="__content">
                                            <h5 class="__content__title">gardens</h5>
                                        </div>

                                        <a class="__link" data-fancybox="gallery" href="{{ asset('img/gallery_img/6.jpg') }}"></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-2">
                                <div class="__item">
                                    <figure class="__image">
                                        <img class="lazy" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/gallery_img/7.jpg') }}" alt="demo" />

                                        <div class="__content">
                                            <h5 class="__content__title">the crop</h5>
                                        </div>

                                        <a class="__link" data-fancybox="gallery" href="{{ asset('img/gallery_img/7.jpg') }}"></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-3">
                                <div class="__item">
                                    <figure class="__image">
                                        <img class="lazy" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/gallery_img/8.jpg') }}" alt="demo" />

                                        <div class="__content">
                                            <h5 class="__content__title">blueberry</h5>
                                        </div>

                                        <a class="__link" data-fancybox="gallery" href="{{ asset('img/gallery_img/8.jpg') }}"></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-4">
                                <div class="__item">
                                    <figure class="__image">
                                        <img class="lazy" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/gallery_img/9.jpg') }}" alt="demo" />

                                        <div class="__content">
                                            <h5 class="__content__title">cow</h5>
                                        </div>

                                        <a class="__link" data-fancybox="gallery" href="{{ asset('img/gallery_img/9.jpg') }}"></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-5">
                                <div class="__item">
                                    <figure class="__image">
                                        <img class="lazy" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/gallery_img/10.jpg') }}"
                                            alt="demo" />

                                        <div class="__content">
                                            <h5 class="__content__title">asparagus</h5>
                                        </div>

                                        <a class="__link" data-fancybox="gallery" href="{{ asset('img/gallery_img/10.jpg') }}"></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-2">
                                <div class="__item">
                                    <figure class="__image">
                                        <img class="lazy" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/gallery_img/11.jpg') }}"
                                            alt="demo" />

                                        <div class="__content">
                                            <h5 class="__content__title">pig</h5>
                                        </div>

                                        <a class="__link" data-fancybox="gallery" href="{{ asset('img/gallery_img/11.jpg') }}"></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-sm-6 col-lg-4  js-isotope__item  category-4">
                                <div class="__item">
                                    <figure class="__image">
                                        <img class="lazy" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/gallery_img/12.jpg') }}"
                                            alt="demo" />

                                        <div class="__content">
                                            <h5 class="__content__title">grapes</h5>
                                        </div>

                                        <a class="__link" data-fancybox="gallery" href="{{ asset('img/gallery_img/12.jpg') }}"></a>
                                    </figure>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
    @endsection
