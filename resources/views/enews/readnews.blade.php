@extends('layouts.userlayout')
@section('content')
<div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                  @if($news)
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$news->news->newstitle}}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                          <div class="col-md-12">
                            {{$news->news->excerpt}}
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            {{$news->news->excerpt}}
                          </div>
                        </div>
                    </div>
                    @else
                    <div class="panel-body">
                        <div class="row">
                          <div class="col-md-12">
                          <p>Уучлаарай та мэдээ унших эрхгүй байна</p>
                        </div>
                      </div>
                  </div>
                    @endif
            </div>
        </div>
    </div>
  </div>

@endsection
@section('javascript')
@endsection
