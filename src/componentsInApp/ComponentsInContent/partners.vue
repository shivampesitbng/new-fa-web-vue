<template>
  <div >
    <!--p>{{title}}</p-->
	<section id="team" style="text-align: center;">
    <div class="container">
      <div class="row">
        <div id="part" class="col-sm-8 col-sm-offset-2 text-center wow fadeInUp" data-wow-delay="0.6s">
          <h2>Our Partners</h2>
		  <hr >
          <p>We address complex challenges on a worldwide scale.<br> Our partners contribute more than money.<br> Their ideas, volunteer power, in-kind support and more are helping build stronger communities.</p>
        </div>
      </div>
      <div class="team-members" style="margin-top:5%;">
        <div class="row">
          <div class="col-sm-4" >
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image" >
                <img class="img-responsive"  style="padding:3% 33% 3% 33%; " src="images/team/1.jpg" >
              </div>
              <div class="member-info">
                <h3>Cleartrip</h3>
               
              </div>
              
            </div>
          </div>
		   <div class="col-sm-4" >
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image" >
                <img class="img-responsive"  style="padding:3% 33% 3% 33%;" src="images/team/2.png" >
              </div>
              <div class="member-info">
                <h3>IndiGo Airline</h3>
               
              </div>
              
            </div>
          </div>
		   <div class="col-sm-4" >
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image" >
                <img class="img-responsive"  style="padding:3% 33% 3% 33%;" src="images/team/3.png" >
              </div>
              <div class="member-info">
                <h3>Via.com</h3>
               
              </div>
              
            </div>
          </div>
          
          
        </div>
      </div>            
    </div>
  </section><!--/#team-->
  </div>
</template>

<script>
	export default{
		data(){
			return {
				title : 'our partners' ,
			}
		} ,
	}
</script>


<style>
body {
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  line-height: 24px;
  /*color: #666;*/
  background-color: #fff;
}

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
</style>