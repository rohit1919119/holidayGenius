<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>The Holiday Genius </title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>

    <div class="t-dropdown-select">
        <input type="text" class="t-dropdown-input" placeholder="Value" />
        <span class="t-select-btn">
        </span>
    </div>
    <ul class="t-dropdown-list">
        <li class="t-dropdown-item">Item 1</li>
        <li class="t-dropdown-item">Item 2</li>
        <li class="t-dropdown-item">Item 3</li>
        <li class="t-dropdown-item">Item 4</li>
        <li class="t-dropdown-item">Item 5</li>
        <li class="t-dropdown-item">Item 6</li>
        <li class="t-dropdown-item">Item 7</li>
        <li class="t-dropdown-item">Item 8</li>
        <li class="t-dropdown-item">Item 9</li>
        <li class="t-dropdown-item">Item 10</li>
        <li class="t-dropdown-item">Item 11</li>
        <li class="t-dropdown-item">Item 12</li>
    </ul>
	<header>
		<nav class="navbar fixed-top navbar-expand-md navbar-light bg-white">
			<a class="navbar-brand mb-0 h1" href="index.html" title="Home PAge">The Holiday Genius</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
      		</button>
		    
		    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		  	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			        <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
				    <li class="nav-item"><a class="nav-link" href="aboutUs.html">About Us</a></li>
				    <li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="tripPackets.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trip Packages</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
        					<a class="dropdown-item" href="tripPackets.html">Travel Options</a>
        					<div class="dropdown-divider"></div>
					        <a class="dropdown-item" href="thailand.html">Thailand - 2 weeks</a>
          					<a class="dropdown-item" href="australia.html">Australia - 3 weeks</a>
          			        <a class="dropdown-item" href="asia.html">Asia - 4 weeks</a>
        				</div>
        			</li>
				    <li class="nav-item"><a class="nav-link" href="contactUs.html">Contact Us</a></li>
			   	</ul>
			</div>
		</nav>
	</header>
	

	<main>
		<section class="background jumbotron" id="jumbotron">
	  		<div class="container">
                <p>Book Flights Tickets, Tour Packages, Hotels & Sightseeing</p>
	    		<div class="cover">



                    <form class="flex-form">
                
                      <input type="search" placeholder="Leaving From">



                      
                      <input type="search" placeholder="Destination">

                
                      <label for="from">From</label>
                
                      <input type="date" id="from" name="from">
                
                      <label for="to">To</label>
                
                      <input type="date" id="to" name="to">
                
                      <select name "" id="">
                        <option value="1">1 Traveler</option>
                        <option value="2">2 Travelers</option>
                        <option value="3">3 Travelers</option>
                        <option value="4">4 Travelers</option>
                        <option value="5">5 Travelers</option>
                        <option value="6">6 Travelers</option>
                        <option value="7">7 Travelers</option>
                        <option value="8">8 Travelers</option>
                        <option value="9">9 Travelers</option>
                        <option value="10">10 Travelers</option>
                      </select>
                
                      <input type="submit" value="Search">
                
                    </form>
                
                  </div>
	  		</div>
		</section>

		<section class="sectionAbout clearfix">
			<h3>Our services include</h3>
		    <div class="container">
				<div class="row">
        			<div class="col-md-4 col-sm-12">
            			<div class="serviceBox">
                			<div class="service-icon">
                    			<span><i class="fas fa-plane-departure"></i></span>
                			</div>
			                <h3 class="title">Flight Tickets</h3>
			                <p class="description">
			                    All the flight tickets are bought for you. We guarantee that we can find the best prices for the date you wish to travel.
			                </p>
            			</div>
        			</div>
			        <div class="col-md-4 col-sm-12">
			            <div class="serviceBox">
			                <div class="service-icon">
			                    <span><i class="fas fa-bed"></i></span>
			                </div>
			                <h3 class="title">Accomodation</h3>
			                <p class="description">
			                    The accomodation is all booked for you. We offer rooms in 4-star hotels on every location you are going too visit.
			                </p>
			            </div>
			        </div>
			        <div class="col-md-4 col-sm-12">
			            <div class="serviceBox">
			                <div class="service-icon">
			                    <span><i class="fas fa-tasks"></i></span>
			                </div>
			                <h3 class="title">What to Do</h3>
			                <p class="description">
			                    We offer a schedule with a list of what to do each day, so you do not get lost during your trip. However, you choose if you are going to follow the schedule or not. 
			                </p>
			            </div>
			        </div>
    			</div>
			</div>
		</section>
		
		<section class="banner">
		    <div class="bannerContent">
		        <h2>Visit the Holiday Genius.</h2>
		        <p>The place to find rest, picturesque places and amazing people.</p>
		    </div>
		</section>
		
		<section class="travelOptions">
			<div class="album py-5 bg-light">
        		<div class="container">
        			<h3>Travel Options</h3>
        			<p>The Holiday Genius Travel agency offers 3 different trip packages with a variety of destinations as well as intinerary duration. All of the packages were carefuly planned by our travel speciallists for you. This way you and your family do not have to think and get involved in anything for your vacation. Everything is going to be set up by us and you just need to pack your bags and get into the airplane.</p>
        			<div class="row">
            			<div class="col-md-4">
              				<div class="card mb-4 box-shadow">
                				<img class="card-img-top" alt="Bangkok Picture" style="height: 225px; width: 100%; display: block;" src="https://i.imgur.com/q2BxhmQ.jpg" data-holder-rendered="true">
                				<div class="card-body">
									<h6> Thailand - Two Weeks</h6>
                					<p class="card-text"> Two weeks is a short time to explore Thailand to the fullest. However this itinerary is crafted to give you a good grasp of the entire country while keeping the logistics as easy as possible.</p>
                  					<div class="d-flex justify-content-between align-items-center">
                    					<a href="thailand.html" role="button" class="btn btn-block btn-primary">More Information</a>
                  					</div>
                				</div>
              				</div>
						</div>
						<div class="col-md-4">
              				<div class="card mb-4 box-shadow">
                				<img class="card-img-top" alt="Sydney Picture" style="height: 225px; width: 100%; display: block;" src="https://i.imgur.com/i2QFDZ5.jpg" data-holder-rendered="true">
                				<div class="card-body">
									<h6>Austalia - Three Weeks</h6>
                					<p class="card-text"> Australia is a vast country, nearly as big as the USA, so, this intinerary includes visiting Australia’s two best cities: Sydney and Melbourne, the Great Barrier Reef, the Outback and the Great Ocean Road.</p>
                  					<div class="d-flex justify-content-between align-items-center">
                    					<a href="australia.html" role="button" class="btn btn-block btn-primary">More Information</a>
                  					</div>
                				</div>
              				</div>
						</div>
						<div class="col-md-4">
              				<div class="card mb-4 box-shadow">
                				<img class="card-img-top" alt="Koh Phi Phi Picture" style="height: 225px; width: 100%; display: block;" src="https://i.imgur.com/ch1BSld.jpg" data-holder-rendered="true">
                				<div class="card-body">
									<h6>Asia - Four Weeks</h6>
                					<p class="card-text"> This trip package includes visiting 4 countries in South Asia: Vietnam, Cambodia, Philippines and Thailand, spending roughly a week on each of them. Get ready to know the beauty of Asia. </p>
                  					<div class="d-flex justify-content-between align-items-center">
                    					<a href="asia.html" role="button" class="btn btn-block btn-primary">More Information</a>
                  					</div>
                				</div>
              				</div>
						</div>
					</div>
				</div>
            </div>            
		</section>
		


        


      
		<footer>
		 	<ul>
		 		<li><a href="http://www.facebook.com" alt="Facebook Page"><i class="fab fa-facebook"></i></a></li>
		 		<li><a href="http://www.twitter.com" alt="Twitter Page"><i class="fab fa-twitter"></i></a></li>
		 		<li><a href="http://www.instagram.com" alt="Instagram Page"><i class="fab fa-instagram"></i></a></li>
		 	</ul>
		</footer> 
        
	</main>
	
    <script src="index.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>

</html>