@extends('layouts.admin')

@section('content')

    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row mb-3 ">
                <div class="col-12">
                    <h4> <i class="icon-settings2"></i> Setting</h4>
                </div>
            </div>
            <div class="row p-t-b-10 ">
                <div class="col-12 text-right">
                    {{--                    <button type="button" class="btn btn-danger">CANCEL</button>--}}
                    <button type="button" class="btn btn-success" onclick="submitForm();">SAVE</button>
                </div>
            </div>
        </div>
    </header>

    <div class="animatedParent animateOnce">
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-12">
                    @include('partials.admin._messages')
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body b-b">
                            {{ Form::open(['route'=>['admin.setting.update'],'method' => 'post','id' => 'general-form']) }}

                            <div class="form-group">
                                <label for="column_title_1" class="col-form-label">Current Password</label>
                                <input type="password" class="form-control" id="password_current" name="password_current">
                            </div>
                            <div class="form-group">
                                <label for="column_title_2" class="col-form-label">New Password</label>
                                <input type="password" class="form-control" id="password_new" name="password_new">
                            </div>
                            <div class="form-group">
                                <label for="column_title_3" class="col-form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                            </div>

                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
@endsection

@section('scripts')
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        function submitForm(){
            $('#general-form').submit();
        }
    </script>
@endsection