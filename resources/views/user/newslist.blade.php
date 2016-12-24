@extends('layouts.userlayout')
@section('content')
<div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div id="dataTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                            @if(isset($list))
                            {{ $list->links() }}
                            @endif
                            <div class="row">
                              <?php $count = $list->firstItem();?>
                              @foreach($list as $item)
                                <div class="col-xs-6 col-md-4">
                                  <div class="bs-example" data-example-id="contextual-panels">
                                    <div class="panel panel-warning">
                                      <div class="panel-heading" style="background-color:#fc7100">
                                        <span class="panel-title" style="font-size:14px; padding:10px">
                                          {{$item->newstitle}}</span>
                                      </div>
                                      <img style="object-fit: cover; height:200px; width:100%" src="/{{$item->ifimage}}">
                                      <div class="flex-caption">
                                          <div class="desc">
                                          <p>
                                            <span>Үнэ: {{number_format($item->price, 2)}} ₮ <br/>Нийтэлсэн: {{ date('m сарын d, Y',strtotime($item->created_at))}}</span>
                                          </p>
                                          </div>
                                        </div>
                                      <a style="background-color:#fc7100; color:#fff" class="btn btn-sm col-md-12 col-sm-12 ordernews" data-id="{{$item->id}}">Захиалах</a>
                                    </div>
                                  </div>
                                </div>
                              <?php $count++;?>
                              @endforeach
                              </div>
                        @if(isset($list))
                        {{ $list->links() }}
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="modal modal-info fade" tabindex="-1" id="order_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">
                        <i class="voyager-trash"></i> Сониг захиалах
                    </h4>
                </div>
                <div class="modal-body">
                  Та захиалга өгснөөр таны захиалсан сонгийн жагсаалтанд орох ба жагсаалт хэсгээс Захиалгын дугаарыг гүйлгээний утган дээр хийж явууна уу
                </div>
                <div class="modal-footer">
                    <form action="{{route('orderNews')}}" id="order_form" method="post">
                        <input type="hidden" name="newsid" id="newsid">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-info pull-right order-confirm" value="Сонинг захиална">
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
  $(document).on('click', '.ordernews', function (e) {
      id = $(e.target).data('id');
      $('#newsid').val(id);
      $('#order_modal').modal('show');
  });
});
</script>
@endsection
