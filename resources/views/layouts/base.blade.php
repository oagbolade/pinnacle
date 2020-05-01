
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('app.name') }} - @yield('title')</title>
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}">
	<meta name="description" content="@yield('title')">	

	<meta name="author" content="@sprinble">
	<meta name="twitter" content="@pinnacleriskng" />
	<meta name="instagram" content="@pinnacleriskng" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Pinnacle Risk Advisory - @yield('title')" />
	<meta property="og:description" content="@yield('title')" />
	<meta property="og:url" content="https://pinnacleriskng.com/" />
	<meta property="og:site_name" content="Pinnacle Risk Advisory" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:creator" content="@sprinble" />
	<meta name="twitter:description" content="@yield('title')" />
	<meta name="twitter:title" content="Pinnacle Risk Advisory - @yield('title')" />
	
	<link rel="stylesheet" href="{{ mix('/dist/css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
	

	<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117521148-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-117521148-1');
	</script>
</head>
<body class="tg-home tg-hometwo">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
    
	@yield('body')

	<script src="{{ mix('dist/js/app.js') }}"></script>
	
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
        <script type='text/javascript'>
            (function($) {window.fnames = new Array(); 
            window.ftypes = new Array();
            fnames[0]='EMAIL';
            ftypes[0]='email';
            fnames[1]='FNAME';
            ftypes[1]='text';
            fnames[2]='LNAME';
            ftypes[2]='text';
            }
            (jQuery));
            var $mcj = jQuery.noConflict(true);
        </script>

		<script>
			!function() {
				var t;
				if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0, 
				t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
				t.factory = function(e) {
					return function() {
					var n;
					return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
					};
				}, t.methods.forEach(function(e) {
					t[e] = t.factory(e);
				}), t.load = function(t) {
					var e, n, o, i;
					e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"), 
					o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js", 
					n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
				});
				}();
			drift.SNIPPET_VERSION = '0.3.1';
			drift.load('n5epdfbrwxd6');
		</script>
</body>
</html>