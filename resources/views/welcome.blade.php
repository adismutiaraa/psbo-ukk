@extends('layouts.atas')


@section('content')

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
								<!-- <h3 class="title">We Create Mobile App</h3> -->
								<!-- <h5 class="date"><span>June 23, 2016</span> | <span>4 Comments</span></h5> -->
								<p>{{$pengumumens->pengumuman}}</p>
							</div>
						</div>
					</a>
				</div>
	<!-- <h1>{{$pengumumens->judul}}</h1>
	<p>{{$pengumumens->pengumuman}}</p> -->
@endforeach

@endsection

