<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>{{ isset($title) ? $title : '' }}</title>

    <!--Stylesheets-->
    @yield('styles')
</head>
<body>

<!--Header start-->
<header>
    <div class="container">
        <div class="row">
            <div class="topSidebar">
                <ul class="contacts">
                    <li>
                        <i class="icon phone"></i>
                        <a href="tel:+7925678745">+792 567 8745</a>
                    </li>
                    <li>
                        <i class="icon email"></i>
                        <a href="mailto:contact@blueowlcreative.com">contact@blueowlcreative.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="navSidebar">

        <div class="container">

            <div class="row no-padding-left">

                <div class="logo">
                    <a href="/">
                        company name
                    </a>
                </div>

                <div class="burger"></div>

                <ul class="menu">

                    <li class="close"></li>

                    <li class="hasChild">
                        <a href="#">home</a>

                        <ul>
                            <li>
                                <a href="#">
                                    brushes
                                </a>
                            </li>

                            <li class="hasChild">
                                <a href="#">
                                    textures
                                </a>

                                <ul>
                                    <li>
                                        <a href="#">
                                            brushes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            textures
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            icon sets
                                        </a>
                                    </li>
                                </ul>

                            </li>

                            <li>
                                <a href="#">
                                    icon sets
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    patterns
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    vectors
                                </a>
                            </li>

                        </ul>

                    </li>
                    <li>
                        <a href="#">about us</a>
                    </li>
                    <li>
                        <a href="#">portfolio</a>
                    </li>
                    <li>
                        <a href="#">latest news</a>
                    </li>
                    <li>
                        <a href="#">contact us</a>
                    </li>
                </ul>

            </div>

        </div>

    </div>

</header>
<!--Header end-->

@yield('content')

<!--Footer start-->
<footer>
    <div class="container">

        <div class="row">

            <div class="content">

                <div class="contentBlock">

                    <div class="title">
                        NAVIGATION
                    </div>

                    <ul class="navigation">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">Latest News</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>

                </div>


                <div class="contentBlock">

                    <div class="title">
                        CONTACTS
                    </div>

                    <ul class="contacts">
                        <li>
                            <img src="{{ url('/') }}/frontend/img/icons/phone-white.png" alt="#">
                            <a href="tel:+7925678745">+792 567 8745</a>
                        </li>
                        <li>
                            <img src="{{ url('/') }}/frontend/img/icons/email-white.png" alt="#">
                            <a href="mailto:contact@blueowlcreative.com">contact@blueowlcreative.com</a>
                        </li>
                        <li>
                            <img src="{{ url('/') }}/frontend/img/icons/pointer-white.png" alt="#">
                            <a href="#">3451 52nd Ave., New York City</a>
                        </li>
                    </ul>

                </div>

                <div class="contentBlock">
                    <form action="#" method="get">
                        <input type="text" name="name" placeholder="Name">
                        <input required type="email" name="email" placeholder="E-mail">
                        <input type="tel" name="phone" placeholder="Phone">
                        <textarea name="message" placeholder="Message"></textarea>

                        <button class="btn">
                            Contact Us
                        </button>

                    </form>
                </div>


            </div>

            <div class="socialBlock">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ url('/') }}/frontend/img/icons/socials/pinterest.png" alt="#">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ url('/') }}/frontend/img/icons/socials/google.png" alt="#">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ url('/') }}/frontend/img/icons/socials/twitter.png" alt="#">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ url('/') }}/frontend/img/icons/socials/facebook.png" alt="#">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ url('/') }}/frontend/img/icons/socials/skype.png" alt="#">
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</footer>
<div class="copyBlock">
    <div class="container">
        <div class="row">
            <div class="text">
                © Copyright 2013  | Powered By WordPress
            </div>
        </div>
    </div>
</div>
<!--Footer end-->

<!--Popups start-->
@yield('popups')
<!--Popups end-->


<!--Jquery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--Layout-->
<script src="{{ url('/') }}/frontend/js/layout.js?v={{ env('CACHE_FILE_VERSION') }}"></script>

<!--Yield scripts-->

@yield('scripts')

<!--Media stylesheet-->
<link rel="stylesheet" href="{{ url('/') }}/frontend/css/media.css?v={{ env('CACHE_FILE_VERSION') }}">

</body>
</html>
