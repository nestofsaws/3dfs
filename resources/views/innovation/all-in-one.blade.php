@extends('layouts.sitewide')
@section('content')
@component('includes.innovation.carousel')
    @slot('title')
     All-In-One System
    @endslot  
@endcomponent
<div class="container-fluid my-4 bg-white py-2">
	<div class="row">
		<div class="col-8 col-md-10">
			<div class="bg-success" style="height:2px; width:50%;"></div>
			<h3>VectorQ Series – All in One Power Control System</h3>
			<p>There are three universal truths to modern power networks</p>
			<ol>
				<li>Power flow occurs in </span><b><i>Real-Time</i></b>. </span></li>
				<li>Electronic </span>machines and loads unintelligently request power from a network </span><b><i>without any Real-Time feedback</i></b> on receiving it.</span></li>
				<li>Generation sources blindly dump power onto the network </span><b><i>without any Real-Time</i></b> feedback as to if the network requests it.</span></li>
			</ol>
			<p>3DFS has invented a technology that controls and balances power flow in Real-Time through an innovations in computing and power electronics, and advancements in sensing and controls.</p>
			<p>A single cycle of AC Power in the United States lasts only 1/60 of a second with the effects of reactive power and harmonics unceasingly affecting the power during the entire cycle, on every cycle, differently. Yet all of the modern power electronics are not technologically equipped to sense at these speeds, much less correct the problems which exist at this level.</p>
			<p>Non optimized power flow results in a staggering amount of electrical energy waste commonly experienced as heat or vibration in power networks and grids. The divide between supplying a Real-Time commodity over a “not even close to Real-Time” system is unquestionably the single largest contributor to global CO2 and other GHG pollution, environmental damage both local and global and wasted resources and capital in human history.</p>
			<p>3DFS’ computing innovation opens up an entirely new area of data science through intelligent sensing of </span><b><i>Real-Time Electricity Analytics</i></b>, or the precise digital awareness of all electrical parameters in Real-Time. Direct measurement of electricity reveals how staggering electrical energy losses are in High Definition and has also facilitated the solution to prevent these losses.</p>
			<p>The VectorQ Series power controller is an advanced computing/power electronics system that uses Real-Time Electricity Analytics in sensing the supply side power and the loadside demand simultaneously and makes the required corrective adjustments to power flow for optimum efficiency and stability at all times by preventing electrical losses in Real-Time as the power flows.</p>
			<p>The technological capability of controlling power flow in Real-Time is a technological leapfrog over conventional methods which will inevitably lead to more efficient, stable, secure and safe grids and power networks.</p>
			<p>Most importantly, Software-Defined Electricity creates a clear technologically sound path to global energy sustainability.</p>
		</div>
		@include('includes.innovation.sidebarnav')
	</div>
</div>

@endsection