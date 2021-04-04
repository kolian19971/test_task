@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ url('/') }}/frontend/css/login.css?v=1">
@endsection

@section('content')

    <!--Login form start-->
    <div class="loginArea">
        <div class="container">
            <div class="row">
                <div class="content">

                    <div class="logo">
                        <div class="image">
                            <img src="{{ url('/') }}/frontend/img/icons/user-lg.png" alt="#">
                        </div>
                        <div class="title">
                            Admin Login
                        </div>
                    </div>

                    <form action="{{ route('login') }}" method="post">

                        @csrf

                        <div class="inputGroup">
                            <label for="login">
                                Login
                            </label>

                            <input required type="text" name="email" id="login" placeholder="Login">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="inputGroup">
                            <label for="password">
                                Password
                            </label>

                            <input required type="password" name="password" id="password" placeholder="******">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <button class="submit">
                            Enter
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Login form end-->
@endsection
