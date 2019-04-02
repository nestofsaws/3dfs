@extends('layouts.sitewide')
@section('content')
@component('includes.innovation.carousel')
    @slot('title')
     Technological Innovation
    @endslot  
@endcomponent	
<div class="container my-4 bg-white p-2">
	<div class="row">
		<div class="col-md-6">
			<p class="h4">Electrical power flow today is uncontrolled and unbalanced. 3DFS Technology is embedded intelligence into the power network delivering continuously balanced, controlled power flow.</p>
			<p class="text-secondary mt-4">Electricity literally moves lightning fast and has always been measured indirectly with averages and integrals. 3DFS has invented technology that directly measures electricity through an innovation in computing and an advancement in sensing, and corrects and balances the power flow through an innovation in power electronics all in Real-Time as the power flows.</p>
		</div>
		<div class="col-md-6">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Z6sfpJ5LBX0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<hr/>
<div class="container bg-light mb-4">
	<div class="row">
		<div class="col-md-6">
		<h3>SOFTWARE-DEFINED ELECTRICITY</h3>
		<p class="h5 text-secondary">Software-Defined Electricity corrects for harmonics and reactive power, while always balancing the phases as the power flows in Real-Time for digitally perfect power flow at all times no matter the upstream fluctuation or downstream consumption.</p>
		<p class="h5 text-secondary">The technological capability of digitally controlling power as it flows will have a transformative effect on the development of future grid technologies by digitally enhancing all of the AC Power needs, such as electricity generation, voltage transformation, AC/DC conversion distribution and consumption at a guaranteed 98%+ efficiency.</p>
		<p class="h5">Learn more about <a class="text-success" href="{{ route('allInOne') }}">Software-Defined Electricity</a> and the important metric of <a class="text-success" href="{{ route('pqr') }}">Power Quality Rating</a>.</p>
		</div>
		<div class="col-md-6">
			<a href="{{ route('allInOne') }}" style="text-decoration:none;" class="text-success">
			<div class="card pb-2 mt-2">
					<div class="card-block text-center">
						<i class="fas fa-compress-arrows-alt text-success mt-2" style="font-size:48px;"></i>
						<h4 class="card-title text-center mt-2">All-In-One System</h4>
						<div class="card-body pt-0">
							<p>with Software-Defined Electricity</p>    
						</div>

					</div>
				</div>
				</a>
			 <a href="{{ route('pqr') }}" style="text-decoration:none;" class="text-success">
			 <div class="card pt-2 mt-2">
					<div class="card-block text-center">
						<i class="fas fa-chart-line text-success mt-2" style="font-size:48px;"></i>
						<h4 class="card-title text-center mt-2">Power Quality Rating</h4>
						<div class="card-body pt-0">
							<p>TRUE EFFICIENCY of energy flow in power networks</p>    
						</div>

					</div>
				</div>
				</a>
			</div>
		</div>
	</div>
</div>
@endsection