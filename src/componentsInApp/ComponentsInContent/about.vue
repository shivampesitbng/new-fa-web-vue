<template>
  <div >
    <!--p>{{title}}</p-->
	 <section id="features2" style="background:#fff;" >
<div class="container">
      <div class="row" >
        <div class="heading text-center col-sm-8 col-sm-offset-2 text-center wow fadeInUp" data-wow-delay="0.6s">
          <h2>About Us</h2>
		   <hr class="hr-yst-keep-touch">
          <p>Building an first ever unique global platform which helps the professionals and travels to get the
		  global information about in the world of Aviation. We provide access to Travel Bookings, Education section, Sales, Services and many more all under
		  the guideliness of Highly experience people in the world of aviation to provide the best support and information needed.
		  </p>
	
        </div>
      </div>
</div>





  <section id="features" class="parallax carousel-fade">
	  
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow bounceIn "  data-wow-duration="1000ms" data-wow-delay="300ms">
         <i class="fa fa-road" aria-hidden="true"></i>
          <h3 class="timer">200</h3>
          <p  style="color:rgba(0, 0, 0, 0.73);font-size:110%;">Airports</p>
		  
		  
		  
		  
        </div>
        <div class="col-sm-3 col-xs-6 wow bounceIn" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fa fa-bed" aria-hidden="true"></i>
          <h3 class="timer">500</h3>                    
          <p  style="color:rgba(0, 0, 0, 0.73);font-size:110%;">Hotels</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow bounceIn" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="fa fa-plane" aria-hidden="true"></i>
          <h3 class="timer">1000</h3>                    
          <p  style="color:rgba(0, 0, 0, 0.73);font-size:110%;">Flights</p>
        </div> 
                
		<div class="col-sm-3 col-xs-6 wow bounceIn" data-wow-duration="1000ms" data-wow-delay="700ms" >
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          <h3 class="timer">300</h3>                    
          <p  style="color:rgba(0, 0, 0, 0.73);font-size:110%;">Flying Academy</p>
        </div> 		
      </div>
    </div>
	
  </section><!--/#features-->
  <div style="text-align:center;margin-top:3%;">Know More About Us !<br><router-link to="/contact">Contact Us !</router-link></div>
</section>

  </div>
</template>

<script>
	export default{
		data(){
			return {
				title : 'about us' ,
			}
		} ,
	}
</script>


<style>


h1, h2, h3, h4, h5, h6 {
  /*color: #333;*/
}

h2 {
  font-size: 30px;
  margin-bottom: 20px;
}

h3 {
  font-size: 18px;
}

.parallax {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}

.parallax,
.parallax h1,
.parallax h2,
.parallax h3,
.parallax h4,
.parallax h5,
.parallax h6 {
  color: #fff;
}

.parallax input[type="text"],
.parallax input[type="text"]:hover,
.parallax input[type="email"],
.parallax input[type="email"]:hover,
.parallax input[type="url"],
.parallax input[type="url"]:hover,
.parallax input[type="password"],
.parallax input[type="password"]:hover,
.parallax textarea,
.parallax textarea:hover {
  font-weight: 300;
    /*color: #fff; */
}

.btn {
  border: 0;
  border-radius: 0;
}

.btn.btn-primary:hover {
  background-color: #017fb5;
}

.navbar-nav li a:hover, 
.navbar-nav li a:focus {
  outline:none;
  outline-offset: 0;
  text-decoration:none;  
  background: transparent;
}

a {
  text-decoration: none;
  -webkit-transition: 300ms;
  -moz-transition: 300ms;
  -o-transition: 300ms;
  transition: 300ms;
}

a:focus, 
a:hover {
  text-decoration: none;
  outline: none
}

section {
  padding: 94.5px 0;
}

.heading {
  padding-bottom:90px;
}
#features {
  text-align: center;
  background-image: url(images/features-bg.jpg);
}

#features i {
  font-size: 48px;
  color:rgba(0, 0, 0, 0.65)
}

#features h3 {
  margin-top: 15px;
  font-size: 30px;
  margin-bottom: 7px;
  color: rgba(0, 0, 0, 0.73)

}

#features .slider-overlay {
  opacity: 0.8;
}
</style>