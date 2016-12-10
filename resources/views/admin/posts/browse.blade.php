@extends('voyager::master')

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-news"></i> {{ $dataType->display_name_plural }}
        <a href="{{ route($dataType->slug.'.create') }}" class="btn btn-success">
            <i class="voyager-plus"></i> Шинээр нэмэх
        </a>
    </h1>
@stop

@section('page_header_actions')

@stop

@section('content')
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    @foreach($dataType->browseRows as $rows)
                                    <th>{{ $rows->display_name }}</th>
                                    @endforeach
                                    <th class="actions">Үйлдлүүд</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dataTypeContent as $data)
                                <tr>
                                    @foreach($dataType->browseRows as $row)
                                    <td>
                                        @if($row->type == 'image')
                                            <img src="@if( strpos($data->{$row->field}, 'http://') === false && strpos($data->{$row->field}, 'https://') === false){{ Voyager::image( $data->{$row->field} ) }}@else{{ $data->{$row->field} }}@endif" style="width:100px">
                                        @elseif($row->field == 'status')
                                          @if($data->{$row->field} === 'PUBLISHED')
                                            Нийтэлсэн
                                          @elseif($data->{$row->field} === 'DRAFT')
                                            Драфталсан
                                          @endif
                                        @else
                                            {{ $data->{$row->field} }}
                                        @endif
                                    </td>
                                    @endforeach
                                    <td class="no-sort no-click">
                                        <div class="btn-sm btn-danger pull-right delete" data-id="{{ $data->id }}">
                                            <i class="voyager-trash"></i> Устгах
                                        </div>
                                        <a href="{{ route($dataType->slug.'.edit', $data->id) }}" class="btn-sm btn-primary pull-right edit">
                                            <i class="voyager-edit"></i> Засах
                                        </a>
                                        <a href="{{ route($dataType->slug.'.show', $data->id) }}" class="btn-sm btn-warning pull-right">
                                            <i class="voyager-eye"></i> Үзэх
                                        </a>
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

    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">
                        <i class="voyager-trash"></i> Та энэ {{ $dataType->display_name_singular }} устгахдаа итгэлтэй байна уу?
                    </h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route($dataType->slug.'.index') }}" id="delete_form" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="Тиймээ, {{ $dataType->display_name_singular }} устгана">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Болих</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    {{-- DataTables --}}
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({ "order": [] });
        });

        $('td').on('click', '.delete', function(e) {
            $('#delete_form')[0].action += '/' + $(e.target).data('id');
            $('#delete_modal').modal('show');
        });
    </script>
@stop
