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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/coin.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    @include('layouts.part._tabs')
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
  </div>
  <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
    <ul>
        <li><a href="#">Informasi</a></li>
        <li><a href="#">Tupoksi UKK IPB</a></li>
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
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
    <img class="borderedbox inspace-5" src="../assets/images/satpam.jpg" alt="">
    <!-- ################################################################################################ -->
      <h1>MEKANISME PERMINTAAN BANTUAN PENGAMANAN</h1>
      <p>Unit Keamanan Kampus (UKK) IPB merupakan unit kerja yang bertanggung jawab menyelenggarakan keamanan dan ketertiban di lingkungan Institut Pertanian Bogor. Selain bertugas untuk Pengaturan, Penjagaan, Pengawalan dan Patroli (TURJAWALI), UKK – IPB juga bertugas dalam bidang pelayanan.</p>
      <p>Selain pelayanan stiker yang dipaparkan pada halaman pengembangan, UKK – IPB juga melayani permintaan bantuan pengamanan kegiatan warga kampus IPB. Baik kegiatan mahasiswa, unit kerja, penelitian atau event kampus lainnya. Pelayanan pengamanan kegiatan ini juga berfungsi menyebarluaskan informasi kegiatan, sehingga bila ada masyarakat yang menanyakan, anggota UKK – IPB atau petugas di lapangan dapat membantu.</p>
      <p>Prosedur permintaan bantuan pengamanan kegiatan tidaklah susah. Bagi kegiatan mahasiswa, mekanismenya adalah sebagai berikut :</p>
        <ul>
      <p>1. Panitia kegiatan mengirimkan surat permintaan bantuan pengamanan ke kantor Unit Keamanan Kampus IPB yang ditandatangani panitia dan diketahui Direktorat Kemahasiswaan.</p>
      <p>2. Melampirkan surat ijin penggunaan tempat dari Direktorat Fasilitas dan Properti IPB.</p>
        </ul>
      <p>Bagi kegiatan kampus lainnya, poin pertama surat permintaan bantuan pengamanan dapat menyesuaikan dengan penanggung jawab unit kerja yang bersangkutan. Misalnya untuk kegiatan penelitian, ditandatangani oleh mahasiswa peneliti, dosen pembimbing dan pihak fakultas. Usahakan surat telah diterima maksimal 1 minggu sebelum event kegiatan.</p>
      <p>Untuk pemberitahuan atau informasi awal kegiatan, Anda bisa meninggalkan pesan di halaman <a href="{{route('kontak.view')}}">Kontak Penting.</a></p>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
     
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/02.png');">
  
    @include('layouts.part._footer')
</div>
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