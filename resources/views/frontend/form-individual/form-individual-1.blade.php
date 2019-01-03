@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Pajak, Tax, Money, Uang">

    <title>Urus Pajak</title>
@endsection

@section('content')
    <section class="section-gap mb-header-responsive">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('home') }}" style="text-decoration: none;">
                        <img src="{{ asset('images/frontend/logo2.png') }}" height="50"/>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- start form Area -->
    <section class="section-gap">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <span class="text-custom-black">Let's get you a quote - it only takes a few second</span><br/>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="h3 text-custom-black" for="zip">Kode ZIP saya adalah </label>
                            <input type="text" id="zip" class="form-control bg-custom-yellow mx-sm-3 h3 text-custom-black input-text-custom-style">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <a class="btn btn-primary px-4 py-2 bg-custom-dark-blue border-dark text-custom-white" style="cursor: pointer;" onclick="goNext();">Next</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End form Area -->
@endsection

@section('styles')
    <style>
        body{
            background-color: #F5D74C;
        }
    </style>
@endsection

@section('scripts')
    <script>
        function goNext(){
            var zipCode = $('#zip').val();
            window.location = '{{ route('frontend.form.individual.2') }}?zip=' + zipCode;
        }
    </script>
@endsection