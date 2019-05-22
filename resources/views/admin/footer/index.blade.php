@extends('layouts.admin')

@section('content')

    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row mb-3 ">
                <div class="col-12">
                    <h4> <i class="icon-settings2"></i> Customize Footer</h4>
                </div>
            </div>
            <div class="row p-t-b-10 ">
                <div class="col-12 text-right">
                    <button type="button" class="btn btn-danger">CANCEL</button>
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
                                    <label for="column_1_paragraph" class="col-form-label">Column 1 Paragraph</label>
                                    <textarea class="form-control r-0" id="column_1_paragraph" name="column_1_paragraph"
                                              rows="3">{{ $columnParagraph1 }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="column_title_2" class="col-form-label">Column 2 Title</label>
                                    <input type="text" class="form-control" id="column_title_2" name="column_title_2"
                                           placeholder="Street, State, City, Zip Code" value="{{ $columnTitle2 }}">
                                </div>
                                <div class="form-group">
                                    <label for="column_title_3" class="col-form-label">Column 3 Title</label>
                                    <input type="text" class="form-control" id="column_title_3" name="column_title_3"
                                           placeholder="Street, State, City, Zip Code" value="{{ $columnTitle3 }}">
                                </div>
                                <div class="form-group">
                                    <label for="address_line_1" class="col-form-label">Address Line 1</label>
                                    <input type="text" class="form-control" id="address_line_1" name="address_line_1"
                                           placeholder="Street, State, City, Zip Code" value="{{ $addressLine1 }}">
                                </div>
                                <div class="form-group">
                                    <label for="address_line_2" class="col-form-label">Address Line 2</label>
                                    <input type="text" class="form-control" id="address_line_2" name="address_line_2"
                                           placeholder="Street, State, City, Zip Code" value="{{ $addressLine2 }}">
                                </div>
                                <div class="form-group">
                                    <label for="address_line_3" class="col-form-label">Address Line 3</label>
                                    <input type="text" class="form-control" id="address_line_3" name="address_line_3"
                                           placeholder="Street, State, City, Zip Code" value="{{ $addressLine3 }}">
                                </div>
                                <div class="form-group">
                                    <label for="contact_phone" class="col-form-label">Contact Phone</label>
                                    <input type="text" class="form-control" id="contact_phone" name="contact_phone"
                                           placeholder="Phone Number" value="{{ $contactPhone }}">
                                </div>
                                <div class="form-group">
                                    <label for="contact_email" class="col-form-label">Contact Email</label>
                                    <input type="text" class="form-control" id="contact_email" name="contact_email"
                                           placeholder="Email Address" value="{{ $contactEmail }}">
                                </div>
                            {{ Form::close() }}
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
                                    <h3 class="float-left">COLUMN 2 CONTENTS</h3>
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
                                            <th style="width: 25%;">Content</th>
                                            <th style="width: 45%;">Link</th>
                                            <th style="width: 15%;">Action</th>
                                        </tr>
                                        @foreach($column2Contents as $content)
                                            <tr>
                                                <td class="text-center">{{ $content->index }}</td>
                                                <td>{{ $content->content }}</td>
                                                <td>{{ $content->link ?? "-" }}</td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary content-edit"
                                                            data-id="{{ $content->id }}"
                                                            data-index="{{ $content->index }}"
                                                            data-content="{{ $content->content ?? "" }}"
                                                            data-link="{{ $content->link ?? "" }}">
                                                        <i class="icon-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger content-delete">
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
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <div class="row mb-2">
                                <div class="col-12">
                                    <h3 class="float-left">COLUMN 3 CONTENTS</h3>
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
                                            <th style="width: 25%;">Content</th>
                                            <th style="width: 45%;">Link</th>
                                            <th style="width: 15%;">Action</th>
                                        </tr>
                                        @foreach($column3Contents as $content)
                                            <tr>
                                                <td class="text-center">{{ $content->index }}</td>
                                                <td>{{ $content->content }}</td>
                                                <td>{{ $content->link ?? "-" }}</td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary content-edit"
                                                            data-id="{{ $content->id }}"
                                                            data-index="{{ $content->index }}"
                                                            data-content="{{ $content->content ?? "" }}"
                                                            data-link="{{ $content->link ?? "" }}">
                                                        <i class="icon-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger content-delete">
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

    <input type="hidden" id="column_2_auto_index" value="{{ $column2AutoIndex }}">
    <input type="hidden" id="column_3_auto_index" value="{{ $column3AutoIndex }}">

    <div id="addModal" class="modal fade" role="dialog">
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
                    {{ Form::open(['route'=>['admin.footer.item.update'],'method' => 'post','id' => 'form_column_item_update']) }}
                        <div class="form-group">
                            <label for="edited_content" class="col-form-label">Content</label>
                            <input type="text" class="form-control" id="edited_content" name="edited_content">
                        </div>
                        <div class="form-group">
                            <label for="edited_link" class="col-form-label">Link</label>
                            <input type="text" class="form-control" id="edited_link" name="edited_link">
                        </div>
                        <div class="form-group">
                            <label for="edited_index" class="col-form-label">Index</label>
                            <input type="number" class="form-control" id="edited_index" name="edited_index">
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
@endsection

@section('styles')
    <link href="{{ asset('css/datatables.css') }}" rel="stylesheet">
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
            $('#edited_link').val($(this).data('link'));
            $('#edited_index').val($(this).data('index'));
        });

        $('#editModal').on('click', '.update', function(){
            $('#form_column_item_update').submit();
        });
    </script>
@endsection