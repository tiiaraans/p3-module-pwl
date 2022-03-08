@extends('layouts.app')

@section('content')
<div id="mainCarousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <script
			src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
			</script>
			<script>
			var myCenter=new google.maps.LatLng(51.508742,-0.120850);
			var marker;
			function initialize()
			{
			var mapProp = {
			  center:myCenter,
			  zoom:15,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			marker=new google.maps.Marker({
			  position:myCenter,
			 // icon:'themes/assets/images/nepali-momo.png',
			  animation:google.maps.Animation.BOUNCE
			  });

			marker.setMap(map);

			// Info open
			var infowindow = new google.maps.InfoWindow({
			  content:"Hello World!"
			  });

			google.maps.event.addListener(marker, 'click', function() {
			  infowindow.open(map,marker);
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
			<div id="googleMap" style="height:450px;"></div>
			  <div class="container">
				<div class="carousel-caption">
				  <a class="btn btn-lg btn-default" href="#" role="button" style="font-size:2em">Order Online Now &raquo;</a>
				</div>
			  </div>
			</div>
		  </div>
		</div><!-- /.carousel -->
	</div>

	<div class="mainTitle">
	<div class="container">
	<h1>Bootstrappage Restaurant</h1>
	<p>
	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
	</p>
	</div>
	</div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="themes/assets/images/nepali-momo.png" alt="Generic placeholder image">
          <h2>Nepalese MOMO</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies</p>
          <p><a class="btn btn-default" href="#" role="button">&pound; 2.2 Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="themes/assets/images/burger.png" alt="Generic placeholder image">
          <h2>Burger</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </p>
          <p><a class="btn btn-default" href="#" role="button">&pound;5 Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
		  <img class="img-circle" src="themes/assets/images/gorkha-special-chicken.png" alt="Lam Tikka">
          <h2>Gurkha Chicken</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>
          <p><a class="btn btn-default" href="#" role="button">&pound;4 Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
	</div>
	

	
	
	<div class="introSection">
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="cntr">We are launching complete online food order system for restaurent and takeaway Only at the rate <br>&pound;999 </h1>
			</div>
		</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	 <div class="container marketing">
    <h2 class="itemsTitle">Breakfast</h2>
	<div id="myCarousel1" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
        <div class="col-lg-4">
          <img src="themes/assets/images/salate.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="themes/assets/images/burger.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="themes/assets/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
         <div class="row">
        <div class="col-lg-4">
          <img src="themes/assets/images/salate.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="themes/assets/images/burger.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="themes/assets/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
          <div class="row">
        <div class="col-lg-4">
          <img  src="themes/assets/images/salate.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="themes/assets/images/burger.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="themes/assets/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	</div>
	
	<div class="container marketing">
    <h2 class="itemsTitle">Lunch</h2>
	<div id="myCarousel2" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
        <div class="col-lg-4">
           <img src="themes/assets/images/salate.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
         <img src="themes/assets/images/chicken.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="themes/assets/images/drinks_lussy.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
         <div class="row">
        <div class="col-lg-4">
          <img src="themes/assets/images/chicken_fry.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="themes/assets/images/fish-and-chips.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="themes/assets/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
          <div class="row">
        <div class="col-lg-4">
          <img  src="themes/assets/images/salate.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="themes/assets/images/burger.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="themes/assets/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	</div>
	
	<div class="container marketing">
    <h2 class="itemsTitle">Dinner</h2>
	<div id="myCarousel3" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
        <div class="item active">
         <div class="row">
        <div class="col-lg-4">
          <img src="themes/assets/images/chicken_fry.png" alt="Generic placeholder image">
          <h4>Chicken</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="themes/assets/images/rice.png" alt="Generic placeholder image">
          <h4>Rice</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="themes/assets/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
         <div class="row">
        <div class="col-lg-4">
          <img src="themes/assets/images/courinder.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="themes/assets/images/burger.png" alt="Generic placeholder image">
          <h4>Meal</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="themes/assets/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
		 
        </div>
        <div class="item">
          <div class="row">
        <div class="col-lg-4">
          <img  src="themes/assets/images/salate.png" alt="Generic placeholder image">
          <h4>Salates</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="themes/assets/images/chicken_fry.png" alt="Generic placeholder image">
          <h4>Chicken</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img  src="themes/assets/images/drinks.png" alt="Generic placeholder image">
          <h4>Drink</h4>
          <p><a class="btn btn-default" href="#" role="button">Add to cart &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel3" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	</div>
@endsection

@section('marketing')
<div class="container marketing">
   <div id="myCarousel4" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
      <div class="item active">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Fish and Chips <span class="text-muted">It's very very testy</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img src="themes/assets/images/fish-and-chips.png" alt="Fish and Chips">
        </div>
      </div>
      </div>

      
	<div class="item">
      <div class="row featurette">
        <div class="col-md-5">
          <img src="themes/assets/images/burger.png" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, very nice Burger. <span class="text-muted">Delicious.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>
      </div>


	<div class="item">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Try yourself <span class="text-muted">Testy</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
		  <img class="img-circle" src="themes/assets/images/drinks.png" alt="Generic placeholder image">
        </div>
      </div>
      </div>
	   </div>
    </div><!-- /.carousel -->	  
    </div><!-- /.container -->
      <!-- /END THE FEATURETTES -->
      @endsection