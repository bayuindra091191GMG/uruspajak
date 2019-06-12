@extends('layouts.admin')

@section('content')

    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row mb-3 ">
                <div class="col-12">
                    <h4> <i class="icon-settings2"></i> Customize Testimonial</h4>
                </div>
            </div>
            <div class="row p-t-b-10 ">
                {{-- <div class="col-12 text-right">
                    <button type="button" class="btn btn-danger">CANCEL</button>
                    <button type="button" class="btn btn-success" onclick="submitForm();">SAVE</button>
                </div> --}}
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
            {{ Form::open(['route'=>['admin.testimonial.update'],'method' => 'post','id' => 'general-form']) }}
            <div class="row mb-5">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <div class="row mb-2">
                                <div class="col-12">
                                    <h3 class="float-left">Testimonial 1 Contents</h3>
                                    {{-- <button type="button" class="btn btn-success float-right content-add" data-column="2">
                                        <i class="icon-plus"></i>
                                    </button> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr class="text-center">
                                            {{-- <th style="width: 5%;">Index</th> --}}
                                            <th style="width: 65%;">Content</th>
                                            <th style="width: 15%;">Name1</th>
                                            <th style="width: 15%;">Name2</th>
                                            {{-- <th style="width: 5%;">Checklist</th> --}}
                                            <th style="width: 5%;">Action</th>
                                        </tr>
                                        @foreach($testimonialData1 as $content)
                                            <tr>
                                                {{-- <td class="text-center">{{ $content->index }}</td> --}}
                                                <td>{{ $content->content }}</td>
                                                <td>{{ $content->name1 }}</td>
                                                <td>{{ $content->name2 }}</td>
                                                {{-- <td class="text-center">
                                                    @if($content->is_disabled === 0)
                                                        <i class="fas fa-check" style="color: #555891 !important;"></i>
                                                    @else
                                                        <i class="fas fa-times" style="color: #F5D74C !important;"></i>
                                                    @endif
                                                </td> --}}
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary content-edit"
                                                            data-id="{{ $content->id }}"
                                                            data-index="{{ $content->index }}"
                                                            data-content="{{ $content->content ?? "" }}"
                                                            data-name1="{{ $content->name1 ?? "" }}"
                                                            data-name2="{{ $content->name2 ?? "" }}"
                                                            data-is-disabled="{{ $content->is_disabled }}">
                                                        <i class="icon-edit"></i>
                                                    </button>
                                                    {{-- <button type="button" class="btn btn-danger content-delete"
                                                            data-id="{{ $content->id }}">
                                                        <i class="icon-close"></i>
                                                    </button> --}}
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
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <div class="row mb-2">
                                <div class="col-12">
                                    <h3 class="float-left">Testimonial 2 Contents</h3>
                                    {{-- <button type="button" class="btn btn-success float-right content-add" data-column="2">
                                        <i class="icon-plus"></i>
                                    </button> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr class="text-center">
                                            {{-- <th style="width: 5%;">Index</th> --}}
                                            <th style="width: 65%;">Content</th>
                                            <th style="width: 15%;">Name1</th>
                                            <th style="width: 15%;">Name2</th>
                                            {{-- <th style="width: 5%;">Checklist</th> --}}
                                            <th style="width: 5%;">Action</th>
                                        </tr>
                                        @foreach($testimonialData2 as $content)
                                            <tr>
                                                {{-- <td class="text-center">{{ $content->index }}</td> --}}
                                                <td>{{ $content->content }}</td>
                                                <td>{{ $content->name1 }}</td>
                                                <td>{{ $content->name2 }}</td>
                                                {{-- <td class="text-center">
                                                    @if($content->is_disabled === 0)
                                                        <i class="fas fa-check" style="color: #555891 !important;"></i>
                                                    @else
                                                        <i class="fas fa-times" style="color: #F5D74C !important;"></i>
                                                    @endif
                                                </td> --}}
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary content-edit"
                                                            data-id="{{ $content->id }}"
                                                            data-index="{{ $content->index }}"
                                                            data-content="{{ $content->content ?? "" }}"
                                                            data-name1="{{ $content->name1 ?? "" }}"
                                                            data-name2="{{ $content->name2 ?? "" }}"
                                                            data-is-disabled="{{ $content->is_disabled }}">
                                                        <i class="icon-edit"></i>
                                                    </button>
                                                    {{-- <button type="button" class="btn btn-danger content-delete"
                                                            data-id="{{ $content->id }}">
                                                        <i class="icon-close"></i>
                                                    </button> --}}
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
            
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <div class="row mb-2">
                                <div class="col-12">
                                    <h3 class="float-left">Testimonial 3 Contents</h3>
                                    {{-- <button type="button" class="btn btn-success float-right content-add" data-column="2">
                                        <i class="icon-plus"></i>
                                    </button> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr class="text-center">
                                            {{-- <th style="width: 5%;">Index</th> --}}
                                            <th style="width: 65%;">Content</th>
                                            <th style="width: 15%;">Name1</th>
                                            <th style="width: 15%;">Name2</th>
                                            {{-- <th style="width: 5%;">Checklist</th> --}}
                                            <th style="width: 5%;">Action</th>
                                        </tr>
                                        @foreach($testimonialData3 as $content)
                                            <tr>
                                                {{-- <td class="text-center">{{ $content->index }}</td> --}}
                                                <td>{{ $content->content }}</td>
                                                <td>{{ $content->name1 }}</td>
                                                <td>{{ $content->name2 }}</td>
                                                {{-- <td class="text-center">
                                                    @if($content->is_disabled === 0)
                                                        <i class="fas fa-check" style="color: #555891 !important;"></i>
                                                    @else
                                                        <i class="fas fa-times" style="color: #F5D74C !important;"></i>
                                                    @endif
                                                </td> --}}
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary content-edit"
                                                            data-id="{{ $content->id }}"
                                                            data-index="{{ $content->index }}"
                                                            data-content="{{ $content->content ?? "" }}"
                                                            data-name1="{{ $content->name1 ?? "" }}"
                                                            data-name2="{{ $content->name2 ?? "" }}"
                                                            data-is-disabled="{{ $content->is_disabled }}">
                                                        <i class="icon-edit"></i>
                                                    </button>
                                                    {{-- <button type="button" class="btn btn-danger content-delete"
                                                            data-id="{{ $content->id }}">
                                                        <i class="icon-close"></i>
                                                    </button> --}}
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
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <div class="row mb-2">
                                <div class="col-12">
                                    <h3 class="float-left">Testimonial 4 Contents</h3>
                                    {{-- <button type="button" class="btn btn-success float-right content-add" data-column="2">
                                        <i class="icon-plus"></i>
                                    </button> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr class="text-center">
                                            {{-- <th style="width: 5%;">Index</th> --}}
                                            <th style="width: 65%;">Content</th>
                                            <th style="width: 15%;">Name1</th>
                                            <th style="width: 15%;">Name2</th>
                                            {{-- <th style="width: 5%;">Checklist</th> --}}
                                            <th style="width: 5%;">Action</th>
                                        </tr>
                                        @foreach($testimonialData4 as $content)
                                            <tr>
                                                {{-- <td class="text-center">{{ $content->index }}</td> --}}
                                                <td>{{ $content->content }}</td>
                                                <td>{{ $content->name1 }}</td>
                                                <td>{{ $content->name2 }}</td>
                                                {{-- <td class="text-center">
                                                    @if($content->is_disabled === 0)
                                                        <i class="fas fa-check" style="color: #555891 !important;"></i>
                                                    @else
                                                        <i class="fas fa-times" style="color: #F5D74C !important;"></i>
                                                    @endif
                                                </td> --}}
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary content-edit"
                                                            data-id="{{ $content->id }}"
                                                            data-index="{{ $content->index }}"
                                                            data-content="{{ $content->content ?? "" }}"
                                                            data-name1="{{ $content->name1 ?? "" }}"
                                                            data-name2="{{ $content->name2 ?? "" }}"
                                                            data-is-disabled="{{ $content->is_disabled }}">
                                                        <i class="icon-edit"></i>
                                                    </button>
                                                    {{-- <button type="button" class="btn btn-danger content-delete"
                                                            data-id="{{ $content->id }}">
                                                        <i class="icon-close"></i>
                                                    </button> --}}
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
            
            {{ Form::close() }}
        </div>
    </div>

    {{-- <input type="hidden" id="column_1_auto_index" value="{{ $column1AutoIndex }}">
    <input type="hidden" id="column_2_auto_index" value="{{ $column2AutoIndex }}">
    <input type="hidden" id="column_3_auto_index" value="{{ $column3AutoIndex }}"> --}}

    {{-- <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    {{ Form::open(['route'=>['admin.footer.item.store'],'method' => 'post','id' => 'form_column_item_add']) }}
                    <div class="form-group">
                        <label for="added_content" class="col-form-label">Content</label>
                        <input type="text" class="form-control" id="added_content" name="added_content">
                    </div>
                    <div class="form-group">
                        <label for="added_link" class="col-form-label">Link</label>
                        <input type="text" class="form-control" id="added_link" name="added_link">
                    </div>
                    <div class="form-group">
                        <label for="added_index" class="col-form-label">Index</label>
                        <input type="number" class="form-control" id="added_index" name="added_index">
                    </div>
                    <input type="hidden" id="added_column" name="added_column">
                    {{ Form::close() }}

                    <div class="modal-testimonial">
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
    </div>--}}

    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    {{ Form::open(['route'=>['admin.testimonial.update'],'method' => 'post','id' => 'form_column_item_update']) }}
                    <div class="form-group">

                        <label for="edited_content" class="col-form-label">Content</label>
                        <textarea class="form-control" id="edited_content" name="edited_content" rows="6"></textarea>   
                    </div>
                    <div class="form-group">
                        <label for="edited_content" class="col-form-label">Name1</label>
                        <textarea class="form-control" id="edited_name1" name="edited_name1" rows="2"></textarea>   
                    </div>
                    <div class="form-group">
                        <label for="edited_content" class="col-form-label">Name2</label>
                        <textarea class="form-control" id="edited_name2" name="edited_name2" rows="2"></textarea>   
                    </div>
                    {{-- <div class="form-group">
                        <label for="edited_index" class="col-form-label">Index</label>
                        <input type="number" class="form-control" id="edited_index" name="edited_index" readonly>
                    </div> --}}
                    <input type="hidden" id="edited_id" name="edited_id">
                    {{ Form::close() }}

                    <div class="modal-testimonial">
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

    {{-- <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    {{ Form::open(['route'=>['admin.testimonial.item.destroy'],'method' => 'post','id' => 'form_column_item_delete']) }}
                    <h3>Are you sure you want to remove this content?</h3>
                    <br/>
                    <input type="hidden" id="deleted_id" name="deleted_id"/>
                    {{ Form::close() }}

                    <div class="modal-testimonial">
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
    </div>  --}}
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

            if(columnIdx === 2){
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
            $('#edited_name1').val($(this).data('name1'))
            $('#edited_name2').val($(this).data('name2'))
            $('#edited_index').val($(this).data('index'));
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