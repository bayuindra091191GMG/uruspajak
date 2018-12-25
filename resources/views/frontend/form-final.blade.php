@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Pajak, Tax, Money, Uang">

    <title>Urus Pajak</title>
@endsection

@section('content')
    <section class="section-gap mb-5">
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
                                    <label for="name">Nama Pertama</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="name">Nama Belakang</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="name">Alamat Email</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="name">Nomor Telpon</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="name">Bisnis</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="name">Kota</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-12">
                                    <label for="name">Provinsi</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="name">Kode Zip</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Nama Perusahaan</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="name">Kapan dibutuhkan?</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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