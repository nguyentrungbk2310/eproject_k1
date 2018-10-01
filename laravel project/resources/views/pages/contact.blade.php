@extends('layouts/index')
@section('contact')
	class= "active"
@endsection
@section('NoiDung')
	<div class="banner" style="background-image: url({{ asset('css/images/woodhouse.jpg') }});">
		<div class="banner-box"></div>
		<div class="page-title">
			<h1>Contact</h1>
		</div>
	</div>
	<hr/>
	{{-- end banner	 --}}
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<h2 class="text1">Contact us</h2>
				<div class="box-simple">
					<div class="box-simple-mask"></div>
					<div class="box-content">
						<div>	
							<div class="box-icon">
								<span class="glyphicon glyphicon-map-marker"></span>
							</div>
							<div class="text-center">
								<h4>ADDRESS</h4>
								Tầng 4, số 285 Doi Can, Ba Dinh, Ha Noi
							</div>
						</div>	
					</div>
				</div>	
				<div class="box-simple">
					<div class="box-simple-mask"></div>
					<div class="box-content">
						<div>
							<div class="box-icon">
								<span class="glyphicon glyphicon-earphone"></span>			
							</div>
							<div class="text-center">
								<h4>CALL</h4>
								Please contact me<br/>
								+84123456789
							</div>
						</div>
					</div>
				</div>
				<div class="box-simple">
					<div class="box-simple-mask"></div>
					<div class="box-content">
						<div>	
							<div class="box-icon">
								<span class="glyphicon glyphicon-envelope"></span>	
							</div>
							<div class="text-center">
								<h4>EMAIL</h4>
								Send information  us for email<br/>
								aprotrainaptech@gmail.com
							</div>
						</div>	
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div style="margin-top: 40px;">
					<form method="post" action="">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label for="firtname">Firs Name<span style="color: red;">*</span></label>
								<input type="text" name="firtname" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label for="lastname">Last Name<span style="color: red;">*</span></label>
								<input type="text" name="lastname" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email Address<span style="color: red;">*</span></label>
							<input type="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="message">Message<span style="color: red;">*</span></label>
							<textarea type="text" name="message" class="form-control"></textarea>
						</div>
						<div>
							<input type="submit" value="Submit" class="btn1">
						</div>
					</form>	
				</div>	
			</div>
			<div class="col-sm-3">
				<h3 class="text2" style="margin-top: 40px;">Tell us what you think!</h3>
				<p>
					We are constantly working to raise the bar on our services. If you have any questions or concerns about your experience, please let us know. Our support concierges are available 24/7.
				</p>
			</div>
		</div>
	</div>
@endsection