@extends('layouts/index')
@section('home')
	class= "active"
@endsection
@section('NoiDung')

	<div class="banner" style="background-image: url({{ asset('css/images/woodhouse.jpg') }});">
		<div class="banner-box"></div>
		<div class="page-title">
			<h1>Metric Conversion</h1>
			<a href="#calculators" class="banner-btn">Convert</a>
		</div>
	</div>
		{{-- end banner	 --}}
	<hr/>	
	<div>
		<div class="container">
			<h1 class="text-center">Metric Conversion Charts</h1>
			<div class="row">
				<div class="col-md-4">
					<div class="view view-first">
						<img style="width: 300px; height: 250px;" src="{{ asset('css/images/area.jpg') }}" />
						<div class="mask"></div>
						<div class="content">
							<a href="{{ route('area') }}"><h2>Area</h2></a>
							<a href="{{ route('acres') }}"><p>Acres</p></a>
							<a href="{{ route('squarefeet') }}"><p>Square Feet</p></a>
							<a href="{{ route('squaremeters') }}"><p>Square Meters</p></a>
							<a href="{{ route('squareinches') }}"><p>Square Inches</p></a>
							<a href="{{ route('area') }}" class="info">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="view view-first">
						<img style="width: 300px; height: 250px;" src="{{ asset('css/images/length.jpg') }}" />
						<div class="mask"></div>
						<div class="content">
							<a href="{{ route('length') }}"><h2>Length</h2></a>
							<a href="{{ route('feet') }}"><p>Feet</p></a>
							<a href="{{ route('yards') }}"><p>Yards</p></a>
							<a href="{{ route('inches') }}"><p>Inches</p></a>
							<a href="{{ route('length') }}" class="info">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="view view-first">
						<img style="width: 300px; height: 250px;" src="{{ asset('css/images/volume.jpg') }}" />
						<div class="mask"></div>
						<div class="content">
							<a href="{{ route('volume') }}"><h2>Volume</h2></a>
							<a href="{{ route('fluidounces') }}"><p>Fluid ounces</p></a>
							<a href="{{ route('gallons') }}"><p>Gallons</p></a>
							<a href="{{ route('liters') }}"><p>Liter</p></a>
							<a href="{{ route('cubicmeters') }}"><p>Cubic Meters</p></a>
							<a href="{{ route('volume') }}" class="info">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="view view-first">
						<img style="width: 300px; height: 250px;" src="{{ asset('css/images/mass.jpg') }}" />
						<div class="mask"></div>
						<div class="content">
							<a href="{{ route('mass') }}"><h2>Mass</h2></a>
							<a href="{{ route('ounces') }}"><p>Ounces grams</p></a>
							<a href="{{ route('pounds') }}"><p>Pounds</p></a>
							<a href="{{ route('shorttons') }}"><p>Short tons</p></a>
							<a href="{{ route('kilograms') }}"><p>Kilograms<p></a>
							<a href="{{ route('mass') }}" class="info">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="view view-first">
						<img style="width: 300px; height: 250px;" src="{{ asset('css/images/temperature.jpg') }}" />
						<div class="mask"></div>
						<div class="content">
							<a href="{{ route('temperature') }}"><h2>Temperature</h2></a>
							<a href="{{ route('celsius') }}"><p>Celsius</p></a>
							<a href="{{ route('fahrenheit') }}"><p>Fahrenheit</p></a>
							<a href="{{ route('kelvin') }}"><p>Kelvin</p></a>
							<a href="{{ route('temperature') }}" class="info">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="view view-first">
						<img style="width: 300px; height: 250px;" src="{{ asset('css/images/currency.jpg') }}" />
						<div class="mask"></div>
						<div class="content">
							<a href="{{ route('currency') }}"><h2>Currency</h2></a>
							<a href="{{ route('euro') }}"><p></p></a>
							<a href="{{ route('usdollar') }}"><p>United States Dollar</p></a>
							<a href="{{ route('japaneseyen') }}"><p>Japanese Yen</p></a>
							<a href="{{ route('britishpound') }}"><p>British Pound</p></a>
							<a href="{{ route('currency') }}" class="info">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr/>
	{{-- end conversion chart --}}
	<h1 class="text-center" id="calculators">Metric Conversion Calculators</h1>
	<hr/>
	<div id="form-conversion" class="fix-image">
		<div class="dark-mask"></div>
		<div style="padding: 30px;position: relative;z-index: 2">
			<h3 class="text-center">Use the search box to find your required metric converter</h3>
			<div style="width: 600px; margin: auto;">
				<form>
					<div class="row">	
						<div class="col-sm-6">
							<div class="form-group">
								<label for="conversion_type">Conversion Type</label>
								<select name="conversion_type" class="form-control" style="width: 50%;">
									<option value="area">Area</option>
									<option value="length">Length</option>
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
	<div class="container">
			<div class="text-center">
				<h3>WEBSITE NAME - WEBSITE SHARING THE KNOWLEDGE OF THE SYSTEM OF MEASUREMENT<h3>
			</div>
			<p>
				The metric system originated in France in 1799 following the French Revolution although decimal units had been used in many other countries and cultures previously. Although there have been many different measurements and the definitions of the units have been revised, the official system of measurements of most countries is the modern form of the metric system which is known as the "International System of Units".
			</p>
			<p>
				Since other systems of measurement are still used around the world, such as the United States and the United Kingdom, this site aims to help people convert units of measurement with Metric Converter and Metric Conversion Table and to better understand alternative measurements that they are unfamiliar with. The measurement units are categorized into types (such as Temperature Conversion, Weight Conversion and so on).You can find more about the system of measurement through the articles and frequently asked questions in the blog.
			</p>	
		</div>
		<hr/>
@endsection
