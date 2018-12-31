@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Pajak, Tax, Money, Uang">

    <title>Urus Pajak</title>
@endsection

@section('content')
    <section class="section-gap mb-100">
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


    <!-- start banner Area -->
    <section class="section-gap">
        <div class="container">
            <div class="row mb-2">
                <div class="col-12">
                    <span class="text-custom-white">Let's get you a quote - it only takes a few second</span><br/>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <span class="h4 text-custom-gray">Kode ZIP saya adalah </span>
                    <span class="h4 text-custom-gray text-custom-underline">{{ $zip }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <span class="h4 text-custom-gray">Saya ingin mengurus </span>
                    <span class="h4 text-custom-gray text-custom-underline">{{ $tax_report }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="h3 text-custom-black" for="cover">Omzet saya per bulan :</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="omzet" id="radioOption1" value="option1" checked>
                        <label class="form-check-label h4 text-custom-black" for="radioOption1">
                            0 - 50 juta
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="omzet" id="radioOption2" value="option2">
                        <label class="form-check-label h4 text-custom-black" for="radioOption2">
                            50 - 400 juta
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="omzet" id="radioOption3" value="option3">
                        <label class="form-check-label h4 text-custom-black" for="radioOption3">
                            >400 juta
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <a class="btn btn-primary px-4 py-2 bg-custom-yellow border-dark text-custom-black" style="cursor: pointer;" onclick="goNext();">Next</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
@endsection

@section('styles')
    <style>
        body{
            background-color: #555891;
        }
    </style>
@endsection

@section('scripts')
    <script>
        function goNext(){
            var option = $('input[name=omzet]:checked').val();
            window.location = '{{ route('frontend.form.business.4') }}?zip=' + '{{ $zip }}' + '&tax_report=' + '{{ $tax_report_option }}' + '&omzet=' + option;
        }
    </script>
@endsection