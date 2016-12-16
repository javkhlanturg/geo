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
                                    <th > Үнэ </th>
                                    <th > Нийтэлсэн </th>
                                  <th ></th></tr>
                            </thead>
                            <tbody>
                              @foreach($list as $item)
                                <tr role="row">
                                    <td> {{$loop->index+1}} </td>
                                    <td> {{$item->newstitle}} </td>
                                    <td> {{str_limit($item->excerpt, 40)}} </td>
                                    <td>  {{number_format($item->price, 2)}} ₮ </td>
                                    <td>  {{ date('m сарын d, Y',strtotime($item->created_at))}} </td>
                                    <td class="no-sort no-click">
                                      <div class="btn-sm btn-primary pull-right ordernews" data-id="{{$item->id}}">
                                          <i class="voyager-trash"></i> Захиалах
                                      </div>
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

  <div class="modal modal-primary fade" tabindex="-1" id="order_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">
                        <i class="voyager-trash"></i> Are you sure you want to delete this Цэс?
                    </h4>
                </div>
                <div class="modal-footer">
                    <form action="/user/news/order" id="order_form" method="POST">
                        <input type="hidden" name="_method" value="order">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger pull-right order-confirm" value="Тийм,  Цэс устгана">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Болих</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
$(document).ready(function(){
  $('td').on('click', '.ordernews', function (e) {
            id = $(e.target).data('id');

            $('#order_form')[0].action += '/' + id;

            $('#order_modal').modal('show');
        });
});
@endsection
