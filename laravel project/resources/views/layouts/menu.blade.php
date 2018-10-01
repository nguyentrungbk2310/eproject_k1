<div style="margin-top: 114px; width: 80%; margin-left: 10%;">
	<ul class="nav nav-pills nav-stacked">
		<li class="active">
			<a href="#menuarea" class="list-group-item" data-toggle="collapse" aria-expanded="false" class="nav-title" >Area</a>
		</li>
		<div class="collapse  " id="menuarea">
			<a href="{{ route('area') }}" class="list-group-item" data-parent="#menuarea">Introduction</a>
			<a href="{{ route('acres') }}" class="list-group-item" data-parent="#menuarea">Acres</a>
			<a href="{{route('hectares')}}" class="list-group-item" data-parent="#menuarea">Hectares</a>
			<a href="{{ route('squarefeet') }}" class="list-group-item" data-parent="#menuarea">Square feet</a>
			<a href="{{route('squareinches')}}" class="list-group-item" data-parent="#menuarea">Square inches</a>
			<a href="{{route('squaremeters')}}" class="list-group-item" data-parent="#menuarea">Square meters</a>
			<a href="{{route('squaremilimeters')}}" class="list-group-item" data-parent="#menuarea">Square milimeters</a>
		</div>
		<li class="active">
			<a href="#menulength" class="list-group-item" data-toggle="collapse" aria-expanded="false">Length</a>
		</li>
		<div class="collapse" id="menulength">
			<!-- <a href="length.php" class="list-group-item" data-parent="#menuarea">Introduction</a> -->
			<a href="{{ route('length') }}" class="list-group-item" data-parent="#menuarea">Introduction</a>
			<a href="{{route('feet')}}" class="list-group-item" data-parent="#menulength">Feet</a>
			<a href="{{ route('inches') }}" class="list-group-item" data-parent="#menulength">Inches</a>
			<a href="{{ route('kilometers') }}" class="list-group-item" data-parent="#menulength">Kilometers</a>
			<a href="{{ route('miles') }}" class="list-group-item" data-parent="#menulength">Miles</a>
			<a href="{{ route('yards') }}" class="list-group-item" data-parent="#menulength">Yards</a>
		</div>
		<li class="active">
			<a href="#menuvolume" class="list-group-item" data-toggle="collapse" aria-expanded="false">Volume</a>
		</li>
		<div class="collapse " id="menuvolume">
			<a href="{{ route('volume') }}" class="list-group-item" data-parent="#menuarea">Introduction</a>
			<a href="{{ route('cubicfeet') }}" class="list-group-item"  data-parent="#menuvolume">Cubic feet</a>
			<a href="{{ route('cubicmeters') }}" class="list-group-item"  data-parent="#menuvolume">Cubic meters</a>
			<a href="{{ route('cubicyards') }}" class="list-group-item"  data-parent="#menuvolume">Cubic yards</a>
			<a href="{{ route('fluidounces') }}" class="list-group-item"  data-parent="#menuvolume">Fluid ounces</a>
			<a href="{{ route('gallons') }}" class="list-group-item"  data-parent="#menuvolume">Gallons</a>
			<a href="{{ route('liters') }}" class="list-group-item"  data-parent="#menuvolume">Liters</a>
			<a href="{{ route('milliliters') }}" class="list-group-item"  data-parent="#menuvolume">Milliliters</a>
		</div>
		<li class="active">
			<a href="#menumass" class="list-group-item" data-toggle="collapse" aria-expanded="false">Mass</a>
		</li>
		<div class="collapse  " id="menumass">
			<a href="{{ route('mass') }}" class="list-group-item" data-parent="#menuarea">Introduction</a>
			<a href="{{ route('grams') }}" class="list-group-item" data-parent="#menuarea">Grams</a>
			<a href="{{ route('kilograms') }}" class="list-group-item" data-parent="#menuarea">Kilograms</a>
			<a href="{{ route('megagrams') }}" class="list-group-item" data-parent="#menuarea">Mega grams</a>
			<a href="{{ route('ounces') }}" class="list-group-item" data-parent="#menuarea">Ounces</a>
			<a href="{{ route('pounds') }}" class="list-group-item" data-parent="#menuarea">Pounds</a>
			<a href="{{ route('shorttons') }}" class="list-group-item" data-parent="#menuarea">Short tons</a>
		</div>
		<li class="active">
			<a href="#menutemperature" class="list-group-item" data-toggle="collapse" aria-expanded="false">Temperature</a>
		</li>
		<div class="collapse " id="menutemperature">
			<a href="{{ route('temperature') }}" class="list-group-item" data-parent="#menuarea">Introduction</a>
			<a href="{{ route('celsius') }}" class="list-group-item" data-parent="#menutemperature">Celsius</a>
			<a href="{{ route('fahrenheit') }}" class="list-group-item" data-parent="#menutemperature">Fahrenheit</a>
			<a href="{{ route('kelvin') }}" class="list-group-item" data-parent="#menutemperature">Kelvin</a>
		</div>
		<li class="active">
			<a href="#menucurrency" class="list-group-item" data-toggle="collapse" aria-expanded="false">Currency</a>
		</li>
		<div class="collapse " id="menucurrency">
			<a href="{{ route('currency') }}" class="list-group-item" data-parent="#menuarea">Introduction</a>
			<a href="{{ route('britishpound') }}" class="list-group-item" data-parent="#menucurrency">British pound</a>
			<a href="{{ route('euro') }}" class="list-group-item" data-parent="#menucurrency">Euro</a>
			<a href="{{ route('japaneseyen') }}" class="list-group-item" data-parent="#menucurrency">Japanese yen</a>
			<a href="{{ route('usdollar') }}" class="list-group-item" data-parent="#menucurrency">United state dollar</a>
		</div>
	</ul>
</div>