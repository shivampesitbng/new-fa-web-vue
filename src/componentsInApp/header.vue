<template>
  <div style="height:35px;">
    <!--p>{{title}}</p-->
	<!--router-link to="/">Logo</router-link>
	<router-link to="/">Home</router-link>
	<router-link to="/about">About Us</router-link>
	<router-link to="/partners">Our Partners</router-link>
	<router-link to="/contact">Contact Us</router-link-->
	
	<div id="mySidenav" class="sidenav" style="text-align:center;background:#fff;">
	  

		<router-link to="/">Home</router-link>
		<router-link to="/about">About Us</router-link>
		<router-link to="/partners">Our Partners</router-link>
		<router-link to="/contact">Contact Us</router-link>
		<a href="javascript:void(0)" class="" v-on:click="closeNav">&times;</a>
	
	</div>
	
 <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top " style="background:#fff;">
      <div class="container">
        <div class="navbar-header">
		
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
		  data-target="#navbar" aria-expanded="false" aria-controls="navbar"  style="border: none;background:#fff;">
		  <!--p style="float:left;font-size:25px;font-weight:600;">FOREAVIATION</p-->
            <span class="sr-only">Toggle navigation</span>
            <span style="font-size:30px;cursor:pointer;float:right" v-on:click="openNav"> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span></span>
          </button>
          <!--a class="navbar-brand" href="#">FOREAVIATION</a-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li style="font-size:25px;font-weight:600;"><router-link to="/">FOREAVIATION</router-link></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
			<!--li><router-link to="/">Home</router-link></li-->
            <li><router-link to="/about">About Us</router-link></li>
            <li><router-link to="/partners">Our Partners</router-link></li>
            <li><router-link to="/contact">Contact Us</router-link></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	
  </div>
 </template>

<script>
	export default{
		data(){
			return {
				title : 'header' ,
			}
		} , 
		methods :{
			 openNav() {
					document.getElementById("mySidenav").style.width = "250px";
				},
				closeNav() {
					document.getElementById("mySidenav").style.width = "0";
				}
		}
	}
	
</script>


<style>
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
	 padding: 20px 0px 20px 0px;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
	
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


     