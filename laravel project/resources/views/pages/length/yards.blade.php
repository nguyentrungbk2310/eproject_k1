@extends('layouts.index')
@section('NoiDung')
	<div class="container form-conversion">
			<h2 class="txtdeepshadow">Length Conversion</h2>	
			<div style="background-image: url({{asset('css/images/anh2.jpg')}});">
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
	<div class="banner" style="background-image: url({{ asset('css/images/length2.jpg') }}); height: 300px;">
		<div class="banner-box" style="height: 300px;"></div>
		<div class="page-title">
			<h1 style="top: 120px;">Length Conversion</h1>
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
				<h2>The yard (abbreviation: yd)</h2>
				<p>
					Yard is an English unit of length, hat comprises 3 feet or 36 inches. in 1959 standardized as exactly 0.9144 meters. A metal yardstick originally formed the physical standard from which all other units of length were officially derived in both English systems.
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