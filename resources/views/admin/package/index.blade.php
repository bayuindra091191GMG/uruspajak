@extends('layouts.admin')

@section('content')

    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row mb-3 ">
                <div class="col-12">
                    <h4> <i class="icon-settings2"></i> Customize Package</h4>
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
                            {{ Form::open(['route'=>['admin.footer.update'],'method' => 'post','id' => 'general-form']) }}

                            <div class="form-group">
                                <label for="column_title_1" class="col-form-label">Package 1 Title</label>
                                <input type="text" class="form-control" id="column_title_1" name="column_title_1"
                                       placeholder="Street, State, City, Zip Code" value="{{ $columnTitle1 }}">
                            </div>
                            <div class="form-group">
                                <label for="column_title_2" class="col-form-label">Package 2 Title</label>
                                <input type="text" class="form-control" id="column_title_2" name="column_title_2"
                                       placeholder="Street, State, City, Zip Code" value="{{ $columnTitle2 }}">
                            </div>
                            <div class="form-group">
                                <label for="column_title_3" class="col-form-label">Package 3 Title</label>
                                <input type="text" class="form-control" id="column_title_3" name="column_title_3"
                                       placeholder="Street, State, City, Zip Code" value="{{ $columnTitle3 }}">
                            </div>

                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <div class="row mb-2">
                                <div class="col-12">
                                    <h3 class="float-left">PACKAGE 1 CONTENTS</h3>
                                    <button type="button" class="btn btn-success float-right content-add" data-column="1">
                                        <i class="icon-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr class="text-center">
                                            <th style="width: 15%;">Index</th>
                                            <th style="width: 40%;">Feature</th>
                                            <th style="width: 15%;">Checklist</th>
                                            <th style="width: 30%;">Action</th>
                                        </tr>
                                        @foreach($columnContent1 as $content)
                                            <tr>
                                                <td class="text-center">{{ $content->index }}</td>
                                                <td>{{ $content->content }}</td>
                                                <td class="text-center">
                                                    @if($content->is_disabled === 0)
                                                        <i class="fas fa-check" style="color: #555891 !important;"></i>
                                                    @else
                                                        <i class="fas fa-times" style="color: #F5D74C !important;"></i>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary content-edit"
                                                            data-id="{{ $content->id }}"
                                                            data-index="{{ $content->index }}"
                                                            data-content="{{ $content->content ?? "" }}"
                                                            data-is-disabled="{{ $content->is_disabled }}">
                                                        <i class="icon-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger content-delete"
                                                            data-id="{{ $content->id }}">
                                                        <i class="icon-close"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <div class="row mb-2">
                                <div class="col-12">
                                    <h3 class="float-left">PACKAGE 2 CONTENTS</h3>
                                    <button type="button" class="btn btn-success float-right content-add" data-column="2">
                                        <i class="icon-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr class="text-center">
                                            <th style="width: 15%;">Index</th>
                                            <th style="width: 40%;">Feature</th>
                                            <th style="width: 15%;">Checklist</th>
                                            <th style="width: 30%;">Action</th>
                                        </tr>
                                        @foreach($columnContent2 as $content)
                                            <tr>
                                                <td class="text-center">{{ $content->index }}</td>
                                                <td>{{ $content->content }}</td>
                                                <td class="text-center">
                                                    @if($content->is_disabled === 0)
                                                        <i class="fas fa-check" style="color: #555891 !important;"></i>
                                                    @else
                                                        <i class="fas fa-times" style="color: #F5D74C !important;"></i>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary content-edit"
                                                            data-id="{{ $content->id }}"
                                                            data-index="{{ $content->index }}"
                                                            data-content="{{ $content->content ?? "" }}"
                                                            data-is-disabled="{{ $content->is_disabled }}">
                                                        <i class="icon-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger content-delete"
                                                            data-id="{{ $content->id }}">
                                                        <i class="icon-close"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <div class="row mb-2">
                                <div class="col-12">
                                    <h3 class="float-left">PACKAGE 3 CONTENTS</h3>
                                    <button type="button" class="btn btn-success float-right content-add" data-column="3">
                                        <i class="icon-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr class="text-center">
                                            <th style="width: 15%;">Index</th>
                                            <th style="width: 40%;">Feature</th>
                                            <th style="width: 15%;">Checklist</th>
                                            <th style="width: 30%;">Action</th>
                                        </tr>
                                        @foreach($columnContent3 as $content)
                                            <tr>
                                                <td class="text-center">{{ $content->index }}</td>
                                                <td>{{ $content->content }}</td>
                                                <td class="text-center">
                                                    @if($content->is_disabled === 0)
                                                        <i class="fas fa-check" style="color: #555891 !important;"></i>
                                                    @else
                                                        <i class="fas fa-times" style="color: #F5D74C !important;"></i>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary content-edit"
                                                            data-id="{{ $content->id }}"
                                                            data-index="{{ $content->index }}"
                                                            data-content="{{ $content->content ?? "" }}"
                                                            data-is-disabled="{{ $content->is_disabled }}">
                                                        <i class="icon-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger content-delete"
                                                            data-id="{{ $content->id }}">
                                                        <i class="icon-close"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="column_1_auto_index" value="{{ $column1AutoIndex }}">
    <input type="hidden" id="column_2_auto_index" value="{{ $column2AutoIndex }}">
    <input type="hidden" id="column_3_auto_index" value="{{ $column3AutoIndex }}">

    <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    {{ Form::open(['route'=>['admin.package.item.store'],'method' => 'post','id' => 'form_column_item_add']) }}

                    <div class="form-group">
                        <label for="added_content" class="col-form-label">Feature</label>
                        <input type="text" class="form-control" id="added_content" name="added_content">
                    </div>
                    <div class="form-group">
                        <label for="added_index" class="col-form-label">Index</label>
                        <input type="number" class="form-control" id="added_index" name="added_index">
                    </div>
                    <div class="form-group">
                        Feature Disabled
                        <div class="material-switch float-right">
                            <input id="added_feature_disabled" name="added_feature_disabled" value="1" type="checkbox"/>
                            <label for="added_feature_disabled" class="bg-danger"></label>
                        </div>
                    </div>

                    <input type="hidden" id="added_column" name="added_column">
                    {{ Form::close() }}

                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <i class="icon-close"></i> CANCEL
                        </button>
                        <button type="button" class="btn btn-success add">
                            <i class="icon-check"></i> ADD
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    {{ Form::open(['route'=>['admin.package.item.update'],'method' => 'post','id' => 'form_column_item_update']) }}
                    <div class="form-group">
                        <label for="edited_content" class="col-form-label">Feature</label>
                        <input type="text" class="form-control" id="edited_content" name="edited_content">
                    </div>
                    <div class="form-group">
                        <label for="edited_index" class="col-form-label">Index</label>
                        <input type="number" class="form-control" id="edited_index" name="edited_index">
                    </div>
                    <div class="form-group">
                        Feature Disabled
                        <div class="material-switch float-right">
                            <input id="edited_feature_disabled" name="edited_feature_disabled" value="1" type="checkbox"/>
                            <label for="edited_feature_disabled" class="bg-danger"></label>
                        </div>
                    </div>
                    <input type="hidden" id="edited_id" name="edited_id">
                    {{ Form::close() }}

                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <i class="icon-close"></i> CANCEL
                        </button>
                        <button type="button" class="btn btn-success update">
                            <i class="icon-check"></i> UPDATE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    {{ Form::open(['route'=>['admin.package.item.destroy'],'method' => 'post','id' => 'form_column_item_delete']) }}
                    <h3>Are you sure you want to remove this feature?</h3>
                    <br/>
                    <input type="hidden" id="deleted_id" name="deleted_id"/>
                    {{ Form::close() }}

                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <i class="icon-close"></i> CANCEL
                        </button>
                        <button type="button" class="btn btn-danger delete">
                            <i class="icon-check"></i> REMOVE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
@endsection

@section('scripts')
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        function submitForm(){
            $('#general-form').submit();
        }

        $(document).on('click', '.content-add', function(){
            $('#addModal').modal({
                backdrop: 'static',
                keyboard: false
            });

            let columnIdx = $(this).data('column');
            $('#added_column').val(columnIdx);

            if(columnIdx === 1){
                $('#added_index').val($('#column_1_auto_index').val());
            }
            else if(columnIdx === 2){
                $('#added_index').val($('#column_2_auto_index').val());
            }
            else{
                $('#added_index').val($('#column_3_auto_index').val());
            }
        });

        $('#addModal').on('click', '.add', function(){
            $('#form_column_item_add').submit();
        });

        $(document).on('click', '.content-edit', function(){
            $('#editModal').modal({
                backdrop: 'static',
                keyboard: false
            });

            $('#edited_id').val($(this).data('id'));
            $('#edited_content').val($(this).data('content'))
            $('#edited_index').val($(this).data('index'));

            if($(this).data('is-disabled') === 1){
                $('#edited_feature_disabled').prop('checked', true);
            }
            else{
                $('#edited_feature_disabled').prop('checked', false);
            }

        });

        $('#editModal').on('click', '.update', function(){
            $('#form_column_item_update').submit();
        });

        $(document).on('click', '.content-delete', function(){
            $('#deleteModal').modal({
                backdrop: 'static',
                keyboard: false
            });

            $('#deleted_id').val($(this).data('id'));
        });

        $('#deleteModal').on('click', '.delete', function(){
            $('#form_column_item_delete').submit();
        });
    </script>
@endsection