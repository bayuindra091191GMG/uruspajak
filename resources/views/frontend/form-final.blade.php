@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Pajak, Tax, Money, Uang">

    <title>Urus Pajak</title>
@endsection

@section('content')
    <section class="section-gap mb-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('home') }}" style="text-decoration: none;">
                        <img src="{{ asset('images/frontend/logo1.png') }}" height="50"/>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-gap">
        <div class="container">
            {{ Form::open(['route'=>['frontend.fill.store'],'method' => 'post','id' => 'general-form', 'novalidate']) }}
            @if(count($errors))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="row mb-2">
                        <div class="col-12 text-center">
                            <img src="{{ asset('images/frontend/fill-data.png') }}"/>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <p class="h2 text-custom-dark-blue">Fill in you data for us to help you!</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="text-custom-black">Bantu kami supaya proposal anda dapat diterima oleh anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="fname">Nama Pertama</label>
                                    <input type="text" class="input-text-custom-style-final py-1" id="fname" name="fname" value="{{ old('fname') }}">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="lname">Nama Belakang</label>
                                    <input type="text" class="input-text-custom-style-final py-1" id="lname" name="lname" value="{{ old('lname') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="email">Alamat Email</label>
                                    <input type="email" class="input-text-custom-style-final py-1" id="email" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="phone">Nomor Telpon</label>
                                    <input type="text" class="input-text-custom-style-final py-1" id="phone" name="phone" value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="business">Bisnis</label>
                                    <input type="text" class="input-text-custom-style-final py-1" id="business" name="business" value="{{ old('business') }}">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="city">Kota</label>
                                    <input type="text" class="input-text-custom-style-final py-1" id="city" name="city" value="{{ old('city') }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="state">Provinsi</label>
                                    <input type="text" class="input-text-custom-style-final py-1" id="state" name="state" value="{{ old('state') }}">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="zip">Kode Zip</label>
                                    <input type="text" class="input-text-custom-style-final py-1" id="zip" name="zip" value="{{ old('zip') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="company_name">Nama Perusahaan</label>
                                <input type="text" class="input-text-custom-style-final py-1" id="company_name" name="company_name" value="{{ old('company_name') }}">
                            </div>
                            <div class="form-group">
                                <label for="when">Kapan dibutuhkan?</label>
                                <input type="text" class="input-text-custom-style-final py-1" id="when" name="when" value="{{ old('when') }}">
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" class="btn btn-default w-25 bg-custom-dark-blue text-custom-yellow p-2" value="Submit" />
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="type" value="{{ $type }}"/>
                <input type="hidden" name="who" value="{{ $who }}"/>
                <input type="hidden" name="income" value="{{ $income }}"/>
                <input type="hidden" name="tax_report" value="{{ $tax_report }}"/>
                <input type="hidden" name="omzet" value="{{ $omzet }}"/>
                <input type="hidden" name="package" value="{{ $package }}"/>
            </div>
            {{ Form::close() }}
        </div>
    </section>
@endsection

@section('styles')
    <style>
        body{
            background-color: #FCFBFC;
        }
    </style>
@endsection

@section('scripts')
@endsection