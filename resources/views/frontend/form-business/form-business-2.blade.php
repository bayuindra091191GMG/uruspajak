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
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="h3 text-custom-black" for="cover">Saya ingin mengurus :</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tax_report" id="radioOption1" value="option1" checked>
                        <label class="form-check-label h4 text-custom-black" for="radioOption1">
                            Lapor Pajak Bulanan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tax_report" id="radioOption2" value="option2">
                        <label class="form-check-label h4 text-custom-black" for="radioOption2">
                            Lapor Pajak Tahunan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tax_report" id="radioOption3" value="option3">
                        <label class="form-check-label h4 text-custom-black" for="radioOption3">
                            Lapor Keuangan Tahunan
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
            var option = $('input[name=tax_report]:checked').val();
            window.location = '{{ route('frontend.form.business.3') }}?tax_report=' + option;
        }
    </script>
@endsection