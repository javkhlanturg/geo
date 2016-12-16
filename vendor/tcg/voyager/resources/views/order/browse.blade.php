@extends('voyager::master')

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
                                    <th>Захиалгын дугаар</th>
                                    <th>Захиалсан</th>
                                    <th>Мэдээ</th>
                                    <th>Төлөв</th>
                                    <th>Илгээсэн</th>
                                    <th class="actions">Үйлдлүүд</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($dataTypeContent as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->user->email}}</td>
                                    <td>{{$data->news->newstitle}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td class="no-sort no-click">
                                      @if($data->status === 0)
                                        <div class="btn-sm btn-info pull-right acceptorder" data-id="{{ $data->id }}">
                                            Батлах
                                        </div>
                                        <div class="btn-sm btn-danger pull-right cancelorder" data-id="{{ $data->id }}">
                                            Цуцлах
                                        </div>
                                        @elseif($data->status === 1)
                                        <span class="badge badge-success pull-right"> Баталгаажсан </span>
                                        @elseif($data->status === 2)
                                        <span class="badge badge-danger pull-right"> Цуцалсан </span>
                                        @else
                                        <span>{{$data->status}}</span>
                                        @endif

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

    <div class="modal modal-danger fade" tabindex="-1" id="cancel_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> Захиалга цуцлах</h4>
                </div>
                <div class="modal-body">
                  <p>Та захиалгыг цуцлах гэж байна ?</p>
                </div>
                <div class="modal-footer">
                  <form id="cancel_form" role="form"
                        action="/admin/order"
                        method="POST">
                        <input name="_token" value="{{ csrf_token() }}" type="hidden">
                        <input name="_method" value="PUT" type="hidden">
                        <input name="status" value="2" type="hidden">
                        <input type="submit" class="btn btn-danger pull-right" value="Тийм">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Болих</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal modal-info fade" tabindex="-1" id="accept_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> Захиалга баталгаажуулах</h4>
                </div>
                <div class="modal-body">
                  <p>Та захиалгыг баталгаажуулах гэж байна ?</p>
                </div>
                <div class="modal-footer">
                  <form id="accept_form" role="form"
                        action="/admin/order"
                        method="POST">
                        <input name="_token" value="{{ csrf_token() }}" type="hidden">
                        <input name="_method" value="PUT" type="hidden">
                        <input name="status" value="1" type="hidden">
                        <input type="submit" class="btn btn-info pull-right" value="Тийм">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Болих</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('javascript')
    <!-- DataTables -->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({ "order": [] });
        });

        $('td').on('click', '.acceptorder', function (e) {
            var form = $('#accept_form')[0];

            form.action = parseActionUrl(form.action, $(this).data('id'));

            $('#accept_modal').modal('show');
        });

        $('td').on('click', '.cancelorder', function (e) {
            var form = $('#cancel_form')[0];

            form.action = parseActionUrl(form.action, $(this).data('id'));

            $('#cancel_modal').modal('show');
        });

        function parseActionUrl(action, id) {
            return action.match(/\/[0-9]+$/)
                    ? action.replace(/([0-9]+$)/, id)
                    : action + '/' + id;
        }
    </script>
@stop
