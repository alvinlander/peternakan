<header id="top-bar" class="top-bar top-bar--style-1">
      <div class="top-bar__bg"
            style="background-color: #24292c;background-image: url({{ asset('img/top_bar_bg-1.jpg') }});background-repeat: no-repeat;background-position: left bottom;">
      </div>

      <div class="container-fluid">
            <div class="row align-items-center justify-content-between no-gutters">

                  <a class="top-bar__logo site-logo" href="{{ url('/') }}">
                        <img class="img-fluid" src="{{ asset('img/site_logo.png') }}" alt="demo" />
                  </a>

                  <a id="top-bar__navigation-toggler"
                        class="top-bar__navigation-toggler top-bar__navigation-toggler--light"
                        href="javascript:void(0);"><span></span></a>

                  <div id="top-bar__inner" class="top-bar__inner">
                        <div>
                              <nav id="top-bar__navigation" class="top-bar__navigation navigation"
                                    role="navigation">
                                    <ul>

                                          <li class="active">
                                                <a href="{{ url('/') }}">Beranda</a>
                                          </li>

                                          <li>
                                                <a href="{{ url('/product') }}">Produk</a>
                                          </li>

                                          <li>
                                                <a href="{{ url('/gallery') }}">Galeri</a>
                                          </li>

                                          <li>
                                                <a href="{{ url('/about') }}">Tentang</a>
                                          </li>

                                          <!-- Bug -->
                                          <li class="has-submenu">
                                                <!-- <a href="javascript:void(0);">Shop</a> -->

                                                <ul class="submenu">
                                                      <!-- <li><a href="shop_catalog.html">Shop Catalog</a></li> -->
                                                      <!-- <li><a href="single_product.html">Single Product</a> -->
                                                      <!-- </li>
                                                      <li><a href="cart.html">Cart</a></li>
                                                      <li><a href="checkout.html">Checkout</a></li>
                                                      <li><a href="sign_in.html">Sign In/Up</a></li> -->
                                                </ul>
                                          </li>

                                          <li class="li-btn">
                                                <a class="custom-btn custom-btn--small custom-btn--style-4"
                                                      href="{{ url('/contact') }}">Hubungi Kami</a>
                                          </li>
                                    </ul>
                              </nav>
                        </div>
                  </div>

            </div>
      </div>
</header>