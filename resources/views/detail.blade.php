@extends("layout.master")

@section('content')
    <!-- start hero -->
    <div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 100%"
        style="background-image: url(img/intro_img/header_catalog.png);color: #333;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h1 style="color: white;" class="__title">Detail Produk</h1>

                    <p style="color: white;">
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
        <link rel="stylesheet" href="css/style.min.css" type="text/css">

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
            <div class="decor-el decor-el--1" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="286" height="280" src="img/blank.gif" data-src="img/decor-el_1.jpg" alt="demo" />
            </div>

            <div class="decor-el decor-el--2" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="99" height="88" src="img/blank.gif" data-src="img/decor-el_2.jpg" alt="demo" />
            </div>

            <div class="decor-el decor-el--3" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="115" height="117" src="img/blank.gif" data-src="img/decor-el_3.jpg" alt="demo" />
            </div>

            <div class="decor-el decor-el--4" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="84" height="76" src="img/blank.gif" data-src="img/decor-el_4.jpg" alt="demo" />
            </div>

            <div class="decor-el decor-el--5" data-jarallax-element="-70" data-speed="0.2">
                <img class="lazy" width="248" height="309" src="img/blank.gif" data-src="img/decor-el_5.jpg" alt="demo" />
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-9">

                        <!-- start product single -->
                        <div class="product-single">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <div class="__product-img">
                                        <img width="330" src="img/goods_img/2.jpg" alt="demo" />
                                    </div>
                                </div>

                                <div class="col-12 col-lg-5">
                                    <div class="content-container">
                                        <h3 class="__name">Brocoli</h3>

                                        <div class="__categories">
                                            Category:
                                            <span>Vegetables</span>
                                        </div>

                                        <div class="product-price">
                                            <span class="product-price__item product-price__item--new">3,35
                                                $</span>
                                        </div>

                                        <div class="rating">
                                            <span class="rating__item rating__item--active"><i
                                                    class="fontello-star"></i></span>
                                            <span class="rating__item rating__item--active"><i
                                                    class="fontello-star"></i></span>
                                            <span class="rating__item rating__item--active"><i
                                                    class="fontello-star"></i></span>
                                            <span class="rating__item rating__item--active"><i
                                                    class="fontello-star"></i></span>
                                            <span class="rating__item"><i class="fontello-star"></i></span>
                                        </div>

                                        <p>
                                            The generated Lorem Ipsum is therefore always
                                            free from repetition injected humour, or
                                            non-characteristic words etc.
                                        </p>

                                        <p>
                                            Susp endisse ultricies nisi vel quam suscipit.
                                            Sabertooth peacock flounder; chain pickerel
                                            hatchetfish, pencilfish snailfish
                                        </p>

                                        <form class="__add-to-cart" action="#">
                                            <div class="quantity-counter js-quantity-counter">
                                                <span class="__btn __btn--minus"></span>
                                                <input class="__q-input" type="text" value="1" />
                                                <span class="__btn __btn--plus"></span>
                                            </div>

                                            <button class="custom-btn custom-btn--medium custom-btn--style-1" type="submit"
                                                role="button"><img height="24px" width="24px"
                                                    src="img/ico/whatsapp_icons.svg" style="margin-right: 8px;" alt="">
                                                Beli</button>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="col-12 my-6 d-md-none"></div>

                </div>
            </div>
        </section>
        <!-- end section -->
    </main>
    <!-- end main -->
@endsection
