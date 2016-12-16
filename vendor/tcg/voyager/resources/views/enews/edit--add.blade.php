@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> {{ $dataType->display_name_singular }} @if(isset($dataTypeContent->id)){{ 'засах' }}@else{{ 'шинэ' }}@endif
    </h1>
@stop

@section('content')
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">

                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $dataType->display_name_singular }} @if(isset($dataTypeContent->id)){{ 'засах' }}@else{{ 'Шинээр нэмэх' }}@endif </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form"
                          action="@if(isset($dataTypeContent->id)){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->id) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif"
                          method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if(isset($dataTypeContent->id))
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="name">Гарчиг</label>
                                <input type="text" class="form-control" name="newstitle"
                                    placeholder="Энэ хэсэгт мэдээний гарчигаа оруулна уу" id="newstitle"
                                    value="@if(isset($dataTypeContent->newstitle)){{ old('newstitle', $dataTypeContent->newstitle) }}@else{{old('newstitle')}}@endif">
                            </div>

                            <div class="form-group">
                                <label for="excerpt">Товч тайлбар</label>
                                <input type="text" class="form-control" name="excerpt"
                                       placeholder="Энэ хэсэгт мэдээний товч тайлбараа оруулна уу" id="excerpt"
                                       value="@if(isset($dataTypeContent->excerpt)){{ old('excerpt', $dataTypeContent->excerpt) }}@else{{old('excerpt')}}@endif">
                            </div>
                            <div class="form-group">
                                <label for="price">Үнэ</label>
                                <input type="text" class="form-control" name="price"
                                       placeholder="Үнэ оруулна уу" id="price"
                                       value="@if(isset($dataTypeContent->price)){{ old('price', $dataTypeContent->price) }}@else{{old('price')}}@endif">
                            </div>
                            <div class="form-group">
                                <label for="is_active">Мэдээний төлөв</label>
                                <select class="form-control" name="is_active">
                                    <option value="ACTIVE" @if(isset($dataTypeContent->is_active) && $dataTypeContent->is_active == 'ACTIVE'){{ 'selected="selected"' }}@endif>Идэвхитэй</option>
                                    <option value="INACTIVE" @if(isset($dataTypeContent->is_active) && $dataTypeContent->is_active == 'INACTIVE'){{ 'selected="selected"' }}@endif>Идэвхигүй</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="newfile">Цахим мэдээ</label>
                                @if(isset($dataTypeContent->newfile))
                                <div class="fileType">{{ $dataTypeContent->newfile }}</div>
                                @endif
                                <input type="file" name="newfile">
                            </div>

                            <div class="form-group">
                                <label for="ifimage">Зураг</label>
                                @if(isset($dataTypeContent->ifimage))
                                    <img src="{{ Voyager::image( $dataTypeContent->ifimage ) }}"
                                         style="width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                @endif
                                <input type="file" name="ifimage">
                            </div>



                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">Илгээх</button>
                        </div>
                    </form>

                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                          enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        <input name="image" id="upload_file" type="file"
                               onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();
        });
    </script>
    <script src="{{ config('voyager.assets_path') }}/lib/js/tinymce/tinymce.min.js"></script>
    <script src="{{ config('voyager.assets_path') }}/js/voyager_tinymce.js"></script>
@stop
