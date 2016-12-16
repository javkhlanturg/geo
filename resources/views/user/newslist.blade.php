@extends('layouts.userlayout')
@section('content')
<div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div id="dataTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                          <div class="row">
                            @if(isset($list))
                            {{ $list->links() }}
                            @endif
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
                              <?php $count = $list->firstItem();?>
                              @foreach($list as $item)
                                <tr class="odd" role="row">
                                    <td> {{$count}} </td>
                                    <td> {{$item->newstitle}} </td>
                                    <td> {{str_limit($item->excerpt, 40)}} </td>
                                    <td>  {{number_format($item->price, 2)}} ₮ </td>
                                    <td>  {{ date('m сарын d, Y',strtotime($item->created_at))}} </td>
                                    <td>
                                      <a class="btn-sm btn-primary pull-right ordernews" data-id="{{$item->id}}">
                                          Захиалах
                                      </a>
                                    </td>
                                </tr>
                                <?php $count++;?>
                                @endforeach
                            </tbody>
                        </table>
                        @if(isset($list))
                        {{ $list->links() }}
                        @endif
                      </div>
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
