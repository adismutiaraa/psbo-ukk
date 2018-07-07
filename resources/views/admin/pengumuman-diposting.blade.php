@extends('admin')
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"> Pengumuman di Posting</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Judul</th>
                        <th>Pengumuman</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @foreach($pengumumanPost as $pengumumanPost)
                    <tbody>
                      <tr>
                        <td>{{$pengumumanPost->judul}}</td>
                        <td>{{$pengumumanPost->pengumuman}}</td>
                        <td><form class="" action="{{ route('hapus.pengumuman', $pengumumanPost->id) }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-danger">Hapus</button></form>
                        </td>
                        </tr>
                        
                        </td> 
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
                


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

@endsection