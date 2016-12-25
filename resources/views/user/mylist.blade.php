@extends('layouts.userlayout')
@section('content')
<div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                          <div class="row">
                              @foreach($list as $item)

                              <div class="col-xs-6 col-md-4">
                                <div class="bs-example" data-example-id="contextual-panels">
                                  <div class="panel panel-warning">
                                    <div class="panel-heading" style="background-color:#fc7100">
                                      <span class="panel-title" style="font-size:14px; padding:10px">
                                        {{$item->news->newstitle}}</span>
                                    </div>
                                    <img style="object-fit: cover; height:200px; width:100%" src="/{{$item->news->ifimage}}">
                                    <div class="flex-caption">
                                        <div class="desc">
                                        <p>
                                          <span>Үнэ: {{number_format($item->news->price, 2)}} ₮ <br/>Нийтэлсэн: {{ date('m сарын d, Y',strtotime($item->news->created_at))}}</span>
                                        </p>
                                        </div>
                                      </div>
                                      @if( $item->status === 0 )
                                      <a style="margin-top: 0px; background-color:#fc7100;" class="btn btn-sm col-md-12 col-sm-12 cancelorder btn-danger" data-id="{{$item->id}}">
                                          Захиалга цуцлах
                                      </a>
                                      @elseif($item->status === 1)
                                      <a target="_blank" class="btn btn-sm col-md-12 col-sm-12 btn-success" style=" margin-top: 0px;" href="/user/news/view/{{$item->news->id}}">
                                          Мэдээ унших
                                      </a>
                                      @elseif($item->status === 2)
                                      <a style="margin-top: 0px; background-color:#fc7100;" class="btn btn-sm col-md-12 col-sm-12 btn-warning"  >
                                          Уучлаарай, Захиалга цуцлагдсан
                                      </a>
                                      @endif
                                  </div>
                                </div>
                              </div>
                                @endforeach
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
