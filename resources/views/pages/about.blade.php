@extends('layouts.sitewide')
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="text-center text-light">About 3DFS</h1> 
    
   </div>
</div>  
<p class="text-center small text-muted">as seen in:</p>
    <div class="container-fluid py-2">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <a href="https://www.wraltechwire.com/2018/05/05/from-electricity-to-life-science-startups-showcase-future-changing-innovations-at-nc-tech-event/" target="_blank"><img src="https://3dfs.com/wp-content/uploads/2017/10/wral-on.png" class="img-fluid mx-auto d-block" alt="WRAL Tech Wire"></a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://www.vox.com/energy-and-environment/2018/6/5/17373314/electricity-technology-efficiency-software-waste-3dfs" target="_blank"><img src="https://3dfs.com/wp-content/uploads/2018/07/vox-on.png" class="img-fluid mx-auto d-block" alt="Vox"></a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://microgridknowledge.com/" target="_blank"><img src="https://3dfs.com/wp-content/uploads/2017/10/microgrid-on.png" class="img-fluid mx-auto d-block" alt="img3"></a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://www.facilitiesnet.com/site/pressreleases/3DFS-New-Power-Controllers-Will-Provide-Continuous-Perfect-Power-Plus-Electrical-Monitoring--34838" target="_blank"><img src="https://3dfs.com/wp-content/uploads/2017/10/facilities-on.png" class="img-fluid mx-auto d-block" alt="Facilities Management News"></a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                   <a href="https://www.bizjournals.com/charlotte/news/2018/06/21/what-charlotte-needs-to-drive-energy-startups.html" target="_blank"><img src="https://3dfs.com/wp-content/uploads/2017/10/cbj-on.png" class="img-fluid mx-auto d-block" alt="Charlotte Business Journal"></a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://www.forbes.com/sites/matthunckler/2016/10/21/3dfs-brings-you-the-future-of-electrical-power-today/#2ace2e7369b9" target="_blank"><img src="https://3dfs.com/wp-content/uploads/2017/10/forbes-on.png" class="img-fluid mx-auto d-block" alt="Forbes"></a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://www.newsobserver.com/news/business/article193634829.html" target="_blank"><img src="https://3dfs.com/wp-content/uploads/2018/01/nando-on.png" class="img-fluid mx-auto d-block" alt="News and Observer"></a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://www.popularmechanics.com/technology/news/g3237/2017-popular-mechanics-breakthrough-awards/" target="_blank"><img src="https://3dfs.com/wp-content/uploads/2017/10/pm-on.png" class="img-fluid mx-auto d-block" alt="Popular Mechanics"></a>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="https://tech.co/" target="_blank"><img src="https://3dfs.com/wp-content/uploads/2017/10/techco-on.png" class="img-fluid mx-auto d-block" alt="Tech.co"></a>
                </div>
            </div>
        </div>
    </div>
</div>
	
<div class="container-fluid my-4 bg-white py-2">
	<div class="row">
		@include('includes.sitewide.sidebarnav')
		<div class="col-8 col-md-10">
			<div class="bg-success"></div>
			<h3>Who IS 3DFS?</h3>
			<p>We are a group of scientists, engineers and entrepreneurs with expertise in Task Oriented Optimal Computing, artificial intelligence, machine learning, and electricity measurement and control that we have used to develop an advanced model based measurement and control methodology for electricity in Real-Time.</p>
			<p>3DFS is a vertically integrated technology development company that controls the entire process of our technology from conception to production. We perform the research, the hardware and software development, and manufacturing and assembly.</p>
			<p>We proudly stand by our products and their performance.</p>
			<p>All of our technology is manufactured with pride in Pittsboro, North Carolina in the United States of America, where we produce the highest caliber sustainable solutions with the utmost simplicity in design and implementation.</p>		
	<br/>
			<div class="bg-success"></div>
			<h3>Historical Parallels of Software-Defined Electricity</h3>
			<p>In the 1970s, the technology became widely available to shrink inefficient room sized computers to desktop personal computers, opening up a lot of markets that did not exist until that time. This general improvement in computing technology laid the groundwork for the reliance on computers that we have today.</p>	
			<p>Software-Defined Electricity is a very powerful technology leverages Task Oriented Optimal Computing for better data and analytics to measure and control electricity in Real-Time. This advancement in computing has opened a tectonic shift in the power electronics industry and in the years to come all power electronics will integrate Software-Defined Electricity for better visibility, safety and control.</p>		
			<p>This technology is the catalyst for transformational advancement in electrification.</p>
		
		</div>
	</div>
</div>

<div class="container-fluid pt-2" id="timelineParallax">

	<div id="timeline-stage">
		<div id="timeline">
		<div class="row pt-2">
		<h3 class="mx-auto pb-4">Brief History of Electricity Measurement: From Analog to Digital</h3>
		</div>
		<div class="row pb-1">
			<div class="col-md-6 order-12 order-md-1">
				<div class="card">
					<div class="card-header text-right">An analog industry was born</div>
					<div class="card-body">
						<div class="row">
						<div class="col-md-4"><img class="img-thumbnail" src="https://3dfs.com/wp-content/uploads/2018/01/metter1890.jpg" /></div>
						<div class="col-md-8 text-right"><em>Electrical meters go mainstream leveraging the RMS methodology to measure the amount of electricity sold to our homes and businesses</em></div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-6 order-1 order-md-12 pb-4 leftDot">
				<h3 class="pt-3"><i class='fas fa-caret-left'></i>&nbsp;1890s</h3>
			</div>
		</div>
		<div class="row pb-1">
			<div class="col-6 pb-4">
				<h3 class="midRight pt-3">1890 - 1950s&nbsp;<i class='fas fa-caret-right'></i></h3>
			</div>
			<div class="col-md-6 leftDot">
				<div class="card">
					<div class="card-header">Business was good</div>
					<div class="card-body">
						<div class="row">
						<div class="col-md-4"><img class="img-thumbnail" src="https://3dfs.com/wp-content/uploads/2018/01/1930.jpg" /></div>
						<div class="col-md-8"><em>The electrical grid expanded throughout the United States. Its main purpose to was to power relatively static motors and incandescent lights</em></div>
						</div>
					</div>
				</div>	
			</div>
		</div> 		
		<div class="row pb-1">
			<div class="col-md-6 order-12 order-md-1">
				<div class="card">
					<div class="card-header text-right">Electricity use changed</div>
					<div class="card-body">
						<div class="row">
						<div class="col-md-4"><img class="img-thumbnail" src="https://3dfs.com/wp-content/uploads/2018/01/1960.jpg" /></div>
						<div class="col-md-8 text-right"><em>With the invention and widespread use of computers and sensitive electronics, the load profile began to shift</em></div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-6 pb-4 order-1 order-md-12 leftDot">
				<h3 class="pt-3"><i class='fas fa-caret-left'></i>&nbsp;1960s</h3>
			</div>
		</div>		
		<div class="row pb-1">
			<div class="col-6 pb-4">
				<h3 class="midRight pt-3">1970s&nbsp;<i class='fas fa-caret-right'></i></h3>
			</div>
			<div class="col-md-6 leftDot">
				<div class="card">
					<div class="card-header">Electricity generation changed</div>
					<div class="card-body">
						<div class="row">
						<div class="col-md-4"><img class="img-thumbnail" src="https://3dfs.com/wp-content/uploads/2018/01/1970.jpg" /></div>
						<div class="col-md-8"><em>The improvement in renewable energy technologies spawned new markets that produce electricity in new ways, shifting the generation profile.</em></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="row pb-1">
			<div class="col-md-6 order-12 order-md-1">
				<div class="card">
					<div class="card-header text-right">Old way not working, business continued</div>
					<div class="card-body">
						<div class="row">
						<div class="col-md-4"><img class="img-thumbnail" src="https://3dfs.com/wp-content/uploads/2018/01/1980.jpg" /></div>
						<div class="col-md-8 text-right"><em>50 years of maintaining the status quo while electricity generation and consumption evolved resulted in a gigantic void in available data and corresponding solutions. The analog way of measuring electricity is no longer sufficient if the goal is optimum efficiency and stability of electricity supply systems.</em></div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-6 pb-4 order-1 order-md-12 leftDot">
				<h3 class="pt-3"><i class='fas fa-caret-left'></i>&nbsp;1970s - 2016</h3>
			</div>
		</div>	 
		<div class="row">
			<div class="col-6 pb-4">
				<h3 class="midRight pt-3">2017&nbsp;<i class='fas fa-caret-right'></i></h3>
			</div>
			<div class="col-md-6 pb-5 leftDot">
				<div class="card">
					<div class="card-header">A digital industry was born</div>
					<div class="card-body">
						<div class="row">
						<div class="col-md-4"><img class="img-thumbnail" src="https://3dfs.com/wp-content/uploads/2018/01/now.jpg" /></div>
						<div class="col-md-8"><em>3DFS brings to market a new product for and real time digital measurement and correction of electricity, or Software-Defined Electricity ensuring electricity can always be supplied with optimum efficiency.</em></div>
						</div>
					</div>
				</div>	
			</div>
		</div>		    
	</div>
</div>
</div>


@endsection