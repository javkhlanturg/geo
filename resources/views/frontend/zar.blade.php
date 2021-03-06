@extends('layouts.app')

@section('content')
<section id="content" class="eight column row pull-left">
  <h4 class="cat-title mb25">Зар оруулах хэсэг</h4>

  <!-- Posts -->
  <section class="row">
    <!-- Category posts -->

    <article class="post six column">
      <div class="contact-form comment cleafix">
        <form action="{{route('zarAdd')}}" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <table style="width:615px; text-align: right;">
                <tbody>

                  <tr style="widht:100px">
                      <th><label for="catgory">Зарын ангилал:</label></th>
                      <td>
                          <select name="category" id="category" style="width:200px">
                              <option value="0">------------ Сонгох ------------------</option>
                              <option value="1">Ажилд авна</option>
                              <option value="2">Ажил хайж байна</option>
                          </select>
                      </td>
                  </tr>
                    <tr>
                        <th><label for="title">Зарын гарчиг:</label></th>
                        <td><input type="text" name="title" id="title" value=""></td>
                    </tr>
                    <tr>
                        <th><label for="content">Хаяг байршил:</label></th>
                        <td><textarea rows="5" cols="100" name="address" id="address"></textarea></td>
                    </tr>
                    <tr>
                        <th><label for="phone">Цалин:</label></th>
                        <td><input type="text" name="tsalin" id="tsalin" value=""><input type="checkbox" name="tsalin" id="tsalin" value="Тохиролцоно"> Тохиролцоно</td>

                    </tr>
                    <tr>
                        <th><label for="content">Агуулга:</label></th>
                        <td><textarea rows="5" cols="100" name="content" id="content"></textarea></td>
                    </tr>
                    <tr>
                        <th><label for="phone">Утас:</label></th>
                        <td><input type="text" name="phone" id="phone" value=""></td>
                    </tr>
                    <tr>
                        <th><label for="email">Имэйл:</label></th>
                        <td><input type="text" name="email" id="email" value=""></td>
                    </tr>


                    <tr>
                        <th>&nbsp;</th>
                        <td><input type="submit" value="Зар нэмэх »" onclick="return confx();"></td>
                    </tr>
                </tbody>
            </table>
        </form>
      </div>


    </article>


    <!-- End Category posts -->
  </section>
</section>
@endsection
