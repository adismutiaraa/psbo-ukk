<!DOCTYPE html>
<!--
Template Name: Geodarn
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
@include('layouts.part._head')
<body id="top">

<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/coin.jpg');"> 
  <!-- ################################################################################################ -->
 @include('layouts.part._tabs')
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    </div>
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
    <ul>
        <li><a href="#">Informasi</a></li>
        <li><a href="#">Laporan Saya </a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row3">
  <main class="hoc container clear"> 
<!-- <div class="content mt-3"> -->
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Laporan Saya</strong>
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                          <thead>
                          <tr>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Laporan</th>
                          <th>Status</th>
                          </tr>
                          </thead>
                          @foreach($laporan as $laporan)
                          <tbody>
                            <tr>
                              <td>{{$laporan->name}}</td>
                              <td>{{$laporan->email}}</td>
                              <td>{{$laporan->laporan}}</td>
                              <td>
                              <?php
                                if( $laporan->status==1 )
                                  print "Laporan Sudah Dikonfirmasi";
                                else
                                  print "Laporan Terkirim";
                              ?>
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
  </main>
</div><!-- .content -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@include('layouts.part._footer')
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
@include('layouts.part._script')
</body>
</html>