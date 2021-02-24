<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
      <title>Trisula Joyo Farm</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

      <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
      <meta name="viewport"
            content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

      <meta name="theme-color" content="#FCDB5A" />
      <meta name="msapplication-navbutton-color" content="#FCDB5A" />
      <meta name="apple-mobile-web-app-status-bar-style" content="#FCDB5A" />

      <!-- Favicons
		================================================== -->
      <link rel="shortcut icon" href="{{ url('storage/'.$info->url_logo) }}">
      <link rel="apple-touch-icon" href="{{ url('storage/'.$info->url_logo) }}">
      <link rel="apple-touch-icon" sizes="72x72" href="{{ url('storage/'.$info->url_logo)  }}">
      <link rel="apple-touch-icon" sizes="114x114" href="{{ url('storage/'.$info->url_logo)  }}">

      <!-- Critical styles
		================================================== -->
      <link rel="stylesheet" href="{{ asset('css/critical.min.css') }}" type="text/css">

      <!-- Load google font
		================================================== -->
      <script type="text/javascript">
            WebFontConfig = {
                  google: { families: ['Open+Sans:300,400,500,600,700,800', 'Raleway:100,400,400i,500,500i,700,700i,900'] }
            };
            (function () {
                  var wf = document.createElement('script');
                  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
                  wf.type = 'text/javascript';
                  wf.async = 'true';
                  var s = document.getElementsByTagName('script')[0];
                  s.parentNode.insertBefore(wf, s);
            })();
      </script>

      <!-- Load other scripts
		================================================== -->
      <script type="text/javascript">
            var _html = document.documentElement,
                  isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

            _html.className = _html.className.replace("no-js", "js");
            _html.classList.add(isTouch ? "touch" : "no-touch");
      </script>
      <script type="text/javascript" src="{{ asset('js/device.min.js') }}"></script>
      @stack('style')
</head>

<body>

      @include("partials.navbar")

      @yield("content")

      @include("partials.footer")

      <div id="btn-to-top-wrap">
            <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>

      <script type="text/javascript" src="{{ asset('js/main.min.js') }}"></script>
      <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
                  (function (b, o, i, l, e, r) {
                        b.GoogleAnalyticsObject = l; b[l] || (b[l] =
                              function () { (b[l].q = b[l].q || []).push(arguments) }); b[l].l = +new Date;
                        e = o.createElement(i); r = o.getElementsByTagName(i)[0];
                        e.src = 'https://www.google-analytics.com/analytics.js';
                        r.parentNode.insertBefore(e, r)
                  }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto'); ga('send', 'pageview');
      </script>
      @stack('script')
</body>

</html>
