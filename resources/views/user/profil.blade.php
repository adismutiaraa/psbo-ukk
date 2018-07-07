@include('layouts.part._head')


@include('layouts.part._tabs')

<div class="container">
        <div class="row">
           
          <!-- left column -->
          <div class="col-md-3">
            <div class="text-center">
              <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
              <h6>Ubah foto profil</h6>
              
              <input type="file" class="form-control">
            </div>
          </div>
          
          <!-- edit form column -->
          <div class="col-md-9 personal-info">
            <div class="alert alert-info alert-dismissable">
              <a class="panel-close close" data-dismiss="alert">×</a> 
              <i class="fa fa-coffee"></i>
              Edit profile untuk mencoba fitur match me.
            </div>

            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong> {{session()->get('success')}} </strong>
              </div>
            @endif

            <h3>Personal info</h3>
            @foreach($result as $result)
            <form class="form-horizontal" method="post" action="#" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }} 
              <div class="form-group">
                <label class="col-lg-3 control-label">Nama:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name="name" value="{{$user->name}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">NRP:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name="nrp" value="{{$user->nrp}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Nomor HP:</label>
                <div class="col-md-8">
                    <input class="form-control" type="text" name="nomor_hp" value="{{$user->nomor_hp}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Email:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="email" name="email" value="{{$user->email}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Departemen:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name="departmen" value="{{$user->departmen}}">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Fakultas:</label>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="fakultas" value="{{$user->fakultas}}">
                </div>
              </div>
             <!--    -->
              <div class="form-group">
                <label class="col-lg-3 control-label">Alamat:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name="alamat" value="{{$user->alamat}}">
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                  <button type="submit"  class="btn btn-success"> Simpan </button>
                  <span></span>
                  <input type="reset" class="btn btn-default" value="Cancel">
                </div>
              </div>
            </form>
            @endforeach
          </div>
      </div>
    </div>
    <hr>
</div>