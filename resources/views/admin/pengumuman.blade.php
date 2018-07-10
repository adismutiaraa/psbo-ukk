@extends('admin')
@section('content')
<form action="{{route('buatPengumuman.view')}}" method="post" enctype="multipart/form-data" novalidate>
          <!-- <div class="one_third first"> -->
            {{ csrf_field()}}
            <!-- <label for="name">Judul</label> -->
            <!-- <input type="text" name="judul" id="judul" value="" size="50" required> -->
          <!-- </div> -->
          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Judul') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}" name="judul" value="{{ old('judul') }}" required autofocus>
                            </div>
            </div>

          <!-- <div class="one_third">
            <label for="email">Email <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div> --><!-- 
          <div class="block clear">
            <label for="comment">Pengumuman</label>
            <textarea name="pengumuman" id="pengumuman" cols="50" rows="10"></textarea>
          </div>
          
        </form> -->
        <div class="form-group row">
                            <label for="comment" class="col-md-4 col-form-label text-md-left">{{ __('Pengumuman') }}</label>

                            <div class="col-md-6">
                                <textarea id="name" type="text" class="form-control{{ $errors->has('pengumuman') ? ' is-invalid' : '' }}" name="pengumuman" value="{{ old('pengumuman') }}" required autofocus cols="50" rows="10"></textarea>
                            </div>
        </div>
        <div class="col-md-10 col-form-label text-md-right">
            <button id="send" type="submit" class="btn btn-success">Buat Pengumuman</button>
        </div>
@endsection