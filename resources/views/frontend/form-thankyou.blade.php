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
            <div class="row mb-3">
                <div class="col-12">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="h1 text-custom-black" for="zip">Thank You</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    @if($type === 'business')
                        <a href="{{ route('home') }}" class="btn btn-primary px-4 py-2 bg-custom-yellow border-dark text-custom-black">Back to Home</a>
                    @else
                        <a href="{{ route('home') }}" class="btn btn-primary px-4 py-2 bg-custom-dark-blue border-dark text-custom-white">Back to Home</a>
                    @endif

                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
@endsection

@section('styles')
    <style>
        @if($type === 'business')
            body{
            background-color: #555891;
        }
        @else
            body{
            background-color: #F5D74C;
        }
        @endif
    </style>
@endsection

@section('scripts')
@endsection