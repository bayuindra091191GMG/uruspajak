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
                    <span class="text-custom-black">Let's get you a quote - it only takes a few second</span><br/>
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
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="h3 text-custom-black" for="cover">Saya seorang :</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="who" id="radioOption1" value="option1" checked>
                        <label class="form-check-label h4 text-custom-black" for="radioOption1">
                            Karyawan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="who" id="radioOption2" value="option2">
                        <label class="form-check-label h4 text-custom-black" for="radioOption2">
                            Freelancer
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="who" id="radioOption3" value="option3">
                        <label class="form-check-label h4 text-custom-black" for="radioOption3">
                            Wiraswasta
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="who" id="radioOption4" value="option4">
                        <label class="form-check-label h4 text-custom-black" for="radioOption4">
                            Karyawan < 1 tempat kerja
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <a class="btn btn-primary px-4 py-2 bg-custom-dark-blue border-dark text-custom-white" style="cursor: pointer;" onclick="goNext();">Next</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
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
            var option = $('input[name=who]:checked').val();
            window.location = '{{ route('frontend.form.individual.3') }}?zip=' + '{{ $zip }}' + '&who=' + option;
        }
    </script>
@endsection