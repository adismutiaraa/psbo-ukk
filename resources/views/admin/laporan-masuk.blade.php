@extends('admin')
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"> Laporan Masuk</strong>
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
                        <td><form action="{{route('admin.konfirmasi', $laporan->id)}}" method="post" novalidate>
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <input type="hidden" id="status" name="status" value="1">
                        <button type="submit" class="btn btn-success">Konfirmasi Laporan</button></form>
                        	<!-- <button type="submit" class="btn btn-danger">Hapus Laporan</button></form> -->
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