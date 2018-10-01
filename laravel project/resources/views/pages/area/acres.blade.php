@extends('layouts.index')
@section('NoiDung')
	<div class="container">
		<div class="container form-conversion">
			<h2 class="txtdeepshadow">Length Conversion</h2>	
			<div style="background-image: url({{asset('css/images/area2.jpg')}});">
				<h3 class="txt1 text-center">Use the search box to find your required metric converter</h3>
				<div class="container">
					<form>
						<div class="form-group">
							<label for="conversion_category">Conversion Category</label><br/>
							<select name="conversion" class="form-control" style="width: 30%;">
								<option value="FeetMeter" selected>
									Feet to Meters
								</option>
								<option value="YardsMeter">
									Yards to Meters
								</option>
								<option value="AcresHectares">
									Acres Hectares
								</option>
								<option value="MilesKilometers">
									Miles to Kilometers
								</option>
							</select>
						</div>
						<div class="form-group">
							<label for="conversion">Conversion</label>
							<input type="number" name="conversion" class="form-control" placeholder="Enter the metric">
						</div>
						<div class="form-group">
							<label for="result">Result</label>
							<input type="number" name="result" class="form-control" placeholder="Result" disabled>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				@include('layouts.menu')
			</div>	
			<div class="col-sm-9">
				<div class="posts">
					@extends('layouts.index')
@section('NoiDung')
	<div class="banner" style="background-image: url(https://i2.wp.com/www.creativevisualart.com/wp-content/uploads/2013/05/pergament-map.jpg?fit=800%2C566); height: 300px;">
		<div class="banner-box" style="height: 300px;"></div>
		<div class="page-title">
			<h1 style="top: 120px;">Area Conversion</h1>
		</div>
	</div>
	{{-- end banner	 --}}
	<div class="row">
		<div class="col-sm-3">
			@include('layouts/menu')
		</div>
		<div class="col-sm-9">
			<hr/>
			<h2 class="text-center" id="calculators">Metric Conversion Calculators</h2>
			<hr/>
			<div id="form-conversion" class="fix-image">
				<div class="dark-mask"></div>
				<div style="padding: 30px;position: relative;z-index: 2">
					<h3 class="text-center">Use the search box to find your required metric converter</h3>
					<div style="width: 600px; margin: auto;">
						<form">
							<div class="row">	
								<div class="col-sm-6">
									<div class="form-group">
										<label for="conversion_type">Conversion Type</label>
										<select name="conversion_type" class="form-control" style="width: 50%;">
											<option value="area">Area</option>
											<option value="length" selected>Length</option>
											<option value="volume">Volume</option>
											<option value="mass">Mass</option>
											<option value="temperature">Temperature</option>
											<option value="currency">Currency</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="conversion_category">Conversion Category</label><br/>
										<select name="conversion_category" class="form-control" style="width: 60%;">
											<option value="FeetMeter" selected>
												Feet to Meters
											</option>
											<option value="YardsMeter">
												Yards to Meters
											</option>
											<option value="AcresHectares">
												Acres Hectares
											</option>
											<option value="MilesKilometers">
												Miles to Kilometers
											</option>
										</select>
									</div>
								</div>
							</div>		
							<div class="form-group">
								<label for="conversion">Conversion</label>
								<input type="number" name="conversion" class="form-control" placeholder="Enter the metric">
							</div>
							<div class="form-group">
								<label for="result">Result</label>
								<div class="form-control">Result</div>
							</div>
						</form>
					</div>	
				</div>
			</div>
			<hr/>
			{{-- end calculators for metric conversions --}} 
			<div>
				<h2>Acres</h2>
				<p>
					Acres is a unit of land area used in the imperial and US customary systems. It is traditionally defined as the area of one chain by one furlong (66 by 660 feet), which is exactly equal to 10 square chains, 1⁄640 of a square mile, or 43,560 square feet, and approximately 4,047 m2, or about 40% of a hectare.
				</p>
			</div>	
		</div>
	</div>

@endsection

				</div>	
			</div>
		</div>
	</div>
@endsection