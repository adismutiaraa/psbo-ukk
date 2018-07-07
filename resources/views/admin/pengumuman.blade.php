@extends('admin')
@section('content')
<form action="{{route('buatPengumuman.view')}}" method="post" enctype="multipart/form-data" novalidate>
          <div class="one_third first">
            {{ csrf_field()}}
            <label for="name">Judul <span>*</span></label>
            <input type="text" name="judul" id="judul" value="" size="22" required>
          </div>
          <!-- <div class="one_third">
            <label for="email">Email <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div> -->
          <div class="block clear">
            <label for="comment">Pengumuman</label>
            <textarea name="pengumuman" id="pengumuman" cols="25" rows="10"></textarea>
          </div>
          <div>
            <button id="send" type="submit" class="btn btn-success">Buat Pengumuman</button>

            <!-- &nbsp; -->
           
          </div>
        </form>
                @endsection