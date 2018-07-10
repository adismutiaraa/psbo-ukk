@extends('layouts.atas')


@section('content')
<!-- <!-- <!-- <body id="top">
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/coin.jpg');"> 
	<div id="pageintro" class="hoc clear"> 
	    <!-- ################################################################################################ -->
	  <!--   <div class="flexslider basicslider">
	      <ul class="slides">
	        <li>
	          <article>
	            <p>Ullamcorper</p>
	            <h3 class="heading">Maecenas nulla tellus</h3>
	            <p>Vitae lobortis id ut mi in molestie in</p>
	            <footer><a class="btn" href="#">Venenatis curabitur</a></footer>
	          </article>
	        </li>
	        <li>
	          <article>
	            <p>Scelerisque</p>
	            <h3 class="heading">Dolor rhoncus nullam</h3>
	            <p>Augue non id quam sit amet urna lobortis</p>
	            <footer><a class="btn inverse" href="#">Interdum lectus</a></footer>
	          </article>
	        </li>
	        <li>
	          <article>
	            <p>Vestibulum</p>
	            <h3 class="heading">Justo erat venenatis</h3>
	            <p>Tempor sit amet ac nibh nullam mattis</p>
	            <footer><a class="btn" href="#">Bibendum magna</a></footer>
	          </article>
	        </li>
	      </ul>
	    </div>
	    <!-- ################################################################################################ -->
	  <!-- </div> -->
  <!-- ################################################################################################ -->
<!-- </div>  --> 

@foreach($pengumumens as $pengumumens)
<div id="fh5co-blog-section" class="fh5co-light-grey-section">
		<div class="container">
			<!-- <div class="row"> -->
				<div class="col-md-6 col-sm-6 animate-box">
					<a href="#" class="item-grid">
						<div class="image" style="background-image: url(assets/images/demo/rektorat.jpg)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h1 class="title">{{$pengumumens->judul}}</h1>
								
								<p>{{$pengumumens->pengumuman}}</p>
							</div>
						</div>
					</a>
				</div>
		</div>
</div>
<!-- </body> -->
	<!-- <h1>{{$pengumumens->judul}}</h1>
	<p>{{$pengumumens->pengumuman}}</p> -->
@endforeach

@endsection

