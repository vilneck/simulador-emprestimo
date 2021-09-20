<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
 ============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{!! asset('css/custom.css') !!}" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
 ============================================= -->
    <title>Simulador de empréstimo</title>

</head>

<body class="stretched page-transition" data-loader="2" data-animation-in="fadeIn" data-speed-in="1500"
    data-animation-out="fadeOut" data-speed-out="800">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper" class="clearfix">
        <section id="content">
            <div class="content-wrap">
                <div class="container center clearfix">
                    <div class="card">
                        <div class="card-header pt-5">
                            <div class="heading-block center">
                                <h1>Simulador de Empréstimo</h1>
                                <span>Selecione seu automóvel e simule o empréstimo ideal para você</span>
                            </div>
                        </div>
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src="{!! asset('js/jquery.js') !!}"></script>
    <script src="{!! asset('js/plugins.min.js') !!}"></script>
    <script src="{!! asset('js/functions.js') !!}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"
        integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('scripts')
</body>

</html>
