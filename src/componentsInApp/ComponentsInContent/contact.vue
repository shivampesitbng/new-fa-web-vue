<template>
  <div >
    <!--p>{{title}}</p-->
	<section  >
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-lg-offset-2 text-center wow fadeInUp" data-wow-delay="0.6s">
            <h2 class="section-heading">Let's Keep In Touch!</h2>
            <hr class="hr-yst-keep-touch">
            <h5>Ready to start new journey with us? That's great!<br><br>
                Give us a call or send us an email and
                we will get back to you as soon as possible!
            </h5>
            <div class="padding-10">
                <br>
            </div>
        </div>                   
        <div class="col-lg-2 col-lg-offset-2 text-center">
            <i class=" fa fa-phone fa-3x wow bounceIn text-primary"></i>
            <h5 class="text-dark">
                +91 9482394996
            </h5>
        </div>

        <div class="col-lg-2 col-lg-offset-1 text-center">
            <a  href="mailto:info@foreaviation.com">
                <i class="fa fa-envelope-o fa-3x wow bounceIn text-primary" data-wow-delay=".1s"></i>
            </a>
            <h5 class="text-dark">                                
                Info@foreaviation.com                            
            </h5>
        </div>
        <div class="col-lg-2 col-lg-offset-1 text-center">
            
                <button style="background:#fff;border: 1.5px solid #666;border-radius:2px;margin-top:5%;"class="wow bounceIn text-primary"  data-toggle="modal" data-target="#myModal2">
                    <span>Drop a message  </span>
                </button>
            
            <h5>
                Do have a Query?
            </h5>
			
        </div><br>
		
    </div>
	</div>
</section>
<hr>
<footer id="footer" style="background:#fff">
  
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <!--div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/logo2.png" alt=""></a>
        </div-->
        <div class="social-icons" >
          <ul >
            <!--li style="background:#028fcc"><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li-->
            <li style="background:#028fcc;border-radius:2px;"><a class="twitter" href="https://twitter.com/ForeAviation"><i class="fa fa-twitter"></i></a></li> 
            <!--li style="background:#028fcc"><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li-->
            <li style="background:#028fcc;border-radius:2px;"><a class="facebook" href="https://www.facebook.com/Fore-Aviation-1845175925743111/"><i class="fa fa-facebook"></i></a></li>
           
            <li style="background:#028fcc;border-radius:2px;"><a class="dribbble" href="https://plus.google.com/communities/114584247879321585223"><i class="fa fa-google-plus" ></i></i></a></li>
			 <li style="background:#028fcc;border-radius:2px;"><a class="linkedin" href="https://www.linkedin.com/organization/13271756/admin/updates"><i class="fa fa-linkedin"></i></a></li>
		 </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
	
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2017 Fore Aviation</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right" style="color:#000;">Designed & developed <br> <a  >Fore Aviation Pvt Ltd</a></p> <!-- class="pull-right" -->
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  
 
  
  
  </div>
</template>

<script>
	export default{
		data(){
			return {
				title : 'contact us' ,
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
#footer {
  color:#fff;
}

.footer-top {
  position: relative;
  padding:30px 0
}

#footer .footer-bottom {
  background-color: #fff;
  padding: 20px 0 10px;
}

#footer .footer-bottom a:hover {
  text-decoration: underline;
}

.footer-logo {
  display: inline-block;
  margin-bottom: 5px;
}

#footer .social-icons {
  margin-top: 15px;
}

#footer .social-icons ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .social-icons ul li a {
  background-color: rgba(0,0,0,.2);
  border-radius: 0px;
  line-height: 33px;
}

#footer .social-icons ul li a:hover {
  color: #fff
}

#footer .social-icons ul li a.envelope:hover {
  background-color: #CECB26;
}

#footer .social-icons ul li a.facebook:hover {
  background-color: #3b5999;
}
#footer .social-icons ul li a.twitter:hover {
  background-color: #2ac6f7;
}
#footer .social-icons ul li a.dribbble:hover {
  background-color: #ff5b92;
}
#footer .social-icons ul li a.linkedin:hover {
  background-color: #036dc0;
}
#footer .social-icons ul li a.tumblr:hover {
  background-color: #ff6b00;
}

a,
#home-slider .caption h1 span, 
#twitter-carousel .item span, 
#footer .footer-bottom, 
#single-portfolio .close-folio-item:hover, 
.single-table.featured .btn.btn-primary, 
.contact-info ul li a:hover, 
#footer .footer-bottom a  {
  color: #028fcc;
}

.btn.btn-primary:hover,
.btn-submit:hover {
  background-color: #027db3
}

a:hover, a:focus {
	color: #027db3;
}

.main-nav, 
.service-icon, 
.progress-bar.progress-bar-primary, 
.single-table.featured, 
.btn.btn-primary, 
.twitter-icon .fa-twitter, 
.twitter-left-control:hover, .twitter-right-control:hover, 
.post-icon, 
.entry-header .date:after, 
.btn-loadmore:hover, 
.btn-submit,
#footer, 
.caption .btn-start:hover, 
.left-control:hover, 
.right-control:hover, 
.folio-overview a:hover {
  /*background-color:#028fcc;*/
}

.twitter-left-control:hover, 
.twitter-right-control:hover, 
.btn-loadmore:hover  {
	border: 1px solid #028fcc;
}

.caption .btn-start:hover, 
.left-control:hover, 
.right-control:hover {
	border-color: #028fcc;
}

.twitter-icon .fa-twitter:after {
	border-color: #028fcc transparent transparent;
}
.social-icons {
  margin-top:30px;
  text-align: center;
}

.social-icons ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: inline-block;
}

.social-icons ul li {
  float: left;
  margin-right: 8px;
}

.social-icons ul li:last-child {
  margin-right: 0;
}

.social-icons ul li a {
  color:#fff;
  background-color: #d9d9d9;
  height: 36px;
  width: 36px;
  line-height: 36px;
  display: block;
  font-size: 16px;
  opacity: 0.8;
}

.social-icons ul li a:hover {
  opacity: 1;
  /*-webkit-transform: scale(1.2);*/
  /*transform: scale(1.2);*/
}

</style>