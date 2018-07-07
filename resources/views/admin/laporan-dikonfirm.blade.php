@extends('admin')
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Laporan di Konfirmasi</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Laporan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @foreach($laporan as $laporan)
                    <tbody>
                      <tr>
                        <td>{{$laporan->name}}</td>
                        <td>{{$laporan->email}}</td>
                        <td>{{$laporan->laporan}}</td>
                        <td><form class="" action="{{ route('post.destroy', $laporan->id) }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-danger">Hapus Laporan</button></form>
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