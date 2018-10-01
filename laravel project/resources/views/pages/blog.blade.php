@extends('layouts/index')
@section('blog')
	class= "active"
@endsection
@section('NoiDung')
	<div class="banner" style="background-image: url({{ asset('css/images/woodhouse1.jpg') }});">
		<div class="banner-box"></div>
		<div class="page-title">
			<h1>Blog</h1>
		</div>
	</div>
	<hr/>
	<div style="width: 90%; margin: auto;">
		<div class="row">
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-4">
						<img src="" style="border: 1px solid red; width: 240px; height: 200px; margin-top: 10px;">
					</div>
					<div style="border: 1px solid red;" class="col-sm-8"> 
						<div>
							<h3>Title</h3>
							<p style="font-size: 17px;">
							    Sample blog post text. Cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
							</p>
							<span><smal>date time update</smal></span>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-sm-4">
						<img src="" style="border: 1px solid red; width: 240px; height: 200px; margin-top: 10px;">
					</div>
					<div style="border: 1px solid red;" class="col-sm-8"> 
						<div>
							<h3>Title</h3>
							<p style="font-size: 17px;">
							    Sample blog post text. Cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
							</p>
							<span><smal>date time update</smal></span>
						</div>
					</div>
				</div>	
				
			</div>
			<div class="col-sm-4">
				<h2 class="text-center">Most view</h2>
				<div style="font-size: 20px;">
					Title
				</div>
				<div style="font-size: 20px;">
					Title
				</div>
				<div style="font-size: 20px;">
					Title
				</div>
				<div style="font-size: 20px;">
					Title
				</div>
			</div>
		</div>
	</div>
@endsection