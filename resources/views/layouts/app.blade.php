<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Babillard Douala IUI - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="shortcut icon" type="image/jpg" class="rounded-circle" href="{{asset('images/uc-icam.jpg')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

<!--Menu en haut de page-->
@section('header')
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/images/logo_ucac-icam.png" class="img-fluid w-75" alt="Logo UCAC-ICAM">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent #navbarNa0"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Déconnexion') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div>
        @yield('NavBarPlus')
    </div>
@show


<!--Contenu-->
<div class="container ">
    @section('content')
    @show
</div>


<div class="container bg-orange-clair mt-5 mb-0">
    <div class="row justify-content-center">
        <div class="col-12">
            @section('footer')
                <!--PIED DE PAGE-->
                    <footer>
                        <div id="footer" class="container rounded-top">
                            <div class="row justify-content-center">
                                <div class="col-10 d-flex flex-lg-fill justify-content-around flex-row">
                                    <div class="pt-2 text-white"><p>© Copyright - BAD Jrs</p></div>

                                    <!--Mentions légales-->
                                    <!-- Button trigger modal -->
                                    <div>
                                        <button type="button" class="btn shadow" data-toggle="modal" data-target="#exampleModalScrollable">
                                            <span class="text-white">Mentions légales</span>
                                        </button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-orange-clair">
                                                    <h5 class="modal-title text-white" id="exampleModalScrollableTitle">Mentions légales</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate velit nec
                                                    orci dignissim rhoncus. Vivamus non libero vitae elit tempus auctor. Nulla ultricies
                                                    bibendum velit, in fringilla sapien mattis in. Fusce sed erat nunc. Mauris condimentum
                                                    id purus in dictum. Sed dignissim erat et hendrerit blandit. Duis condimentum nulla
                                                    risus, eu cursus odio eleifend et.

                                                    Aenean convallis dapibus ultrices. Proin non interdum tellus, vitae molestie ex. Duis
                                                    sollicitudin diam quam. Vivamus dictum tortor faucibus metus vulputate mollis. Cras
                                                    vitae justo lorem. Etiam ultricies hendrerit leo, at facilisis ipsum luctus eget. Nunc
                                                    aliquam orci vitae lacus elementum viverra.

                                                    Phasellus nisl odio, commodo sed scelerisque sit amet, viverra quis ligula. Class aptent
                                                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                                                    Mauris tempus lacus vitae porttitor semper. Ut faucibus vitae ligula eu pretium. Etiam
                                                    sagittis vulputate sodales. Nunc molestie est nec quam blandit pulvinar. Maecenas in
                                                    dapibus nibh. Praesent in libero odio. Ut consequat vel massa eu porttitor. Sed vitae
                                                    magna metus. Vivamus nec malesuada eros.

                                                    Sed auctor molestie sem sit amet fringilla. Sed elit nisl, vulputate nec lacus ut,
                                                    interdum varius metus. Nullam dictum lorem elit, vitae vehicula neque accumsan id. Ut
                                                    euismod lorem a lectus malesuada, nec maximus justo dapibus. Suspendisse sollicitudin
                                                    pretium ultricies. Fusce consectetur leo lacus, sit amet scelerisque lorem sodales
                                                    vitae. Quisque sit amet odio consequat, lobortis elit non, semper lacus. In tristique ut
                                                    sem sit amet viverra. Sed congue velit quam, eget tincidunt diam imperdiet quis. In hac
                                                    habitasse platea dictumst. Praesent ullamcorper dolor ut augue malesuada finibus. Mauris
                                                    in hendrerit quam. Maecenas ac efficitur magna, in tincidunt ex.

                                                    Quisque ut molestie ex, quis ullamcorper enim. Donec eu elit vitae nunc viverra
                                                    vulputate. Cras efficitur vel lacus in consectetur. Fusce ornare arcu sed est volutpat,
                                                    in fringilla tortor sodales. Quisque ullamcorper neque a justo ultrices, quis
                                                    scelerisque ex tristique. Fusce faucibus elit sit amet tellus commodo sagittis. Maecenas
                                                    nec arcu dignissim, volutpat ante a, iaculis nunc. Ut sed massa vitae nulla dapibus
                                                    ultrices fermentum a eros. Vivamus et sapien purus. Praesent imperdiet enim turpis, ut
                                                    suscipit nunc elementum eu.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="pt-2 text-white">
                                        <p>Autres</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
            @endsection


        </div>
    </div>
</div>
</body>
</html>
