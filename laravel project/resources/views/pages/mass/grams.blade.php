@extends('layouts.index')
@section('NoiDung')
	<div class="banner" style="background-image: url({{ asset('css/images/mass2.jpg') }}); height: 300px;">
		<div class="banner-box" style="height: 300px;"></div>
		<div class="page-title">
			<h1 style="top: 120px;">Mass Conversion</h1>
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
				<h2>Grams</h2>
				<p>
					is a metric system unit of mass.
				</p>
				<p>
					Originally defined as "the absolute weight of a volume of pure water equal to the cube of the hundredth part of a metre [1 cm3], and at the temperature of melting ice"[2] (later at 4 °C, the temperature of maximum density of water). However, in a reversal of reference and defined units, a gram is now defined as one one-thousandth of the SI base unit, the kilogram, or 1×10−3 kg, which itself is now defined, not in terms of grams, but as being equal to the mass of a physical prototype of a specific alloy kept locked up and preserved by the International Bureau of Weights and Measures.
				</p>
				<p>1 gram (g) is equal to 0.03527396195 ounces (oz).</p>
			</div>
		</div>
	</div>
@endsection