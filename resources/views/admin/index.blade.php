@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ url('/') }}/frontend/css/admin.css?v={{ env('CACHE_FILE_VERSION') }}">
@endsection

@section('scripts')
    <script src="{{ url('/') }}/frontend/js/admin.js?v={{ env('CACHE_FILE_VERSION') }}"></script>

    {{--SweetAlert--}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        @if(Session::has('success'))
            Swal.fire({
                 title: 'Success!',
                 text: '{{ Session::get("success") }}',
                 icon: 'success',
                 confirmButtonText: 'Ok'
            });
        @endif
    </script>

@endsection

@section('popups')
    <div class="overlay"></div>
    <div class="popup container uploadRegions">

        <div class="title">
            Upload Regions

            <div class="close"></div>
        </div>

        <form action="/admin/upload/regions" method="post" enctype="multipart/form-data">
            @csrf

            <div class="file">
                <input required type="file" name="file">
            </div>

            <button class="submit">
                Upload
            </button>

        </form>


    </div>
    <div class="popup container uploadOffices">

        <div class="title">
            Upload Offices

            <div class="close"></div>
        </div>

        <form action="/admin/upload/offices" method="post" enctype="multipart/form-data">
            @csrf

            <div class="file">
                <input required type="file" name="file">
            </div>

            <button class="submit">
                Upload
            </button>

        </form>


    </div>
@endsection

@section('content')

    <!--Admin content block start-->
    <div class="adminArea">
        <div class="container">
            <div class="row">
                <div class="content">

                    <div class="items">

                        <div class="item">
                            <div class="image">
                                <img src="{{ url('/') }}/frontend/img/icons/admin/pointer.png" alt="#">
                            </div>

                            <a data-popup="uploadRegions" href="#" class="btn green">
                                Upload Regions
                            </a>

                        </div>


                        <div class="item">
                            <div class="image">
                                <img src="{{ url('/') }}/frontend/img/icons/admin/office.png" alt="#">
                            </div>

                            <a data-popup="uploadOffices" href="#" class="btn blue">
                                Upload Offices
                            </a>

                        </div>

                        <div class="item">
                            <div class="image">
                                <img src="{{ url('/') }}/frontend/img/icons/admin/database.png" alt="#">
                            </div>

                            <a data-popup="clearDatabase" href="#" class="btn brown">
                                Clear Database
                            </a>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Admin content block end-->

@endsection
