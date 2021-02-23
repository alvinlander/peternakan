@extends("layout.master")

@section("content")
<!-- start hero -->
<div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 80%"
    style="background-image: url({{ asset('img/intro_img/header_catalog.png') }});color: #333;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <h1 class="__title"><span>Trisula Joyo</span> Catalog</h1>

                <p>
                    Salah satu kepastian yang membuat nyaman pelanggan adalah produk kami yang
                    berkualitas
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
        {{-- <div class="decor-el decor-el--1" data-jarallax-element="-70" data-speed="0.2">
            <img class="lazy" width="286" height="280" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/decor-el_1.jpg') }}" alt="demo" />
        </div>

        <div class="decor-el decor-el--2" data-jarallax-element="-70" data-speed="0.2">
            <img class="lazy" width="99" height="88" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/decor-el_2.jpg') }}" alt="demo" />
        </div>

        <div class="decor-el decor-el--3" data-jarallax-element="-70" data-speed="0.2">
            <img class="lazy" width="115" height="117" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/decor-el_3.jpg') }}" alt="demo" />
        </div>

        <div class="decor-el decor-el--4" data-jarallax-element="-70" data-speed="0.2">
            <img class="lazy" width="84" height="76" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/decor-el_4.jpg') }}" alt="demo" />
        </div>

        <div class="decor-el decor-el--5" data-jarallax-element="-70" data-speed="0.2">
            <img class="lazy" width="248" height="309" src="{{ asset('img/blank.gif') }}" data-src="{{ asset('img/decor-el_5.jpg') }}" alt="demo" />
        </div> --}}

        <div class="container">

            <!-- start goods catalog -->
            <div class="goods-catalog">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        <aside class="sidebar goods-filter">
                            <span class="goods-filter-btn-close js-toggle-filter"><i class="fontello-cancel"></i></span>

                            <div class="goods-filter__inner">
                                <!-- start widget -->
                                <div class="widget widget--categories">
                                    <h4 class="h6 widget-title">CAtegories</h4>

                                    <ul class="list">
                                        <li class="list__item">
                                            <a class="list__item__link" href="#">Apples</a>
                                            <span>(3)</span>
                                        </li>

                                        <li class="list__item">
                                            <a class="list__item__link" href="#">Oranges</a>
                                            <span>(5)</span>
                                        </li>

                                        <li class="list__item">
                                            <a class="list__item__link" href="#">Strawbery</a>
                                            <span>(2)</span>
                                        </li>

                                        <li class="list__item">
                                            <a class="list__item__link" href="#">Banana</a>
                                            <span>(8)</span>
                                        </li>

                                        <li class="list__item">
                                            <a class="list__item__link" href="#">Pumpkin </a>
                                            <span>(5)</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end widget -->
                            </div>
                        </aside>
                    </div>

                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="spacer py-6 d-md-none"></div>

                        <div class="spacer py-3"></div>

                        <!-- start goods -->
                        <div class="goods goods--style-1">
                            <div class="__inner">
                                <div class="row">
                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="__item">
                                            <figure class="__image">
                                                <img class="lazy" width="188" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/goods_img/1.jpg') }}" alt="demo" />
                                            </figure>

                                            <div class="__content">
                                                <h4 class="h6 __title"><a href="#">Oranges</a>
                                                </h4>

                                                <div class="__category"><a href="#">Fruits</a>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">3,80
                                                        $</span>
                                                </div>

                                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i
                                                        class="fontello-shopping-bag"></i>Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="__item">
                                            <figure class="__image">
                                                <img class="lazy" width="180" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/goods_img/2.jpg') }}" alt="demo" />
                                            </figure>

                                            <div class="__content">
                                                <h4 class="h6 __title"><a href="#">Brocoli</a>
                                                </h4>

                                                <div class="__category"><a href="#">Vegetables</a>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">3,35
                                                        $</span>
                                                </div>

                                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i
                                                        class="fontello-shopping-bag"></i>Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="__item">
                                            <figure class="__image">
                                                <img class="lazy" width="160" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/goods_img/3.jpg') }}" alt="demo" />
                                            </figure>

                                            <div class="__content">
                                                <h4 class="h6 __title"><a href="#">Red
                                                        Apple</a></h4>

                                                <div class="__category"><a href="#">Fruits</a>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">0,99
                                                        $</span>
                                                    <span
                                                        class="product-price__item product-price__item--old">2200$</span>
                                                </div>

                                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i
                                                        class="fontello-shopping-bag"></i>Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="__item">
                                            <figure class="__image">
                                                <img class="lazy" width="190" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/goods_img/4.jpg') }}" alt="demo" />
                                            </figure>

                                            <div class="__content">
                                                <h4 class="h6 __title"><a href="#">Strawberry</a>
                                                </h4>

                                                <div class="__category"><a href="#">Fruits</a>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">2,10
                                                        $</span>
                                                </div>

                                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i
                                                        class="fontello-shopping-bag"></i>Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="__item">
                                            <figure class="__image">
                                                <img class="lazy" width="180" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/goods_img/5.jpg') }}" alt="demo" />
                                            </figure>

                                            <div class="__content">
                                                <h4 class="h6 __title"><a href="#">Fresh
                                                        Banana</a></h4>

                                                <div class="__category"><a href="#">Vegetables</a>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">10,99
                                                        $</span>
                                                </div>

                                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i
                                                        class="fontello-shopping-bag"></i>Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="__item">
                                            <figure class="__image">
                                                <img class="lazy" width="180" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/goods_img/6.jpg') }}" alt="demo" />
                                            </figure>

                                            <div class="__content">
                                                <h4 class="h6 __title"><a href="#">Big
                                                        Pumpkin</a></h4>

                                                <div class="__category"><a href="#">Fruits</a>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">8,15
                                                        $</span>
                                                </div>

                                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i
                                                        class="fontello-shopping-bag"></i>Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="__item">
                                            <figure class="__image">
                                                <img class="lazy" width="250" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/goods_img/7.jpg') }}" alt="demo" />
                                            </figure>

                                            <div class="__content">
                                                <h4 class="h6 __title"><a href="#">Organic
                                                        Tomato</a></h4>

                                                <div class="__category"><a href="#">Vegetables</a>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--old">6,68
                                                        $</span>
                                                    <span class="product-price__item product-price__item--new">6,12
                                                        $</span>
                                                </div>

                                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i
                                                        class="fontello-shopping-bag"></i>Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="__item">
                                            <figure class="__image">
                                                <img class="lazy" width="236" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/goods_img/8.jpg') }}" alt="demo" />
                                            </figure>

                                            <div class="__content">
                                                <h4 class="h6 __title"><a href="#">Organic
                                                        Peach</a></h4>

                                                <div class="__category"><a href="#">Vegetables</a>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--old">6,68
                                                        $</span>
                                                    <span class="product-price__item product-price__item--new">6,12
                                                        $</span>
                                                </div>

                                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i
                                                        class="fontello-shopping-bag"></i>Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="__item">
                                            <figure class="__image">
                                                <img class="lazy" width="188" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/goods_img/1.jpg') }}" alt="demo" />
                                            </figure>

                                            <div class="__content">
                                                <h4 class="h6 __title"><a href="#">Oranges</a>
                                                </h4>

                                                <div class="__category"><a href="#">Fruits</a>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">3,80
                                                        $</span>
                                                </div>

                                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i
                                                        class="fontello-shopping-bag"></i>Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="__item">
                                            <figure class="__image">
                                                <img class="lazy" width="180" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/goods_img/2.jpg') }}" alt="demo" />
                                            </figure>

                                            <div class="__content">
                                                <h4 class="h6 __title"><a href="#">Brocoli</a>
                                                </h4>

                                                <div class="__category"><a href="#">Vegetables</a>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">3,35
                                                        $</span>
                                                </div>

                                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i
                                                        class="fontello-shopping-bag"></i>Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="__item">
                                            <figure class="__image">
                                                <img class="lazy" width="160" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/goods_img/3.jpg') }}" alt="demo" />
                                            </figure>

                                            <div class="__content">
                                                <h4 class="h6 __title"><a href="#">Red
                                                        Apple</a></h4>

                                                <div class="__category"><a href="#">Fruits</a>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">0,99
                                                        $</span>
                                                    <span
                                                        class="product-price__item product-price__item--old">2200$</span>
                                                </div>

                                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i
                                                        class="fontello-shopping-bag"></i>Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end item -->

                                    <!-- start item -->
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="__item">
                                            <figure class="__image">
                                                <img class="lazy" width="190" src="{{ asset('img/blank.gif') }}"
                                                    data-src="{{ asset('img/goods_img/4.jpg') }}" alt="demo" />
                                            </figure>

                                            <div class="__content">
                                                <h4 class="h6 __title"><a href="#">Strawberry</a>
                                                </h4>

                                                <div class="__category"><a href="#">Fruits</a>
                                                </div>

                                                <div class="product-price">
                                                    <span class="product-price__item product-price__item--new">2,10
                                                        $</span>
                                                </div>

                                                <a class="custom-btn custom-btn--medium custom-btn--style-1" href="#"><i
                                                        class="fontello-shopping-bag"></i>Add
                                                    to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end item -->
                                </div>
                            </div>
                        </div>
                        <!-- end goods -->

                        <div class="spacer py-5"></div>

                        <!-- start pagination -->
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fontello-angle-right"></i></a></li>
                            </ul>
                        </nav>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
            <!-- end goods catalog -->

        </div>
    </section>
    <!-- end section -->
</main>
<!-- end main -->
@endsection