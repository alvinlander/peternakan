@extends("layout.master")

@section('content')
    <!-- start hero -->
    <div id="hero" class="jarallax" data-speed="0.7" data-img-position="50% 55%"
        style="background-image: url({{ asset('img/intro_img/header_contact_us.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="__title">Hubungi Kami</h1>

                    <p>
                        Era yang serba tak terbatas ini membuat kami selalu ingin dekat dengan anda
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <!-- start main -->
    <main role="main">
        <!-- start section -->
        <section class="section">
            <div class="container">
                <!-- start company contacts -->
                <div class="company-contacts  text-center">
                    <div class="__inner">
                        <div class="row justify-content-around">
                            <!-- start item -->
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="__item">
                                    <i class="__ico fontello-location"></i>

                                    <h4 class="__title">Alamat</h4>

                                    <p>
                                        {{ $info->address }}
                                    </p>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="__item">
                                    <i class="__ico fontello-phone"></i>

                                    <h4 class="__title">Telepon</h4>


                                    <p>
                                        <a href="https://wa.me/{{ $info->phone }}" style="text-decoration: none">{{ $info->phone }}</a>
                                    </p>
                                </div>
                            </div>
                            <!-- end item -->

                            <!-- start item -->
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="__item">
                                    <i class="__ico fontello-mail-1"></i>

                                    <h4 class="__title">e-mail</h4>

                                    <p>
                                        <a href="mailto:{{ $info->email }}" style="text-decoration: none">{{ $info->email }}</a>
                                    </p>
                                </div>
                            </div>
                            <!-- end item -->
                        </div>
                    </div>
                </div>
                <!-- end company contacts -->
            </div>
        </section>
        <!-- end section -->
    @endsection

@push('style')
    <!-- Common styles
        ================================================== -->
        <link rel="stylesheet" href="{{ asset('css/style.min.css') }}" type="text/css">
@endpush

@push('script')
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
@endpush
