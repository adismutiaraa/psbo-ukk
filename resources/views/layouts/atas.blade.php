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
 @include('layouts.part._tabs')<div class="wrapper row3">
  <main class="hoc container clear"> 
     @yield('content')
    <div class="clear"></div>
  </main>
</div>
@include('layouts.part._footer')
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
@include('layouts.part._script')
</body>
</html>