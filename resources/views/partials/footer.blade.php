<!-- start section -->
<section class="section section--dark-bg">
    <div class="container">
        <div class="section-heading section-heading--center section-heading--white" data-aos="fade">
            <h2 class="__title">Tetap <span>Dekat</span></h2>

            <p>Era yang serba tak terbatas ini membuat kami selalu ingin dekat dengan anda.</p>
        </div>

        <center>
            <a href="{{ url('/contact') }}">
            <button class="custom-btn custom-btn--medium custom-btn--style-3 contact-form wide" type="submit"
                role="button">Hubungi Kami</button>
            </a>
        </center>
    </div>
</section>
<!-- end section -->

<footer id="footer" class="footer footer--style-4 section--no-pt">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                <div class="footer__item">
                    <a class="site-logo" href="{{ url('/') }}">
                        <img class="img-fluid  lazy" src="{{ asset('img/blank.gif') }}"
                            data-src="{{ url('storage/'.$info->url_logo) }}" alt="demo" />
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-9 col-lg-6">
                <div class="footer__item">
                    <nav id="footer__navigation" class="navigation">
                        <div class="row">
                            <div class="col-6 col-sm-4">
                                <h5 class="footer__item__title h6">Menu</h5>

                                <ul>
                                    <li><a href="{{ url('/') }}">Beranda</a>
                                    </li>
                                    <li><a href="{{ url('/about') }}">Tentang</a></li>
                                    <li><a href="{{ url('/gallery') }}">Galeri</a></li>
                                </ul>
                            </div>

                            <div class="col-6 col-sm-4">
                                <h5 class="footer__item__title h6">Shop</h5>

                                <ul>
                                    <li ><a href="{{ url('/product') }}">Katalog</a></li>
                                    <li><a href="{{ url('/contact') }}">Hubungi Kami</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="col-12 col-md col-lg-4">
                <div class="footer__item">
                    <h5 class="footer__item__title h6">Contacts</h5>

                    <address>
                        <p>
                            {{ $info->address }}
                        </p>

                        <p>
                            <a href="tel:{{ $info->phone }}" style="text-decoration: none">{{ $info->phone }}</a>
                        </p>

                        <p>
                            <a href="mailto:{{ $info->email }}" style="text-decoration: none">{{ $info->email }}</a>
                        </p>
                    </address>

                    <div class="social-btns">
                        <a href="{{ $info->twitter ? $info->twitter : "#" }}"><i class="fontello-twitter"></i></a>
                        <a href="{{ $info->facebook ? $info->facebook : "#" }}"><i class="fontello-facebook"></i></a>
                        <a href="{{ $info->instagram ? $info->instagram : "#" }}"><i class="fontello-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-lg-end justify-content-lg-between copyright">
            <div class="col-12 col-lg-6">
                <div class="footer__item">
                    <span class="__copy">© 2019, AgroTheme by <a class="__dev"
                            href="https://themeforest.net/user/artureanec" target="_blank">Artureanec</a> | <a
                            href="#">Privacy Policy</a> |
                        <a href="#">Sitemap</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
