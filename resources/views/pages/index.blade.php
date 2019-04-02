@extends('layouts.sitewide')
@section('content')
	<section class="jumbotron jumbofade rounded-0 pt-2">
	<div class="container">
		<div class="col-lg-12 d-flex flex-wrap">
			<div class="col-lg-6 d-flex flex-wrap">
				<div class="col-12"> 
					<h1 class="text-white display-3 font-3dfs"><span class="red-3dfs bg-dark">3</span><span class="white-3dfs">DFS</span><span class="gray-3dfs">&nbsp;</span></h1>
					<h2><strong>PROTECTING POWER NETWORKS</strong></h2>
					<h3 class="text-light">WITH CLEAN ELECTRICITY THAT:</h3>
					<div class="row">
						<div class="col-12">
							<div class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<h3 class="text-success"><strong>Reduces energy consumption</strong></h3>    
									</div>
									<div class="carousel-item">
										<h3 class="text-success"><strong>Improves power network stability</strong></h3>    
									</div>
									<div class="carousel-item">
										<h3 class="text-success"><strong>Enhances asset performance</strong></h3>    
									</div>
									<div class="carousel-item">
										<h3 class="text-success"><strong>Eliminates utility penalties</strong></h3>    
									</div>
								</div>
							</div>
							<a href="#" class="btn red-3dfs-button mr-3 my-2"><strong>Learn More</strong></a>
							<a href="#" class="btn btn-light my-3">Contact Us</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 d-block d-lg-none">
				<img class="img-fluid" src="{{ asset ('png/q2.png') }}"/>
				</div> 
				<div class="col-12">
					<h3 class="text-center mt-4"><strong>Fast, Easy Installation: Done.</strong></h3>
					<div class="card bg-light">
						<div class="card-body">
							<h4>Non-Invasive, Maintenance Free Operation</h4>
							<p>The <a href="#" class="text-success"><strong>VectorQ Series power controller</strong></a> is quickly and non-invasively installed into power networks. It can be done in <nobr><strong>20 minutes</strong></nobr> without disrupting power and does not require any maintenance.</p>
						</div>
					</div>
				</div>	
			</div>		 
			<div class="col-lg-6 d-none d-lg-block">
				<img class="img-fluid" src="{{ asset ('png/q2.png') }}"/>
			</div> 
			<div class="col-12 ml-3 pr-5">			
				<div class="card bg-light mt-4">
					<div class="card-body">
						<h4>Instantly Clean Electricity. Secure Power Networks</h4>
						<p>The <a href="#" class="text-success"><strong>VectorQ Series</strong></a> synchronizes the electricity for all of the loads in the panel for maximum energy efficiency, asset performance and protection. It also establishes a secure, autonomous power network and provides data and analytics on every load.</p>
					</div>	
				</div>	
				<div class="d-flex justify-content-center">
					<a href="{{ route('applications') }}" class="btn red-3dfs-button mr-3 mt-4"><strong>More Applications</strong></a>
				</div>
			</div>
		</div> 
	</div> 
	</section>
	
	<div class="py-4 bg-light">
		<div class="container">
			<div class="px-3 py-3 pb-md-4 mx-auto text-center">
				<h3 class="display-4">What Are The Benefits Of Clean Electricity?</h3>
				<p class="lead">With a <a href="#" class="text-success"><strong>VectorQ Series Power Controller</strong></a> installed, every load in that panel will:</p>
		    </div>
	    </div>
		
		
	<div class="container">
		<div class="row">
			<div class="col-md-3 d-flex align-items-stretch my-2">
				<div class="card">
					<div class="card-block text-center">
						<i class="fas fa-leaf text-success mt-2" style="font-size:48px;"></i>
						<h4 class="card-title text-center mt-2">Save Energy</h4>
						<div class="card-body pt-0">
							<p>10-15% kWh reduction for fans, electronics, lighting loads, power supplies, etc.	20-25% kWh reduction for compressors, pumps, and other similar induction motor based loads</p>    
						</div>

					</div>
				</div>
			</div>       
			<div class="col-md-3 d-flex align-items-stretch my-2">
				<div class="card">
					<div class="card-block text-center">
						<i class="fas fa-thermometer-quarter text-success mt-2" style="font-size:48px;"></i>
						<h4 class="card-title text-center mt-2">Cooler Temperatures</h4>
						<div class="card-body pt-0">
							<p>Power supplies, wires, motors, pumps, etc. will experience a ~20 degree temperature drop as a result of preventing energy waste</p> 
						</div>
					</div>
				</div>
			</div>       
			<div class="col-md-3 d-flex align-items-stretch my-2">
				<div class="card">
					<div class="card-block text-center">
						<i class="fas fa-charging-station text-success mt-2" style="font-size:48px;"></i>
						<h4 class="card-title text-center mt-2">Fail Less Frequently</h4>
						<div class="card-body pt-0">
							<p>Loads operate stress free and never experience the power fluctuations and surges that exist in uncontrolled power networks.</p>    
						</div>
					</div>
				</div>
			</div>        
			<div class="col-md-3 d-flex align-items-stretch my-2">
				<div class="card">
					<div class="card-block text-center">
						<i class="fas fa-sync text-success mt-2" style="font-size:48px;"></i>
						<h4 class="card-title text-center mt-2">Function Consistently</h4>
						<div class="card-body d-flex flex-grow-1 pt-0">
							<p>-Motors operate at tag values with optimum efficiency. -Data transfer with minimal errors or re-transmission. -In series generators interoperate seamlessly.</p>     
						</div>

					</div>
				</div>
			</div>
	  </div>
  </div>
<div class="container">
			<div class="row mt-4">
			  <div class="col-xs-12 d-flex align-items-stretch mx-auto">
				<div class="card mb-4 box-shadow">
					<span class="d-flex align-items-stretch mx-auto"><nobr><i class="fas fa-dollar-sign text-success text-center mt-2" style="font-size:48px;"></i>&nbsp;				
					<i class="fas fa-pound-sign text-success text-center mt-2" style="font-size:48px;"></i>&nbsp;				
					<i class="fas fa-euro-sign text-success text-center mt-2" style="font-size:48px;"></i>&nbsp;				
					<i class="fas fa-yen-sign text-success text-center mt-2" style="font-size:48px;"></i></nobr></span>			
					<h3 class="text-center mt-2">Financial Benefits</h3>
					<div class="card-body text-center pt-0">
						<p>Learn the Financial Benefits Of Protecting Power Networks With Software-Defined Electricity</p>    
						<p><a href="#" class="btn btn-success mr-3 mt-4"><strong>Download Whitepaper</strong></a></p>
					</div>
				</div>
			  </div>
			 </div> 
	</div>
	</div>

<div class="container-fluid bg-white pb-4">
	<div class="px-3 py-4 pb-md-4 mx-auto text-center">
		<h3>Latest From our Blog, News and Reports</h3>
	</div>
<div class="card-columns">
  <div class="card bg-light">
    <div class="card-body text-center">
    	<img src="https://3dfs.com/wp-content/uploads/2019/02/elecrta2-800x447.jpg" class="img-fluid" stlye="max-width:300px;"/>
      <h4 class="card-title">Real-Time Control of Electricity as it Flows Prevents Electrical Fire Conditions</h4>
      <i class='far fa-user text-success'></i> by <a href="#" class="card-link text-success"><strong>Chris</strong></a> | <i class='fas fa-tag text-success'></i> in <a href="#" class="card-link text-success"><strong>Articles</strong></a>, <a href="#" class="card-link text-success ml-0"><strong>Blog</strong></a> 
      <p class="card-text">The Reality of Fire Risk in Transmission and Distribution Networks The flow of power in th...</p>
    </div>
  </div>
  
  <div class="card bg-light">
    <div class="card-body text-center">
    	<img src="https://placehold.it/300x170" class="img-fluid" stlye="max-width:300px;"/>
      <h4 class="card-title">Article Title Article Title Article Title Article Title Article Title Article Title</h4>
      <i class='far fa-user text-success'></i> by <a href="#" class="card-link text-success"><strong>Post Author</strong></a> | <i class='fas fa-tag text-success'></i> in <a href="#" class="card-link text-success"><strong>tag1</strong></a>, <a href="#" class="card-link text-success ml-0"><strong>tag2</strong></a> 
      <p class="card-text">Post body first 90 characters. Post body first 90 characters. Post body first 90 characters...</p>
    </div>
  </div>
    
  <div class="card bg-light">
    <div class="card-body text-center">
    	<img src="https://placehold.it/300x170" class="img-fluid" stlye="max-width:300px;"/>
      <h4 class="card-title">Article Title Article Title Article Title</h4>
      <i class='far fa-user text-success'></i> by <a href="#" class="card-link text-success"><strong>Post Author</strong></a> | <i class='fas fa-tag text-success'></i> in <a href="#" class="card-link text-success"><strong>tag1</strong></a>, <a href="#" class="card-link text-success ml-0"><strong>tag2</strong></a> 
      <p class="card-text">Post body first 90 characters. Post body first 90 characters. Post body first 90 characters...</p>
    </div>
  </div>
</div>
<div class="d-flex justify-content-center">
	<a href="{{ route('news.index') }}" class="btn red-3dfs-button mr-3 mt-4"><strong>More News</strong></a>
</div>

</div>

@endsection