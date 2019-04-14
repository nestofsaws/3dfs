    
        <footer class="pt-4 bg-dark">
                 
        <div class="container">

			<div class="row">
			  <div class="col-md-3">
				<a><p class="text-white display-4 font-3dfs"><span class="red-3dfs bg-dark">3</span><span class="white-3dfs">DFS</span><span class="dark-3dfs">&nbsp;</span></p></a>
				<ul class="list-unstyled text-small text-white">
				<li>1911 NC Hwy 902 West</li>
				<li>Pittsboro, NC 27312</li>
				</ul>
				<a href="https://www.facebook.com/3dfspower"><i class='fab fa-facebook mr-3 text-secondary' style='font-size:24px'></i></a>
				<a href="https://twitter.com/3DFS_Power"><i class='fab fa-twitter-square mr-3 text-secondary' style='font-size:24px'></i></a>
				<a href="https://www.linkedin.com/company/3dfs-power-solutions"><i class='fab fa-linkedin mr-3 text-secondary' style='font-size:24px'></i></a>
				<small class="d-block my-3 text-muted">&copy; 2019</small>
			
			  </div>
		  <div class="col-md-3">
            <h5 class="text-white">About</h5>
            <ul class="list-unstyled text-small">
				<li><a href="{{ route('about') }}" class="text-muted pl-1">About Us</a></li>
				<li><a href="{{ route('applications') }}" class="text-muted pl-1">Applications</a></li>
				<li><a href="{{ route('innovation') }}" class="text-muted pl-1">Innovation</a></li>
				<li><a href="#" class="text-muted pl-1">Tech Talk</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5 class="text-white">Products</h5>
            <ul class="list-unstyled text-small">
				<li><a href="#" class="text-muted pl-1">Data Acquisition & Analysis</a></li>
				<li><a href="#" class="text-muted pl-1">Electrical Network Correction</a></li>
				<li><a href="#" class="text-muted pl-1">Energy Storage</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5 class="text-white">Recent Posts</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
            </ul>
          </div>
        </div>
        </div>  
        </footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	</body>
<script type="text/javascript">
$('.carousel').carousel({
  interval: 4000
})

 /*
    Carousel
*/
$('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});

</script>

</html>