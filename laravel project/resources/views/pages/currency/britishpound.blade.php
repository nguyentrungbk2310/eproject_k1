@extends('layouts.index')
@section('NoiDung')
	<div class="banner" style="background-image: url({{ asset('css/images/currency2.jpg') }}); height: 300px;">
		<div class="banner-box" style="height: 300px;"></div>
		<div class="page-title">
			<h1 style="top: 120px;">Currency Conversion</h1>
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
				<h2>British pound</h2>
				<p>
					The Pound Sterling is the official currency of the United Kingdom, 9 British territories, Jersey, Guernsey, and the Isle of Man. The pound is made up of 100 pennies and coins are issued in denominations of 1p, 2p, 5p, 10p, 20p, 50p, £1, £2 and £5. Banknotes are available in £5, £10, £20 and £50. Established in the 5th century, the pound sterling is the oldest currency in the world that is still used today.
				</p>
			</div>
		</div>
	</div>
@endsection