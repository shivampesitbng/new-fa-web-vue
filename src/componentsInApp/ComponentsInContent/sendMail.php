<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
<body>
		<!--video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop-->
		<!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
		<!--source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
		<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4"-->
		<!--/video-->
		
		
</body>
</html>






<?php
//error_reporting(E_ALL);
require 'PHPMailer/class.phpmailer.php';

$mail = new PHPMailer();

$mail->IsSMTP(); //set mailer to use SMTP
//$mail->SMTPDebug = 2;
$mail->From = "foreaviation@gmail.com";
$mail->FromName = "ForeAviation";
$mail->Host = "smtp.gmail.com"; //specify smtp server
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "foreaviation@gmail.com"; //smtp username
$mail->Password = "Foreaviation@2017"; //pass
$mail->AddAddress("foreaviation@gmail.com","ForeAviation");
$mail->AddReplyTo("foreaviation@gmail.com","ForeAviation");
//$mail->WordWrap = 50;

//form
//echo $_POST["name"];
//echo $_POST["email"];


$mail->IsHTML(true);
$mail->Subject = $_POST["purpose"];
$mail->Body = "Name: " .$_POST['name']."<br>"."Email: ".$_POST['email']."<br>"."Purpose: ".$_POST['purpose']."<br>"."Country: ".$_POST['country']."<br>"."Organisation: ".$_POST['org']."<br>"."Message: ".$_POST['message'];

if($mail->Send()) {echo "<p id='polina' align='center' style='margin-top:17%;color:#fff;font-size:20px;'>Thanks for submitting your Query, Your Message is Sent, We will get back to you within 24 hours.<br><a style='margin-top:3%' href='index.html'>Go Back to the Website</a></p>";}
else {echo "Failed to send Message, Please Try Again";}

//delete ;before line-> 
//;extension=php_openssl.dll in php.ini
?>







<style>
			body {
		background:url(images/2.jpg) no-repeat center center fixed;
}
video { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
  background-size: cover;
  transition: 1s opacity;
}
.stopfade { 
   opacity: .5;
}

#polina { 
  font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
  font-weight:100; 
  background: rgba(0,0,0,0.3);
  color: white;
  padding: 2rem;
 /* width: 33%; */
  margin:2rem;
  /*float: left;*/
  font-size: 1.2rem;
}
h1 {
  font-size: 3rem;
  text-transform: uppercase;
  margin-top: 0;
  letter-spacing: .3rem;
}
#polina button { 
  display: block;
  width: 80%;
  padding: .4rem;
  border: none; 
  margin: 1rem auto; 
  font-size: 1.3rem;
  background: rgba(255,255,255,0.23);
  color: #fff;
  border-radius: 3px; 
  cursor: pointer;
  transition: .3s background;
}
#polina button:hover { 
   background: rgba(0,0,0,0.5);
}

a {
  display: inline-block;
  color: #fff;
  text-decoration: none;
  background:rgba(0,0,0,0.5);
  padding: .5rem;
  transition: .6s background; 
}
a:hover{
  background:rgba(0,0,0,0.9);
}
/*@media screen and (max-width: 500px) { 
  div{width:70%;} 
}
@media screen and (max-device-width: 800px) {
  html { background: url(https://thenewcode.com/assets/images/polina.jpg) #000 no-repeat center center fixed; }
  #bgvid { display: none; }
}*/
		
		</style>
	
	<!--script>
		var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 


/*pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pause";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }
});*/


	</script-->