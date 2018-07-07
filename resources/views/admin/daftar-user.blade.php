@extends('admin')
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Daftar User</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>NRP</th>
                        <th>Departemen</th>
                        <th>Fakultas</th>
                        <th>Nomor Telepon</th>
                        <th>Alamat</th>
                      </tr>
                    </thead>
                    @foreach($daftar as $daftar)
                    <tbody>
                      <tr>
                        <td>{{$daftar->name}}</td>
                        <td>{{$daftar->email}}</td>
                        <td>{{$daftar->nrp}}</td>
                        <td>{{$daftar->departemen}}</td>
                        <td>{{$daftar->fakultas}}</td>
                        <td>{{$daftar->telepon}}</td>
                        <td>{{$daftar->alamat}}</td>
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