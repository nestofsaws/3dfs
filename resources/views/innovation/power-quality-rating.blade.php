@extends('layouts.sitewide')
@section('content')
@component('includes.innovation.carousel')
    @slot('title')
		Power Quality Rating
    @endslot  
@endcomponent
<div class="container-fluid my-4 bg-white py-2">
	<div class="row">
		<div class="col-8 col-md-10">
			<div class="bg-success" style="height:2px; width:50%;"></div>
			<h3>Power Quality Rating (PQR)</h3>
			<p>Traditional power quality metrics are calculated by considering harmonics and power factor, however there is a third, equally important power quality consideration, balance across phases. An imbalance across phases at the electrical panel level is known to induce neutral currents on the load side and cause eddy currents in the upstream transformer on the utility side which are both direct losses, so should always be considered in electricity flow efficiency calculations.</span></p>
			<p>Power Quality Rating is a metric created by 3DFS to show the TRUE EFFICIENCY of electrical energy flow in power networks; including harmonics, power factor AND balance across phases. Whether during generation, transmission, distribution, storage, conversion or consumption of electricity, this metric reveals how how much electrical energy waste is occurring in the moment.</span></p>
			<p>For example,</p>
			<ol>
			<li>An electrical network with a PQR of 28% utilizes 28% of the energy consumed as electricity and the remaining 72% as heat or vibration somewhere in the electrical network</li>
			<li>The same electrical network protected with 3DFS Technology has a PQR of 94% and experiences only 6% in heat losses in the electrical network, meaning that the electrical energy remained electricity and fully transferred the energy into work in the loads.</li>
			<li> A large generator with a PQR of 31% generates 31% of the energy as electricity and 69% as heat or vibration in the generator or connected electrical network.</li>
			<li>The same generator with Software-Defined Electricity in the connected panel operates with a PQR or 97%, increasing the output of the generator by reducing the heat waste to 3% which immediately saves up to 25% of the fuel needed to operate.</li>
			</ol>
			<hr />
			<p>The PQR represents how efficiently the energy in an electrical network is consumed as the work intended and how much contributes to waste and instability.</p>
			<img class="img-fluid" src="{{ asset('png/pqr-equation.png') }}" alt="PQR Equation">
			</br>
			</br>
			<p><small>This image shows the moment that Electrical Correction begins improving the Power Quality Rating from 22% to 92%:</small></p>
			<img class="img-fluid" src="{{ asset('png/pqr-off-on.png') }}" alt="PQR Diagram">
		</div>
		@include('includes.innovation.sidebarnav')
	</div>
</div>

@endsection