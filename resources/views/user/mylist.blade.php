@extends('layouts.userlayout')
@section('content')
<div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div id="dataTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                          <div class="row">
                              <table
                                id="dataTable"
                                class="table table-hover dataTable no-footer"
                                role="grid" aria-describedby="dataTable_info">
                                <thead>
                                  <tr role="row">
                                    <th >Д/д</th>
                                    <th >Сонингийн гарчиг</th>
                                    <th >Товч агуулга</th>
                                    <th > Төлөв </th>
                                    <th > Үнэ </th>
                                    <th > Нийтэлсэн </th>
                                  <th ></th></tr>
                            </thead>
                            <tbody>
                              @foreach($list as $item)
                                <tr class="odd" role="row">
                                    <td> {{$loop->index+1}} </td>
                                    <td> {{$item->news->newstitle}} </td>
                                    <td> {{str_limit($item->news->excerpt, 40)}} </td>
                                    @if( $item->status === 0 )
                                      <td> <span class="badge badge-info"> Захиалсан </span> </td>
                                    @elseif($item-status === 1)
                                      <td> <span>Баталгаажсан</span> </td>
                                    @elseif($item-status === 2)
                                      <td> <span>Цуцалсан</span> </td>
                                    @endif
                                    <td> {{$item->news->newtitle}} </td>
                                    <td>  {{number_format($item->news->price, 2)}} ₮ </td>
                                    <td>  {{ date('m сарын d, Y',strtotime($item->news->created_at))}} </td>
                                    <td>
                                      <a class="btn-sm btn-danger pull-right cancelorder" data-id="{{$item->id}}">
                                          <i class="voyager-trash"></i> Захиалга цуцлах
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
    </div>
  </div>

  <div class="modal modal-danger fade" tabindex="-1" id="cancel_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title">
                        <i class="voyager-trash"></i> Захиалга цуцлах
                    </h5>
                </div>
                <div class="modal-body">
                  <p>Та захиалгыг цуцлахдаа итгэлтэй байна уу ?</p>
                </div>
                <div class="modal-footer">
                    <form action="{{route('deleteOrder')}}" id="order_form" method="post">
                        <input type="hidden" name="orderid" id="orderid">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger pull-right order-confirm" value="Тийм">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Болих</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
<script>
$(document).ready(function(){
  $(document).on('click', '.cancelorder', function (e) {
      id = $(e.target).data('id');
      $('#orderid').val(id);
      $('#cancel_modal').modal('show');
  });
});
</script>
@endsection
