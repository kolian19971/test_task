@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ url('/') }}/frontend/css/home.css?v={{ env('CACHE_FILE_VERSION') }}">
@endsection

@section('scripts')
    <!--Slick slider-->
    <script src="{{ url('/') }}/frontend/js/slick/slick.min.js"></script>
    <link rel="stylesheet" href="{{ url('/') }}/frontend/js/slick/slick.css">
    <link rel="stylesheet" href="{{ url('/') }}/frontend/js/slick/slick-theme.css">


    <!--Jquery ui-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!--Jquery mask-->
    <script src="{{ url('/') }}/frontend/js/jquery.mask.min.js"></script>

    <!--SweetAlert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="{{ url('/') }}/frontend/js/home.js?v={{ env('CACHE_FILE_VERSION') }}"></script>

    <!--Google map api-->
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API_KEY') }}&callback=initMap&libraries=&drawing"></script>

@endsection

@section('popups')
    <div class="overlay"></div>
    <div class="popup container search">

        <div class="title">
            Search Results

            <div class="close"></div>
        </div>

        <div id="map" class="mapArea"></div>

        <div class="offices">

            <div class="office">
                <div class="title">
                    1) Ho Chi Minh City - Main Office
                </div>

                <div class="description">

                    <div class="line">
                        261 - 263 Phan Xich Long Street,
                    </div>

                    <div class="line">
                        Phu Nhuan District, Ho Chi Minh City,
                    </div>

                    <div class="line">
                        70030
                    </div>

                    <div class="line">
                        Vietnam
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection

@section('content')
    <!--Home slides start-->
    <div class="homeSlider">
        <div class="slide">
            <div class="content">
                <div class="image">
                    <img data-lazy="{{ url('/') }}/uploads/slides/1.png" src="#" alt="#">
                </div>

                <div class="container">
                    <div class="row">

                        <div class="description">
                            <div class="title">
                                CONTRARY TO POPULAR BELIEF
                            </div>
                            <div class="text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <div class="image">
                    <img data-lazy="{{ url('/') }}/uploads/slides/2.png" src="#" alt="#">
                </div>

                <div class="container">
                    <div class="row">

                        <div class="description">
                            <div class="title">
                                CONTRARY TO POPULAR BELIEF
                            </div>
                            <div class="text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <div class="image">
                    <img data-lazy="{{ url('/') }}/uploads/slides/3.png" src="#" alt="#">
                </div>

                <div class="container">
                    <div class="row">

                        <div class="description">
                            <div class="title">
                                CONTRARY TO POPULAR BELIEF
                            </div>
                            <div class="text">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
    <!--Home slides end-->

    <!--Services block start-->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="items">


                    <a class="item" href="#">
                        <div class="iconArea">
                            <i class="icon mac"></i>
                        </div>

                        <div class="title">
                            Responsive design
                        </div>

                        <div class="description">
                            I am so clever that sometimes I do not understand a single word of what I am saying and get very
                            confused.
                        </div>
                    </a>


                    <a class="item" href="#">
                        <div class="iconArea">
                            <i class="icon edit"></i>
                        </div>

                        <div class="title">
                            Web development
                        </div>

                        <div class="description">
                            It is better to be hated for what you are than to be loved for what you are not, so might as well be yourself.
                        </div>
                    </a>


                    <a class="item" href="#">
                        <div class="iconArea">
                            <i class="icon user"></i>
                        </div>

                        <div class="title">
                            customer support
                        </div>

                        <div class="description">
                            Whenever you find yourself on the side of the majority, it is time to pause reflect and reconsider things.
                        </div>
                    </a>



                    <a class="item" href="#">
                        <div class="iconArea">
                            <i class="icon image"></i>
                        </div>

                        <div class="title">
                            images included
                        </div>

                        <div class="description">
                            Whenever you find yourself on the side of the majority, it is time to pause reflect and reconsider things.
                        </div>
                    </a>




                </div>
            </div>
        </div>
    </div>
    <!--Services block end-->

    <!--Search block start-->
    <div class="search">
        <div class="searchBg">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <div class="title">
                            Search
                        </div>
                        <form action="/get/offices" method="post">
                            @csrf
                            <input required type="text" name="zip" placeholder="Search...">
                            <button class="submit">
                                <span>Search</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"></div>
    </div>
    <!--Search block end-->

    <!--Portfolio block start-->
    <div class="portfolio">
        <div class="container">
            <div class="row">
                <div class="content">
                    <div class="title">
                        PORTFOLIO
                    </div>

                    <div class="portfolioSlider">

                        <div class="slide">

                            <a href="#">
                                <div class="image">
                                    <img src="{{ url('/') }}/uploads/portfolio/1.png" alt="#">

                                    <div class="name">
                                        It is a long established fact
                                    </div>

                                </div>
                            </a>

                        </div>

                        <div class="slide">

                            <a href="#">
                                <div class="image">
                                    <img src="{{ url('/') }}/uploads/portfolio/2.png" alt="#">

                                    <div class="name">
                                        It is a long established fact
                                    </div>

                                </div>
                            </a>

                        </div>

                        <div class="slide">

                            <a href="#">
                                <div class="image">
                                    <img src="{{ url('/') }}/uploads/portfolio/3.png" alt="#">

                                    <div class="name">
                                        It is a long established fact
                                    </div>

                                </div>
                            </a>

                        </div>

                        <div class="slide">

                            <a href="#">
                                <div class="image">
                                    <img src="{{ url('/') }}/uploads/portfolio/4.png" alt="#">

                                    <div class="name">
                                        It is a long established fact
                                    </div>

                                </div>
                            </a>

                        </div>

                        <div class="slide">

                            <a href="#">
                                <div class="image">
                                    <img src="{{ url('/') }}/uploads/portfolio/1.png" alt="#">

                                    <div class="name">
                                        It is a long established fact
                                    </div>

                                </div>
                            </a>

                        </div>

                        <div class="slide">

                            <a href="#">
                                <div class="image">
                                    <img src="{{ url('/') }}/uploads/portfolio/2.png" alt="#">

                                    <div class="name">
                                        It is a long established fact
                                    </div>

                                </div>
                            </a>

                        </div>

                        <div class="slide">

                            <a href="#">
                                <div class="image">
                                    <img src="{{ url('/') }}/uploads/portfolio/3.png" alt="#">

                                    <div class="name">
                                        It is a long established fact
                                    </div>

                                </div>
                            </a>

                        </div>

                        <div class="slide">

                            <a href="#">
                                <div class="image">
                                    <img src="{{ url('/') }}/uploads/portfolio/4.png" alt="#">

                                    <div class="name">
                                        It is a long established fact
                                    </div>

                                </div>
                            </a>

                        </div>

                    </div>

                </div>
            </div>


            <div class="portfolioArrows">

                <div class="arrow prev"></div>
                <div class="arrow next"></div>

            </div>

        </div>

    </div>
    <!--Portfolio block end-->

    <!--Home text block start-->
    <div class="homeText">
        <div class="container">
            <div class="row">
                <div class="title">
                    What is Lorem Ipsum?
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row no-padding-left no-padding-right">

                <div class="description">

                    <div class="image">
                        <img src="{{ url('/') }}/uploads/others/description.png" alt="#">
                        <div class="label">
                            There are many variations
                        </div>
                    </div>

                    <div class="text">
                        <div class="title">
                            Why do we use it?
                        </div>

                        <div class="fullText">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
                            The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..",
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
    <!--Home text block end-->

    <!--Latest news start-->
    <div class="latestNews">
        <div class="container">
            <div class="row">
                <div class="title">
                    LATEST NEWS
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row no-padding-left no-padding-right">

                <div class="news">

                    <div class="newItem">

                        <div class="image">
                            <img src="{{ url('/') }}/uploads/news/sm/1.png" alt="#">
                        </div>

                        <div class="infoBlock">
                            <a class="name" href="#">
                                SOME INTERESTING NEWS
                            </a>

                            <div class="text">
                                Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...
                            </div>

                            <a href="#" class="readMore">
                                READ MORE
                            </a>

                        </div>

                    </div>

                    <div class="newItem">

                        <div class="image">
                            <img src="{{ url('/') }}/uploads/news/sm/2.png" alt="#">
                        </div>

                        <div class="infoBlock">
                            <a class="name" href="#">
                                SOME INTERESTING NEWS
                            </a>

                            <div class="text">
                                Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...
                            </div>

                            <a href="#" class="readMore">
                                READ MORE
                            </a>

                        </div>

                    </div>

                    <div class="newItem">

                        <div class="image">
                            <img src="{{ url('/') }}/uploads/news/sm/3.png" alt="#">
                        </div>

                        <div class="infoBlock">
                            <a class="name" href="#">
                                SOME INTERESTING NEWS
                            </a>

                            <div class="text">
                                Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...
                            </div>

                            <a href="#" class="readMore">
                                READ MORE
                            </a>

                        </div>

                    </div>

                    <div class="newItem">

                        <div class="image">
                            <img src="{{ url('/') }}/uploads/news/sm/4.png" alt="#">
                        </div>

                        <div class="infoBlock">
                            <a class="name" href="#">
                                SOME INTERESTING NEWS
                            </a>

                            <div class="text">
                                Lorem ipsum dolor sit amet, consect dipisicing elit, sed do eiusmod tempor incididunt 22 ut bore et ...
                            </div>

                            <a href="#" class="readMore">
                                READ MORE
                            </a>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
    <!--Latest news end-->
@endsection



